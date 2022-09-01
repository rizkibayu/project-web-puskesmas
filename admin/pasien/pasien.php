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
<h2 class="text-center">Data Pasien</h2>
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No KTP</th>
			<th>Nama</th>
			<th>Tanggal Daftar</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>Agama</th>
			<th>Tinggi Badan</th>
			<th>Berat Badan</th>
			<th>Jenis Pasien</th>
			<th>Poli Tujuan</th>
			<th class="text-center">Opsi</th>
		</tr>
	</thead>
		<?php $ambil = $koneksi->query("SELECT * FROM pendaftaran WHERE status ='' ") ?>
		<?php while ($tampil = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $tampil['no_ktp'] ?></td>
			<td><?php echo $tampil['nama'] ?></td>
			<td><?php echo $tampil['tgl_daftar'] ?></td>
			<td><?php echo $tampil['pekerjaan'] ?></td>
			<td><?php echo $tampil['alamat'] ?></td>
			<td><?php echo $tampil['jenis_kelamin'] ?></td>
			<td><?php echo floor((time() - strtotime($tampil['umur'])) /(3600*24*365)); ?></td>
			<td><?php echo $tampil['agama'] ?></td>
			<td><?php echo $tampil['tinggi_badan'] ?></td>
			<td><?php echo $tampil['berat_badan'] ?></td>
			<td><?php echo $tampil['jenis_kelamin'] ?></td>
			<td><?php echo $tampil['poli'] ?></td>
			<td class="text-center">
				<a href="menu.php?halaman=tambah_rekam&id=<?php echo $tampil['id_kp'] ?>" class="btn btn-success">Rekam</a>
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