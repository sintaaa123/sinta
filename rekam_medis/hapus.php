<?php
include "koneksi.php";
$id_rekam_medis=$_GET['id_rekam_medis'];
$query=mysqli_query($koneksi,"delete from rekam_medis where id_rekam_medis='$id_rekam_medis'");
header('location:?page=rekam_medis/index');
?>