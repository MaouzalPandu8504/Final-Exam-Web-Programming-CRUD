<?php
    require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
    <link rel="stylesheet" href="form-style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="container">
        <a href="index.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <form method="POST" action="form_penyewaan.php">
            <h2>TAMBAH DATA PENYEWAAN</h2>

            <label for="nama_customer">
                <strong>> Nama Customer : </strong>
            </label>
            <input type="text" name="nama_customer" required>
            <br>
            
            <label for="nama_mobil">
                <strong>> Mobil : </strong>
            </label>
            <input type="text" name="nama_mobil" required>
            <br>
            
            <label for="tanggal_peminjaman">
                <strong>> Tanggal Peminjaman : </strong>
            </label>
            <input type="date" name="tanggal_peminjaman" required>
            <br>
            <label for="tanggal_pengembalian">
                <strong>> Tanggal Pengembalian : </strong>
            </label>
            <input type="date" name="tanggal_pengembalian">
            <br>
            <label for="tarif">
                <strong>> Tarif : </strong>
            </label>
            <input type="number" name="tarif" required>
            <br>
            <label for="denda">
                <strong>> Denda : </strong>
            </label>
            <input type="number" name="denda">
            <br>
            <input type="submit" value="Catat Penyewaan">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama_customer = $_POST['nama_customer'];
                    $nama_mobil = $_POST['nama_mobil'];
                    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                    $tarif = $_POST['tarif'];
                    $denda = $_POST['denda'];
                    $query = "INSERT INTO penyewaan (nama_customer, nama_mobil, tanggal_peminjaman, tanggal_pengembalian, tarif, denda) 
                              VALUES ('$nama_customer', '$nama_mobil', '$tanggal_peminjaman', '$tanggal_pengembalian', '$tarif', '$denda');";
                    if ($conn->query($query) === TRUE) {
                        echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='index.php'</script>";
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
