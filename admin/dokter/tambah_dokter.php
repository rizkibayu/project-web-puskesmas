<?php include '../koneksi.php'; ?>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Dokter</label>
			<input type="text" class="form-control" name="nama_dokter">
		</div>
		<div class="form-group col-md-6">
			<label for="">No Telepon</label>
			<input type="number" class="form-control" name="no_tlp">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tanggal_lahir">
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Pendidikan</label>
			<select name="pendidikan" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="SMA">SMA</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
				<option value="S2">S2</option>
				<option value="S3">S3</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Poli</label>
			<select name="poli" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="gigi">Gigi</option>
				<option value="umum">Umum</option>
				<option value="anak">Anak</option>
				<option value="Gizi">Gizi</option>
			</select>
		</div>	
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Alamat</label>
			<textarea name="alamat_dokter" id="" rows="5" class="form-control"></textarea>
		</div>
		<div class="form-group col-md-6">
			<label for="">Jadwal</label>
			<select name="jadwal" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
				<option value="rabu">Rabu</option>
				<option value="kamis">Kamis</option>
				<option value="jumat">Jumat</option>
				<option value="sabtu">Sabtu</option>
				<option value="minggu">Minggu</option>
			</select>
			<br>
			<br>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="menu.php?halaman=dokter" class="btn btn-warning">Kembali</a></br>
		</div>
		</div>	
	</form>
<?php

if (isset($_POST['simpan'])) {
		$nama_dokter = $_POST['nama_dokter'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$pendidikan = $_POST['pendidikan'];
		$alamat_dokter = $_POST['alamat_dokter'];
		$no_tlp = $_POST['no_tlp'];
		$poli = $_POST['poli'];
		$jadwal = $_POST['jadwal'];

$koneksi->query("INSERT INTO dokter(nama_dokter, jenis_kelamin, tanggal_lahir, pendidikan, alamat_dokter, no_tlp, poli, jadwal) VALUES('$nama_dokter','$jenis_kelamin','$tanggal_lahir','$pendidikan','$alamat_dokter','$no_tlp','$poli','$jadwal')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=dokter'>";

} ?>



