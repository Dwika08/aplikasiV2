<?php
include '../conn.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM bencana_detail WHERE id_bencana_detail='$id'");

header("location:../pages-bencana-detail.php?pesan=hapus");
