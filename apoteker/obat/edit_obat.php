<?php include '../koneksi.php'; ?>


<h2 class="text-center">Edit Obat</h2>
<?php $ambil = $koneksi->query("SELECT * FROM obat WHERE id_obat = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Obat</label>
			<input type="text" class="form-control" name="nama_obat" value="<?php echo $tampil['nama_obat'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="">Harga</label>
			<input type="number" class="form-control" name="harga" value="<?php echo $tampil['harga'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Type Obat</label>
			<select name="type" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="Kapsul" <?php if ($tampil['type'] == "Kapsul") {
					echo "selected";
				}?>>Kapsul</option>
				<option value="Tablet" <?php if ($tampil['type'] == "Tablet") {
					echo "selected";
				}?>>Tablet</option>
				<option value="Tablet" <?php if ($tampil['type'] == "Botol") {
					echo "selected";
				}?>>Botol</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Tanggal Kadaluarsa</label>
			<input type="date" class="form-control" name="kadaluarsa" value="<?php echo date('Y-m-d'); ?>">
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Keterangan</label>
			<textarea name="keterangan" id="" rows="4" class="form-control"><?php echo $tampil['keterangan'] ?></textarea>
		</div>
		<div class="form-group col-md-6">
			<label for="">Qty</label>
			<input type="number" class="form-control" name="stok_obat" value="<?php echo $tampil['stok_obat'] ?>">
			<br>
			<button class="btn btn-primary" name="update">Update</button>
			<a href="menu.php?halaman=obat" class="btn btn-warning">Kembali</a></br>
		</div>
		</div>
	</form>
<?php

if (isset($_POST['update'])) {
		$nama_obat = $_POST['nama_obat'];
		$stok_obat = $_POST['stok_obat'];
		$type = $_POST['type'];
		$keterangan = $_POST['keterangan'];
		$kadaluarsa = $_POST['kadaluarsa'];
		$harga = $_POST['harga'];

$koneksi->query("UPDATE obat SET nama_obat = '$nama_obat', stok_obat = '$stok_obat', type = '$type', keterangan = '$keterangan', kadaluarsa = '$kadaluarsa', harga = '$harga' WHERE id_obat = '$_GET[id]'");

	echo "<div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=obat'>";
}
?>