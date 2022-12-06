<?php
if (!isset($_POST['submit'])) header('Location: inputAdmin.php');

include '../conn.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

//Upload Foto

$extensi = $_FILES['foto']['name'];
$extensi = pathinfo($extensi, PATHINFO_EXTENSION);

$nama_image = strtolower($nama);
$nama_image = str_replace(' ', '-', $nama_image) . '.' . $extensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../img/images/';

if ($_FILES['foto']['error'] == 0) {
    if ($_FILES['foto']['size'] < 1000000) {
        if (file_exists('../img/images/' . $nama_image)) unlink('../img/images/' . $nama_image);


        $sql = "INSERT INTO admin VALUES ('','$nama','$username','$password','$nama_image')" or die(mysqli_error($conn));
        move_uploaded_file($asal, $tujuan . $nama_image) or die('Gagal Upload Foto');
        $query = mysqli_query($conn, $sql);
        if ($query > 0) {
            header("location:../profil.php?pesan=input");
        } else {
            header("location:../profil.php?pesan=gagal");
        }
    }
}
