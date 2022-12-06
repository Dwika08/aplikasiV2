<?php
include '../conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM rekap_bencana WHERE id_rekap='$id'");

header("location:../pages-validation.php?pesan=hapus");
