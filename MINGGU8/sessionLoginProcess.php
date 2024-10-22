<?php
// Ambil data username dan password dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi sederhana (ganti dengan validasi yang lebih kuat di aplikasi nyata)
if ($username === 'admin' && $password === '1234') {
    // Mulai sesi
    session_start();

    // Simpan data pengguna dalam sesi
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    // Tampilkan pesan sukses dan link ke halaman home
    echo "Anda berhasil login. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    // Tampilkan pesan gagal dan link ke formulir login
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>