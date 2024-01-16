<?php
require_once 'connection.php';

if (isset($_POST['Ubah'])) {
    $id = $_POST['id'];
    $nama_customer = $_POST['nama_customer'];
    $nama_mobil = $_POST['nama_mobil'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $tarif = $_POST['tarif'];
    $denda = $_POST['denda'];

    $q = $conn->query("UPDATE penyewaan SET nama_customer = '$nama_customer', nama_mobil = '$nama_mobil', tanggal_peminjaman = '$tanggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian',
                    tarif = '$tarif', denda = '$denda' WHERE id = '$id';");   
    if ($q) {
        echo "<script>alert('Data berhasil diubah'); window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Data gagal diubah'); window.location.href='index.php'</script>";
    }
} else {
    header('Location: index.php');
}
?>
