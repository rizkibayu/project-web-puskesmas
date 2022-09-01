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
<h2 class="text-center"></h2>
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th> No </th>
			<th>Username</th>
			<th>Email</th>
			<th>Nama Lengkap</th>
			<th>No Telp</th>
			<th> Level </th>
			<th>Opsi</th>
		</tr>
	</thead>
		<?php $nomer=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM user "); ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $nomer; ?></td>
			<td><?php echo $tampil['username']; ?></td>
			<td><?php echo $tampil['email']; ?></td>
			<td><?php echo $tampil['nama_lengkap']; ?></td>
			<td><?php echo $tampil['no_telp']; ?></td>
			<td><?php echo $tampil['sebagai']; ?></td>
			<td><a href="menu.php?halaman=edit_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-info"> Edit Data</a>
				<a href="menu.php?halaman=hapus_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus User Ini')"> Hapus </a></td>
		</tr>
	<?php $nomer++; ?>
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
<a href="menu.php?halaman=tambah_user" class="btn btn-primary"> [+] Tambah Data </a>
