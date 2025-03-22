<?php
    session_start();
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: login.php");
        exit();
    }

    // Koneksi database
    require_once __DIR__ . "/../../src/config.php";

    // Folder untuk menyimpan gambar
    $upload_dir = __DIR__ . "/structure/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Variabel untuk Edit Data
    $edit_id = "";
    $edit_name = "";
    $edit_position = "";
    $edit_division = "";
    $edit_photo = "";

    // Jika tombol Edit ditekan, ambil data dari database
    if (isset($_GET['edit'])) {
        $edit_id = $_GET['edit'];
        $stmt = $conn->prepare("SELECT * FROM structure WHERE id=?");
        $stmt->bind_param("i", $edit_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $edit_name = $row['name'];
            $edit_position = $row['position'];
            $edit_division = $row['division'];
            $edit_photo = $row['photo'];
        }
    }

    // Tambah Data
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $division = $_POST['division'];
        $photo_path = null;

        if (!empty($_FILES['photo']['name'])) {
            $file_name = time() . "_" . basename($_FILES["photo"]["name"]);
            $target_file = $upload_dir . $file_name;
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $photo_path = "structure/" . $file_name;
            }
        }

        $stmt = $conn->prepare("INSERT INTO structure (name, position, division, photo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $position, $division, $photo_path);
        $stmt->execute();
        header("Location: structure.php");
        exit();
    }

    // Hapus Data
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $stmt = $conn->prepare("SELECT photo FROM structure WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        if ($data && !empty($data['photo']) && file_exists(__DIR__ . "/" . $data['photo'])) {
            unlink(__DIR__ . "/" . $data['photo']);
        }

        $stmt = $conn->prepare("DELETE FROM structure WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        header("Location: structure.php");
        exit();
    }

    // Update Data
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $division = $_POST['division'];
        $photo_path = $_POST['existing_photo'];

        if (!empty($_FILES['photo']['name'])) {
            $file_name = time() . "_" . basename($_FILES["photo"]["name"]);
            $target_file = $upload_dir . $file_name;
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $photo_path = "structure/" . $file_name;

                if (!empty($_POST['existing_photo']) && file_exists(__DIR__ . "/" . $_POST['existing_photo'])) {
                    unlink(__DIR__ . "/" . $_POST['existing_photo']);
                }
            }
        }

        $stmt = $conn->prepare("UPDATE structure SET name=?, position=?, division=?, photo=? WHERE id=?");
        $stmt->bind_param("ssssi", $name, $position, $division, $photo_path, $id);
        $stmt->execute();
        header("Location: structure.php");
        exit();
    }

    // Tentukan jumlah data per halaman
    $limit = 5;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // Ambil total data untuk pagination
    $total_result = $conn->query("SELECT COUNT(*) as total FROM structure");
    $total_row = $total_result->fetch_assoc();
    $total_data = $total_row['total'];
    $total_pages = ceil($total_data / $limit);

    // Query dengan LIMIT dan OFFSET
    $result = $conn->query("SELECT * FROM structure ORDER BY id ASC LIMIT $limit OFFSET $offset");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
    <aside class="w-64 bg-blue-900 text-white h-screen p-6">
        <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
        <nav>
            <ul>
                <li class="mb-4"><a href="dashboard.php" class="block py-2 px-4 rounded hover:bg-blue-700">🏠 Dashboard</a></li>
                <li class="mb-4"><a href="structure.php" class="block py-2 px-4 rounded bg-blue-700">🏢 Struktur Organisasi</a></li>
                <li class="mb-4"><a href="program.php" class="block py-2 px-4 rounded hover:bg-blue-700">📋 Program Kerja</a></li>
                <li class="mb-4"><a href="information.php" class="block py-2 px-4 rounded hover:bg-blue-700">ℹ️ Informasi</a></li>
                <li class="mb-4"><a href="study_group.php" class="block py-2 px-4 rounded hover:bg-blue-700">📚 Kelompok Studi</a></li>
                <li class="mt-6"><a href="logout.php" class="block py-2 px-4 rounded bg-red-600 hover:bg-red-700">🔴 Logout</a></li>
            </ul>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <div class="bg-white shadow-md p-4 rounded-lg mb-6">
            <h1 class="text-xl font-bold">Struktur Organisasi</h1>
        </div>

        <!-- Form Tambah / Edit Data -->
        <form method="POST" enctype="multipart/form-data" class="mb-6">
            <input type="hidden" name="id" value="<?php echo $edit_id; ?>">
            <input type="text" name="name" placeholder="Nama" required class="border p-2 mr-2" value="<?php echo $edit_name; ?>">
            <input type="text" name="division" placeholder="Divisi" required class="border p-2 mr-2" value="<?php echo $edit_division; ?>">
            <input type="text" name="position" placeholder="Jabatan" required class="border p-2 mr-2" value="<?php echo $edit_position; ?>">
            <input type="file" name="photo" accept="image/*" class="border p-2 mr-2">

            <?php if (!empty($edit_photo)): ?>
                <img src="<?php echo $edit_photo; ?>" alt="Foto Lama" class="w-10 h-10 inline-block">
                <input type="hidden" name="existing_photo" value="<?php echo $edit_photo; ?>">
            <?php endif; ?>

            <?php if ($edit_id): ?>
                <button type="submit" name="update" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
                <a href="structure.php" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
            <?php else: ?>
                <button type="submit" name="add" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
            <?php endif; ?>
        </form>

        <!-- Tabel Data -->
        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-blue-500 text-white text-center">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Divisi</th>
                    <th class="px-4 py-2">Jabatan</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                    <tr class="border-b text-center">
                        <td class="px-4 py-2"><?php echo $no++; ?></td>
                        <td class="px-4 py-2">
                            <?php if (!empty($row['photo'])): ?>
                                <img src="<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" class="w-16 h-16 rounded-full mx-auto">
                            <?php else: ?>
                                <span class="text-gray-500">Tidak ada foto</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2"><?php echo $row['name']; ?></td>
                        <td class="px-4 py-2"><?php echo $row['division']; ?></td>
                        <td class="px-4 py-2"><?php echo $row['position']; ?></td>
                        <td class="px-4 py-2">
                            <a href="?edit=<?php echo $row['id']; ?>" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?');" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-4 flex justify-center">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>" class="px-4 py-2 bg-blue-500 text-white rounded mr-2">Previous</a>
            <?php endif; ?>

            <span class="px-4 py-2 bg-gray-200 rounded"><?php echo "Page $page of $total_pages"; ?></span>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>" class="px-4 py-2 bg-blue-500 text-white rounded ml-2">Next</a>
            <?php endif; ?>
        </div>

    </main>
</body>
</html>
