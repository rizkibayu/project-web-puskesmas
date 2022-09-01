<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
   <br>
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
<br>
<h2 class="text-center">Laporan Pasien Rawat Jalan</h2>
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
			<tr>
			<th>No</th>
			<th>Nama Pasien</th>
			<th>Tanggal Bayar</th>
			<th>Pengguna</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		</thead>
			<?php $nomer=1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM pembayaran"); ?>
			<?php while ($tampil = $ambil->fetch_assoc()) { ?>
			<tr>
				<td class="text-center"><?php echo $nomer; ?></td>
				<td><?php echo $tampil['nama']; ?></td>
				<td><?php echo $tampil['tanggal_bayar']; ?></td>
				<td><?php echo $tampil['pengguna']; ?></td>
				<td><?php echo $tampil['status']; ?></td>
				<td>
                    <a href="menu.php?halaman=laporan_rj&id=<?php echo $tampil['id_pembayaran'] ?>" class="btn btn-primary">Laporan</a>
				</td>
			</tr>
			<?php $nomer++; ?>
	<?php }?>
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