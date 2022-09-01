<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM rawat_jalan WHERE id_rj = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM rawat_jalan WHERE id_rj = '$_GET[id]'");
echo "<script>location='menu.php?halaman=rawat_jalan';</script>";
?>
