<?php include '../koneksi.php'; 

$ambil = $koneksi->query("SELECT * FROM pegawai WHERE id_pegawai = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pegawai WHERE id_pegawai = '$_GET[id]'");
echo "<div class='alert alert-succes text-center'>Data Berhasil Dihapus</div>";
echo "<script>location='menu.php?halaman=datapegawai';</script>";
?>