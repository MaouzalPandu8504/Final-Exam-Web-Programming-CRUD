<?php
require_once 'connection.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM karyawan WHERE id_karyawan = '$id'");
  if ($q) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='menu_karyawan.php'</script>";
  } else {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='menu_karyawan.php'</script>";
  }
} else {
  header('Location:menu_karyawan.php');
}