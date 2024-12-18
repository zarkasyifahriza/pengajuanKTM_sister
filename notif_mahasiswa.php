<?php
include 'database/connection.php';

// Periksa status pembayaran
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo "<h2>Status Pembayaran: Sudah Dibayar</h2>";
    echo "<p>Kartu Tanda Mahasiswa (KTM) Anda sedang dicetak.</p>";

    // Simulasi tombol cetak KTM
    echo '<form method="POST" action="cetak_ktm.php">
            <button type="submit" name="cetak">Cetak KTM</button>
          </form>';
} else {
    echo "<h2>Status Pembayaran: Menunggu Pembayaran</h2>";
}
?>
