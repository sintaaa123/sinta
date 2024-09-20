<?php
// Pastikan koneksi sudah dibuat
include "koneksi.php";

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $id_rekam_medis = $_POST["id_rekam_medis"]; // Mengambil id rekam medis dari form
    $tanggal = $_POST["tanggal"];
    $pemeriksaan = $_POST["pemeriksaan"];
    $keluhan = $_POST["keluhan"];
    $obat = $_POST["obat"];

    $query = "UPDATE rekammedis 
              SET tanggal = '$tanggal', 
                  pemeriksaan = '$pemeriksaan', 
                  keluhan = '$keluhan', 
                  obat = '$obat'
              WHERE id_rekam_medis = '$id_rekam_medis'"; // Menggunakan id rekam medis untuk update data

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
