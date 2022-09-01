<?php include '../koneksi.php'; ?>

<h2 class="text-center">Edit Data Dokter</h2>
<?php $ambil = $koneksi->query("SELECT * FROM dokter WHERE id_dokter = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Nama Dokter</label>
			<input type="text" class="form-control" name="nama_dokter" value="<?php echo $tampil['nama_dokter'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="">No Telepon</label>
			<input type="number" class="form-control" name="no_tlp" value="<?php echo $tampil['no_tlp'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="Laki-laki" <?php if ($tampil['jenis_kelamin'] == "Laki-laki") {
					echo "selected";
				}?>>Laki-laki</option>
				<option value="Perempuan" <?php if ($tampil['jenis_kelamin'] == "Perempuan") {
					echo "selected";
				}?>>Perempuan</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tanggal_lahir"  value="<?php echo $tampil['tanggal_lahir'] ?>">
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Pendidikan</label>
			<select name="pendidikan" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="SMA"<?php if ($tampil['pendidikan'] == "SMA") {
					echo "selected";
				}?>>SMA</option>
				<option value="D3"<?php if ($tampil['pendidikan'] == "D3") {
					echo "selected";
				}?>>D3</option>
				<option value="S1" <?php if ($tampil['pendidikan'] == "S1") {
					echo "selected";
				}?>>S1</option>
				<option value="S2" <?php if ($tampil['pendidikan'] == "S2") {
					echo "selected";
				}?>>S2</option>
				<option value="S3" <?php if ($tampil['pendidikan'] == "S3") {
					echo "selected";
				}?>>S3</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="">Poli</label>
			<select name="poli" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="gigi" <?php if ($tampil['poli'] == "gigi") {
					echo "selected";
				}?>>Gigi</option>
				<option value="umum" <?php if ($tampil['poli'] == "umum") {
					echo "selected";
				}?>>Umum</option>
				<option value="anak" <?php if ($tampil['poli'] == "anak") {
					echo "selected";
				}?>>Anak</option>
				<option value="gizi" <?php if ($tampil['poli'] == "gizi") {
					echo "selected";
				}?>>Gizi</option>
			</select>
		</div>	
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Alamat</label>
			<textarea name="alamat_dokter" id="" rows="5" class="form-control"><?php echo $tampil['alamat_dokter'] ?></textarea>
		</div>
		<div class="form-group col-md-6">
			<label for="">Jadwal</label>
			<select name="jadwal" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="senin" <?php if ($tampil['jadwal'] == "senin") {
					echo "selected";
				}?>>Senin</option>
				<option value="selasa" <?php if ($tampil['jadwal'] == "selasa") {
					echo "selected";
				}?>>Selasa</option>
				<option value="rabu" <?php if ($tampil['jadwal'] == "rabu") {
					echo "selected";
				}?>>Rabu</option>
				<option value="kamis"<?php if ($tampil['jadwal'] == "kamis") {
					echo "selected";
				}?>>Kamis</option>
				<option value="jumat" <?php if ($tampil['jadwal'] == "jumat") {
					echo "selected";
				}?>>Jumat</option>
				<option value="sabtu" <?php if ($tampil['jadwal'] == "sabtu") {
					echo "selected";
				}?>>Sabtu</option>
				<option value="minggu" <?php if ($tampil['jadwal'] == "minggu") {
					echo "selected";
				}?>>Minggu</option>
			</select>
			<br>
			<br>
			<button class="btn btn-primary" name="update">Update Data</button>
			<a href="menu.php?halaman=dokter" class="btn btn-warning">Kembali</a></br>
		</div>
		</div>	
	</form>

<?php 
if (isset($_POST['update'])) {
	$nama_dokter = $_POST['nama_dokter'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$pendidikan = $_POST['pendidikan'];
		$alamat_dokter = $_POST['alamat_dokter'];
		$no_tlp = $_POST['no_tlp'];
		$poli = $_POST['poli'];
		$jadwal = $_POST['jadwal'];

	$koneksi->query("UPDATE dokter SET nama_dokter = '$nama_dokter', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir', pendidikan = '$pendidikan', alamat_dokter = '$alamat_dokter', no_tlp = '$no_tlp', poli = '$poli', jadwal = '$jadwal' WHERE id_dokter = '$_GET[id]'");

echo "<div class='alert alert-succes text-center'>Data Berhasil Diubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=dokter'>";

}
?>