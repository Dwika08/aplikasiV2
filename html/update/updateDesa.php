<?php
$conn = mysqli_connect('localhost', 'root', '', 'aplikasi');
$id = $_POST['id_desa_detail'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];

$sql = "UPDATE desa_detail SET desa='$desa', kecamatan='$kecamatan'  WHERE id_desa_detail='$id'";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../tableDesa.php?pesan=update");
} else {
    header("location:../tableDesa.php?pesan=gagal");
}
