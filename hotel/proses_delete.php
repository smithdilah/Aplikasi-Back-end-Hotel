<!--
buat delete alias hapus ya brooo.......!
-->
<?php
include "config.php";
$id_reservasi = $_GET['id_reservasi'];
$modal = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id_reservasi='$id_reservasi'");
header('location:index.php');
?>