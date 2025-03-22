<?php
    session_start();
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: login.php");
        exit();
    }

    // Memasukkan file koneksi database
    require_once __DIR__ . "/../../src/config.php";

    // Ambil nama admin berdasarkan sesi login
    $admin_id = $_SESSION['admin_id'] ?? 1; // Gantilah dengan cara penyimpanan sesi Anda

    $query = "SELECT name FROM admin WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Periksa apakah ada hasil
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $admin_name = $row['name'];
    } else {
        $admin_name = "Admin"; // Default jika tidak ditemukan
    }

    // Ambil jumlah total data dari tabel structure
    $result_count = $conn->query("SELECT COUNT(*) AS total FROM structure");
    $row_count = $result_count->fetch_assoc();
    $total_structure = $row_count['total'];

    // Tutup koneksi
    $stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white h-screen p-6">
        <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
        <nav>
            <ul>
                <li class="mb-4"><a href="dashboard.php" class="block py-2 px-4 rounded bg-blue-700">🏠 Dashboard</a></li>
                <li class="mb-4"><a href="structure.php" class="block py-2 px-4 rounded hover:bg-blue-700">🏢 Struktur Organisasi</a></li>
                <li class="mb-4"><a href="program.php" class="block py-2 px-4 rounded hover:bg-blue-700">📋 Program Kerja</a></li>
                <li class="mb-4"><a href="information.php" class="block py-2 px-4 rounded hover:bg-blue-700">ℹ️ Informasi</a></li>
                <li class="mb-4"><a href="study_group.php" class="block py-2 px-4 rounded hover:bg-blue-700">📚 Kelompok Studi</a></li>
                <li class="mt-6"><a href="logout.php" class="block py-2 px-4 rounded bg-red-600 hover:bg-red-700">🔴 Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <!-- Header -->
        <div class="bg-white shadow-md p-4 rounded-lg flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">Welcome, <?php echo htmlspecialchars($admin_name); ?></h1>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">Struktur Organisasi</h3>
                <p class="text-3xl font-bold mt-2"><?php echo $total_structure; ?></p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">Program Kerja</h3>
                <p class="text-3xl font-bold mt-2">Rp 5.000.000</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">Informasi</h3>
                <p class="text-3xl font-bold mt-2">8</p>
            </div>
        </div>
    </main>

</body>
</html>
