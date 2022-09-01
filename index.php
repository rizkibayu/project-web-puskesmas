<?php include 'koneksi.php'; 
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<br><br><br><br><br><br><br>
<body>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>


<div class="container mt-5">
	<div class="col-md-4 mx-auto text-center">
		<h3>PUSKESMAS LOGIN</h3>
		<br>
		<div class="col-auto text-center">
			<form role="form" action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" name="username" required="">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="password" required="">
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="masuk"> Login </button>
			</form>
			
		</div>
	</div>
</div>
</body>
<br>
<?php 
if (isset($_POST['masuk'])){
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	 $ambil = $koneksi->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$cocok = $ambil->num_rows;
	if($cocok > 0) {
		$data = $ambil->fetch_assoc();

	if ($data['sebagai'] == "Admin") {
			$_SESSION['username'] = "username";
			$_SESSION['sebagai'] = "Admin";
				echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
			echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
			echo "<meta http-equiv='refresh' content='1;url=admin/menu.php'>";
			echo "</div>";
	} elseif ($data['sebagai'] == "Dokter") {
			$_SESSION['username'] = "username";
			$_SESSION['sebagai'] = "Dokter";
				echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
			echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
			echo "<meta http-equiv='refresh' content='1;url=dokter/menu.php'>";
			echo "</div>";
	} elseif ($data['sebagai'] == "Apoteker") {
			$_SESSION['username'] = "username";
			$_SESSION['sebagai'] = "Apoteker";
				echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
			echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
			echo "<meta http-equiv='refresh' content='1;url=apoteker/menu.php'>";
			echo "</div>";
	}  elseif ($data['sebagai'] == "Administrasi") {
			$_SESSION['username'] = "username";
			$_SESSION['sebagai'] = "Administrasi";
				echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
			echo "<div class='alert alert-success text-center'> Login Berhasil </div>";
			echo "<meta http-equiv='refresh' content='1;url=administrasi/menu.php'>";
			echo "</div>";
	}
	 } else {
	 			echo "<div class='col-md-3 col-md-offset-3 mx-auto'>";
			echo "<div class='alert alert-danger text-center'> Login Gagal </div>";
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
			echo "</div>";

	 }
	 }
?>

</html>