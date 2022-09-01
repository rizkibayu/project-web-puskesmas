 <?php 
include '../koneksi.php';
?>

<?php $ambil = $koneksi->query("SELECT * FROM rekam WHERE id_rekam = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>

<!-- Trigger the modal with a button -->
<div class="text-center"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambahkan Data</button></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center">Tambah Data Pasien Rawat Jalan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       
<br><br>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<div class="form-group">
		<strong><label for="">Id Rekam</label></strong>
		<input type="number" class="form-control" value="<?php echo $tampil['id_rekam'] ?>" readonly="" name="id_rekam">
	</div>	
	<div class="form-group">
		<strong><label for="">Id Obat</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['id_obat'] ?>" readonly="" name="id_obat">
	</div>
		<strong><label for="">Tanggal Periksa</label></strong>
		<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="" name="tanggal_rekam">
	</div>
	<div class="form-group">
		<strong><label for="">Pasien</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['pasien'] ?>" readonly="" name="nama_pasien">
	</div>
	<div class="form-group">
		<strong><label for="">Diagnosa</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['diagnosa'] ?>" readonly="" name="diagnosa">
	</div>
	<div class="form-group">
		<strong><label for="">Jenis Pemeriksaan</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['pemeriksaan'] ?>" readonly="" name="jenis_pemeriksaan">
	</div>
	<div class="form-group">
		<strong><label for="">Obat</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['obat'] ?>" readonly="" name="obat">
	</div>
	<div class="form-group">
		<strong><label for="">Jumlah Obat</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['qty_obat'] ?>" readonly="" name="jml_obat">
	</div>
	<div class="form-group">
		<strong><label for="">Pengguna</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['pengguna'] ?>" readonly="" name="pengguna">
		<br>
	<button class="btn btn-success" name="input">Input Data Pasien</button>
	<a href="menu.php?halaman=rawat_jalan" class="btn btn-warning">Kembali</a>
</form> 
<?php 
if (isset($_POST['input'])) {
	$id_rekam = $_POST['id_rekam'];
	$id_obat = $_POST['id_obat'];
	$tanggal_rekam = $_POST['tanggal_rekam'];
	$nama_pasien = $_POST['nama_pasien'];
	$diagnosa = $_POST['diagnosa'];
	$jenis_pemeriksaan = $_POST['jenis_pemeriksaan'];
	$obat = $_POST['obat'];
	$jml_obat = $_POST['jml_obat'];
	$pengguna = $_POST['pengguna'];
	$status_ = $_POST['status'];

	$koneksi->query("INSERT INTO rawat_jalan(id_rekam, id_obat, tanggal_rekam, nama_pasien, diagnosa, jenis_pemeriksaan, obat, jml_obat, pengguna, status) VALUES ('$id_rekam','$id_obat','$tanggal_rekam','$nama_pasien','$diagnosa','$jenis_pemeriksaan','$obat','$jml_obat','$pengguna','Belum Dibayar')");

	$koneksi->query("UPDATE obat SET stok_obat = stok_obat - $jml_obat WHERE id_obat = '$id_obat'");

	$koneksi->query("UPDATE rekam SET status_pemberitahuan = 'Sudah Di Tambahkan' WHERE id_rekam = '$id_rekam'");
	
	echo "<div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=rawat_jalan'>";
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>