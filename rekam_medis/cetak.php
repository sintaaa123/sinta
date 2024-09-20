<?php
require('../lib/fpdf.php');
include "koneksi.php";
$id_pasien = $_GET['id_pasien'];

class PDF extends FPDF
{
    private $nama_pasien;
    private $tanggal;

    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Method untuk mengatur no pasien
    function setIdRekamMedis($id_rekam_medis)
    {
        $this->id_rekam_medis = $id_rekam_medis;
    }

    // Method untuk mengatur nama pasien
    function setNamaPasien($nama_pasien)
    {
        $this->nama_pasien = $nama_pasien;
    }

    // Method untuk mengatur alamat
    function setAlamatPasien($alamat_pasien)
    {
        $this->alamat_pasien = $alamat_pasien;
    }

    // Method untuk mengatur tanggal
    function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    function Header()
    {
        // Judul
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'Rekam Medis', 0, 1, 'C');

        // Tanggal
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, $this->tanggal, 0, 1, 'R');

        // ID REKAM MEDIS
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Id Rekam Medis: ' . $this->id_rekam_medis, 0, 1);

        // Nama Pasien
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Nama Pasien: ' . $this->nama_pasien, 0, 1);

        // Alamat
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Alamat Pasien: ' . $this->alamat_pasien, 0, 1);

        // Garis
        $this->SetLineWidth(0.5);
        $this->Line(10, $this->GetY(), 200, $this->GetY());

        $this->Ln(10); // Beri jarak setelah judul
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$query = mysqli_query($koneksi, "SELECT *, Pasien.nama_pasien, Pasien.id_dokter, rekammedis.tanggal
                                    FROM rekammedis
                                    LEFT JOIN Pasien ON rekammedis.id_pasien = pasien.id_pasien
                                    WHERE rekammedis.id_pasien = $id_pasien");

$pdf = new PDF();
$pdf->AliasNbPages();

while ($data = mysqli_fetch_array($query)) {
    // Set nilai nama pasien dan tanggal
    $pdf->setIdRekamMedis($data['id_rekam_medis']);
    $pdf->setNamaPasien($data['nama_pasien']);
    $pdf->setAlamatPasien($data['alamat_pasien']);
    $pdf->setTanggal($data['tanggal']);

    // Tambahkan halaman dan lanjutkan dengan menggambar konten
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    $id_dokter = $data['id_dokter'];
    $query_2 = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter = $id_dokter");
    $data_2 = mysqli_fetch_array($query_2);

    // Output struktur resep
    // Nama Dokter
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Nama Dokter: ' . $data_2['nama_dokter'], 0, 1);

    // Keluhan
    $pdf->SetFont('Arial', 'I', 12);
    $pdf->Cell(0, 10, 'Keluhan: ' . $data['keluhan'], 0, 1);

    // Pemeriksaan
    $pdf->Cell(0, 10, 'Pemeriksaan: ' . $data['pemeriksaan'], 0, 1);

    // Obat
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Obat: ' . $data['obat'], 0, 1);

    // Garis
    $pdf->SetLineWidth(0.5);
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

    $pdf->Ln(10); // Beri jarak antar data

    // Kembali
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(0, 10, 'Kembali', 0, 1, 'C', 0, 'http://localhost/poliklinik_sinta/index.php?page=rekam_medis/index');
}

$pdf->Output();
