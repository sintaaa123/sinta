<div class="container">
<h1 class="mt-4">TAMBAH DATA</h1>
<form action="?page=rekam_medis/simpan"method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label class="form-label">id_rekam_medis</label>
  <input type="text" class="form-control" name="id_rekam_medis">
</div>
<div class="mb-3">
  <label class="form-label">tgl</label>
  <input type="date" class="form-control" name="tgl">
</div>
<div class="form-group">
    <label class="form-label">keluhan</label>
    <input type="text" class="form-control" name="keluhan">
    </div>
<div class="mb-3">
  <label class="form-label">pemeriksaan</label>
  <input type="text" class="form-control" name="pemeriksaan">
</div>
<div class="mb-3">
  <label class="form-label">obat</label>
  <input type="text" class="form-control" name="obat">
</div>
<button class="btn btn-info" >Simpan</button>
</form>
</div>