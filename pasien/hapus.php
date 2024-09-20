<?php
include "koneksi.php";

// Pastikan id_pasien diset dan tidak kosong
if(isset($_GET['id_pasien']) && !empty($_GET['id_pasien'])) {
    $id_pasien = $_GET['id_pasien'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = mysqli_prepare($koneksi, "DELETE FROM pasien WHERE id_pasien = ?");
    mysqli_stmt_bind_param($query, 's', $id_pasien);
    mysqli_stmt_execute($query);

    // Cek apakah query berhasil dieksekusi
    if(mysqli_stmt_affected_rows($query) > 0) {
        // Redirect ke index.php?page=pasien/index jika berhasil
        header('Location: index.php?page=pasien/index');
        exit(); // Penting untuk menghentikan eksekusi selanjutnya setelah header
    } else {
        echo "Gagal menghapus data pasien.";
    }
} else {
    echo "ID pasien tidak valid.";
}
?>
