-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2022 pada 19.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_fas` varchar(30) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `gambar`, `nama_fas`, `deskripsi`) VALUES
(2, 'kolamrenang.jpg', 'Kolam Renang', 'Kami menyediakan kolam renang untuk para pengunjung hotel, jika anda ingin berjemur atau bermain dengan anak anda silahkan kunjungi kolam renang hotel kami '),
(3, 'resto.png', 'Resto', 'Restoran kami menyediakan layanan yang lengkap, dengan sajian makanan yang segar dan juga sehat. Disini juga memiliki bar untuk sebagian orang.\r\nDatanglah dan nikmati waktu anda.'),
(4, 'ballroom.jpg', 'Ballroom', 'Disini juga menyediakan ballroom, jika pelanggan sekalian ingin mengadakan acara atau seminar bisa datang ke tempat ini.'),
(8, '62373c378f66f.png', 'Aula', 'Dengan adanya aula pelanggan bisa mengadakan acara acara seminar ataupun acara acara besar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`) VALUES
(1, 'kolamrenang.jpg'),
(2, 'hotel.jpg'),
(3, 'resto.png'),
(4, 'single.jpg'),
(5, 'spa.jpg'),
(6, 'makan.jpg'),
(7, 'toran.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `gambar`, `jenis`, `jumlah`, `harga`) VALUES
(1, 'single1.jpg', 'Single Room', '21', '380000'),
(2, 'twin1.jpg', 'Twin Room', '15', '350000'),
(3, 'deluxe1.jpg', 'Deluxe Room', '10', '420000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` enum('Admin','User','Petugas') NOT NULL DEFAULT 'User',
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `akses`, `gambar`) VALUES
(4, 'Adrian', 'oleinkr001@gmail.com', '06d873390da43bedd214f9547adf3e65', 'Admin', 'fotoadmin.png'),
(7, 'salman', 'salmanramdani@gmail.com', '6b35b192b6a5c19fed74c681a3db91e7', 'User', 'default.png'),
(13, 'yuki123', 'yuki@gmail.com', '9b82b79798ae647d97244cdcafe9f5db', 'User', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl_in` varchar(20) NOT NULL,
  `tgl_out` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Cek In'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `tgl_in`, `tgl_out`, `jumlah`, `jenis`, `nama`, `email`, `status`) VALUES
(63, '03/24/2022', '03/26/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(64, '03/17/2022', '03/19/2022', 1, 'Twin Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(65, '03/01/2022', '03/02/2022', 1, 'Twin Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(66, '03/10/2022', '03/11/2022', 1, 'Twin Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(67, '03/22/2022', '03/23/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(68, '03/17/2022', '03/18/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(69, '03/22/2022', '03/23/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(70, '03/10/2022', '03/15/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out'),
(71, '03/23/2022', '03/24/2022', 1, 'Single Room', 'salman', 'salmanramdani@gmail.com', 'Cek Out');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
