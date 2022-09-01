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
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead>
			<tr>
			<th>Id Dokter</th>
			<th>Nama Dokter</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Pendidikan</th>
			<th>Alamat</th>
			<th>No.Telepon</th>
			<th>Poli</th>
			<th>Jadwal</th>
		</tr>
		</thead>
			<?php $ambil = $koneksi->query("SELECT * FROM dokter "); ?>
			<?php while ($tampil = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $tampil['id_dokter']+12200050; ?></td>
				<td><?php echo $tampil['nama_dokter']; ?></td>
				<td><?php echo $tampil['jenis_kelamin']; ?></td>
				<td><?php echo $tampil['tanggal_lahir']; ?></td>
				<td><?php echo $tampil['pendidikan']; ?></td>
				<td><?php echo $tampil['alamat_dokter']; ?></td>
				<td><?php echo $tampil['no_tlp']; ?></td>
				<td><?php echo $tampil['poli']; ?></td>
				<td><?php echo $tampil['jadwal']; ?></td>
			</tr>
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