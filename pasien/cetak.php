<?php
require('../lib/fpdf.php'); // Memuat file fpdf.php
include "koneksi.php";
 
class PDF extends FPDF
{
    // Fungsi untuk header
    function Header()
    {
        // Posisi 1,5 cm dari atas
        $this->SetY(15);
        // Judul
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Data Member', 0, 1, 'C');
        $this->Ln(10);
    }
 
    // Fungsi untuk footer
    function Footer()
    {
        // Posisi 1,5 cm dari bawah
        $this->SetY(-15);
        // Teks
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . ' dari {nb}', 0, 0, 'C');
    }
}
 
// Membuat objek PDF
$pdf = new PDF();
$pdf->AliasNbPages();
 
// Menambah halaman baru
$pdf->AddPage();
 
// Menambahkan konten dari HTML
$pdf->SetFont('Arial', '', 12);
 
// Judul tabel
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 7, 'Id', 1);
$pdf->Cell(30, 7, 'Nama', 1);
$pdf->Cell(50, 7, 'Alamat', 1);
$pdf->Cell(30, 7, 'Jenis Kelamin', 1);
$pdf->Cell(40, 7, 'Telepon', 1);
$pdf->Ln();
 
// Menampilkan data member
$query = mysqli_query($koneksi, "SELECT * FROM member");
while ($data = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 7, $data['id'], 1);
    $pdf->Cell(30, 7, $data['nama'], 1);
    $pdf->Cell(50, 7, $data['alamat'], 1);
    $pdf->Cell(30, 7, $data['jenis_kelamin'], 1);
    $pdf->Cell(40, 7, $data['tlp'], 1);
    $pdf->Ln();
}

$pdf->Cell(40, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Kembali', 0, 1, 'C', 0, 'http://localhost/laundry_sinta/index.php?page=member/index' );

 
// Output PDF
$pdf->Output();
?>
 
