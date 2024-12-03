<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header('Location: login.php');
    exit();
}
include 'koneksi.php';

$sql = "SELECT dp.id, s.nama AS siswa, p.nama_pembayaran, p.jumlah, dp.tanggal 
        FROM detail_pembayaran dp
        JOIN siswa s ON dp.siswa_id = s.id
        JOIN pembayaran p ON dp.pembayaran_id = p.id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container h1 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pembayaran</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Siswa</th>
                <th>Nama Pembayaran</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['siswa']; ?></td>
                <td><?php echo $row['nama_pembayaran']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
