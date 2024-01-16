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
        <a href="index.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <?php
            require_once 'connection.php';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $q = $conn->query("SELECT * FROM penyewaan WHERE id = '$id'");
                foreach ($q as $dt) :
        ?>
            <form action="process_updt_penyewaan.php" method="POST">
                <h2>Halaman Ubah Data</h2>
                <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                <br>
                <label for="nama_customer">
                    <strong>> Nama Customer : </strong>
                </label>
                <input type="text" name="nama_customer" value="<?= $dt['nama_customer'] ?>">
                <br>
                <label for="nama_mobil">
                    <strong>
                        > Nama Mobil : 
                    </strong>
                </label>
                <input type="text" name="nama_mobil" value="<?= $dt['nama_mobil'] ?>">
                <br>
                <label for="tanggal_peminjaman">
                    <strong>
                        > Tanggal Peminjaman : 
                    </strong>
                </label>
                <input type="date" name="tanggal_peminjaman" value="<?= $dt['tanggal_peminjaman']?>">
                <br>
                <label for="tanggal_pengembalian">
                    <strong>
                        > Tanggal Pengembalian : 
                    </strong>
                </label>
                <input type="date" name="tanggal_pengembalian" value="<?= $dt['tanggal_pengembalian'] ?>">
                <br>
                <label for="tarif">
                    <strong>
                        > Tarif : 
                    </strong>
                </label>
                <input type="number" name="tarif" value="<?= $dt['tarif']?>">
                <br>
                <label for="denda">
                    <strong>
                        > Denda : 
                    </strong>
                </label>
                <input type="number" name="denda" value="<?= $dt['denda']?>">
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

