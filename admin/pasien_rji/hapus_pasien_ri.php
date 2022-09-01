<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM rawat_inap WHERE id_ri = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM rawat_inap WHERE id_ri = '$_GET[id]'");
echo "<script>location='menu.php?halaman=rawat_inap';</script>";
?>
