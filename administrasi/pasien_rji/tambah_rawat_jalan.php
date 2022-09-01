<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../dist/css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="../dist/js/solid.js" crossorigin="anonymous"></script>
    <script defer src="../dist/js/fontawesome.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<h2 class="text-center">Tambah Data Pasien Rawat Jalan</h2>
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Tanggal</th>
			<th class="text-center">Opsi</th>
		</tr>
	</thead>
		<?php $ambil = $koneksi->query("SELECT * FROM rekam WHERE tindakan='Rawat Jalan' AND status_pemberitahuan='Belum Dibayar'") ?>
		<?php while ($tampil = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $tampil['pasien'] ?></td>
			<td><?php echo $tampil['tanggal'] ?></td>
			<td class="text-center">
				<a href="menu.php?halaman=input_data_pasien_rj&id=<?php echo $tampil['id_rekam'] ?>" class="btn btn-warning">View</a>
			</td>
		</tr>
<?php } ?>
</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
<a href="menu.php?halaman=rawat_jalan" class="btn btn-warning">Kembali</a>