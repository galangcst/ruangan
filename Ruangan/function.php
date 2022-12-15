<?php
// Menyediakan informasi koneksi ke server database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ruangan';
// Mencoba untuk terhubung ke server database
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    // Menangani kesalahan koneksi
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>