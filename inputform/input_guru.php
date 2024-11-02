<!DOCTYPE html>
<html lang="en">
<style>
.container{
    background-color: white;
    width: 10px;
    padding: 20px;
    border: 2px;
    border-radius : 4px;

}



</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h3>Form Guru</h3>

        <form action="input_guru.php" method="post">

        <!-- nama -->
            <label for="nama"> Nama </label>
            <input type="text" id="nama" name="nama" required>

        <!-- nip -->
            <label for="NIP"> NIP </label>
            <input type="text" id="nama" name="nama" required>

        <!-- mapel -->
            <label for="nama"> Nama </label>
            <input type="text" id="nama" name="nama" required>

        <!-- element select jekel -->

            <label for="jenis_kelamin">jenis kelamin</label>
            <select name="jenis_kelamin" id="jenis-kelamin" required>
                <!-- <option value="">Pilih Jenis Kelamin : </option> -->
                <option value="laki-laki"> Laki-Laki </option>
                <option value="perempuan"> Perempuan </option>
            </select>


        <!-- submit button -->
            <button type="submit"> sumbit </button>

        </form>
</div >
</body>
</html>