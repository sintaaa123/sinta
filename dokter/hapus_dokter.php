<?php
include "koneksi.php";
$id_dokter = $_GET['id_dokter'];
$query = mysqli_query($koneksi, "delete from dokter where id_dokter='$id_dokter'");
header('location:?page=dokter/data_dokter');
?>
