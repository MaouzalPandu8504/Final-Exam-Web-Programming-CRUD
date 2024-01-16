<?php
    require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
    <?php
        if ($conn -> connect_error){
            echo "Connection Failed";
        }
    ?>
    <div class="side-bar">
        <p><strong>Rental Mobil</strong></p>
        <a href="index.php"><strong> > PENYEWAAN</strong></a>
        <a class="active" href="menu_mobil.php"><strong> > MOBIL</strong></a>
        <a href="menu_karyawan.php"><strong> > KARYAWAN</strong></a>
    </div>
    <div class="main-content">
        <a href="form_mobil.php" class="button-add"><strong>+</strong></a>
        <table border="2" cellpadding="10 0 10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Kapasitas Mesin</th>
                <th>Tipe</th>
                <th colspan="2">Action</th>
            </tr>
        <?php
            $q = $conn -> query(" SELECT * FROM mobil;");
            $no = 1;
            while ($dt = $q -> fetch_assoc()):
        ?>
            <tr>
                <td><strong><?= $no++ ?>.</strong></td>
                <td><?= $dt['nama_mobil'] ?></td>
                <td><?= $dt['merk']?></td>
                <td><?= $dt['kapasitas_mesin']?></td>
                <td><?= $dt['tipe']?></td>
                <td><a href="updt_mobil.php?id_mobil=<?= $dt['id_mobil'] ?>"><strong>Ubah</strong></a>
                <td><a style="color:red;" href="del_mobil.php?id=<?= $dt['id_mobil'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?')"><strong>Hapus</strong></a></td>
            </tr>
        <?php
            endwhile;
        ?>
        </table>
    </div>
</body>
</html>