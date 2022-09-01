 <?php 
include '../koneksi.php';
?>

<?php $ambil = $koneksi->query("SELECT * FROM rawat_inap WHERE id_ri = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();

?>

<!-- Trigger the modal with a button -->
<div class="text-center"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Input Keluar Pasien Inap</button></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center">Input Keluar Data Pasien Rawat Inap</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="">Tanggal Masuk</label>
		<input type="date" class="form-control" value="<?php echo $tampil['tanggal_masuk'] ?>" name="tanggal_masuk" readonly="">
		</div>
		<div class="form-group col-md-6">
			<label for="">Tanggal Keluar</label>
			<input type="date" class="form-control" name="tanggal_keluar">
		</div>
	</div>
	<div class="form-group">
		<strong><label for="">Pasien</label></strong>
		<input type="text" class="form-control" value="<?php echo $tampil['nama_pasien'] ?>" readonly="" name="nama_pasien">
	</div>
		<br>
	<button class="btn btn-success" name="update">Input Data Pasien</button>
	<a href="menu.php?halaman=rawat_inap" class="btn btn-warning">Kembali</a>
</form> 
<?php 

if (isset($_POST['update'])) {
	$tanggal_keluar = $_POST['tanggal_keluar'];
	

$koneksi->query("UPDATE rawat_inap SET tanggal_keluar = '$tanggal_keluar',status = 'Pasien Sudah Keluar' WHERE id_ri = '$_GET[id]' ");

	
	echo "<div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=rawat_inap'>";
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>