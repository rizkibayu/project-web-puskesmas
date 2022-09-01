<?php include '../koneksi.php'; ?>


<h2 class="text-center">Edit Kamar</h2>
<?php $ambil = $koneksi->query("SELECT * FROM kamar WHERE id_kamar = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Nama Kamar</label>
			<input type="text" class="form-control" name="nama_kamar" value="<?php echo $tampil['nama_kamar'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Stok Kamar</label>
			<input type="text" class="form-control" name="stok_kasur" value="<?php echo $tampil['stok_kasur'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md">
			<label for="">Harga Kamar</label>
			<input type="text" class="form-control" name="harga_kamar" value="<?php echo $tampil['harga_kamar'] ?>">
			<br>
			<button class="btn btn-primary" name="update">Update</button>
	<a href="menu.php?halaman=data_kamar" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
	</form>
<?php

if (isset($_POST['update'])) {
		$nama_kamar = $_POST['nama_kamar'];
		$stok_kasur = $_POST['stok_kasur'];
		$harga_kamar = $_POST['harga_kamar'];
	
$koneksi->query("UPDATE kamar SET nama_kamar = '$nama_kamar', stok_kasur = '$stok_kasur', harga_kamar = '$harga_kamar' WHERE id_kamar = '$_GET[id]'");

	echo "<div class='alert alert-success text-center'>Data Berhasil Diupdate</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=data_kamar'>";
}
?>