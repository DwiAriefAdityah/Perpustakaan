-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2017 pada 09.09
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` enum('TI','IK') NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `email`) VALUES
(1234, 'jh', 'padanang', '2017-11-08', 'p', 'IK', ''),
(12345, 'arif', 'aceh', '2017-11-02', 'l', 'TI', ''),
(567889, 'kar', 'kuri', '2017-11-02', 'l', 'TI', ''),
(16021245, 'riki', 'padanang', '2017-11-17', 'l', '', ''),
(123456789, 'dwi', 'pasid', '2017-12-11', 'l', 'TI', 'dwi@gmail.com'),
(161402005, 'asafsafafl', 'jasfnlaksfla', '2017-11-02', 'p', '', ''),
(161402007, 'anfasnf alfnal', 'alnslafa', '2017-11-05', 'l', '', ''),
(161402009, 'Dwi Arief Adityah', 'Padangsidimpuan', '1998-10-02', 'l', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(9) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok` int(20) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3','rak4') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok`, `lokasi`, `tgl_input`) VALUES
(2, 'yuao', 'hayo', 'Bloomsbury', '1998', 100, 'rak1', '2017-11-10'),
(3, 'Harry Potter and the Prisoner Of Azkaban', 'dwi', 'Bloomsbury', '1997', 100, 'rak1', '2017-11-01'),
(4, 'Harry Potter and the Goblet Of Fire', '', 'Bloomsbury', '2000', 100, 'rak1', '2017-11-01'),
(5, 'Harry Potter And The Order Of The Phoenix', '', 'Bloomsbury', '2003', 100, 'rak1', '2017-11-01'),
(6, 'Harry Potter And The Half Blood Prince', '', 'Bloomsbury', '2005', 100, 'rak2', '2017-11-02'),
(7, 'Harry Potter And The Deathly Hallows', '', 'Bloomsbury', '2007', 100, 'rak2', '2017-11-02'),
(8, 'Fantastic-Beasts And Where To Find Them', '', 'Bloomsbury', '2001', 50, 'rak2', '2017-11-02'),
(9, 'Sebuah Usaha Melupakan', '', 'Bloomsbury', '2016', 150, 'rak2', '2017-11-02'),
(10, 'Be calm, Be Strong, Be Grateful', 'dwi ', 'Katadepan', '2017', 200, 'rak2', '2017-11-02'),
(11, 'Jatuh Hati pada Montessori ', '', 'B-First', '2017', 200, 'rak3', '2017-11-03'),
(12, 'Tomorrow Is Today', '', 'mizan', '2017', 200, 'rak3', '2017-11-03'),
(13, 'Rumah Tanpa Jendela', '', 'Republika', '2017', 200, 'rak3', '2017-11-03'),
(14, 'Bilik â€“ Bilik Cinta Muhammad', '', 'Serambi', '2017', 200, 'rak3', '2017-11-03'),
(15, 'Scholl Horror', '', 'Coconut', '2017', 200, 'rak3', '2017-11-03'),
(16, 'Mau Jadi Apa?', '', 'B-First', '2017', 200, 'rak4', '2017-11-04'),
(17, 'Mata Air Keteladanan', '', 'Mizan', '2017', 200, 'rak4', '2017-11-04'),
(18, 'Rentang Kisah', '', 'GagasMedia', '2017', 200, 'rak4', '2017-11-04'),
(19, 'My Prevet Senior', '', 'Loveable', '2017', 200, 'rak4', '2017-11-04'),
(20, 'Origin', 'dwu', 'Mizan', '2017', 200, 'rak4', '2017-11-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 'yuao', '161502009', 'Dwi Arief Adityah', '04-03-2017', '11-03-2017', 'kembali'),
(2, 'yuao', '151402009', 'Dwi Arief Adityah', '24-03-2017', '01-04-2017', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
