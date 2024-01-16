<?php
require_once 'connection.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM penyewaan WHERE id = '$id'");
  if ($q) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  }
} else {
  header('Location:index.php');
}