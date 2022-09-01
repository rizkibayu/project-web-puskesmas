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
<h2 class="text-center">Data Obat</h2>	
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
			<th>No</th>
			<th>Nama Obat</th>
			<th>Stok Obat</th>
			<th>Type</th>
			<th>Kadaluarsa</th>
			<th>Harga</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		</thead>
			<?php $nomer=1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM obat "); ?>
			<?php while ($tampil = $ambil->fetch_assoc()) { ?>
			<tr>
				<td class="text-center"><?php echo $nomer; ?></td>
				<td><?php echo $tampil['nama_obat']; ?></td>
				<td><?php echo $tampil['stok_obat']; ?></td>
				<td><?php echo $tampil['type']; ?></td>
				<td><?php echo $tampil['kadaluarsa']; ?></td>
				<td>Rp.<?php echo number_format ($tampil['harga']); ?></td>
				<td><?php echo $tampil['keterangan']; ?></td>
				<td>
                    <a href="menu.php?halaman=edit_obat&id=<?php echo $tampil['id_obat'] ?>">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a href="menu.php?halaman=hapus_obat&id=<?php echo $tampil['id_obat'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                        <i class="fa fa-trash"></i>
                    </a>
				</td>
			</tr>
			<?php $nomer++; ?>
	<?php }?>
	</table>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
<a href="menu.php?halaman=menu" class="btn btn-warning">Kembali</a>