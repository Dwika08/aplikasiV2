<?php
include '../conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM admin WHERE id_admin='$id'");

header("location:../profil.php?pesan=hapus");
