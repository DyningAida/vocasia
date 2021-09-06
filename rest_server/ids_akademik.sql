-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ids_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(3, 8, '16400754725f05bb8573632', 0, 0, 0, '::1', '2020-07-08 19:26:45'),
(4, 9, 'FrVBuSiPTzWNxsQZmIwY', 1, 0, 0, '::1', '2020-07-08 19:42:30'),
(5, 5, 'zdFQmZpUMxYonavrAyJb', 1, 0, 0, '::1', '2020-07-08 20:21:16'),
(6, 13, '151d13f02b497bc6d5e92b69aacc296f0d6ea862', 1, 0, 0, '::1', '2021-09-03 11:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `nama_dosen`, `tanggal_lahir`, `JK`, `no_telp`, `alamat`) VALUES
('198.078.282', 'Eddy Prayoga', '1973-03-01', 'L', '087947657839', 'Bandung'),
('213.88.109', 'M. Harry K. Saputra', '1985-03-01', 'L', '0879361537892', 'Bandung'),
('672.830.109', 'Sri Mulyaningsih', '1973-10-09', 'P', '087367283628', 'Sariasih');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_matakuliah_jadwal` varchar(50) NOT NULL,
  `NIP_jadwal` varchar(50) NOT NULL,
  `kode_ruangan_jadwal` varchar(50) NOT NULL,
  `kode_jurusan_jadwal` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_matakuliah_jadwal`, `NIP_jadwal`, `kode_ruangan_jadwal`, `kode_jurusan_jadwal`, `hari`, `jam`) VALUES
(1, '1', '213.88.109', '1', '1', 'Senin', '07.00 - 10.'),
(2, '1', '672.830.109', '4', '5', 'Selasa', '08.40-12.00'),
(3, '5', '198.078.282', '5', '4', 'Senin', '13.00-16.20');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `kode_jenjang` varchar(50) NOT NULL,
  `nama_jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`kode_jenjang`, `nama_jenjang`) VALUES
('3', 'Diploma-III'),
('4', 'Diploma-IV');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `kode_jenjang_jrs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`, `kode_jenjang_jrs`) VALUES
('1', 'Teknik Informatika', '3'),
('2', 'Teknik Informatika', '4'),
('3', 'Manajemen Informatika', '3'),
('4', 'Manajemen Informatika', '4'),
('5', 'Manajemen Bisnis', '3'),
('6', 'Manajemen Bisnis', '4'),
('7', 'Logistik Bisnis', '3'),
('8', 'Logistik Bisnis', '4');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kode_jurusan_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `nama_mahasiswa`, `tanggal_lahir`, `JK`, `no_telp`, `alamat`, `kode_jurusan_mhs`) VALUES
('1184030', 'Dyning Aida Batrishya', '2000-02-29', 'P', '085713479737', 'Jalan Kolonel Sugiono No.16A', '2'),
('1184077', 'Sri Mulyaningsih', '2000-08-07', 'P', '08738287229', 'Purwodadi', '1'),
('1184087', 'Dini Hanifah', '0000-00-00', 'P', '089374829374', 'Salatiga', '1'),
('1184088', 'Eddy Prayoga', '2000-03-01', 'L', '08937282382', 'Purwodadi', '2');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(50) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `SKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `SKS`) VALUES
('1', 'Web Service', 4),
('2', 'Administrasi Jaringan Komputer', 4),
('3', 'Sistem ERP 1', 3),
('4', 'Manajemen Bisnis', 2),
('5', 'Etika dan Manajemen Profesi TI (EMPTI)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `NIM_nilai` varchar(50) NOT NULL,
  `kode_matakuliah_nilai` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`) VALUES
('1', 'Ruang 101'),
('2', 'Ruang 102'),
('3', 'Ruang 103'),
('4', 'Ruang 104'),
('5', 'Ruang 105'),
('6', 'Ruang 106'),
('7', 'Halo Pos'),
('8', 'Auditorium');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_usergroup` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_usergroup`, `username`, `password`, `foto`) VALUES
(1, 1, 'Qiftiah', 'prodid41234', 'iniifoto'),
(2, 2, 'AidaBatrishya', 'poltekd4123', 'inifotonya'),
(5, 2, 'Aida', 'dyningaida', NULL),
(6, 2, 'dyning', '290200', NULL),
(7, 2, 'lalania', 'rub389034', ''),
(8, 2, 'elite', '12345', NULL),
(9, 2, 'anida', 'a', NULL),
(10, 2, 'tiara', '12345', NULL),
(13, 1, 'batrishya', 'a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id_usergroup` int(11) NOT NULL,
  `nama_usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id_usergroup`, `nama_usergroup`) VALUES
(1, 'D3 Teknik Informatika Poltekpos'),
(2, 'D4 Teknik Informatika Poltekpos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `NIP_jadwal` (`NIP_jadwal`),
  ADD KEY `kode_matakuliah_jadwal` (`kode_matakuliah_jadwal`,`kode_ruangan_jadwal`,`kode_jurusan_jadwal`),
  ADD KEY `kode_ruangan_jadwal` (`kode_ruangan_jadwal`),
  ADD KEY `kode_jurusan_jadwal` (`kode_jurusan_jadwal`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`kode_jenjang`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`),
  ADD KEY `kode_jenjang_jrs` (`kode_jenjang_jrs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `kode_jurusan_mhs` (`kode_jurusan_mhs`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `kode_matakuliah_nilai` (`kode_matakuliah_nilai`),
  ADD KEY `NIM_nilai` (`NIM_nilai`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_usergroup_user` (`id_usergroup`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id_usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id_usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD CONSTRAINT `api_keys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`NIP_jadwal`) REFERENCES `dosen` (`NIP`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kode_ruangan_jadwal`) REFERENCES `ruangan` (`kode_ruangan`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kode_jurusan_jadwal`) REFERENCES `jurusan` (`kode_jurusan`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`kode_matakuliah_jadwal`) REFERENCES `matakuliah` (`kode_matakuliah`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`kode_jenjang_jrs`) REFERENCES `jenjang` (`kode_jenjang`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kode_jurusan_mhs`) REFERENCES `jurusan` (`kode_jurusan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NIM_nilai`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_matakuliah_nilai`) REFERENCES `matakuliah` (`kode_matakuliah`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_usergroup`) REFERENCES `usergroup` (`id_usergroup`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
