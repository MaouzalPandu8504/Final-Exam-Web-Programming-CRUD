<?php
require_once 'connection.php';

if (isset($_POST['Ubah'])) {
    $id = $_POST['id_mobil'];
    $nama_mobil = $_POST['nama_mobil'];
    $merk = $_POST['merk'];
    $kapasitas_mesin = $_POST['kapasitas_mesin'];
    $tipe = $_POST['tipe'];

    $q = $conn->query("UPDATE mobil SET nama_mobil = '$nama_mobil', merk = '$merk', kapasitas_mesin = '$kapasitas_mesin', tipe = '$tipe' WHERE id_mobil = '$id';");
    
    if ($q) {
        echo "<script>alert('Data produk berhasil diubah'); window.location.href='menu_mobil.php'</script>";
    } else {
        echo "<script>alert('Data produk gagal diubah'); window.location.href='menu_mobil.php'</script>";
    }
} else {
    header('Location: menu_karyawan.php');
}
?>
