<?php
    require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
    <link rel="stylesheet" href="form-style.css?v=<?php echo time()?>">
</head>
<body>
    <div class="container">
        <a href="menu_mobil.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <form method="POST" action="form_mobil.php">
            <h2>TAMBAH DATA MOBIL</h2>
            <label for="nama_mobil"><strong>> Nama Mobil :<strong></label>
            <input type='text' name="nama_mobil" required>
            <br>
            <label for="merk"><strong>> Merk Mobil :</strong></label>
            <input type='text' name="merk" required>
            <br>
            <label for="kapasitas_mesin"><strong>> Kapasitas Mesin :</strong></label>
            <input type='text' name="kapasitas_mesin" required>
            <br>
            <label for="tipe"><strong>> Tipe Mobil :</strong></label>
            <input type='text' name="tipe" required>
            <br>
            <input type="submit" value="Tambah Mobil">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id_mobil = $_POST['id_mobil'];
                    $nama_mobil = $_POST['nama_mobil'];
                    $merk = $_POST['merk'];
                    $kapasitas_mesin = $_POST['kapasitas_mesin'];
                    $tipe = $_POST['tipe'];

                    $query = "INSERT INTO mobil (nama_mobil, merk, kapasitas_mesin, tipe) VALUES ('$nama_mobil', '$merk', '$kapasitas_mesin', '$tipe')";
                    if ($conn->query($query) === TRUE) {
                        echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='menu_mobil.php'</script>";
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
