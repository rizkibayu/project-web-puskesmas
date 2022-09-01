-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 07:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `alamat_dokter` text NOT NULL,
  `no_tlp` varchar(21) NOT NULL,
  `poli` varchar(100) DEFAULT NULL,
  `jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `stok_kasur` varchar(100) NOT NULL,
  `harga_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `stok_obat` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kadaluarsa` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` varchar(100) NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_rj` int(100) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  `obat` varchar(50) NOT NULL,
  `jml_obat` varchar(11) NOT NULL,
  `harga` varchar(60) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaraninap`
--

CREATE TABLE `pembayaraninap` (
  `id_pembayaran` int(11) NOT NULL,
  `id_ri` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `jml_kasur` varchar(100) NOT NULL,
  `harga_kamar` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `jml_obat` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `tarif` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_kp` int(16) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id_ri` int(11) NOT NULL,
  `id_rekam` int(11) NOT NULL,
  `id_obat` varchar(100) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `tanggal_rekam` date NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `jenis_pemeriksaan` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `jml_obat` varchar(100) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jml_kasur` varchar(100) NOT NULL,
  `pengguna` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id_rj` int(11) NOT NULL,
  `id_rekam` int(100) NOT NULL,
  `id_obat` varchar(100) NOT NULL,
  `tanggal_rekam` date NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `jenis_pemeriksaan` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `jml_obat` varchar(100) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekam`
--

CREATE TABLE `rekam` (
  `id_rekam` int(11) NOT NULL,
  `id_obat` varchar(100) NOT NULL,
  `pasien` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `pemeriksaan` varchar(100) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `diagnosa` text NOT NULL,
  `obat` varchar(100) NOT NULL,
  `qty_obat` int(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `pengguna` varchar(200) NOT NULL,
  `status_pemberitahuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `sebagai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `no_telp`, `sebagai`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin puskesmas', '081383144301', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `nama_dokter` (`nama_dokter`),
  ADD KEY `poli` (`poli`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `nama_kamar` (`nama_kamar`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `nama_obat` (`nama_obat`),
  ADD KEY `nama_obat_2` (`nama_obat`),
  ADD KEY `type` (`type`),
  ADD KEY `stok_obat` (`stok_obat`),
  ADD KEY `kadaluarsa` (`kadaluarsa`),
  ADD KEY `keterangan` (`keterangan`),
  ADD KEY `nama_obat_3` (`nama_obat`),
  ADD KEY `nama_obat_4` (`nama_obat`),
  ADD KEY `nama_obat_5` (`nama_obat`),
  ADD KEY `nama_obat_6` (`nama_obat`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_rj` (`id_rj`,`nama`,`pengguna`,`obat`,`harga`,`tindakan`,`tarif`);

--
-- Indexes for table `pembayaraninap`
--
ALTER TABLE `pembayaraninap`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_ri` (`id_ri`,`nama`,`pengguna`,`nama_kamar`,`harga_kamar`,`obat`,`harga`,`tindakan`,`tarif`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_kp`),
  ADD UNIQUE KEY `nama_2` (`nama`),
  ADD KEY `nama` (`nama`),
  ADD KEY `poli` (`poli`),
  ADD KEY `pengguna` (`pengguna`),
  ADD KEY `id_kp` (`id_kp`),
  ADD KEY `id_kp_2` (`id_kp`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`id_ri`),
  ADD KEY `id_rekam` (`id_rekam`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_rekam_2` (`id_rekam`,`id_obat`,`id_kamar`,`tanggal_rekam`,`nama_pasien`,`diagnosa`,`jenis_pemeriksaan`,`obat`,`jml_obat`,`nama_kamar`,`tanggal_masuk`,`tanggal_keluar`,`jml_kasur`,`pengguna`,`status`),
  ADD KEY `tanggal_rekam` (`tanggal_rekam`,`diagnosa`,`tanggal_masuk`,`tanggal_keluar`,`status`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `nama_kamar` (`nama_kamar`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id_rj`),
  ADD KEY `id_rekam` (`id_rekam`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `id_rj` (`id_rj`,`id_rekam`,`id_obat`,`tanggal_rekam`,`nama_pasien`,`diagnosa`,`jenis_pemeriksaan`,`obat`,`jml_obat`,`pengguna`,`status`);

--
-- Indexes for table `rekam`
--
ALTER TABLE `rekam`
  ADD PRIMARY KEY (`id_rekam`),
  ADD UNIQUE KEY `id_rekam_3` (`id_rekam`),
  ADD KEY `pasien` (`pasien`),
  ADD KEY `pasien_2` (`pasien`),
  ADD KEY `pasien_3` (`pasien`),
  ADD KEY `id_rekam` (`id_rekam`),
  ADD KEY `id_rekam_2` (`id_rekam`),
  ADD KEY `id_rekam_4` (`id_rekam`),
  ADD KEY `id_rekam_5` (`id_rekam`),
  ADD KEY `nama_dokter` (`nama_dokter`),
  ADD KEY `qty_obat` (`qty_obat`),
  ADD KEY `status` (`status`),
  ADD KEY `poli` (`poli`),
  ADD KEY `pengguna` (`pengguna`),
  ADD KEY `obat` (`obat`),
  ADD KEY `pemeriksaan` (`pemeriksaan`),
  ADD KEY `tindakan` (`tindakan`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`),
  ADD KEY `nama_tindakan` (`nama_tindakan`),
  ADD KEY `id_tindakan` (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayaraninap`
--
ALTER TABLE `pembayaraninap`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_kp` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `id_ri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id_rj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekam`
--
ALTER TABLE `rekam`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
