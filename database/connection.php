<?php
// Informasi koneksi database
$host = "localhost";      // Host server
$username = "root";       // Username MySQL (default: root untuk XAMPP)
$password = "";           // Password MySQL (default: kosong untuk XAMPP)
$database = "ktm_hilang"; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
