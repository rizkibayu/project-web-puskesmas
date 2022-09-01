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
<h2 class="text-center">Data Rawat Inap</h2>
<body>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
			<tr>
			<th>No</th>
			<th>Tanggal Rekam</th>
			<th>Nama Pasien</th>
			<th>Diagnosa</th>
			<th>Jenis Pemeriksaan</th>
			<th>Obat</th>
			<th>Jumlah Obat</th>
			<th>Tanggal Masuk</th>
			<th>Tanggal Keluar</th>
			<th>Pengguna</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		</thead>
			<?php $nomer=1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM rawat_inap"); ?>
			<?php while ($tampil = $ambil->fetch_assoc()) { ?>
			<tr>
				<td class="text-center"><?php echo $nomer; ?></td>
				<td><?php echo $tampil['tanggal_rekam']; ?></td>
				<td><?php echo $tampil['nama_pasien']; ?></td>
				<td><?php echo $tampil['diagnosa']; ?></td>
				<td><?php echo $tampil['jenis_pemeriksaan']; ?></td>
				<td><?php echo $tampil['obat']; ?></td>
				<td><?php echo $tampil['jml_obat']; ?></td>
				<td><?php echo $tampil['tanggal_masuk']; ?></td>
				<td><?php echo $tampil['tanggal_keluar']; ?></td>
				<td><?php echo $tampil['pengguna']; ?></td>
				<td><?php if ($tampil['status'] == "Belum Keluar"): ?>
					<a class="btn btn-danger">Belum Keluar</a>
				<?php endif ?>
				<?php if ($tampil['status'] == "Pasien Sudah Keluar"): ?>
					<a class="btn btn-warning">Pasien Sudah Keluar</a>
				<?php endif ?>
				</td>
				<td>
					<?php if ($tampil['status'] == "Belum Keluar"): ?>
					<a href="menu.php?halaman=input_data_pasien_ri_keluar&id=<?php echo $tampil['id_ri'] ?>"><i class="fa fa-sign-out-alt"></i></a>
					<?php endif ?>
                     <a href="menu.php?halaman=hapus_pasien_ri&id=<?php echo $tampil['id_ri'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                        <i class="fa fa-trash"></i>
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
<a href="menu.php?halaman=tambah_rawat_inap" class="btn btn-primary">[+] Tambah Data</a>