<?php
require_once 'connection.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM mobil WHERE id_mobil = '$id'");
  if ($q) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='menu_mobil.php'</script>";
  } else {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='menu_mobil.php'</script>";
  }
} else {
  header('Location:menu_mobil.php');
}