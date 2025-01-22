-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2025 pada 09.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_webaliftourista`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pemesanann`
--

CREATE TABLE `tabel_pemesanann` (
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `tamu_id` int(11) NOT NULL,
  `bukti_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_pemesanann`
--

INSERT INTO `tabel_pemesanann` (`id_pemesanan`, `tanggal_checkin`, `tanggal_checkout`, `tamu_id`, `bukti_pembayaran`) VALUES
(1, '2025-01-11', '2025-01-31', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_pemesanann`
--
ALTER TABLE `tabel_pemesanann`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `bukti_pembayaran` (`bukti_pembayaran`),
  ADD UNIQUE KEY `tamu_id` (`tamu_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_pemesanann`
--
ALTER TABLE `tabel_pemesanann`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
