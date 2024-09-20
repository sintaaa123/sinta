<?php
// Pastikan koneksi sudah dibuat
include "koneksi.php";

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $id_dokter = $_POST["id_dokter"];
    $nama_dokter = $_POST["nama_dokter"];
    $spesialis = $_POST["spesialis"];
    $no_telp_dokter = $_POST["no_telp_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];

    // Query SQL untuk mengupdate data pasien berdasarkan ID
    $query = "UPDATE dokter 
              SET nama_dokter = '$nama_dokter', 
              spesialis = '$spesialis', 
                  no_telp_dokter = '$no_telp_dokter', 
                  alamat_dokter = '$alamat_dokter' 
              WHERE id_dokter = '$id_dokter'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/data_dokter');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
