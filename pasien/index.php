    <?php
    include "koneksi.php";

    ?>
    <h1 class="mt-4">DATA PASIEN</h1>
    <button class="btn btn-primary"><a href="?page=pasien/tambah" style="color: white;text-decoration:none">TAMBAH DATA</a></button>
    <div class="mb-3">
    <br>
    <table class="table table-striped">
        <tr>
            <th>ID_PASIEN</th>
            <th>NAMA_PASIEN</th>
            <th>NAMA_DOKTER</th>
            <th>JENIS_KELAMIN</th>
            <th>NO_TLP</th>
            <th>TGL_LAHIR</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
        <?php
        $query=mysqli_query($koneksi,"SELECT * FROM pasien");
        while($data=mysqli_fetch_array($query)){
            $id_dokter = $data['id_dokter'];
            $id_pasien = $data['id_pasien'];
        $query_2 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter = $id_dokter");
        $data_2 = mysqli_fetch_array($query_2);
        $query_3 = mysqli_query($koneksi, "SELECT * FROM rekammedis WHERE id_pasien = $id_pasien");
        $data_3 = mysqli_fetch_array($query_3);
        ?>
        <tr>   
        <td><?php echo $data['id_pasien'] ?></td>
        <td><?php echo $data['nama_pasien'] ?></td>
        <td><?php echo $data_2['nama_dokter'] ?></td>
        <td><?php echo $data['jenis_kelamin'] ?></td>
        <td><?php echo $data['no_telp'] ?></td>
        <td><?php echo $data['tanggal_lahir'] ?></td>
        <td><?php echo $data['alamat_pasien'] ?></td>
        <td>
        <?php if (empty($data_3)) { ?>
          <button class="btn btn-danger"><a style="color: white;text-decoration:none" href="?page=pasien/hapus&id_pasien=<?php echo $data['id_pasien'] ?>">Hapus</a></button>
        <?php } ?>
        <button class="btn btn-warning"><a style="color: white;text-decoration:none" href="?page=pasien/edit&id_pasien=<?php echo $data['id_pasien'] ?>">Edit</a></button>
        </td>
        </td>
        </tr>
        <?php
        }
        ?>
    </table>