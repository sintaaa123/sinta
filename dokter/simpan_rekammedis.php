<?php
// Pastikan koneksi sudah dibuat
include "koneksi.php";

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $id_pasien = $_POST["id_pasien"];
    $tanggal = $_POST["tanggal"];
    $keluhan = $_POST["keluhan"];
    $pemeriksaan = $_POST["pemeriksaan"];
    $obat = $_POST["obat"];

    // Query SQL untuk menyimpan data pasien ke dalam tabel Pasien
    $query = "INSERT INTO rekammedis (id_pasien, tanggal, keluhan, pemeriksaan, obat) 
              VALUES ('$id_pasien', '$tanggal', '$keluhan', '$pemeriksaan', '$obat')"; // tambahkan tanda kurung tutup di sini

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/index');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
