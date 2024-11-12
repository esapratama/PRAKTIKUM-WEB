<?php
// Memulai session
session_start();

// Jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi server-side (dapat disesuaikan lebih lanjut)
    if (!empty($username) && !empty($password) && strlen($password) <= 6 && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password)) {
        // Simpan username ke dalam session
        $_SESSION['username'] = $username;

        // Redirect ke halaman setelah login sukses
        header('Location: home.php');
        exit;
    } else {
        // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
        $error_message = 'Username atau password tidak valid';
        header('Location: login.php?error=' . urlencode($error_message));
        exit;
    }
}