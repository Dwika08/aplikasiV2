<?php
if (!isset($_POST['submit']));

$conn = mysqli_connect('localhost', 'root', '', 'aplikasi');

$id = $_POST['id_rekap'];
$tgl_kejadian = $_POST['tgl_kejadian'];
$id_bencana_detail = $_POST['id_bencana_detail'];
$nama_kk = $_POST['nama_kk'];
$jumlah_jiwa= $_POST['jumlah_jiwa'];
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
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Upload foto
if ($_FILES['foto']['error'] == 0) {
    $Extensi = $_FILES['foto']['name'];
    $extensi = pathinfo($Extensi, PATHINFO_EXTENSION);

    $nama_image = strtolower(basename($_FILES['foto']['name']));
    // $nama_image = str_replace(' ', '-', $nama_image) . '.' . $extensi;

    $asal = $_FILES['foto']['tmp_name'];
} else {
    // hapus foto
    $sqlFoto = mysqli_query($conn, "SELECT gambar FROM rekap_bencana where id_rekap= $id");
    $row = mysqli_fetch_array($sqlFoto);

    $nama_image = $row['gambar'];
}



echo $tgl_kejadian . "<br>";
echo $id_bencana_detail . "<br>";
echo $nama_kk . "<br>";
echo $jumlah_jiwa . "<br>";
echo $rt . "<br>";
echo $rw . "<br>";
echo $id_desa_detail . "<br>";
echo $rusak_ringan . "<br>";
echo $rusak_sedang . "<br>";
echo $rusak_berat . "<br>";
echo $terancam . "<br>";
echo $meninggal_dunia . "<br>";
echo $luka_luka . "<br>";
echo $kronologi . "<br>";
echo $kerugian . "<br>";
echo $latitude . "<br>";
echo $longitude . "<br>";
echo $nama_image . "<br>";


$tujuan = '../img/img/';

if ($_FILES['foto']['error'] == 0) {
    if ($_FILES['foto']['size'] < 1000000) {
        if (file_exists('../img/img/' . $nama_image)) unlink('../img/img/' . $nama_image);
        move_uploaded_file($asal, $tujuan . $nama_image) or die('Gagal upload foto');
    }
    $sql = mysqli_query($conn, "UPDATE rekap_bencana SET tgl_kejadian='$tgl_kejadian', id_bencana_detail='$id_bencana_detail', nama_kk='$nama_kk', jumlah_jiwa='$jumlah_jiwa',
    rt='$rt', rw='$rw', id_desa_detail='$id_desa_detail', rusak_berat='$rusak_berat', rusak_sedang='$rusak_sedang',rusak_ringan='$rusak_ringan', terancam='$terancam',
    meninggal_dunia='$meninggal_dunia', luka_luka='$luka_luka', kronologi='$kronologi', kerugian='$kerugian', gambar='$nama_image', latitude='$latitude', longitude='$longitude' WHERE id_rekap ='$id'")or die(mysqli_error($conn));
    if ($sql > 0) {
        header("location:../pages-validation.php?pesan=update");
    } else {
        header("location:../pages-validation.php?pesan=gagal");
    }
}
