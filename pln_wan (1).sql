-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 04:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln_wan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gangguan`
--

CREATE TABLE `tb_gangguan` (
  `id_gangguan` int(100) NOT NULL,
  `id_jenisgangguan` int(100) DEFAULT NULL,
  `deskripsi_jenisgangguan` varchar(255) DEFAULT NULL,
  `lokasi_gangguan` varchar(100) DEFAULT NULL,
  `penyebab_gangguan` varchar(255) DEFAULT NULL,
  `solusi_gangguan` varchar(255) DEFAULT NULL,
  `open_date` date NOT NULL,
  `open_time` time NOT NULL,
  `close_date` date DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `durasi` varchar(20) DEFAULT NULL,
  `sid` varchar(20) NOT NULL,
  `isDelete` varchar(10) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gangguan`
--

INSERT INTO `tb_gangguan` (`id_gangguan`, `id_jenisgangguan`, `deskripsi_jenisgangguan`, `lokasi_gangguan`, `penyebab_gangguan`, `solusi_gangguan`, `open_date`, `open_time`, `close_date`, `close_time`, `durasi`, `sid`, `isDelete`) VALUES
(1, 6, 'sbbdjdkj\r\ndndcnjdnjn\r\ndkncdcnn', 'POP Muara Karang', 'Gangguan pada sistem 150 KV Gandul-Muara Karang disisi PLN.', 'DILAKUKAN PERBAIKAN OLEH PLN.', '2018-01-02', '08:17:00', '2018-08-21', '08:12:00', '455:55', '10000045240011', 'no'),
(8, 6, 'coba2', 'POP Muara Karang', 'Gangguan pada sistem 150 KV Gandul-Muara Karang disisi PLN', 'DILAKUKAN PERBAIKAN OLEH PLN', '2018-01-02', '08:17:00', '2018-01-02', '12:13:00', '3:56', '10000045240024', 'no'),
(12, 1, 'Kabel FO Putus', 'POP Last Mile km 1', 'Putus Kabel', 'Penyambungan kabel', '2018-08-17', '12:03:00', '2018-08-17', '15:04:00', '3:1', '10000045240004', 'no'),
(19, 3, '', 'q', 'q', 'q', '2018-08-20', '08:00:00', '2018-08-21', '08:07:00', '24', '10000045240010', 'no'),
(20, 3, '', 'r', 'r', 'r', '2018-08-20', '08:00:00', '2018-08-21', '08:08:00', '24:8', '10000045240020', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisgangguan`
--

CREATE TABLE `tb_jenisgangguan` (
  `id_jenisgangguan` int(100) NOT NULL,
  `jenis_gangguan` varchar(50) NOT NULL,
  `ket_gangguan` varchar(100) DEFAULT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisgangguan`
--

INSERT INTO `tb_jenisgangguan` (`id_jenisgangguan`, `jenis_gangguan`, `ket_gangguan`, `isDelete`) VALUES
(1, 'Putus kabel', '', 'no'),
(2, 'Perangkat', 'Switch/Router', 'no'),
(3, 'Modul', 'Software/Config/Catalys', 'no'),
(4, 'Wiring', 'Kabel non fo', 'no'),
(5, 'Patchord', 'Fo indoor', 'no'),
(6, 'Power supply', '', 'no'),
(10, 'n', 'n', 'yes'),
(11, 'cobain', 'cobaa oyy', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskeluhan`
--

CREATE TABLE `tb_jeniskeluhan` (
  `id_jeniskeluhan` int(100) NOT NULL,
  `jenis_keluhan` varchar(100) NOT NULL,
  `ket_keluhan` varchar(255) DEFAULT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskeluhan`
--

INSERT INTO `tb_jeniskeluhan` (`id_jeniskeluhan`, `jenis_keluhan`, `ket_keluhan`, `isDelete`) VALUES
(3, 'Listrik setempat padam', '', 'no'),
(4, 'IP yg di tunjuk monitoring down', '', 'no'),
(5, 'Lain-lain', '', 'no'),
(7, 'coba', 'coba', 'yes'),
(8, 'cobain', 'chobaa', 'yes'),
(9, 'test', 'teesstt', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenislayanan`
--

CREATE TABLE `tb_jenislayanan` (
  `id_jenislayanan` int(100) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenislayanan`
--

INSERT INTO `tb_jenislayanan` (`id_jenislayanan`, `nama_layanan`, `isDelete`) VALUES
(2, 'IPVPN', 'no'),
(3, 'Akses Internet', 'no'),
(5, 'oyy', 'yes'),
(6, 'service', 'yes'),
(7, 'oyoyoyoy', 'yes'),
(8, 'cobacoba', 'yes'),
(9, '123', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(100) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `id_jeniskeluhan` int(100) NOT NULL,
  `deskripsi_jeniskeluhan` varchar(225) DEFAULT NULL,
  `penyebab_keluhan` varchar(225) DEFAULT NULL,
  `solusi_keluhan` varchar(225) DEFAULT NULL,
  `open_date` date NOT NULL,
  `open_time` time NOT NULL,
  `close_date` date DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `durasi` varchar(20) DEFAULT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `sid`, `id_jeniskeluhan`, `deskripsi_jeniskeluhan`, `penyebab_keluhan`, `solusi_keluhan`, `open_date`, `open_time`, `close_date`, `close_time`, `durasi`, `isDelete`) VALUES
(7, '10000045240010', 5, '', 'berdasarkan hasil pengecekan link No Arp.', 'Link termonitor normal kembali dan belum ada action yang dilakukan oleh tim icon+.', '2018-08-16', '07:22:00', '2018-08-16', '07:22:00', NULL, 'no'),
(8, '10000045240021', 5, '', 'hasil pengecekan awal oleh team NOC link terpantau normal, dapat Mac address (159), test PING reply dan terpantau ada traffic.', 'tidak ada taken action perbaikan di sisi ICON+', '2018-11-16', '07:23:00', '2018-08-16', '07:23:00', NULL, 'no'),
(9, '10000045240008', 4, 'ip server sedang maintenance', 'it area sedang maintence ip server tersebut', 'it area sudah menyelesaikan ip server tersebut', '2018-08-20', '09:10:00', '2018-08-20', '14:20:00', '5:10', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `sid` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `nama_pic` varchar(10) NOT NULL,
  `no_hp_pic` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_jenislayanan` int(100) NOT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`sid`, `lokasi`, `kapasitas`, `nama_pic`, `no_hp_pic`, `email`, `id_jenislayanan`, `isDelete`) VALUES
('1', '1', '1', '1', '1', '1', 2, 'yes'),
('10000045240004', 'Bandengan ', '2 Mb', 'Pendi', '0856-8587-000', '', 2, 'no'),
('10000045240008', 'Kalideres', '2 Mb', 'Agus', '0817270811', '', 2, 'no'),
('10000045240010', 'Cempaka Putih', '2 Mb', 'Mulyono', '0878-8069-2999', '', 2, 'no'),
('10000045240011', 'Bintaro', '2 Mb', 'Hanafi', '0819-0825-4774', '', 2, 'no'),
('10000045240020', 'Marunda', '2 Mb', 'Asep', '0813-8532-5835', '', 2, 'no'),
('10000045240021', 'Pamulang', '2 Mb', 'Sumarta', '0813-1059-5349', '', 2, 'no'),
('10000045240023', 'Ciputat', '2 Mb', 'Sumarta', '081310595349', '', 2, 'no'),
('10000045240024', 'Cileduk', '2 Mb', 'Hanafi', '0819-0825-4774', '', 2, 'no'),
('10000045240036', 'Kalimalang', '2 Mb', 'Yuki', '0821-1399-2140', '', 2, 'no'),
('123', 'jakarta', '2mb', 'Tiwi', '083811769607', 'tiwi@gmail.com', 2, 'yes'),
('170000268240020', 'Jatinegara', '2 Mb', 'Torik', '0812-8137-3867', '', 2, 'no'),
('2', '2', '2', '2', '2', '2', 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress`
--

CREATE TABLE `tb_progress` (
  `id_progress` int(100) NOT NULL,
  `id_gangguan` int(100) NOT NULL,
  `status_progress` int(2) NOT NULL DEFAULT '1',
  `ket_progress` varchar(225) NOT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_progress`
--

INSERT INTO `tb_progress` (`id_progress`, `id_gangguan`, `status_progress`, `ket_progress`, `waktu`) VALUES
(1, 1, 2, 'Tim menuju lokasi', '06:00:00'),
(6, 8, 1, 'Petugas sampai lokasi', '08:00:00'),
(7, 8, 2, 'sedang ditangani.', '09:15:00'),
(10, 12, 1, 'Sudah open tiket ke CC', '12:03:00'),
(11, 12, 1, 'Tim menuju lokasi', '13:30:00'),
(12, 12, 1, 'Tim sedang menyambung kabel', '13:54:00'),
(13, 12, 2, 'Sudah OK', '15:04:00'),
(23, 19, 2, 'coba', NULL),
(24, 20, 2, 'q', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_user` varchar(50) NOT NULL,
  `isDelete` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_karyawan`, `nama`, `password`, `status_user`, `isDelete`) VALUES
('1234', 'dd', '123', 'Admin', 'yes'),
('2', 'cobaq', '2', 'User', 'no'),
('333', 's', '333', 'Admin', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gangguan`
--
ALTER TABLE `tb_gangguan`
  ADD PRIMARY KEY (`id_gangguan`),
  ADD KEY `gangguan_fk2` (`sid`),
  ADD KEY `gangguan_fk1` (`id_jenisgangguan`);

--
-- Indexes for table `tb_jenisgangguan`
--
ALTER TABLE `tb_jenisgangguan`
  ADD PRIMARY KEY (`id_jenisgangguan`);

--
-- Indexes for table `tb_jeniskeluhan`
--
ALTER TABLE `tb_jeniskeluhan`
  ADD PRIMARY KEY (`id_jeniskeluhan`);

--
-- Indexes for table `tb_jenislayanan`
--
ALTER TABLE `tb_jenislayanan`
  ADD PRIMARY KEY (`id_jenislayanan`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `keluhan_fk2` (`sid`),
  ADD KEY `keluhan_fk1` (`id_jeniskeluhan`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `layanan_fk1` (`id_jenislayanan`);

--
-- Indexes for table `tb_progress`
--
ALTER TABLE `tb_progress`
  ADD PRIMARY KEY (`id_progress`),
  ADD KEY `progress_fk1` (`id_gangguan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gangguan`
--
ALTER TABLE `tb_gangguan`
  MODIFY `id_gangguan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_jenisgangguan`
--
ALTER TABLE `tb_jenisgangguan`
  MODIFY `id_jenisgangguan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_jeniskeluhan`
--
ALTER TABLE `tb_jeniskeluhan`
  MODIFY `id_jeniskeluhan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_jenislayanan`
--
ALTER TABLE `tb_jenislayanan`
  MODIFY `id_jenislayanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id_progress` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_gangguan`
--
ALTER TABLE `tb_gangguan`
  ADD CONSTRAINT `gangguan_fk1` FOREIGN KEY (`id_jenisgangguan`) REFERENCES `tb_jenisgangguan` (`id_jenisgangguan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `gangguan_fk2` FOREIGN KEY (`sid`) REFERENCES `tb_layanan` (`sid`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD CONSTRAINT `keluhan_fk1` FOREIGN KEY (`id_jeniskeluhan`) REFERENCES `tb_jeniskeluhan` (`id_jeniskeluhan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `keluhan_fk2` FOREIGN KEY (`sid`) REFERENCES `tb_layanan` (`sid`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD CONSTRAINT `layanan_fk1` FOREIGN KEY (`id_jenislayanan`) REFERENCES `tb_jenislayanan` (`id_jenislayanan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_progress`
--
ALTER TABLE `tb_progress`
  ADD CONSTRAINT `progress_fk1` FOREIGN KEY (`id_gangguan`) REFERENCES `tb_gangguan` (`id_gangguan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
