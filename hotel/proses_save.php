<!--
iki proses nyimpenya njih....
-->
<?php
include "config.php";
$nama_reservasi = $_POST['nama_reservasi'];
$tlp_reservasi = $_POST['tlp_reservasi'];
$alamat_reservasi = $_POST['alamat_reservasi'];
$id_kamar = $_POST['id_kamar'];
$status_reservasi = $_POST['status_reservasi'];
mysqli_query($koneksi, "INSERT INTO reservasi (nama_reservasi,tlp_reservasi,alamat_reservasi,id_kamar,status_reservasi) VALUES
('$nama_reservasi','$tlp_reservasi','$alamat_reservasi','$id_kamar','$status_reservasi')");
header('location:index.php');
?>