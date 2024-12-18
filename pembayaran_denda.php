<?php
// Sertakan koneksi database
// include 'database/connection.php';

// // Variabel untuk pesan
// $success_message = "";
// $error_message = "";

// // Periksa jika form pembayaran dikirim
// if (isset($_POST['submit_pembayaran'])) {
//     $nim = $_POST['nim'];
//     $jumlah_denda = $_POST['jumlah_denda'];

//     // Periksa apakah data NIM ada di database
//     $check_query = "SELECT * FROM pengajuan_ktm WHERE nim = '$nim' AND status = 'menunggu'";
//     $result = mysqli_query($conn, $check_query);

//     if (mysqli_num_rows($result) > 0) {
//         // Update status pembayaran menjadi "dibayar" di database
//         $update_query = "UPDATE pengajuan_ktm SET status = 'dibayar', jumlah_denda = '$jumlah_denda' 
//                          WHERE nim = '$nim'";
//         if (mysqli_query($conn, $update_query)) {
//             $success_message = "Pembayaran denda berhasil dikonfirmasi. Status Anda diperbarui.";
//         } else {
//             $error_message = "Terjadi kesalahan saat memperbarui data. Silakan coba lagi.";
//         }
//     } else {
//         $error_message = "Data NIM tidak ditemukan atau pembayaran sudah diproses.";
//     }
// }
?>

<?php
// Sertakan file koneksi database
//include 'database/connection.php';

// Periksa jika form disubmit
//if (isset($_POST['submit_pengajuan'])) {
    // Ambil data dari form
   // $nim = $_POST['nim'];
    //$jumlah_denda = $_POST['jumlah_denda'];

    // Query untuk insert data ke database
   // $query = "INSERT INTO pembayaran_denda (nim, jumlah_denda, status) 
              //VALUES ('$nim', '$jumlah_denda', 'menunggu')";

    // Eksekusi query
    //if (mysqli_query($conn, $query)) {
        //$success_message = "Pembayaran denda berhasil dikonfirmasi.";
    //} else {
       // $error_message = "Gagal mengonfirmasi pembayaran. Silakan coba lagi.";
  //  }
//}
//?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran Denda KTM Hilang</title>
    <link rel="stylesheet" href="assets/style.css"> <!-- Tambahkan CSS jika ada -->
    <style>
        /* Styling untuk Body dan Layout */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        /* Styling Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            padding: 10px 20px;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 30px; /* Ukuran logo lebih kecil */
            margin-right: 10px;
        }

        .navbar .logo span {
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #f4f4f9;
        }

        /* Styling Form */
        .container {
            flex-grow: 1; /* Membuat konten mengisi ruang yang tersisa */
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 15px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        /* Styling Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="assets\pngegg.png" alt="Logo"> <!-- Ganti dengan nama file logo yang sesuai -->
            <span>Pengajuan Kehilangan KTM</span>
        </div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Pengajuan</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </div>

    <!-- Kontainer Form -->
    <div class="container">
        <h2>Form Pembayaran Denda KTM Hilang</h2>
        <?php if (!empty($success_message)) echo "<div class='message success'>$success_message</div>"; ?>
        <?php if (!empty($error_message)) echo "<div class='message error'>$error_message</div>"; ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa" required>

            <label for="nim_mahasiswa">NIM Mahasiswa</label>
            <input type="text" name="nim_mahasiswa" id="nim_mahasiswa" placeholder="Masukkan NIM Mahasiswa" required>

            <label for="bukti_pembayaran">Bukti Pembayaran Denda</label>
            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" required>

            <button type="submit" name="submit_pembayaran">Konfirmasi Pembayaran</button>
        </form>
    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2024 KTM Center. Semua hak cipta dilindungi.</p>
        <p>Alamat: Jl. Raya Telang, Perumahan Telang Indah, Telang, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162</p>
        <p>Kontak: 031-3011146 | +62811-3333-0046</p>
        <p>Email: humas@trunojoyo.ac.id</p>
    </footer>
</body>
</html>
