-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 15.12
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelmahasiswa`
--

CREATE TABLE `tabelmahasiswa` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(100) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelmahasiswa`
--

INSERT INTO `tabelmahasiswa` (`ID`, `Nama`, `Jenis_Kelamin`, `Alamat`) VALUES
(1, 'Novyana', 'perempuan', 'Jl.A Yani No 25 RT 03 RW 04 GadingRejo Umbulsari Jember '),
(2, 'Najwa', 'perempuan', 'Jl.Diponogoro No 12 RT 01 RW 02 Umbulrejo Umbulsari Jember'),
(3, 'Wilda', 'perempuan', 'Jl.Tamrin No 15 RT 02 RW 03 Umbulsari Jember'),
(4, 'Alfis', 'Laki-Laki', 'Jl.Palapa No 20 RT 03 RW 02 Paleran Umbulsari jember'),
(5, 'Akbar', 'Laki-Laki', 'Jl.Hasanudin No 3 RT 02 RW 01 Semboro Jember');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelmahasiswa`
--
ALTER TABLE `tabelmahasiswa`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
