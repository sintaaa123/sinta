<?php
include "koneksi.php";
?>

<h1 class="mt-4">Master Dokter</h1>
<button class="btn btn-success"><a style="color: white;text-decoration:none" href="?page=dokter/data_dokter">Data Dokter</a></button>
<button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=dokter/tambah">Tambah Data Dokter</a></button>
<table class="table table-striped">
  <tr>
    <td>Nama Pasien</td>
    <td>Nama Dokter</td>
    <td>Obat</td>
    <td>Keluhan</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "SELECT Pasien.id_pasien, Pasien.nama_pasien, Dokter.nama_dokter
   FROM Pasien
   LEFT JOIN Dokter ON Pasien.id_dokter = Dokter.id_dokter");

  while ($data = mysqli_fetch_array($query)) {
    $id_pasien = $data['id_pasien'];
    $query_2 = mysqli_query($koneksi, "SELECT * FROM rekammedis WHERE id_pasien = $id_pasien");
    $data_2 = mysqli_fetch_array($query_2);
  ?>
    <tr>
      <td><?php echo $data['nama_pasien'] ?></td>
      <td><?php echo $data['nama_dokter'] ?></td>
      <td><?php echo $data_2['obat'] ?></td>
      <td>
        <?php if (empty($data_2['keluhan'])) : ?>
          <button class="btn btn-primary"><a style="color: white;text-decoration:none" href="?page=dokter/rekam_medis&id_pasien=<?php echo $data['id_pasien'] ?>">Tambah Rekam Medis</a></button>
        <?php else : ?>
          <?php echo $data_2['keluhan']; ?>
        <?php endif; ?>
      </td>
      <td>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/hapus&id_pasien=<?php echo $data['id_pasien'] ?>">Hapus Rekam Medis </a></button>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/edit_rekammedis&id_pasien=<?php echo $data['id_pasien'] ?>">Edit Rekam Medis</a></button>
      </td>
    </tr>
  <?Php
  }
  ?>
</table>