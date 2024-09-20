
<?php
include "koneksi.php";
$id_rekam_medis=$_POST['id_rekam_medis'];
$tgl=$_POST['tgl'];
$keluhan=$_POST['keluhan'];
$pemeriksaan=$_POST['pemeriksaan'];
$obat=$_POST['obat'];
$query=mysqli_query($koneksi,"insert into rekam_medis(id_rekam_medis,tgl,keluhan,pemeriksaan,obat)values('$id_rekam_medis','$tgl','$keluhan','$pemeriksaan','$obat')");
header('location:?page=rekam_medis/index');
?>