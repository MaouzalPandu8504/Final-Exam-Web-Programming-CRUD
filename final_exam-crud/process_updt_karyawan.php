<?php
require_once 'connection.php';

if (isset($_POST['Ubah'])) {
    $id = $_POST['id_karyawan'];
    $nama = $_POST['nama_karyawan'];
    $alamat = $_POST['alamat'];
    $no = $_POST['nomer_telepon'];

    $q = $conn->query("UPDATE karyawan SET nama_karyawan = '$nama', alamat = '$alamat', nomer_telepon = '$no' WHERE id_karyawan = '$id'");
    
    if ($q) {
        echo "<script>alert('Data berhasil diubah'); window.location.href='menu_karyawan.php'</script>";
    } else {
        echo "<script>alert('Data gagal diubah'); window.location.href='menu_karyawan.php'</script>";
    }
} else {
    header('Location: menu_karyawan.php');
}
?>
