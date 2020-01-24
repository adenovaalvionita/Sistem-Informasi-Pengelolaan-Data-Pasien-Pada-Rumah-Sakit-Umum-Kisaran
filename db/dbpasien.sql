-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2020 pada 08.44
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpasien`
--

CREATE TABLE `tbpasien` (
  `idpasien` int(10) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `namapasien` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `alamatpasien` varchar(100) NOT NULL,
  `usia` int(10) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `noruangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpasien`
--

INSERT INTO `tbpasien` (`idpasien`, `no_rm`, `namapasien`, `tanggallahir`, `jeniskelamin`, `alamatpasien`, `usia`, `penyakit`, `noruangan`) VALUES
(2, '14-12-564309', 'Fendranto', '1984-10-25', 'L', 'Kisaran', 35, 'Alergi', 'Melati 450 B'),
(3, '15-16-99876', 'Renata', '1997-02-21', 'P', 'Sentang', 23, 'Batuk berdarah', 'Anggrek 234 A'),
(6, '16-23-4326754', 'Diandra', '1996-08-31', 'P', 'Meranti', 24, 'Demam Berdarah', 'Mawar 234 A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `noruangan` varchar(25) NOT NULL,
  `Harga` int(50) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `bayar` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`id`, `no_rm`, `namapasien`, `noruangan`, `Harga`, `namadokter`, `spesialis`, `tglmasuk`, `tglkeluar`, `bayar`, `ket`) VALUES
(3, '16-23-4326754', 'Diandra', 'Mawar 234 A', 700000, 'dr. Irawati ', 'Dokter Umum', '2019-09-20', '2019-09-20', 700000, 'LUNAS'),
(4, '15-16-99876', 'Renata', 'Anggrek 234 A', 800000, 'dr. Julius Dariar ', 'THT', '2013-06-20', '2013-06-20', 400000, 'Belum Lunas'),
(5, '14-12-564309', 'Fendranto', 'Melati 450 B', 700000, 'dr. Irawati ', 'Dokter Umum', '2020-01-09', '2020-01-11', 500000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('addmiinn', '01cfcd4f6b8770febfb40cb906715822', 'adew122@gmail.com', 'Afriantii', 1, 'Administrator'),
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'afriantii@gmail.com', 'Ade Nova', 1, 'Staf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpasien`
--
ALTER TABLE `tbpasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
