-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 18.50
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta6fitri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `Nama` varchar(35) NOT NULL,
  `NIM` int(10) NOT NULL,
  `Kelas` int(2) NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Fakultas` varchar(3) NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`Nama`, `NIM`, `Kelas`, `Jenis_Kelamin`, `Hobi`, `Fakultas`, `Alamat`) VALUES
('egh', 1111111111, 2, 'L', '', 'FIT', 'cv dfzcs '),
('au', 1212121212, 2, 'L', 'Membaca,Menulis', 'FEB', 'pop'),
('Bunga Matahari', 1231231231, 2, 'P', 'Menulis', 'FIT', 'gj'),
('ngantuk', 1234512345, 1, 'L', '', 'FIT', 'banget'),
('fitri', 1234567890, 2, 'P', 'Menulis', 'FIT', 'ggg'),
('Sri Fitriana Ramadhini', 2147483647, 2, 'P', 'Menulis', 'fit', 'Sumedang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
