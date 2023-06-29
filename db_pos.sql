-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 14.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `emails`
--

CREATE TABLE `emails` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`) VALUES
(8, 'muhamadarul905@gmail.com', '2023-06-17 20:08:26'),
(10, 'desyy@gmail.com', '2023-06-17 20:33:49'),
(12, 'rendi@gmail.com', '2023-06-17 20:42:03'),
(17, 'bembi@gmail.com', '2023-06-18 00:22:13'),
(19, 'megachan@gmail.com', '2023-06-18 08:47:50'),
(20, 'you@gmail.com', '2023-06-19 20:24:44'),
(21, 'muhamadarul902@gmail.com', '2023-06-28 05:47:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_picture`) VALUES
(27, 'BEANI 4 EYES', 250000, 'Artboard1.png'),
(28, 'BEANI 4 KIDZ', 250000, 'Artboard2.png'),
(29, 'BEANI 4 DEATH', 150000, 'Artboard3.png'),
(30, 'BEANI 4 CROSS', 270000, 'Artboard4.png'),
(31, 'HODDIE HELL', 350000, 'Artboard5.png'),
(32, 'HODDIE 4 LIE', 300000, 'Artboard6.png'),
(33, 'HODDIE 4 DEATH', 400000, 'Artboard7.png'),
(34, 'HODDIE 4 SAVES LIVES', 450000, 'Artboard8.png'),
(35, 'T-SHIRT 4 HELL', 200000, 'Artboard9.png'),
(36, 'T-SHIRT 4 EYES', 350000, 'Artboard10.png'),
(37, 'T-SHIRT 4 DEATH', 300000, 'Artboard11.png'),
(38, 'T-SHIRT 4 LOVE', 250000, 'Artboard12.png'),
(39, 'SHORT CARGO - 4 SICK', 250000, 'Artboard13.png'),
(40, 'SHORT CARGO - 4 CROSS', 200000, 'Artboard14.png'),
(41, 'SHORT CARGO - 4 EYES KIDZ', 300000, 'Artboard15.png'),
(42, 'SHORT CARGO - 4 GRAPHIC', 400000, 'Artboard16.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(221) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `alamat`, `tanggal_pesan`, `batas_bayar`) VALUES
(3, 'arul', 'villa surya jaya', '2023-06-13 17:24:15', '2023-06-14 17:24:15'),
(10, 'syahru', 'cileungsi', '2023-06-13 17:31:03', '2023-06-14 17:31:03'),
(16, 'bembiii', 'gugugug', '2023-06-14 06:00:18', '2023-06-15 06:00:18'),
(23, 'dessy', 'villa surya jaya', '2023-06-16 12:54:37', '2023-06-17 12:54:37'),
(24, 'ican', 'asdasd', '2023-06-28 11:12:50', '2023-06-29 11:12:50'),
(25, 'orang123', 'rendi', '2023-06-28 11:14:17', '2023-06-29 11:14:17'),
(26, 'david', 'sdsdsdsd', '2023-06-28 17:22:36', '2023-06-29 17:22:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(1, 1, 1, 'Kemeja', 1, 25000),
(2, 2, 3, 'Baju anak', 2, 15000),
(3, 3, 28, 'BEANI 4 KIDZ', 5, 250000),
(4, 3, 30, 'BEANI 4 CROSS', 2, 270000),
(5, 3, 38, 'T-SHIRT 4 LOVE', 1, 250000),
(6, 3, 42, 'SHORT CARGO - 4 GRAPHIC', 2, 400000),
(7, 3, 35, 'T-SHIRT 4 HELL', 1, 200000),
(8, 3, 39, 'SHORT CARGO - 4 SICK', 1, 250000),
(9, 4, 27, 'BEANI 4 EYES', 2, 200000),
(10, 8, 34, 'HODDIE 4 SAVES LIVES', 6, 450000),
(11, 10, 38, 'T-SHIRT 4 LOVE', 1, 250000),
(12, 10, 42, 'SHORT CARGO - 4 GRAPHIC', 2, 400000),
(13, 10, 34, 'HODDIE 4 SAVES LIVES', 1, 450000),
(14, 10, 31, 'HODDIE HELL', 1, 350000),
(15, 11, 28, 'BEANI 4 KIDZ', 1, 250000),
(16, 11, 34, 'HODDIE 4 SAVES LIVES', 1, 450000),
(17, 11, 33, 'HODDIE 4 DEATH', 1, 400000),
(18, 11, 37, 'T-SHIRT 4 DEATH', 1, 300000),
(19, 11, 42, 'SHORT CARGO - 4 GRAPHIC', 1, 400000),
(20, 12, 37, 'T-SHIRT 4 DEATH', 1, 300000),
(21, 12, 34, 'HODDIE 4 SAVES LIVES', 1, 450000),
(22, 12, 36, 'T-SHIRT 4 EYES', 1, 350000),
(23, 15, 28, 'BEANI 4 KIDZ', 1, 250000),
(24, 15, 33, 'HODDIE 4 DEATH', 3, 400000),
(25, 16, 28, 'BEANI 4 KIDZ', 5, 250000),
(26, 16, 33, 'HODDIE 4 DEATH', 1, 400000),
(27, 16, 29, 'BEANI 4 DEATH', 1, 150000),
(28, 17, 28, 'BEANI 4 KIDZ', 1, 250000),
(29, 23, 29, 'BEANI 4 DEATH', 2, 150000),
(30, 23, 42, 'SHORT CARGO - 4 GRAPHIC', 1, 400000),
(31, 23, 40, 'SHORT CARGO - 4 CROSS', 1, 200000),
(32, 24, 28, 'BEANI 4 KIDZ', 1, 250000),
(33, 24, 30, 'BEANI 4 CROSS', 1, 270000),
(34, 25, 29, 'BEANI 4 DEATH', 1, 150000),
(35, 25, 27, 'BEANI 4 EYES', 1, 250000),
(36, 25, 30, 'BEANI 4 CROSS', 1, 270000),
(37, 26, 28, 'BEANI 4 KIDZ', 1, 250000),
(38, 26, 29, 'BEANI 4 DEATH', 1, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(7, 'user', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
