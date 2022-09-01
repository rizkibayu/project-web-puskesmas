<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM obat WHERE id_obat = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM obat WHERE id_obat = '$_GET[id]'");
echo "<script>location='menu.php?halaman=obat';</script>";
?>
