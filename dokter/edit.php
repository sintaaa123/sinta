<?php
include "koneksi.php";
$id_dokter = $_GET['id_dokter'];
$query = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
$data = mysqli_fetch_array($query);
?>

<h1>Edit Data Dokter</h1>
<form action="?page=dokter/update" method="POST">
    <!-- Input field untuk data yang akan diubah -->
    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Dokter:</label>
        <input type="text" name="nama_dokter" class="form-control" value="<?php echo $data['nama_dokter']; ?>">
    </div>


    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Spesialis :</label>
        <input type="text" name="spesialis" class="form-control" value="<?php echo $data['spesialis']; ?>">
    </div>

    <div class="mb-3">
        <label for="no_telp" class="form-label">Nomor Telepon:</label>
        <input type="text" name="no_telp_dokter" class="form-control" value="<?php echo $data['no_telp_dokter']; ?>">
    </div>


    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <input type="text" name="alamat_dokter" class="form-control" value="<?php echo $data['alamat_dokter']; ?>">
    </div>



    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="hidden" name="id_dokter" value="<?php echo $id_dokter; ?>">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>