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
<h2 class="text-center">Data Kamar</h2>
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
			<tr>
			<th>No</th>
			<th>Nama Kamar</th>
			<th>Jumlah Kasur</th>
			<th>Harga</th>
			<th>Opsi</th>
		</tr>
		</thead>
			<?php $nomer=1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM kamar "); ?>
			<?php while ($tampil = $ambil->fetch_assoc()) { ?>
			<tr>
				<td class="text-center"><?php echo $nomer; ?></td>
				<td><?php echo $tampil['nama_kamar']; ?></td>
				<td><?php echo $tampil['stok_kasur']; ?></td>
				<td>Rp.<?php echo number_format($tampil['harga_kamar']); ?> / Hari</td>
				<td>
                    <a href="menu.php?halaman=edit_kamar&id=<?php echo $tampil['id_kamar'] ?>">
                        <i class="fa fa-wrench fa-lg"></i>
                    </a>
                    <a href="menu.php?halaman=hapus_kamar&id=<?php echo $tampil['id_kamar'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                        <i class="fa fa-trash fa-lg"></i>
                    </a>
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

<a href="menu.php?halaman=tambah_kamar" class="btn btn-primary">[+] Tambah Data</a>