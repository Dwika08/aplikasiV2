<?php
include 'conn.php';
//koneksi database
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$image = $_POST["image"];
$email = $_POST["email"];

$query = mysqli_query($conn, "SELECT*FROM admin WHERE username='" . $username . "' AND password='" . $password . "'");
$result = mysqli_fetch_assoc($query);
if ($result > 0) {

    $_SESSION['status'] = "login";
    $_SESSION['nama'] = $result['nama'];
    $_SESSION['image'] = $result['image'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['username'] = $result['username'];
    header("location:home.php");
} else {
    header("location:index.php?pesan=gagal");
}
