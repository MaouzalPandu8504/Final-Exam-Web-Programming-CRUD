<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="form-style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <a href="menu_karyawan.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <?php
            require_once 'connection.php';

            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $q = $conn->query("SELECT * FROM karyawan WHERE id_karyawan = '$id'");
            
            foreach ($q as $dt) :
        ?>
        
        <form action="process_updt_karyawan.php" method="post">
            <h2>Halaman Ubah Data</h2>
            <input type="hidden" name="id_karyawan" value="<?= $dt['id_karyawan'] ?>">
            <label for="nama_customer"><strong>> Nama karyawan : </strong></label>
            <input type="text" name="nama_karyawan" value="<?= $dt['nama_karyawan'] ?>">
            <br>
            <label for="alamat"><strong>> Alamat : </strong></label>
            <input type="text" name="alamat" value="<?= $dt['alamat'] ?>">
            <br>
            <label for="nomer_telepon"><strong>> Nomer Telepon : </strong></label>
            <input type="text" name="nomer_telepon" value="<?= $dt['nomer_telepon'] ?>">
            <input type="submit" name="Ubah" value="Ubah Data">
        </form>
    <?php
        endforeach;
    }
    ?>
    </div>
</body>
</html>

