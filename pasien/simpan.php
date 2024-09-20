<?php
// Pastikan koneksi sudah dibuat
include "koneksi.php";

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $nama_pasien = $_POST["nama_pasien"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_telp = $_POST["no_telp"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat_pasien = $_POST["alamat_pasien"];
    $id_dokter = $_POST["id_dokter"];

    // Query SQL untuk menyimpan data pasien ke dalam tabel Pasien
    $query = "INSERT INTO Pasien (nama_pasien, jenis_kelamin, no_telp, tanggal_lahir, alamat_pasien, id_dokter) 
              VALUES ('$nama_pasien', '$jenis_kelamin', '$no_telp', '$tanggal_lahir', '$alamat_pasien', '$id_dokter')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=pasien/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
