<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM tindakan WHERE id_tindakan = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tindakan WHERE id_tindakan = '$_GET[id]'");
echo "<script>location='menu.php?halaman=tindakan';</script>";
?>
