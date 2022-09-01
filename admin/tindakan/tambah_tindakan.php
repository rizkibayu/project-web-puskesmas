<?php include '../koneksi.php'; ?>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Tindakan</label>
			<input type="text" class="form-control" name="nama_tindakan">
			<br>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="menu.php?halaman=tindakan" class="btn btn-warning">Kembali</a></br>
		</div>
		</div>
	</form>
<?php

if (isset($_POST['simpan'])) {
		$nama_tindakan = $_POST['nama_tindakan'];
$koneksi->query("INSERT INTO tindakan(nama_tindakan) VALUES('$nama_tindakan')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=tindakan'>";

} ?>
