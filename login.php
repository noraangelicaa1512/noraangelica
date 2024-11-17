<?php
$validUsername = "admin";
$validPassword = "1234";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<p>Input tidak lengkap. Silakan isi username dan password.</p>";
    } elseif ($username === $validUsername && $password === $validPassword) {
        echo "<p>Login sukses! Selamat datang, $username.</p>";
    } else {
        echo "<p>Login gagal. Username atau password salah.</p>";
    }
} else {
    echo "<p>Akses tidak diizinkan!</p>";
}
?>