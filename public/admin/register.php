<?php
    session_start();
    require_once __DIR__ . "/../../src/config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Validasi input tidak boleh kosong
        if (empty($email) || empty($password)) {
            $error = "Email dan password harus diisi!";
        } else {
            // Cek apakah email sudah terdaftar
            $stmt = $conn->prepare("SELECT id FROM admin WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $error = "Email sudah digunakan, silakan gunakan email lain!";
            } else {
                // Hash password menggunakan bcrypt
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Simpan ke database
                $stmt = $conn->prepare("INSERT INTO admin (email, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $email, $hashed_password);

                if ($stmt->execute()) {
                    $_SESSION['success'] = "Pendaftaran berhasil, silakan login!";
                    header("Location: login.php");
                    exit();
                } else {
                    $error = "Terjadi kesalahan, coba lagi!";
                }
            }

            $stmt->close();
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-4">Register Admin</h2>

        <?php if (isset($error)) : ?>
            <p class="text-red-500 text-sm text-center"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-green-600 transition">Register</button>
        </form>

        <!-- Link ke halaman login -->
        <p class="text-sm text-center text-gray-600 mt-4">
            Sudah punya akun? <a href="login.php" class="text-blue-500 hover:underline">Login di sini</a>
        </p>
    </div>
</body>
</html>
