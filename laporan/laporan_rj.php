<?php include '../koneksi.php';

$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembayaran = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

if (!isset($id)) {
	echo "<script>alert('Belum Memilih Data')</script>";
	echo "<script>location='menu.php?halaman=info';</script>;";
}
?>
<a href="menu.php?halaman=pembayaranjalan" class="btn btn-warning">< Kembali</a>
<h2 class="text-center">Detail Laporan Transaksi Pasien</h2>
<br>
<br>
<table 	class="table table-borderedless col-md-5">
	<tr>
		<td> Id Pembayaran</td>
		<td>:</td>
		<td><?php echo $tampil['id_pembayaran'] ?></td>
	</tr>
	<tr>
		<td>Nama Pasien </td>
		<td>:</td>
		<td><?php echo $tampil['nama'] ?></td>
	</tr>
	<tr>
		<td> Jenis Pengguna </td>
		<td>:</td>
		<td><?php echo $tampil['pengguna'] ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php echo $tampil['status'] ?></td>
	</tr>
	<tr>
		<td>Tanggal Bayar</td>
		<td>:</td>
		<td><?php echo $tampil['tanggal_bayar'] ?></td>
	</tr>
	
	</tr>
</table>
<br>
<label><strong>Keterangan Obat</strong></label>
<table class="table table-bordered">
	<tr>
		<th>Nama Obat</th>
		<th class="text-center">Jumlah Obat</th>
		<th class="text-right">Harga</th>
	</tr>
	<tr>
		<td><?php echo $tampil['obat'] ?></th>
		<td class="text-center"><?php echo $tampil['jml_obat'] ?></th>
		<td class="text-right">Rp.<?php echo number_format($tampil['harga']) ?></td>
	</tr>
</table>
<br>
<label><strong>Keterangan Pemeriksaan</strong></label>
<table class="table table-bordered">
	<tr>
		<th>Nama Pemeriksaan</th>
		<th class="text-right">Harga</th>
	</tr>
	<tr>
		<td><?php echo $tampil['tindakan'] ?></th>
		<td class="text-right">Rp.<?php echo number_format($tampil['tarif']) ?></th>
	</tr>
</table>
<br>
<br>
<table class="table table-bordered">
	<tr>
		<th class="text-center">Total Pembayaran</th>
		<th class="text-right">Rp.<?php echo number_format($tampil['total']) ?></th>
	</tr>
</table>