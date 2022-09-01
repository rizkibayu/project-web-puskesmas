<?php 
include '../koneksi.php';
?>

<h2 class="text-center">Edit Data Pendaftaran</h2>
<?php $ambil = $koneksi->query("SELECT * FROM pendaftaran WHERE id_kp = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="ktp">No KTP</label>
			<input type="number" class="form-control" name="no_ktp" value="<?php echo $tampil['no_ktp'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="" class="form-control">
				<option value="Laki-laki" <?php if ($tampil['jenis_kelamin'] == "Laki-laki") {
					echo "selected";
				}?>>Laki-laki</option>
				<option value="Perempuan" <?php if ($tampil['jenis_kelamin'] == "Perempuan") {
					echo "selected";
				}?>>Perempuan</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="form">Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="tanggal">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $tampil['umur'] ?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="pekerjaan">Pekerjaan</label>
			<input type="text" class="form-control" name="pekerjaan" value="<?php echo $tampil['pekerjaan'] ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="agama">Agama</label>
			<select name="agama" id="" class="form-control">
				<option value="islam" <?php if ($tampil['agama'] == "islam") {
					echo "selected";
				}?>>Islam</option>
				<option value="hindu" <?php if ($tampil['agama'] == "hindu") {
					echo "selected";
				}?>>Hindu</option>
				<option value="kristen" <?php if ($tampil['agama'] == "kristen") {
					echo "selected";
				}?>>Kristen</option>
				<option value="budha" <?php if ($tampil['agama'] == "budha") {
					echo "selected";
				}?>>Budha</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="alamat">Alamat</label>
			<textarea name="alamat" id="" rows="11" class="form-control"><?php echo $tampil['alamat'] ?></textarea>
		</div>
		<div class="form-group col-md-6">
			<label for="tinggi_badan">Tinggi Badan</label>
			<input type="text" class="form-control" name="tinggi" value="<?php echo $tampil['tinggi_badan'] ?>">
			<label for="berat_badan">Berat Badan</label>
			<input type="text" class="form-control" name="berat" value="<?php echo $tampil['berat_badan'] ?>">
			<div class="form-group col-md-6">
			<label for="poli">Poli</label>
			<select name="poli" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="anak">Anak</option>
				<option value="gigi">Gigi</option>
				<option value="umum">Umum</option>
				<option value="Gizi">Gizi</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="tgl_dfr">Tanggal Daftar</label>
			<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_daftar">
		</div>
		<div class="form-group col-md-6">
			<label for="pengguna">Jenis Pengguna</label>
			<select name="pengguna" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="bpjs">Bpjs</option>
				<option value="umum">Umum</option>
			</select>
		</div>
		<br>
			<button class="btn btn-primary" name="update">Update Data</button>
			<a href="menu.php?halaman=pendaftaran" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
</form>

<?php 
if (isset($_POST['update'])) {
	$no_ktp = $_POST['no_ktp'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tanggal = $_POST['tanggal_lahir'];
	$pekerjaan= $_POST['pekerjaan'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$tinggi = $_POST['tinggi'];
	$berat = $_POST['berat'];
	$poli = $_POST['poli'];
	$pengguna = $_POST['pengguna'];
	$tgl_daftar = $_POST['tgl_daftar'];

$koneksi->query("UPDATE pendaftaran SET no_ktp = '$no_ktp', nama = '$nama', pekerjaan = '$pekerjaan', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', umur = '$tanggal', agama = '$agama', tinggi_badan = '$tinggi', berat_badan ='$berat', poli ='$poli', pengguna ='$pengguna', tgl_daftar ='$tgl_daftar' WHERE id_kp = '$_GET[id]'");

	echo "<div class='alert alert-succes text-center'>Data Berhasil Diubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=pendaftaran'>";

}
?>
