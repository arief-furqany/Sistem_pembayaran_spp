<?php
include 'koneksi.php';

$siswa_id = $_POST['siswa_id'];
$pembayaran_id = $_POST['pembayaran_id'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO detail_pembayaran (siswa_id, pembayaran_id, tanggal) VALUES ('$siswa_id', '$pembayaran_id', '$tanggal')";
if (mysqli_query($conn, $sql)) {
    echo "Pembayaran berhasil dilakukan. <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
