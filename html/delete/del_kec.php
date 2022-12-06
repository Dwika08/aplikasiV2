<?php
include '../conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kec_detail WHERE id_kec_detail='$id'");

header("location:../pages-kecamatan.php?pesan=hapus");
