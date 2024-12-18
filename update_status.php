<?php
include 'database/connection.php';

// Periksa apakah ada ID mahasiswa yang dikirim
if (isset($_POST['id_pengajuan'])) {
    $id_pengajuan = $_POST['id_pengajuan'];

    // Query untuk update status pembayaran
    $query = "UPDATE pengajuan_ktm SET status = 'sudah_bayar' WHERE id = '$id_pengajuan'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Berhasil update status
        header("Location: notif_mahasiswa.php?status=success");
        exit();
    } else {
        echo "Gagal memperbarui status: " . mysqli_error($conn);
    }
} else {
    echo "ID pengajuan tidak ditemukan.";
}
?>
