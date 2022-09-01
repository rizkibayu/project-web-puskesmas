<?php include '../koneksi.php';

$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM obat JOIN rekam WHERE id_rekam = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

if (!isset($id)) {
	echo "<script>alert('Belum Memilih Data')</script>";
	echo "<script>location='menu.php?halaman=info';</script>;";
}
?>

<h2 class="text-center">Detail Laporan</h2>
<div class="row">
			<div class="col-md-4">
				<h3>Pasien</h3>
				<br>
				<td>Id Rekam</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<td><?php echo $tampil['id_rekam'] ?></td>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h3>Pemeriksaan</h3>
				<br>
				<td>Jenis Rawat</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<td><?php echo $tampil['tindakan'] ?></td>
				<br>
			<br>
			</div>
			<br>
			<br>
			<div class="col-md-4">
				<td>Nama Pasien</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<td><?php echo $tampil['pasien'] ?></td>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<td>Poli Klinik</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<td><?php echo $tampil['poli'] ?></td>
			</div>
			<br>
			<br>
			<div class="col-md-4">
				<td>Tanggal Rekam</td>
				<td>&nbsp;:</td>
				<td><?php echo $tampil['tanggal'] ?></td>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<td>Jenis Pengguna</td>
				<td>:</td>
				<td><?php echo $tampil['pengguna'] ?></td>
			</div>
</div>
<br>
<label for=""><strong>Keterangan Pemeriksaan</strong></label>
<br>
<br>
<table class="table table-bordered">
<tr>
	<th>Nama Dokter</th>
	<th>Jenis Pemeriksaan</th>
	<th>Diagnosa</th>
</tr>
<tr>
	<td><?php echo $tampil['nama_dokter'] ?></td>
	<td><?php echo $tampil['pemeriksaan'] ?></td>
	<td><?php echo $tampil['diagnosa'] ?></td>
</tr>	
</table>
<label for=""><strong>Keterangan Obat</strong></label>
<br>
<br>
<table class="table table-bordered">
<tr>
	<th>Obat</th>
	<th>Jumlah Obat</th>
	<th>Keterangan Pemakaian</th>
</tr>
<tr>
	<td><?php echo $tampil['obat'] ?></td>
	<td><?php echo $tampil['qty_obat'] ?></td>
	<td><?php echo $tampil['keterangan'] ?></td>
</tr>	
</table>
