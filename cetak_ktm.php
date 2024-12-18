<?php
require('library/fpdf/fpdf.php'); // Sertakan library FPDF

// Simulasi data mahasiswa (bisa diambil dari database)
$nama = "Budi Santoso";
$nim = "12345678";
$tanggal = date("d-m-Y");

// Membuat objek PDF
$pdf = new FPDF();
$pdf->AddPage();

// Judul KTM
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Kartu Tanda Mahasiswa (KTM)', 0, 1, 'C');

// Garis bawah
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Nama:');
$pdf->Cell(100, 10, $nama, 0, 1);

$pdf->Cell(40, 10, 'NIM:');
$pdf->Cell(100, 10, $nim, 0, 1);

$pdf->Cell(40, 10, 'Tanggal Cetak:');
$pdf->Cell(100, 10, $tanggal, 0, 1);

// Output PDF
$pdf->Output('D', 'KTM_'.$nim.'.pdf');
?>
