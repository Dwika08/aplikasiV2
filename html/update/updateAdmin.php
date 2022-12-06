<?php

if (!isset($_POST['submit']));

$conn = mysqli_connect('localhost', 'root', '', 'aplikasi');

$id = $_POST['id_admin'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];

// Upload foto
if ($_FILES['foto']['error'] == 0) {
    $extensi = $_FILES['foto']['name'];
    $extensi = pathinfo($extensi, PATHINFO_EXTENSION);

    $nama_image = strtolower($nama);
    $nama_image = str_replace(' ', '-', $nama_image) . '.' . $extensi;

    $asal = $_FILES['foto']['tmp_name'];
} else {
    // hapus foto
    $sqlFoto = mysqli_query($conn, "SELECT image FROM admin where id_admin= $id");
    $row = mysqli_fetch_array($sqlFoto);

    $nama_image = $row['image'];
}

$tujuan = '../img/user/';

if ($_FILES['foto']['error'] == 0) {
    if ($_FILES['foto']['size'] < 10000000) {
        if (file_exists('../img/user/' . $nama_image)) unlink('../img/user/' . $nama_image . '.' . $extensi);
        // if (file_exists('../img/images/' . $row['image'])) unlink('../img/images/' . $row['image']);
        move_uploaded_file($asal, $tujuan . $nama_image) or die('Gagal upload foto');
    }
    $sql = mysqli_query($conn, "UPDATE admin SET nama = '$nama', username='$username', password='$password', image = '$nama_image', email='$email' where id_admin='$id'")
        or die(mysqli_error($conn));
    if ($sql > 0) {
        header("location:../pages-profile.php?pesan=update");
    } else {
        header("location:../pages-profile.php?pesan=gagal");
    }
}
