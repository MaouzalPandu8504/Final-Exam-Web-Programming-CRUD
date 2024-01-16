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
        <a href="menu_karyawan.php" class="close_button">
            <strong>
                X
            </strong>
        </a>
        <form method="POST" action="form_karyawan.php">
            <h2>TAMBAH DATA KARYAWAN</h2>
            <label for="nama_karyawan">Nama karyawan :</label>
            <input type='text' name="nama_karyawan" required>
            <br>
            <label for="alamat">Alamat :</label>
            <input type='text' name="alamat" required>
            <br>
            <label for="nomer_telepon">Nomer Telepon :</label>
            <input type='text' name="nomer_telepon" required>
            <br>
            <input type="submit" value="Tambah Customer">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama_karyawan = $_POST['nama_karyawan'];
                    $alamat = $_POST['alamat'];
                    $nomer_telepon = $_POST['nomer_telepon'];

                    $query = "INSERT INTO karyawan (nama_karyawan, alamat, nomer_telepon) VALUES ('$nama_karyawan', '$alamat', '$nomer_telepon')";
                    
                    if ($conn->query($query) === TRUE) {
                         echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='menu_karyawan.php'</script>";
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>
