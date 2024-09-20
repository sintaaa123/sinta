<h1>Tambah Data Dokter</h1>
<form action="?page=dokter/simpan" method="POST">
    <!-- Input field untuk data yang akan ditambahkan -->
    <div class="mb-3">
        <label for="nama_dokter" class="form-label">Nama Dokter :</label>
        <input type="text" name="nama_dokter" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="nama_dokter" class="form-label">Spesialis :</label>
        <input type="text" name="spesialis" class="form-control">
    </div>


    <div class="mb-3">
        <label for="no_telp" class="form-label">Nomor Telepon:</label>
        <input type="text" name="no_telp_dokter" class="form-control">
    </div>


    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <input type="text" name="alamat_dokter" class="form-control">
    </div>

    
    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>