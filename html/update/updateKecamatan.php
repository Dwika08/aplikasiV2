<?php
$conn = mysqli_connect('localhost', 'root', '', 'aplikasi');
$id = $_POST['id_kec_detail'];
$kecamatan = $_POST['kecamatan'];

$sql = "UPDATE kec_detail SET kecamatan='$kecamatan'  WHERE id_kec_detail='$id'";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../pages-kecamatan.php?pesan=update");
} else {
    header("location:../pages-kecamatan.php?pesan=gagal");
}
