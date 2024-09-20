<?php
include "koneksi.php";
?>

<h1 class="mt-4">Rekam Medis</h1>

<table class="table table-striped">
    <tr>
        <td>Nama Pasien</td>
        <td>Nama Dokter</td>
        <td>Tanggal</td>
        <td>Keluhan</td>
        <td>Pemeriksaan</td>
        <td>Obat</td>
        <td>Cetak</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT *, Pasien.nama_pasien, Pasien.id_dokter
   FROM rekammedis
   LEFT JOIN Pasien ON rekammedis.id_pasien = pasien.id_pasien");

    while ($data = mysqli_fetch_array($query)) {
        $id_dokter = $data['id_dokter'];
        $query_2 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter = $id_dokter");
        $data_2 = mysqli_fetch_array($query_2);
    ?>
        <tr>
            <td><?php echo $data['nama_pasien'] ?></td>
            <td><?php echo $data_2['nama_dokter'] ?></td>
            <td><?php echo $data['tanggal'] ?></td>
            <td><?php echo $data['keluhan'] ?></td>
            <td><?php echo $data['pemeriksaan'] ?></td>
            <td><?php echo $data['obat'] ?></td>
            <td> 
                <button class="btn btn-warning">
                    <a style="color: white;text-decoration:none" href="rekam_medis/cetak.php?id_pasien=<?php echo $data['id_pasien'] ?>">Cetak</a>
                </button>
            </td>
        </tr>

    <?Php
    }
    ?>
</table>
