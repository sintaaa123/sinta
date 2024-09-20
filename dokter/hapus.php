<?php
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "delete from rekammedis where id_pasien='$id_pasien'");
header('location:?page=dokter/index');
?>
