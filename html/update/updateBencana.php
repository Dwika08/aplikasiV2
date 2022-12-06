<?php
$conn = mysqli_connect('localhost', 'root', '', 'aplikasi');
$id = $_POST['id_bencana_detail'];
$bencana = $_POST['bencana'];

$sql = "UPDATE bencana_detail SET bencana='$bencana'  WHERE id_bencana_detail='$id'";

$query = mysqli_query($conn, $sql);
if ($query > 0) {
    header("location:../pages-bencana-detail.php?pesan=update");
} else {
    header("location:../pages-bencana-detail.php?pesan=gagal");
}
