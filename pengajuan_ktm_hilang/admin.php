<?php
// Sertakan koneksi database
// include 'database/connection.php';

// Pesan notifikasi
// $success_message = "";
// $error_message = "";

// Proses Verifikasi atau Kembalikan untuk Revisi
// if (isset($_POST['action'])) {
//     $id_pengajuan = $_POST['id_pengajuan'];
//     $action = $_POST['action'];

//     if ($action == 'verifikasi') {
//         Update status menjadi 'diverifikasi'
//       $query = "UPDATE pengajuan_ktm SET status = 'diverifikasi' WHERE id = '$id_pengajuan'";
//     } elseif ($action == 'revisi') {
//         Update status menjadi 'revisi'
//        $query = "UPDATE pengajuan_ktm SET status = 'revisi' WHERE id = '$id_pengajuan'";
//    }

//     if (mysqli_query($conn, $query)) {
//         $success_message = "Pengajuan berhasil diperbarui.";
//     } else {
//        $error_message = "Terjadi kesalahan saat memperbarui data.";
//    }
// }

// Ambil data pengajuan mahasiswa
// $query = "SELECT id, nim, nama, alasan_kehilangan, status FROM pengajuan_ktm";
// $result = mysqli_query($conn, $query);
//?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Admin - Verifikasi Surat Kehilangan KTM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
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
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar ul li a:hover {
            background-color: #0056b3;
        }

        /* Styling for Container */
        .container {
            width: 80%;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #28a745;
            color: #fff;
        }

        button {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            color: #fff;
        }

        .verify {
            background-color: #28a745;
        }

        .reject {
            background-color: #dc3545;
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        /* Styling Footer */
        footer {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Admin Portal</div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Verifikasi Pengajuan</a></li>
            <li><a href="#">Status Pengajuan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </div>

    <!-- Kontainer Form -->
    <div class="container">
        <h2>Portal Admin - Verifikasi Surat Kehilangan KTM</h2>

        <!-- Pesan Notifikasi -->
        <?php if (!empty($success_message)) echo "<div class='message success'>$success_message</div>"; ?>
        <?php if (!empty($error_message)) echo "<div class='message error'>$error_message</div>"; ?>

        <!-- Tabel Data Pengajuan -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alasan Kehilangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alasan_kehilangan']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <!-- Form Aksi -->
                            <form action="" method="POST" style="display:inline;">
                                <input type="hidden" name="id_pengajuan" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="action" value="verifikasi" class="verify">Verifikasi</button>
                            </form>
                            <form action="" method="POST" style="display:inline;">
                                <input type="hidden" name="id_pengajuan" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="action" value="revisi" class="reject">Kembalikan</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Universitas Trunojoyo Madura. All Rights Reserved.</p>
        <p>Alamat: Jl. Raya Telang, Perumahan Telang Indah, Telang, Kec. Kamal, Kabupaten Bangkalan, Jawa Timur 69162</p>
        <p>Kontak: <a href="tel:031-3011146">031-3011146</a> | <a href="tel:+6281133330046">+62811-3333-0046</a> | <a href="mailto:humas@trunojoyo.ac.id">humas@trunojoyo.ac.id</a></p>
    </footer>

</body>
</html>
