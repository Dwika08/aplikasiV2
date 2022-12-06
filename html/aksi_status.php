<?php
include 'conn.php';

$id = $_POST['id_rekap'];
$status = $_POST['status'];

$sql = mysqli_query($conn, "UPDATE rekap_bencana SET status='$status' where id_rekap ='$id'");

if ($sql > 0) {
    header("location: pages-bencana.php?pesan=acc");
} else {
    header("location: pages-bencana.php?pesan=acc!");
}
