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
        <a href="menu_mobil.php"><strong> > MOBIL</strong></a>
        <a class="active" href="menu_karyawan.php"><strong> > KARYAWAN</strong></a>
    </div>
    <div class="main-content">
        <a href="form_karyawan.php" class="button-add"><strong>+</strong></a>
        <table border="2" cellpadding="10 0 10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomer Telepon</th>
                <th colspan="2">Action</th>
            </tr>
        <?php
            $q = $conn -> query("SELECT * FROM karyawan");
            $no = 1;
            while ($dt = $q -> fetch_assoc()):
        ?>
            <tr>
                <td><strong><?= $no++ ?>.</strong></td>
                <td><?= $dt['nama_karyawan'] ?></td>
                <td><?= $dt['alamat']?></td>
                <td><?= $dt['nomer_telepon']?></td>
                <td><a href="updt_karyawan.php?id=<?= $dt['id_karyawan'] ?>"><strong>Ubah</strong></a>
                <td><strong><a style="color: red;" href="del_karyawan.php?id=<?= $dt['id_karyawan'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?')">Hapus</strong></a></td>
            </tr>
        <?php
            endwhile;
        ?>
        </table>
    </div>
</body>
</html>