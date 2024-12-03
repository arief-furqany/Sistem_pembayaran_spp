<?php
session_start();
include 'koneksi.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
    } else {
        echo "Login gagal!";
    }
} else {
    header('Location: login.php');
}
?>
