<?php
include 'conn.php';
//koneksi database
session_start();
error_reporting(0);

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT*FROM admin WHERE username='" . $username . "' AND password='" . $password . "'");
$result = mysqli_fetch_assoc($query);
if ($result > 0) {
    $_SESSION['status'] = "login";
    $_SESSION['nama'] = $nama;
    $_SESSION['image'] = $image;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['username'] = $username;
    echo "
    <script>
    location.replace ('home.php');
    </script>
    ";
} else {
    
    echo "<script>
    alert('Email atau password Anda salah. Silahkan coba lagi!');
    location.replace('index.php');
    </script>";
    
}
?>

