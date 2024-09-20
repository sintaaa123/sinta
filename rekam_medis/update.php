
<?php
include "koneksi.php";
$id_rekam_medis=$_POST['id_rekam_medis'];
$tgl=$_POST['tgl'];
$keluhan=$_POST['keluhan'];
$pemeriksaan=$_POST['pemeriksaan'];
$obat=$_POST['obat'];
$query=mysqli_query($koneksi,"update rekam_medis set tgl='$tgl',keluhan='$keluhan',pemeriksaan='$pemeriksaan',obat='$obat' where id_rekam_medis='$id_rekam_medis'");
header('location:?page=rekam_medis/index');
?>