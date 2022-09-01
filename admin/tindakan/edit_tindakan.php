<?php include '../koneksi.php'; ?>

<h2 class="text-center">Edit Tindakan</h2>
<?php $ambil = $koneksi->query("SELECT * FROM tindakan WHERE id_tindakan = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Tindakan</label>
			<input type="text" class="form-control" name="nama_tindakan" value="<?php echo $tampil['nama_tindakan'] ?>">
			<br>
			<button class="btn btn-primary" name="update">Update Data</button>
			<a href="menu.php?halaman=tindakan" class="btn btn-warning">Kembali</a></br>
		</div>
		</div>
	</form>
<?php

if (isset($_POST['update'])) {
		$nama_tindakan = $_POST['nama_tindakan'];

$koneksi->query("UPDATE tindakan SET nama_tindakan = '$nama_tindakan' WHERE id_tindakan = '$_GET[id]'");

	echo "<div class='alert alert-success text-center'>Data Berhasil Diupdate</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=tindakan'>";
}
?>