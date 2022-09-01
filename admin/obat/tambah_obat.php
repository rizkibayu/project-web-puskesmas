<?php include '../koneksi.php'; ?>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Obat</label>
			<input type="text" class="form-control" name="nama_obat">
		</div>
		<div class="form-group col-md-6">
			<label for="">Qty</label>
			<input type="number" class="form-control" name="stok_obat">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Type Obat</label>
			<select name="type" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="Kapsul">Kapsul</option>
				<option value="Tablet">Tablet</option>
				<option value="Botol">Botol</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Tanggal Kadaluarsa</label>
			<input type="date" class="form-control" name="kadaluarsa">
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Keterangan</label>
			<textarea name="keterangan" id="" rows="4" class="form-control"></textarea>
			</div>
		<div class="form-group col-md-6">
			<label for="">Harga</label>
			<input type="number" class="form-control" name="harga">
			<br>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="menu.php?halaman=dokter" class="btn btn-warning">Kembali</a></br>
		</div>	
		<div>
			
		</div>
	</div>
	</form>
<?php

if (isset($_POST['simpan'])) {
		$nama_obat = $_POST['nama_obat'];
		$stok_obat = $_POST['stok_obat'];
		$type = $_POST['type'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		$kadaluarsa = $_POST['kadaluarsa'];

$koneksi->query("INSERT INTO obat(nama_obat, stok_obat, type, harga, keterangan, kadaluarsa) VALUES('$nama_obat','$stok_obat','$type','$harga','$keterangan','$kadaluarsa')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=obat'>";

} ?>
