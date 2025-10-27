<?php
// Menentukan username dan password yang valid
$valid_username = "admin";
$valid_password = "12345";

// Mengambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Melakukan pengecekan apakah username dan password sesuai
if ($username === $valid_username && $password === $valid_password) {
    echo "<h2>Login Berhasil!</h2>";
    echo "<p>Selamat datang, <strong>$username</strong>.</p>";
} else {
    echo "<h2>Login Gagal!</h2>";
    echo "<p>Username atau password yang dimasukkan salah.</p>";
    echo '<a href="login.html">Kembali ke halaman login</a>';
}
?>


