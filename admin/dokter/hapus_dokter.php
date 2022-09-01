<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM dokter WHERE id_dokter = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM dokter WHERE id_dokter = '$_GET[id]'");
echo "<div class='alert alert-succes text-center'>Data Berhasil Hapus</div>";
echo "<script>location='menu.php?halaman=dokter';</script>";
?>