-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2021 pada 14.11
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan_sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkel`
--

CREATE TABLE `bengkel` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `noHp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `platNomor` varchar(255) DEFAULT NULL,
  `jenisKendaraan` varchar(255) DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bengkel`
--

INSERT INTO `bengkel` (`id`, `nama`, `noHp`, `alamat`, `platNomor`, `jenisKendaraan`, `keluhan`) VALUES
(4, 'asdasdasd123', '12131312313', 'asdasd', 'asdsad', 'Mobil', 'asdasdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Adelri Muhammad', 'manajer@gmail.com', '$2y$10$os/Z6On4lv6xj3aJwNSSquwxKZxjwJs0LehCZi67hHDanYsqBTeDm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
