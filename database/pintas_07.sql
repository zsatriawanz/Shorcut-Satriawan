-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 03.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pintas_07`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lengkap`
--

CREATE TABLE `lengkap` (
  `id` int(11) NOT NULL,
  `namanya` varchar(50) NOT NULL,
  `urlnya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lengkap`
--

INSERT INTO `lengkap` (`id`, `namanya`, `urlnya`) VALUES
(4, 'Twiter', 'www.Twiter.com'),
(5, 'Instagram', 'https://www.instagram.com/z_satriawan_z/'),
(6, 'Facebook', 'https://web.facebook.com/profile.php?id=100004178719379'),
(137, 'Youtube', 'https://www.youtube.com/channel/UCeYUHG6o0YguM-g23htdsSw'),
(242, 'facebook', 'ewewe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lengkap`
--
ALTER TABLE `lengkap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lengkap`
--
ALTER TABLE `lengkap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
