<?php include '../koneksi.php'; ?>

<h2 class="text-center">Tambah Data Pegawai</h2>
<br>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Nama Pegawai</label>
			<input type="text" class="form-control" name="nama_pegawai" required="">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="alamat">Alamat Pegawai</label>
			<textarea name="alamat_pegawai" id="" rows="7" class="form-control" required=""></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">No Telepon</label>
			<input type="number" class="form-control" name="no_tlp" required="">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Level</label>
			<input type="text" class="form-control" name="level" required="">
			<br>
			<br>
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="menu.php?halaman=datapegawai" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
	</form>

	<?php if (isset($_POST['simpan'])) {
		$nama_pegawai = $_POST['nama_pegawai'];
		$alamat_pegawai = $_POST['nama_pegawai'];
		$no_tlp = $_POST['no_tlp'];
		$level = $_POST['level'];

		$koneksi->query("INSERT INTO pegawai(nama_pegawai, alamat_pegawai, no_tlp, level,status) VALUES ('$nama_pegawai','$alamat_pegawai','$no_tlp','$level','aktif')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=datapegawai'>";
	} ?>

