-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2019 pada 10.27
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `jenis_kelamin`, `alamat`, `nomor_hp`) VALUES
(1, 'widi', 2147483647, 'widias@gmail.com', 'Teknik Informatika', 'perempuan', 'bangsri', '08579989091'),
(2, 'durotul', 2147483647, 'durotul@gamail.com', 'Teknik Informatika', 'perempuan', 'jepara', '08579989099'),
(3, 'aris ', 2147483647, 'arisdar@gmail.com', 'Teknik Informatika', 'laki-laki', 'jepara', '085799670091'),
(4, 'heri', 214748657, 'heri@gmail.com', 'Teknik Informatika', 'laki-laki', 'keling', '0822345678'),
(9, 'nova', 696420, 'nova@gmail.com', 'Teknik Informatika', 'perempuan', 'tegalsambi', '0987680634');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `log_perubahan` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW insert into tgl_perubahan
set nrp=old.nrp,
nomor_hp_lama =old.nomor_hp,
nomor_hp_baru=new.nomor_hp,
tgl_perubahan=now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgl_perubahan`
--

CREATE TABLE `tgl_perubahan` (
  `id` int(11) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `nomor_hp_lama` varchar(255) NOT NULL,
  `nomor_hp_baru` varchar(255) NOT NULL,
  `tgl_perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tgl_perubahan`
--

INSERT INTO `tgl_perubahan` (`id`, `nrp`, `nomor_hp_lama`, `nomor_hp_baru`, `tgl_perubahan`) VALUES
(1, '2147483647', '08888888', '923829928903028', '2019-11-10 06:05:08'),
(2, '1612400004', '', '08579989091', '2019-11-10 07:32:52'),
(3, '1612400005', '', '08579989099', '2019-11-10 07:36:08'),
(4, '2147483647', '', '085799670091', '2019-11-10 07:37:57'),
(5, '2147483647', '08579989091', '08579989091', '2019-11-10 09:14:04'),
(6, '2147483647', '', '0822345678', '2019-11-10 09:16:41'),
(7, '2147483647', '', '0987680634', '2019-11-10 09:18:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tgl_perubahan`
--
ALTER TABLE `tgl_perubahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tgl_perubahan`
--
ALTER TABLE `tgl_perubahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
