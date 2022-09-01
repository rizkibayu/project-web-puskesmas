<?php include '../koneksi.php'; ?>

<h2 class="text-center">Tambah Data Pendaftaran</h2>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="ktp">No KTP</label>
			<input type="number" class="form-control" name="no_ktp">
		</div>
		<div class="form-group col-md-6">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="form">Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group col-md-6">
			<label for="tanggal">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tanggal_lahir">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="pekerjaan">Pekerjaan</label>
			<input type="text" class="form-control" name="pekerjaan">
		</div>
		<div class="form-group col-md-6">
			<label for="agama">Agama</label>
			<select name="agama" id="" class="form-control">
				<option value="">--Select--</option>
				<option value="islam">Islam</option>
				<option value="hindu">Hindu</option>
				<option value="kristen">Kristen</option>
				<option value="budha">Budha</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="alamat">Alamat</label>
			<textarea name="alamat" id="" rows="14" class="form-control"></textarea>
		</div>
		<div class="form-group col-md-6">
			<label for="tinggi_badan">Tinggi Badan</label>
			<input type="number" class="form-control" name="tinggi">
			<label for="berat_badan">Berat Badan</label>
			<input type="number" class="form-control" name="berat">
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
			<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="" name="tgl_daftar">
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
			<button class="btn btn-primary" name="simpan">Simpan</button>
			<a href="menu.php?halaman=pendaftaran" class="btn btn-warning">Kembali</a></br>
		</div>
	</div>
</form>

<?php 

if (isset($_POST['simpan'])) {
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

$koneksi->query("INSERT INTO pendaftaran(no_ktp, nama, pekerjaan, alamat, jenis_kelamin, umur, agama, tinggi_badan, berat_badan, poli, pengguna, tgl_daftar) VALUES('$no_ktp','$nama','$pekerjaan','$alamat','$jenis_kelamin','$tanggal','$agama','$tinggi','$berat','$poli','$pengguna','$tgl_daftar')");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=pendaftaran'>";
} ?>

