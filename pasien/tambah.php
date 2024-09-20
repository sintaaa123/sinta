<?php
include "koneksi.php";
?>

<h1>Tambah Data Pasien</h1>
<form action="?page=pasien/simpan" method="POST">
    <!-- Input field untuk data yang akan ditambahkan -->
    <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Pasien:</label>
        <input type="text" name="nama_pasien" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin:</label>
        <div>
            <input type="radio" name="jenis_kelamin" id="L" value="L">
            <label for="L">Laki-laki</label>
        </div>
        <div>
            <input type="radio" name="jenis_kelamin" id="P" value="P">
            <label for="P">Perempuan</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="no_telp" class="form-label">Nomor Telepon:</label>
        <input type="text" name="no_telp" class="form-control">
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="form-control">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat:</label>
        <input type="text" name="alamat_pasien" class="form-control">
    </div>

    

    <!-- ID Dokter -->
    <div class="mb-3">
        <label for="id_dokter" class="form-label">ID Dokter:</label>
        <select name="id_dokter" class="form-control">
            <?php
            // Ambil data ID Dokter dari tabel Dokter
            $query_dokter = mysqli_query($koneksi, "SELECT * FROM dokter");
            while ($row_dokter = mysqli_fetch_array($query_dokter)) {
                echo "<option value='" . $row_dokter['id_dokter'] . "'>" . $row_dokter['nama_dokter'] . "</option>";
            }
            ?>
        </select>
    </div>


    <!-- Tombol Submit -->
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
</form>