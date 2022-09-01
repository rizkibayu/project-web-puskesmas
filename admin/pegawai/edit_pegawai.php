<?php include '../koneksi.php'; ?>


<?php $ambil = $koneksi->query("SELECT * FROM pegawai WHERE id_pegawai = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>
<h2 class="text-center">Tambah Data Pegawai</h2>
<br>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Nama Pegawai</label>
			<input type="text" class="form-control" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="alamat">Alamat Pegawai</label>
			<textarea name="alamat_pegawai" id="" rows="7" class="form-control"><?php echo $tampil['alamat_pegawai'] ?></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">No Telepon</label>
			<input type="number" class="form-control" name="no_tlp" value="<?php echo $tampil['no_tlp'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Level</label>
			<input type="text" class="form-control" name="level" value="<?php echo $tampil['level'] ?>">
			<br>
			<br>
			<button class="btn btn-primary" name="update">Update Data</button>
			<a href="menu.php?halaman=datapegawai" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
	</form>

	<?php if (isset($_POST['update'])) {
		$nama_pegawai = $_POST['nama_pegawai'];
		$alamat_pegawai = $_POST['nama_pegawai'];
		$no_tlp = $_POST['no_tlp'];
		$level = $_POST['level'];

		$koneksi->query("UPDATE pegawai SET nama_pegawai = '$nama_pegawai',alamat_pegawai = '$alamat_pegawai',no_tlp = '$no_tlp',level = '$level' WHERE id_pegawai = '$_GET[id]'");

echo "<div class='alert alert-succes text-center'>Data Berhasil Diubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=datapegawai'>";
	} ?>

