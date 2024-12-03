<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
        .container a {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .admin {
            display: <?php echo $user['role'] == 'admin' ? 'block' : 'none'; ?>;
        }
        .user {
            display: <?php echo $user['role'] == 'user' ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <?php echo $user['email']; ?></h1>
        <div class="admin">
            <h2>Admin Dashboard</h2>
            <a href="view_pembayaran.php">Lihat Data Pembayaran</a>
        </div>
        <div class="user">
            <h2>Bayar SPP</h2>
            <a href="bayar.php">Bayar SPP</a>
        </div>
    </div>
</body>
</html>
