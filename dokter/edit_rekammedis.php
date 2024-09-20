<?php
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM rekammedis WHERE id_pasien='$id_pasien'");
$data = mysqli_fetch_array($query);
?>

<h1>Edit Rekam Medis Pasien</h1>

<form action="?page=dokter/update_rekammedis" method="POST">
    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Pasien :</label>
        <input readonly type="text" name="id_pasien" class="form-control" value="<?php
                                                                            $query_pasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien = {$data['id_pasien']}");
                                                                            while ($row = mysqli_fetch_array($query_pasien)) {
                                                                                echo "{$row['nama_pasien']}";
                                                                            } ?>">
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Rekam Medis</label>
        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>">
    </div>

    <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan</label>
        <input type="text" name="keluhan" class="form-control" value="<?php echo $data['keluhan']; ?>">
    </div>

    <div class="mb-3">
        <label for="pemeriksaan" class="form-label">Pemeriksaan</label>
        <input type="text" name="pemeriksaan" class="form-control" value="<?php echo $data['pemeriksaan']; ?>">
    </div>

    <div class="mb-3">
        <label for="obat" class="form-label">Pengobatan</label> <!-- Perbaikan di sini -->
        <input type="text" name="obat" class="form-control" value="<?php echo $data['obat'] ?>">
    </div>

    <div class="mb-3">
        <input type="hidden" name="id_rekam_medis" value="<?php echo $data['id_rekam_medis']; ?>"> <!-- Menambahkan input untuk id rekam medis -->
        <input type="submit" class="btn btn-primary" value="Simpan"> <!-- Memperbaiki tulisan 'simpan' menjadi 'Simpan' -->
    </div>
</form>
