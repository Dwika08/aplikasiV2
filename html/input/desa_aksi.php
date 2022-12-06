<?php
include '../conn.php';

$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];

$sql = "INSERT INTO desa_detail VALUES('','$desa','$kecamatan')";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../pages-desa.php?pesan=input");
} else {
    header("location:../pages-desa.php?pesan=gagal");
}
