<?php
include 'conn.php';


$tgl_kejadian = $_POST['tgl_kejadian'];
$id_bencana_detail = $_POST['id_bencana_detail'];
$nama_kk = $_POST['nama_kk'];
$jumlah_jiwa = $_POST['jumlah_jiwa'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$id_desa_detail = $_POST['id_desa_detail'];
$rusak_ringan = $_POST['rusak_ringan'];
$rusak_sedang = $_POST['rusak_sedang'];
$rusak_berat = $_POST['rusak_berat'];
$terancam = $_POST['terancam'];
$meninggal_dunia = $_POST['meninggal_dunia'];
$luka_luka = $_POST['luka_luka'];
$kronologi = $_POST['kronologi'];
$kerugian = $_POST['kerugian'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

//Upload Foto


$Extensi = $_FILES['foto']['name'];
$extensi = pathinfo($Extensi, PATHINFO_EXTENSION);

$nama_image = strtolower(basename($_FILES['foto']['name']));
// $nama_image = str_replace(' ', '-', $nama_image) . '.' . $extensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = 'img/img/';


// echo $tgl_kejadian . "<br>";
// echo $id_bencana_detail . "<br>";
// echo $nama_kk . "<br>";
// echo $jumlah_jiwa . "<br>";
// echo $rt . "<br>";
// echo $rw . "<br>";
// echo $id_desa_detail . "<br>";
// echo $rusak_ringan . "<br>";
// echo $rusak_sedang . "<br>";
// echo $rusak_berat . "<br>";
// echo $terancam . "<br>";
// echo $meninggal_dunia . "<br>";
// echo $luka_luka . "<br>";
// echo $kronologi . "<br>";
// echo $kerugian . "<br>";
// echo $lat . "<br>";
// echo $lng . "<br>";
// echo $nama_image. "<br>";

if ($_FILES['foto']['error'] == 0) {
    if ($_FILES['foto']['size'] < 1000000) {
        if (file_exists('img/img/' . $nama_image)) unlink('img/img/' . $nama_image);
        $sql = "INSERT INTO rekap_bencana VALUES ('','$tgl_kejadian','$id_bencana_detail','$nama_kk','$jumlah_jiwa','$rt','$rw'
        ,'$id_desa_detail','$rusak_berat','$rusak_sedang','$rusak_ringan','$terancam','$meninggal_dunia','$luka_luka','$kronologi','$kerugian',
        '$nama_image','$lat','$lng','0')" or die(mysqli_error($conn));
        move_uploaded_file($asal, $tujuan . $nama_image) or die('Gagal Upload Foto');
        $query = mysqli_query($conn, $sql);
        if ($query > 0) {
            header("location:pages-validation.php?pesan=input");
        } else {
            header("location:pages-validation.php?pesan=gagal");
        }
    }
}
