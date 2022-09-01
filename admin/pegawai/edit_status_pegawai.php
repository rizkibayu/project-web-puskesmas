<?php include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("UPDATE pegawai SET status = 'nonaktif' WHERE id_pegawai = '$_GET[id]' ");

echo "<script>alert('Status Pegawai Telah Dinonaktifkan')</script>";
echo "<script>location='menu.php?halaman=datapegawai';</script>";
?>

