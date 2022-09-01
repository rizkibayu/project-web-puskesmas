<?php include '../koneksi.php'; ?>

<?php $ambil = $koneksi->query("SELECT * FROM rawat_inap INNER JOIN obat ON rawat_inap.id_obat = obat.id_obat
														INNER JOIN kamar ON rawat_inap.id_kamar = kamar.id_kamar WHERE id_ri = '$_GET[id]'"); 
$tampil = $ambil->fetch_assoc();
?>

<form action="" method="POST" enctype="multipart/form-data">
	<h3 class="text-center">Input Data Pembayaran</h3>
	<div class="form-group">
		<label for="">Tanggal Bayar</label>
		<input type="date" class="form-control col-md-4" name="tanggal_bayar">
	</div>
	<div class="form-group">
		<label for="">Id Rawat Inap</label>
		<input type="number" class="form-control" name="id_ri" value="<?php echo $tampil['id_ri'] ?>" readonly="">
	</div>
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="">Nama Pasien</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama_pasien'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Diagnosa</label>
			<input type="text" class="form-control" name="diagnosa" value="<?php echo $tampil['diagnosa'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Jenis Obat</label>
			<input type="text" class="form-control" name="obat" value="<?php echo $tampil['obat'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Nama Kamar</label>
			<input type="text" class="form-control" name="nama_kamar" value="<?php echo $tampil['nama_kamar'] ?>" readonly="">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="">Jenis Pengguna</label>
			<input type="text" class="form-control" name="pengguna" value="<?php echo $tampil['pengguna'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Jenis Pemeriksaan</label>
			<input type="text" class="form-control" name="tindakan" value="<?php echo $tampil['jenis_pemeriksaan'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Qty Obat</label>
			<input type="text" class="form-control" name="jml_obat" value="<?php echo $tampil['jml_obat'] ?>" readonly="">
		</div>
		<div class="form-group col-md-3">
			<label for="">Qty Kasur</label>
			<input type="text" class="form-control" name="jml_kasur" value="<?php echo $tampil['jml_kasur'] ?>" readonly="">
		</div>
	</div>
	<br>
	<br>
	<div class="form-row">
	<div class="form-group col-md-8">
			<input type="text" class="form-control text-center" name="" value="Harga Obat" readonly="">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" name="harga" value="<?php echo $tampil['harga'] ?>" readonly="">
		</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-8">
			<input type="text" class="form-control text-center" name="" value="Biaya Inap" readonly="">
		</div>
		<div class="form-group col-md-3">
			<input type="text" class="form-control" name="harga_kamar" value="<?php echo $tampil['harga_kamar'] ?>" readonly="">
		</div>
	</div>		
	<div class="form-row">
	<div class="form-group col-md-8">
			<input type="text" class="form-control text-center" name="" value="Input Biaya Pemeriksaan" readonly="">
			<br>
			<a href="menu.php?halaman=rawatjalan" class="btn btn-warning">< Kembali</a>
		</div>
		<div class="form-group col-md-3">
			<input type="number" class="form-control" name="tarif">
			<br>
			<button class="btn btn-primary" name="simpan">Input Pembayaran</button>
		</div>
		<div>
			*Wajib Di Isi
		</div>
	</div>	
</form>
<?php 

if (isset($_POST['simpan'])) {
	$id_ri = $_POST['id_ri'];
	$nama = $_POST['nama'];
	$pengguna = $_POST['pengguna'];
	$obat = $_POST['obat'];
	$jml_obat = $_POST['jml_obat'];
	$harga = $_POST['harga'];
	$tindakan = $_POST['tindakan'];
	$tarif = $_POST['tarif'];
	$tanggal_bayar = $_POST['tanggal_bayar'];
	$nama_kamar = $_POST['nama_kamar'];
	$jml_kasur = $_POST['jml_kasur'];
	$harga_kamar = $_POST['harga_kamar'];

	$total = ($harga_kamar*$jml_kasur)+($harga*$jml_obat)+$tarif;

$koneksi->query("INSERT INTO pembayaraninap(id_ri,nama,pengguna,obat,jml_obat,harga,tindakan,tarif,tanggal_bayar,nama_kamar,jml_kasur,harga_kamar,total,status) VALUES('$id_ri','$nama','$pengguna','$obat','$jml_obat','$harga','$tindakan','$tarif','$tanggal_bayar','$nama_kamar','$jml_kasur','$harga_kamar','$total','Sudah Dibayar')");

 $koneksi->query("UPDATE rawat_inap SET status = 'Sudah Di Tambahkan' WHERE id_ri = '$id_ri'");

echo "<div class='alert alert-succes text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=rawatinap'>";
} ?>
