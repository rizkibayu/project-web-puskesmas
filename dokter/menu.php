<?php include 'header.php'; ?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<?php 
		if (isset($_GET['halaman'])) {
			if ($_GET['halaman'] == "user") {
			include 'user/user.php';
			} elseif ($_GET['halaman'] == "info") {
				include 'rekam/info.php';
			} elseif ($_GET['halaman'] == "dokter") {
				include 'dokter/dokter.php';
			} elseif ($_GET['halaman'] == "edit_rekam") {
				include 'rekam/edit_rekam.php';
			} elseif ($_GET['halaman'] == "rekam") {
				include 'rekam/rekam.php';
			} elseif ($_GET['halaman'] == "laporan") {
				include '../laporan/laporan.php';
			} 
		} else {
			include 'home.php';
		}


		?>
	</section>
</div>