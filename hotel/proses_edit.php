<!--
buat mroses ngedit ya brooo.......!
-->
<?php
include "config.php";
$id_reservasi = $_POST['id_reservasi'];
$nama_reservasi = $_POST['nama_reservasi'];
$tlp_reservasi = $_POST['tlp_reservasi'];
$alamat_reservasi = $_POST['alamat_reservasi'];
$id_kamar = $_POST['id_kamar'];
$status_reservasi = $_POST['status_reservasi'];

// $modal_name = $_POST['nama'];
// $description = $_POST['description'];
$modal = mysqli_query($config, "UPDATE reservasi SET 
nama_reservasi = '$nama_reservasi',
tlp_reservasi = '$tlp_reservasi',
alamat_reservasi = '$alamat_reservasi',
id_kamar = '$id_kamar',
status_reservasi = '$status_reservasi'
WHERE id_reservasi = '$id_reservasi'");
header('location:index.php');
?>
