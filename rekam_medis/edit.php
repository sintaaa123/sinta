<?php
include "koneksi.php";
$id_rekam_medis=$_GET['id_rekam_medis'];
$query=mysqli_query($koneksi,"select * from rekam_medis where id_rekam_medis='$id_rekam_medis'");
$data=mysqli_fetch_array($query);
?>

<div class="container">
<h1 class="mt-4">EDIT DATA</h1>
<form action="?page=rekam_medis/update"method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label class="form-label">id_rekam_medis</label>
  <input type="text" class="form-control" name="id_rekam_medis" value="<?php echo $data['id_rekam_medis']?>">
</div>
<div class="mb-3">
  <label class="form-label">tgl</label>
  <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl']?>">
</div>
<div class="mb-3">
  <label class="form-label">keluhan</label>
  <input type="text" class="form-control" name="keluhan" value="<?php echo $data['keluhan']?>">
</div>
<div class="mb-3">
  <label class="form-label">pemeriksaan</label>
  <input type="text" class="form-control" name="pemeriksaan" value="<?php echo $data['pemeriksaan']?>">
</div>
<div class="mb-3">
  <label class="form-label">obat</label>
  <input type="text" class="form-control" name="obat" value="<?php echo $data['obat']?>">
</div>
<button class="btn btn-info" >Simpan</button>
</form>
</div>