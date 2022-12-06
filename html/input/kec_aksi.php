<?php
include '../conn.php';

$kecamatan = $_POST['kecamatan'];

$sql = "INSERT INTO kec_detail VALUES('','$kecamatan')";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../pages-kecamatan.php?pesan=input");
} else {
    header("location:../pages-kecamatan.php?pesan=gagal");
}
