<?php
include '../conn.php';

$bencana = $_POST['bencana'];

$sql = "INSERT INTO bencana_detail VALUES('','$bencana')";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../pages-bencana-detail.php?pesan=input");
} else {
    header("location:../page-bencana-detail.php?pesan=gagal");
}
