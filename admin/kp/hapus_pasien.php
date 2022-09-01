<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM pendaftaran WHERE id_kp = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pendaftaran WHERE id_kp = '$_GET[id]'");
echo "<div class='alert alert-succes text-center'>Data Berhasil Hapus</div>";
echo "<script>location='menu.php?halaman=pendaftaran';</script>";
?>