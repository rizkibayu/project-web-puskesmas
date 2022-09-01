<?php include '../koneksi.php'; 
?>

<h2 class="text-center">Edit Data User</h2>
<?php $ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$_GET[id]'"); 
 $tampil = $ambil->fetch_assoc();
?>
<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="Nama">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $tampil['nama_lengkap'] ?>">	
		</div>
		<div class="form-group">
			<label for="Email">Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $tampil['email'] ?>">	
		</div>
		<div class="form-group">
			<label for="No">No Telp</label>
			<input type="number" class="form-control" name="no_telp" value="<?php echo $tampil['no_telp'] ?>">
		</div>
		<div class="form-group">
			<label for="Username">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $tampil['username'] ?>">
		</div>
		<div class="form-group">
			<label for="Password">Password</label>
			<input type="password" class="form-control" name="password" value="<?php echo $tampil['password'] ?>">
		</div>
		<div class="form-group">
			<label for="jenis_user">Level</label>
			<select class="form-control" id="jenis_user" name="jenis_user">
			<option value="Admin" <?php if ($tampil['sebagai'] == "Admin") {
				echo "selected";
			} ?>>Admin</option>
			<option value="Dokter" <?php if ($tampil['sebagai'] == "Dokter") {
				echo "selected";
			} ?>>Dokter</option>
			<option value="Apoteker" <?php if ($tampil['sebagai'] == "Apoteker") {
				echo "selected";
			} ?>>Apoteker</option>
			<option value="Administrasi" <?php if ($tampil['sebagai'] == "Administrasi") {
				echo "selected";
			} ?>>Administrasi</option>
		   </select>
		</div>
		<button class="btn btn-primary" name="simpan">Simpan</button>
		<a href="" class="btn btn-warning">Kembali</a>

</form>
<?php 
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jenis_user = $_POST['jenis_user'];

$koneksi->query("UPDATE user SET nama_lengkap = '$nama', email = '$email', no_telp = '$no_telp', username = '$username', password = '$password', sebagai = '$jenis_user' WHERE id_user = '$_GET[id]'");

	echo "<div class='alert alert-succes text-center'>Data Berhasil Diubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=user'>";

}
?>
