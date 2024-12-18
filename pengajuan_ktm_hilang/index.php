<?php
// Sertakan file koneksi database
// include 'database/connection.php';

// Periksa jika form disubmit
// if (isset($_POST['submit_pengajuan'])) {
//     Ambil data dari form
//    $nama_lengkap = $_POST['nama_lengkap'];
//     $nim = $_POST['nim'];
//     $email = $_POST['email'];
//     $alasan = $_POST['alasan'];

//     Query untuk insert data ke database
//    $query = "INSERT INTO pengajuan_ktm (nama_lengkap, nim, email, alasan, status) 
//               VALUES ('$nama_lengkap', '$nim', '$email', '$alasan', 'menunggu')";

//     Eksekusi query
//     if (mysqli_query($conn, $query)) {
//         $success_message = "Pengajuan KTM hilang berhasil dikirim. Menunggu verifikasi admin.";
//     } else {
//        $error_message = "Gagal mengajukan KTM hilang. Silakan coba lagi.";
//    }
// }
//?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan KTM Hilang</title>
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

        input, textarea {
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
        <h2>Form Pengajuan KTM Hilang</h2>
        <?php if (!empty($success_message)) echo "<div class='message success'>$success_message</div>"; ?>
        <?php if (!empty($error_message)) echo "<div class='message error'>$error_message</div>"; ?>

        <form action="" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" placeholder="Masukkan NIM Anda" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email aktif Anda" required>

            <label for="alasan">Alasan Kehilangan KTM</label>
            <textarea name="alasan" id="alasan" rows="4" placeholder="Jelaskan alasan kehilangan KTM" required></textarea>

            <button type="submit" name="submit_pengajuan">Kirim Pengajuan</button>
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
