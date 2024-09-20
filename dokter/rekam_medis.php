<?php
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];
?>

<h1>Tambah Rekam Medis Pasien</h1>
<form action="?page=dokter/simpan_rekammedis" method="POST">
    <!-- Input field untuk data yang akan ditambahkan -->
    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Pasien :</label>
        <input readonly type="text" name="id_pasien" class="form-control" value="<?php
                                                                                    $query_pasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien = $id_pasien");
                                                                                    while ($row = mysqli_fetch_array($query_pasien)) {
                                                                                        echo "{$row['nama_pasien']}";
                                                                                    } ?>">
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control">
    </div>

    <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan :</label>
        <input type="text" name="keluhan" class="form-control">
    </div>

    <div class="mb-3">
        <label for="pemeriksaan" class="form-label">Pemeriksaan :</label> <!-- Perbaikan di sini -->
        <input type="text" name="pemeriksaan" class="form-control">
    </div>

    <div class="mb-3">
        <label for="obat" class="form-label">Obat :</label> <!-- Perbaikan di sini -->
        <input type="text" name="obat" class="form-control">
    </div>

    <div class="mb-3">
        <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>
