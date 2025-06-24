<?php
// auth.php
$valid_user = "admin";
$valid_pass = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
    echo "Login berhasil! Selamat datang, $username.";
} else {
    echo "Login gagal. Coba lagi.";
}
?>
