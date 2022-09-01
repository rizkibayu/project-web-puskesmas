<?php include '../koneksi.php'; ?>


<h2 class="text-center">Tambah Kamar</h2>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Nama Kamar</label>
			<input type="text" class="form-control" name="nama_kamar">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Stok Kamar</label>
			<input type="text" class="form-control" name="stok_kasur">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Harga Kamar</label>
			<input type="number" class="form-control" name="harga_kamar">
			<br>
			<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="menu.php?halaman=data_kamar" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
	</form>
<?php

if (isset($_POST['simpan'])) {
		$nama_kamar = $_POST['nama_kamar'];
		$stok_kasur = $_POST['stok_kasur'];
		$harga_kamar = $_POST['harga_kamar'];

$koneksi->query("INSERT INTO kamar(nama_kamar, stok_kasur, harga_kamar) VALUES('$nama_kamar','$stok_kasur','$harga_kamar')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=data_kamar'>";

} ?>
