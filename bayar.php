<!DOCTYPE html>
<html>
<head>
    <title>Bayar SPP</title>
</head>
<body>
    <h1>Bayar SPP</h1>
    <form action="proses_bayar.php" method="post">
        <label>Nama Siswa:</label><br>
        <select name="siswa_id">
            <?php
            include 'koneksi.php';
            $siswaQuery = "SELECT * FROM siswa";
            $siswaResult = mysqli_query($conn, $siswaQuery);
            while ($siswa = mysqli_fetch_assoc($siswaResult)) {
                echo "<option value='{$siswa['id']}'>{$siswa['nama']}</option>";
            }
            ?>
        </select><br>
        <label>Nama Pembayaran:</label><br>
        <select name="pembayaran_id">
            <?php
            $pembayaranQuery = "SELECT * FROM pembayaran";
            $pembayaranResult = mysqli_query($conn, $pembayaranQuery);
            while ($pembayaran = mysqli_fetch_assoc($pembayaranResult)) {
                echo "<option value='{$pembayaran['id']}'>{$pembayaran['nama_pembayaran']}</option>";
            }
            ?>
        </select><br>
        <label>Tanggal:</label><br>
        <input type="date" name="tanggal"><br><br>
        <input type="submit" value="Bayar">
    </form>
</body>
</html>
