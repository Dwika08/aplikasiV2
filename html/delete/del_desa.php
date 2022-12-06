<?php
include '../conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM desa_detail WHERE id_desa_detail='$id'");

header("location:../pages-desa.php?pesan=hapus");
