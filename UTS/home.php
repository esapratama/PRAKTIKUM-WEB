<?php
session_start();

// Jika tidak ada sesi username, arahkan kembali ke halaman login.php
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Pastikan login.php digunakan
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>Anda berhasil login ke halaman Home.</p>
    <nav>
        <a href="home.php">Home</a>
        <a href="cetakHarga.html">Cek Harga</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
