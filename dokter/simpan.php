<?php
// Pastikan koneksi sudah dibuat
include "koneksi.php";

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $nama_dokter = $_POST["nama_dokter"];
    $spesialis = $_POST["spesialis"];
    $no_telp_dokter = $_POST["no_telp_dokter"];
    $alamat_dokter = $_POST["alamat_dokter"];

    // Query SQL untuk menyimpan data pasien ke dalam tabel Pasien
    $query = "INSERT INTO dokter (nama_dokter, spesialis, no_telp_dokter, alamat_dokter) 
              VALUES ('$nama_dokter', '$spesialis', '$no_telp_dokter', '$alamat_dokter')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header('location:?page=dokter/data_dokter');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
