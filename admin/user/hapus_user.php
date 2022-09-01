<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM user WHERE id_user = '$_GET[id]'");
echo "<script>location='menu.php?halaman=user';</script>";
?>
