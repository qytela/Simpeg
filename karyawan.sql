-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 06:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_karyawan`
--

CREATE TABLE `absensi_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `absen` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `tidak_hadir` int(11) NOT NULL,
  `izin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_karyawan`
--

INSERT INTO `absensi_karyawan` (`id`, `nama`, `absen`, `hadir`, `tidak_hadir`, `izin`) VALUES
(1, 'Muhammad Julfansa', 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alasan_karyawan`
--

CREATE TABLE `alasan_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alasan_karyawan`
--

INSERT INTO `alasan_karyawan` (`id`, `nama`, `alasan`, `tanggal`) VALUES
(1, 'Muhammad Julfansa', 'Izin cuti mengikuti seminar di jakarta.', '08/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `name`, `position`, `age`, `start_date`, `salary`, `email`, `handphone`, `nik`, `tentang`, `image_name`) VALUES
(1, 'Muhammad Julfansa', 'Backend', 17, '04/05/2018', 7000000, 'ojykn404@gmail.com', '0895336835534', '778899', 'Pekerja yang sangat baik.', 'Paspoto_contoh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history_karyawan`
--

CREATE TABLE `history_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_karyawan`
--

INSERT INTO `history_karyawan` (`id`, `nama`, `info`, `tanggal`) VALUES
(1, 'Admin', 'Admin telah melakukan login', '08/04/2019 11:03:54'),
(2, 'Admin', 'Admin telah melakukan login', '08/04/2019 11:04:22'),
(3, 'Muhammad Julfansa', 'Muhammad Julfansa Telah melakukan login', '08/04/2019 11:07:42'),
(4, 'Muhammad Julfansa', 'Muhammad Julfansa telah melakukan absen', '08/04/2019 11:08:05'),
(5, 'Muhammad Julfansa', 'Muhammad Julfansa Telah melakukan login', '08/04/2019 11:08:05'),
(6, 'Muhammad Julfansa', 'Muhammad Julfansa Telah melakukan login', '08/04/2019 11:08:29'),
(7, 'Admin', 'Admin telah melakukan login', '08/04/2019 11:08:43'),
(8, 'Muhammad Julfansa', 'Muhammad Julfansa Telah melakukan login', '08/04/2019 11:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `setting_absensi`
--

CREATE TABLE `setting_absensi` (
  `id` int(11) NOT NULL,
  `mulai_absen` varchar(255) NOT NULL,
  `selesai_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_absensi`
--

INSERT INTO `setting_absensi` (`id`, `mulai_absen`, `selesai_absen`) VALUES
(1, '06:00', '24:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_karyawan`
--

CREATE TABLE `users_karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_karyawan`
--

INSERT INTO `users_karyawan` (`id`, `nik`, `password`, `level`) VALUES
(1, '332', '8b6bc5d8046c8466359d3ac43ce362ab', 'Admin'),
(2, '778899', '55587a910882016321201e6ebbc9f595', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alasan_karyawan`
--
ALTER TABLE `alasan_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_absensi`
--
ALTER TABLE `setting_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_karyawan`
--
ALTER TABLE `users_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alasan_karyawan`
--
ALTER TABLE `alasan_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `setting_absensi`
--
ALTER TABLE `setting_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_karyawan`
--
ALTER TABLE `users_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
