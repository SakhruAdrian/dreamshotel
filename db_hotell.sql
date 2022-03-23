-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotell`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('petugas','tamu','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas`
--

INSERT INTO `tb_identitas` (`id_user`, `nama`, `email`, `alamat`, `no_telp`, `username`, `password`, `level`) VALUES
(1, 'rizky herdiana', 'herdiana@gmail.com', 'bandung barat', '12333', 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(2, 'ayrania yara', 'yara@gmail.com', 'jakarta selatan', '021581515', 'petugas', '570c396b3fc856eceb8aa7357f32af1a', 'petugas'),
(3, 'tamu', 'tamu@gmail.com', 'bandung', '02121412', 'tamu123', '26364ac030f3791242f334bc3749fe36', 'tamu'),
(4, 'coba', 'coba@gmail.com', 'bandung', '020202', 'coba', 'a3040f90cc20fa672fe31efcae41d2db', 'tamu'),
(5, 'cobapetugas', 'coba@gmail.com', 'jaksel', '0212120', 'coba2', 'a3040f90cc20fa672fe31efcae41d2db', 'tamu'),
(6, 'petugas2', 'petugas@gmailcom', 'japan', '0201202', 'petugas', 'b2b017c4148f716a48bd4457e59d7849', 'petugas'),
(7, 'tamu2', 'tamu2@gmail.com', 'kalimantan', '020202020', 'tamu2', '6d7bea00fa15261ee5a0cf2a9fa6a3f0', 'tamu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` enum('single','couple','family') NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_kamar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `tipe_kamar`, `harga`, `total_kamar`) VALUES
(1, 'single', 'Rp.500.000.00', -13),
(2, 'couple', 'Rp.750.000.00', -1),
(3, 'family', 'Rp.1.200.000.00', -3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `total_bayar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama` varchar(220) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_kamar` int(5) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `id_kamar`, `nama`, `check_in`, `check_out`, `jumlah_kamar`, `jumlah_hari`, `status`) VALUES
(1, 1, 'tamu123', '0000-00-00', '0000-00-00', 2, 0, 'Check_out'),
(2, 1, 'tamu123', '0000-00-00', '0000-00-00', 2, 0, 'Check_out'),
(3, 1, 'tamu123', '2022-03-09', '2022-03-10', 2, 0, 'Check_out'),
(4, 2, 'tamu123', '2022-03-12', '2022-03-22', 2, 0, 'Check_out'),
(5, 3, 'tamu123', '2022-03-19', '2022-03-18', 1, 0, 'Check_out'),
(6, 1, 'tamu123', '2022-03-10', '2022-03-24', 1, 0, 'Check_out'),
(7, 1, 'tamu123', '2022-03-22', '2022-03-24', 2, 0, 'Check_out'),
(8, 3, 'tamu2', '2022-03-14', '2022-03-17', 1, 0, 'Check_out'),
(9, 1, 'tamu2', '2022-03-14', '2022-04-01', 2, 0, 'Check_out'),
(10, 3, 'tamu2', '2022-03-15', '2022-03-15', 1, 0, 'Check_in'),
(11, 1, 'petugas', '2022-03-15', '2022-03-17', 1, 2, 'Check_in'),
(12, 1, 'petugas', '2022-03-15', '2022-03-17', 2, 2, 'Check_in'),
(13, 1, 'tamu2', '2022-03-14', '2022-03-16', 1, 2, 'Check_in'),
(14, 1, 'tamu2', '2022-03-15', '2022-03-18', 1, 3, 'Check_in'),
(15, 2, 'tamu2', '2022-03-16', '2022-03-19', 1, 3, 'Check_in'),
(16, 3, 'tamu2', '2022-03-14', '2022-03-31', 1, 17, 'Check_in'),
(17, 1, 'tamu2', '2022-03-07', '2022-03-17', 2, 10, 'Check_in');

--
-- Triggers `tb_pesan`
--
DELIMITER $$
CREATE TRIGGER `check_in` AFTER INSERT ON `tb_pesan` FOR EACH ROW BEGIN
UPDATE tb_kamar SET total_kamar=total_kamar-new.jumlah_kamar WHERE id_kamar=new.id_kamar;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pesan` (`id_pesan`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
