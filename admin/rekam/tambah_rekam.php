<?php 
include '../koneksi.php';
?>

<h2 class="text-center">Rekam Data Pasien</h2>
<?php $ambil = $koneksi->query("SELECT * FROM pendaftaran WHERE id_kp = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Tanggal Rekam</label>
		<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="" name="tanggal">
	</div>
	<div class="form-group">
		<label for="">Pasien</label>
		<input type="text" class="form-control" value="<?php echo $tampil['nama'] ?>" readonly="" name="nama">
	</div>
	<div class="form-group">
		<label for="">Pengguna</label>
		<input type="text" class="form-control" value="<?php echo $tampil['pengguna'] ?>" readonly="" name="pengguna">
	</div>
	<div class="form-group">
		<label for="">Poli</label>
		<input type="text" class="form-control" value="<?php echo $tampil['poli'] ?>" readonly="" name="poli">
	</div>
	<button class="btn btn-success" name="rekam">Rekam</button>
	<a href="menu.php?halaman=pasien" class="btn btn-warning">Kembali</a>
</form> 

<?php 
if (isset($_POST['rekam'])) {
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$pengguna = $_POST['pengguna'];
	$poli = $_POST['poli'];

	$koneksi->query("INSERT INTO rekam(pasien, tanggal, pengguna, poli, status) VALUES ('$nama','$tanggal','$pengguna','$poli','Belum Di Periksa')");

	$koneksi->query("UPDATE pendaftaran SET status = 'Sudah Direkam Data' WHERE id_kp = '$_GET[id]'");

	echo "<div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=info'>";
}
?>
