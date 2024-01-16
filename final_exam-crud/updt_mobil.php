<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="form-style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <a href="menu_mobil.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <?php
            require_once 'connection.php';

            if (isset($_GET['id_mobil'])) {
            $id = $_GET['id_mobil'];
            $q = $conn->query("SELECT * FROM mobil WHERE id_mobil = '$id'");
            
            foreach ($q as $dt) :
        ?>
        
        <form action="process_updt_mobil.php" method="post">
            <h2>Halaman Ubah Data</h2>
            <input type="hidden" name="id_mobil" value="<?= $dt['id_mobil'] ?>">
            <label for=""><strong>> Nama :</strong></label> 
            <input type="text" name="nama_mobil" value="<?= $dt['nama_mobil'] ?>">
            <br>
            <label for="merk"><strong>> Merk :</strong></label>
            <input type="text" name="merk" value="<?= $dt['merk'] ?>">
            <br>
            <label for="kapasitas mesin"><strong>> Kapasitas Mesin :</strong></label>
            <input type="text" name="kapasitas mesin" value="<?= $dt['kapasitas_mesin']?>">
            <br>
            <label for="tipe"><strong> Tipe :</strong></label>
            <input type="text" name="tipe" value="<?= $dt['tipe']?>">
            <br>
            <input type="submit" name="Ubah" value="Ubah Data">
        </form>
    <?php
        endforeach;
    }
    ?>
    </div>
</body>
</html>

