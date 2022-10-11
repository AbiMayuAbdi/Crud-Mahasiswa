-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2022 pada 18.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database crud mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `Nim` int(50) NOT NULL,
  `Nama Mahasiswa` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nim`, `Nama Mahasiswa`, `Email`, `Jurusan`, `Fakultas`, `Gambar`) VALUES
(1, 701210227, 'Abi Mayu Abdi', 'abimayuabdi@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Abi.jpg'),
(3, 701210061, 'Primus Tri Pandi', 'primustri@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Primus.jpg'),
(4, 701210065, 'M.Depryansyah', 'depryansyah@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Depry.jpg'),
(5, 701210150, 'Zikri Ariyanto', 'zikri@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Zikri.jpg'),
(6, 701210222, 'Rafli Andimi Venansius', 'rafliandimi@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'Rafli.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
