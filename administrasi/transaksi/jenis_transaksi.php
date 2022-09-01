<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<h2>Transaksi Pembayaran</h2>
  <br>
  <div class="btn-group">
    <a href="menu.php?halaman=rawatjalan"><button type="button" class="btn btn-success">Pembayaran Pasien Rawat Jalan</button></a>
    <br>
    <a href="menu.php?halaman=rawatinap"><button type="button" class="btn btn-warning">Pembayaran Pasien Rawat Inap</button></a>
    <a href="menu.php?halaman=rawatjalanbpjs"><button type="button" class="btn btn-info">Penanggungan Pembayaran Pasien Rawat Jalan BPJS</button></a>
      <a href="menu.php?halaman=rawatinapbpjs"><button type="button" class="btn btn-primary">Penanggungan Pembayaran Pasien Rawat Inap BPJS</button></a>
   </div>