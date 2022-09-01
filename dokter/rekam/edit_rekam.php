<?php 
include '../koneksi.php';
?>

<h2 class="text-center">Rekam Pasien</h2>
<?php $ambil = $koneksi->query("SELECT * FROM rekam WHERE id_rekam = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Tanggal Rekam</label>
		<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="" name="tanggal">
	</div>
	<div class="form-group">
		<label for="">Pasien</label>
		<input type="text" class="form-control" value="<?php echo $tampil['pasien'] ?>" readonly="" name="pasien">
	</div>
	<div class="form-group">
		<label for="">Pengguna</label>
		<input type="text" class="form-control" value="<?php echo $tampil['pengguna'] ?>" readonly="" name="pengguna">
	</div>
	<div class="form-group">
		<label for="">Poli</label>
		<input type="text" class="form-control" value="<?php echo $tampil['poli'] ?>" readonly="" name="poli">
	</div>
	<div class="form-group">
		<label for="">Tindakan Pemeriksaan</label>
			<select name="pemeriksaan" id="" class="form-control">
				<option>--Pilih Tindakan Pemeriksaan--</option>
				<?php $ambil = $koneksi->query("SELECT * FROM tindakan ORDER BY nama_tindakan ASC") ?>
				<?php while ($tindakan = $ambil->fetch_assoc()) {?>
					<option><?php echo $tindakan['nama_tindakan'] ?></option>
				<?php }?>
			</select>
		</div>  
	<div class="form-group">
		<label for="">Dokter</label>
			<select name="nama_dokter" id="" class="form-control">
				<option>--Pilih Dokter Pemeriksa--</option>
				<?php $ambil = $koneksi->query("SELECT * FROM dokter ORDER BY nama_dokter ASC") ?>
				<?php while ($nama_dokter = $ambil->fetch_assoc()) {?>
					<option <?php if ($nama_dokter['nama_dokter'] == $tampil['nama_dokter']) {
						echo "selected";
					}?>><?php echo $nama_dokter['nama_dokter'] ?></option>
				<?php }?>
			</select>
		</div> 
	<div class="form-group">
		<label for="diagnosa">Diagnosa</label>
		<textarea name="diagnosa" id="" rows="4" class="form-control"><?php echo $tampil['diagnosa'] ?></textarea>
	</div>
	<button class="btn btn-primary" name="proses">Tambah Resep</button><br>
	<br><?php if (isset($_POST['proses'])) {?>
		<div class="form-group col-md-4">
			<div class="form-group col-md-4">
			<select name="id_obat" class="form-control">
							<option value="">-- Pilih Obat --</option>
							<?php 
							$ambil = $koneksi->query("SELECT * FROM obat");
							while ($perobat = $ambil->fetch_assoc()) {
							?>
							<option value="<?php echo $perobat['id_obat'] ?>">
								<?php echo $perobat['id_obat'] ?> - 
								<?php echo $perobat['nama_obat'] ?>
							</option>
							<?php } ?>
						</select>
			<input type="number" class="form-control" name="qty_obat" value="<?php echo $tampil['qty_obat'] ?>">
		</div>
		<div class="form-group col-md-4">
			<select name="keterangan" id="" class="form-control">
				<label>Keterangan</label>
				<option value="1x1 Sehari"<?php if ($tampil['keterangan'] == "1x1 Sehari") {
					echo "selected";
				}?>>1x1 Sehari</option>
				<option value="2x1 Sehari"<?php if ($tampil['keterangan'] == "2x1 Sehari") {
					echo "selected";
				}?>>2x1 Sehari</option>
				<option value="3x1 Sehari"<?php if ($tampil['keterangan'] == "3x1 Sehari") {
					echo "selected";
				}?>>3x1 Sehari</option>
			</select>
		</div> 
		<div class="form-group col-md-4">
			<select name="tindakan" id="" class="form-control">
				<label>Tindakan</label>
				<option value="Rawat Jalan"<?php if ($tampil['tindakan'] == "Rawat Jalan") {
					echo "selected";
				}?>>Rawat Jalan</option>
				<option value="Rawat Inap"<?php if ($tampil['tindakan'] == "Rawat Inap") {
					echo "selected";
				}?>>Rawat Inap</option>
			</select>
		</div> 
	<?php }?>
	<br>
	<button class="btn btn-success" name="update">Update</button>
	<a href="menu.php?halaman=info" class="btn btn-warning">Kembali</a>
</form> 

<?php 
if (isset($_POST['update'])) {
	$pasien = $_POST['pasien'];
	$tanggal = $_POST['tanggal'];
	$nama_dokter = $_POST['nama_dokter'];
	$diagnosa = $_POST['diagnosa'];
	$id_obat = $_POST['id_obat'];
	$keterangan = $_POST['keterangan'];
	$poli = $_POST['poli'];
	$pengguna = $_POST['pengguna'];
	$tindakan = $_POST['tindakan'];
	$qty_obat = $_POST['qty_obat'];
	$pemeriksaan = $_POST['pemeriksaan'];

	$ambil = $koneksi->query("SELECT * FROM obat WHERE id_obat='$id_obat'");
			$arrayobat = $ambil->fetch_assoc();
			$id_obat = $arrayobat['id_obat'];
			$nama_obat = $arrayobat['nama_obat'];

	$koneksi->query("UPDATE rekam SET id_obat = '$id_obat',pasien = '$pasien',tanggal = '$tanggal',diagnosa = '$diagnosa',nama_dokter = '$nama_dokter',obat = '$nama_obat',status = 'Telah Di Periksa',keterangan = '$keterangan',poli = '$poli',pengguna = '$pengguna',tindakan = '$tindakan',qty_obat = '$qty_obat',pemeriksaan = '$pemeriksaan' WHERE id_rekam = '$_GET[id]'");

	echo "<div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=info'>";
}
?>
