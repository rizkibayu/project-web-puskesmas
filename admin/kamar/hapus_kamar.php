<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM kamar WHERE id_kamar = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM kamar WHERE id_kamar = '$_GET[id]'");
echo "<script>location='menu.php?halaman=data_kamar';</script>";
?>
