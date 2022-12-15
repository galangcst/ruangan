<?php
  include('function.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password ada di database
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
  // Jika username dan password ditemukan, redirect ke halaman admin
  header('Location: admin/admin.php');
} else {
  // Jika username atau password tidak ditemukan, tampilkan alert error
  echo "<script>
          alert('Error: Password yang Anda masukkan salah!');
          window.location.href = 'index.php';
        </script>";
}
?>
