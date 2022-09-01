<?php include 'header.php'; ?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<?php 
		if (isset($_GET['halaman'])) {
			if ($_GET['halaman'] == "obat") {
				include 'obat/obat.php';
			}  elseif ($_GET['halaman'] == "tambah_obat") {
				include 'obat/tambah_obat.php';
			} elseif ($_GET['halaman'] == "edit_obat") {
				include 'obat/edit_obat.php';
			} elseif ($_GET['halaman'] == "hapus_obat") {
				include 'obat/hapus_obat.php';
			} elseif ($_GET['halaman'] == "buat_resep") {
				include 'rekam/buat_resep.php';
			} elseif ($_GET['halaman'] == "info") {
				include 'rekam/info.php';
			} elseif ($_GET['halaman'] == "laporan") {
				include '../laporan/laporan.php';
			} 
		} else {
			include 'home.php';
		}


		?>
	</section>
</div>