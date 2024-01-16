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
        <a class="active" href="index.php"><strong> > PENYEWAAN</strong></a>
        <a href="menu_mobil.php"><strong> > MOBIL</strong></a>
        <a href="menu_karyawan.php"><strong> > KARYAWAN</strong></a>
    </div>
    <div class="main-content">
        <a href="form_penyewaan.php" class="button-add"><strong>+</strong></a>
    <table border="1" cellpadding="10 0 10">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Nama Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Tarif</th>
            <th>Denda</th>
            <th colspan="2">Action</th>
        </tr>
    <?php
        $q = $conn -> query("SELECT * FROM penyewaan;");
        $no = 1;
        while ($dt = $q -> fetch_assoc()):
    ?>
        <tr>
            <td><strong><?= $no++ ?>.</strong></td>
            <td><?= $dt['nama_customer'] ?></td>
            <td><?= $dt['nama_mobil'] ?></td>
            <td><?= $dt['tanggal_peminjaman'] ?></td>
            <td><?= $dt['tanggal_pengembalian'] ?></td>
            <td><?= $dt['tarif'] ?></td>
            <td><?= $dt['denda'] ?></td>
            <td><a href="updt_penyewaan.php?id=<?= $dt['id'] ?>"><strong>Ubah</strong></a>
            <td><a style="color: red;" href="del_penyewaan.php?id=<?= $dt['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><strong>Hapus</strong></a></td>
        </tr>
    <?php
        endwhile;
    ?>
    </table>
    </div>
</body>
</html>