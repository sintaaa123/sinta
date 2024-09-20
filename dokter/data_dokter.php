<?php
include "koneksi.php";
?>

<h1 class="mt-4">Master Dokter</h1>
<button class="btn btn-success"><a style="color: white;text-decoration:none" href="?page=dokter/index">Tambah Rekam Medis</a></button>
<button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=dokter/tambah">Tambah Data Dokter</a></button>
<table class="table table-striped">
  <tr>
    <td>Nama Dokter</td>
    <td>Spesialis</td>
    <td>No Telepon</td>
    <td>Alamat Dokter</td>
    <td>Aksi</td>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "SELECT * FROM dokter");

  while ($data = mysqli_fetch_array($query)) {
    $id_dokter = $data['id_dokter'];
    $query_2 = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_dokter = $id_dokter");
    $data_2 = mysqli_fetch_array($query_2);
  ?>
    <tr>
      <td><?php echo $data['nama_dokter'] ?></td>
      <td><?php echo $data['spesialis'] ?></td>
      <td><?php echo $data['no_telp_dokter'] ?></td>
      <td><?php echo $data['alamat_dokter'] ?></td>
      <td>
        <?php if (empty($data_2)) { ?>
          <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/hapus_dokter&id_dokter=<?php echo $data['id_dokter'] ?>">Hapus</a></button>
        <?php } ?>
        <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=dokter/edit&id_dokter=<?php echo $data['id_dokter'] ?>">Edit</a></button>
      </td>
    </tr>
  <?Php
  }
  ?>
</table>