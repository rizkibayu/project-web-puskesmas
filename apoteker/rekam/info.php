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
<h2 class="text-center">Data Pasien Rekam Medis</h2>
<body>
    <table id="example" class="table table-striped table-bordered" style="width:100%"> 
	<thead>
		<tr>
			<th>No Urut</th>
			<th>Pasien</th>
			<th>Tanggal</th>
			<th>Jenis</th>
			<th>Poli</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
	</thead>
		<?php $nomer = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM rekam") ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {?>
		<tr>
			<td><?php echo $nomer ?></td>
			<td><?php echo $tampil['pasien'] ?></td>
			<td><?php echo $tampil['tanggal'] ?></td>
			<td><?php echo $tampil['pengguna'] ?></td>
			<td><?php echo $tampil['poli'] ?></td>
			<td><?php echo $tampil['status'] ?></td>
			<td>
				<?php if ($tampil['status'] == "Telah Di Periksa"): ?>
					<a href="menu.php?halaman=buat_resep&id=<?php echo $tampil['id_rekam'] ?>" class="btn btn-warning">Buat Resep</a>
				<?php endif ?>
				<?php if ($tampil['status'] !=="Belum Di Periksa" ): ?>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $tampil['id_rekam'] ?>">Laporan</button>
				<div class="modal fade" id="myModal<?php echo $tampil['id_rekam'] ?>" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						  <div class="modal-content">
      						<div class="modal-header">
								<h4 class="modal-tittle-tittle">Laporan Singkat</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<table class="table table-borderless">
									<tr>
										<th>Obat</th>
										<th>Jumlah Obat</th>
										<th>Keterangan Pemakaian</th>
									</tr>
									<tr>
										<td><?php echo $tampil['obat'] ?></td>
										<td><?php echo $tampil['qty_obat'] ?></td>
										<td><?php echo $tampil['keterangan'] ?></td>
									</tr>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
								<?php if ($tampil['status'] == "Obat Telah Di Berikan"):?>
									<a href="menu.php?halaman=laporan&id=<?php echo $tampil['id_rekam'] ?>" class="btn btn-primary">Lebih Lengkap</a>
								<?php endif ?>	
							</div>
						</div>			
					</div>
				</div>
			<?php endif ?>
			<?php if ($tampil['status'] == "Belum Di Periksa"): ?>
					<label for="">Tunggu Dokter Memeriksa</label>
				<?php endif ?>
			</td>
		</tr>
	<?php $nomer++; ?>
<?php } ?>
</table>
</form>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
