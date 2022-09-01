<?php include 'header.php'; ?>
<div class="content-wrapper">
	<section class="content container-fluid">
		<?php 
		if (isset($_GET['halaman'])) {
			if ($_GET['halaman'] == "user") {
			include 'user/user.php';
			} elseif ($_GET['halaman'] == "tambah_user") {
				include 'user/tambah_user.php';
			} elseif ($_GET['halaman'] == "hapus_user") {
				include 'user/hapus_user.php';
			} elseif ($_GET['halaman'] == "edit_user") {
				include 'user/edit_user.php';
			} elseif ($_GET['halaman'] == "pendaftaran") {
				include 'kp/pendaftaran.php';
			} elseif ($_GET['halaman'] == "tambah_pasien") {
				include 'kp/tambah_pasien.php';
			} elseif ($_GET['halaman'] == "edit_pasien") {
				include 'kp/edit_pasien.php';
			} elseif ($_GET['halaman'] == "hapus_pasien") {
				include 'kp/hapus_pasien.php';
			} elseif ($_GET['halaman'] == "pasien") {
				include 'pasien/pasien.php';
			} elseif ($_GET['halaman'] == "tambah") {
				include 'pasien/tambah.php';
			} elseif ($_GET['halaman'] == "tambah_rekam") {
				include 'rekam/tambah_rekam.php';
			} elseif ($_GET['halaman'] == "dokter") {
				include 'dokter/dokter.php';
			} elseif ($_GET['halaman'] == "tambah_dokter") {
				include 'dokter/tambah_dokter.php';
			} elseif ($_GET['halaman'] == "hapus_dokter") {
				include 'dokter/hapus_dokter.php';
			} elseif ($_GET['halaman'] == "edit_dokter") {
				include 'dokter/edit_dokter.php';
			} elseif ($_GET['halaman'] == "obat") {
				include 'obat/obat.php';
			} elseif ($_GET['halaman'] == "tambah_obat") {
				include 'obat/tambah_obat.php';
			} elseif ($_GET['halaman'] == "info") {
				include 'rekam/info.php';
			} elseif ($_GET['halaman'] == "edit_obat") {
				include 'obat/edit_obat.php';
			} elseif ($_GET['halaman'] == "hapus_obat") {
				include 'obat/hapus_obat.php';
			} elseif ($_GET['halaman'] == "laporan") {
				include '../laporan/laporan.php';
			} elseif ($_GET['halaman'] == "tindakan") {
				include 'tindakan/tindakan.php';
			} elseif ($_GET['halaman'] == "tambah_tindakan") {
				include 'tindakan/tambah_tindakan.php';
			} elseif ($_GET['halaman'] == "edit_tindakan") {
				include 'tindakan/edit_tindakan.php';
			} elseif ($_GET['halaman'] == "hapus_tindakan") {
				include 'tindakan/hapus_tindakan.php';
			} elseif ($_GET['halaman'] == "jenis_transaksi") {
				include 'transaksi/jenis_transaksi.php';
			} elseif ($_GET['halaman'] == "rawat_jalan") {
				include 'pasien_rji/rawat_jalan.php';
			} elseif ($_GET['halaman'] == "tambah_rawat_jalan") {
				include 'pasien_rji/tambah_rawat_jalan.php';
			} elseif ($_GET['halaman'] == "input_data_pasien_rj") {
				include 'pasien_rji/input_data_pasien_rj.php';
			} elseif ($_GET['halaman'] == "hapus_pasien_rj") {
				include 'pasien_rji/hapus_pasien_rj.php';
			} elseif ($_GET['halaman'] == "rawatjalan") {
				include 'transaksi/rawatjalan.php';
			} elseif ($_GET['halaman'] == "input_pembayaran_rj_u") {
				include 'transaksi/input_pembayaran_rj_u.php';
			} elseif ($_GET['halaman'] == "pembayaran_rj_u") {
				include 'transaksi/pembayaran_rj_u.php';
			} elseif ($_GET['halaman'] == "input_pembayaran_rj_b") {
				include 'transaksi/input_pembayaran_rj_b.php';
			} elseif ($_GET['halaman'] == "rawatjalanbpjs") {
				include 'transaksi/rawatjalanbpjs.php';
			} elseif ($_GET['halaman'] == "data_kamar") {
				include 'kamar/data_kamar.php';
			} elseif ($_GET['halaman'] == "edit_kamar") {
				include 'kamar/edit_kamar.php';
			} elseif ($_GET['halaman'] == "hapus_kamar") {
				include 'kamar/hapus_kamar.php';
			} elseif ($_GET['halaman'] == "tambah_kamar") {
				include 'kamar/tambah_kamar.php';
			}  elseif ($_GET['halaman'] == "rawat_inap") {
				include 'pasien_rji/rawat_inap.php';
			}  elseif ($_GET['halaman'] == "input_data_pasien_ri") {
				include 'pasien_rji/input_data_pasien_ri.php';
			} elseif ($_GET['halaman'] == "hapus_pasien_ri") {
				include 'pasien_rji/hapus_pasien_ri.php';
			} elseif ($_GET['halaman'] == "tambah_rawat_inap") {
				include 'pasien_rji/tambah_rawat_inap.php';
			} elseif ($_GET['halaman'] == "input_data_pasien_ri_keluar") {
				include 'pasien_rji/input_data_pasien_ri_keluar.php';
			} elseif ($_GET['halaman'] == "rawatinap") {
				include 'transaksi/rawatinap.php';
			}  elseif ($_GET['halaman'] == "input_pembayaran_ri_u") {
				include 'transaksi/input_pembayaran_ri_u.php';
			}  elseif ($_GET['halaman'] == "input_pembayaran_ri_b") {
				include 'transaksi/input_pembayaran_ri_b.php';
			} elseif ($_GET['halaman'] == "rawatinapbpjs") {
				include 'transaksi/rawatinapbpjs.php';
			}  elseif ($_GET['halaman'] == "tabel_ri") {
				include 'transaksi/tabel_ri.php';
			} elseif ($_GET['halaman'] == "tabel_rj") {
				include 'transaksi/tabel_rj.php';
			} elseif ($_GET['halaman'] == "datapegawai") {
				include 'pegawai/datapegawai.php';
			} elseif ($_GET['halaman'] == "edit_status_pegawai") {
				include 'pegawai/edit_status_pegawai.php';
			}  elseif ($_GET['halaman'] == "edit_status_pegawai2") {
				include 'pegawai/edit_status_pegawai2.php';
			}  elseif ($_GET['halaman'] == "tambah_pegawai") {
				include 'pegawai/tambah_pegawai.php';
			}  elseif ($_GET['halaman'] == "hapus_pegawai") {
				include 'pegawai/hapus_pegawai.php';
			} elseif ($_GET['halaman'] == "edit_pegawai") {
				include 'pegawai/edit_pegawai.php';
			} elseif ($_GET['halaman'] == "pembayaranjalan") {
				include '../laporan/pembayaranjalan.php';
			} elseif ($_GET['halaman'] == "laporan_rj") {
				include '../laporan/laporan_rj.php';
			}  elseif ($_GET['halaman'] == "pembayaraninap") {
				include '../laporan/pembayaraninap.php';
			} elseif ($_GET['halaman'] == "laporan_ri") {
				include '../laporan/laporan_ri.php';
			}
		} else {
			include 'home.php';
		}


		?>
	</section>
</div>