-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 09:59 AM
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
  `id_jenisgangguan` int(100) NOT NULL,
  `deskripsi_jenis_gangguan` varchar(255) NOT NULL,
  `lokasi_gangguan` varchar(100) NOT NULL,
  `penyebab_gangguan` varchar(255) NOT NULL,
  `solusi_gangguan` varchar(255) NOT NULL,
  `open_date` date NOT NULL,
  `open_time` time(6) NOT NULL,
  `close_date` date NOT NULL,
  `close_time` time(6) NOT NULL,
  `durasi` time(6) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `isDelete` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisgangguan`
--

CREATE TABLE `tb_jenisgangguan` (
  `id_jenisgangguan` int(100) NOT NULL,
  `jenis_gangguan` varchar(50) NOT NULL,
  `ket_gangguan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisgangguan`
--

INSERT INTO `tb_jenisgangguan` (`id_jenisgangguan`, `jenis_gangguan`, `ket_gangguan`) VALUES
(1, 'Putus kabel', ''),
(2, 'Perangkat', 'Switch/Router'),
(3, 'Modul', 'Software/Config/Catalys'),
(4, 'Wiring', 'Kabel non fo'),
(5, 'Patchord', 'Fo indoor'),
(6, 'Power supply', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jeniskeluhan`
--

CREATE TABLE `tb_jeniskeluhan` (
  `id_jeniskeluhan` int(100) NOT NULL,
  `jenis_keluhan` varchar(100) NOT NULL,
  `ket_keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jeniskeluhan`
--

INSERT INTO `tb_jeniskeluhan` (`id_jeniskeluhan`, `jenis_keluhan`, `ket_keluhan`) VALUES
(3, 'Listrik setempat padam', ''),
(4, 'IP yg di tunjuk monitoring down', ''),
(5, 'Lain-lain', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenislayanan`
--

CREATE TABLE `tb_jenislayanan` (
  `id_jenislayanan` int(100) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenislayanan`
--

INSERT INTO `tb_jenislayanan` (`id_jenislayanan`, `nama_layanan`) VALUES
(2, 'IPVPN'),
(3, 'Akses Internet');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(100) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `id_jeniskeluhan` int(100) NOT NULL,
  `deskripsi_jeniskeluhan` varchar(225) NOT NULL,
  `penyebab_keluhan` varchar(225) NOT NULL,
  `solusi_keluhan` varchar(225) NOT NULL,
  `open_date` date NOT NULL,
  `open_time` time(6) NOT NULL,
  `close_date` date NOT NULL,
  `close_time` time(6) NOT NULL,
  `durasi` time(6) DEFAULT NULL,
  `isDelete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `sid`, `id_jeniskeluhan`, `deskripsi_jeniskeluhan`, `penyebab_keluhan`, `solusi_keluhan`, `open_date`, `open_time`, `close_date`, `close_time`, `durasi`, `isDelete`) VALUES
(1, '10000045240008', 3, 'sw', 'dwd', 'wdw', '2017-12-03', '08:30:00.000000', '2017-12-04', '10:00:00.000000', NULL, NULL),
(2, '10000045240023', 3, 'aa', 'a2', 'wdwd', '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000', NULL, '0'),
(3, '10000045240008', 3, 'ss', 'wdw', 'kkk', '2018-08-02', '02:58:00.000000', '2018-08-14', '10:00:00.000000', NULL, '0');

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
  `id_jenislayanan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`sid`, `lokasi`, `kapasitas`, `nama_pic`, `no_hp_pic`, `email`, `id_jenislayanan`) VALUES
('10000045240008', 'Kalideres', '2 Mb', 'Agus', '0817270811', '', 2),
('10000045240023', 'Ciputat', '2 Mb', 'Sumarta', '081310595349', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress`
--

CREATE TABLE `tb_progress` (
  `id_progress` int(100) NOT NULL,
  `id_gangguan` int(100) NOT NULL,
  `status_progress` int(2) NOT NULL,
  `ket_progress` varchar(225) NOT NULL,
  `waktu` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_karyawan`, `nama`, `password`, `status_user`) VALUES
('333', 's', '333', 'Admin');

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
  MODIFY `id_gangguan` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jenisgangguan`
--
ALTER TABLE `tb_jenisgangguan`
  MODIFY `id_jenisgangguan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_jeniskeluhan`
--
ALTER TABLE `tb_jeniskeluhan`
  MODIFY `id_jeniskeluhan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_jenislayanan`
--
ALTER TABLE `tb_jenislayanan`
  MODIFY `id_jenislayanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_progress`
--
ALTER TABLE `tb_progress`
  MODIFY `id_progress` int(100) NOT NULL AUTO_INCREMENT;
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
