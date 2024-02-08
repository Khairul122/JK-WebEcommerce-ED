-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2024 pada 14.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_invoice` varchar(30) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(27, '11', 'INV-8091897', 1, 'Sepatu Converse', 1, 100000),
(28, '11', 'INV-35361290', 2, 'Sepatu New Era', 1, 300000),
(29, '11', 'INV-31685946', 1, 'Sepatu Converse', 1, 100000),
(30, '11', 'INV-88941926', 8, 'New Balance 327', 1, 250000),
(31, '11', 'INV-37681780', 8, 'New Balance 327', 1, 250000),
(32, '11', 'INV-38779131', 8, 'New Balance 327', 1, 250000),
(33, '11', 'INV-85519149', 8, 'New Balance 327', 1, 250000),
(34, '11', 'INV-43184402', 8, 'New Balance 327', 1, 250000),
(35, '11', 'INV-36034606', 9, 'Louis Vuitton Trainer Sneaker', 1, 400000),
(36, '11', 'INV-10129860', 8, 'New Balance 327', 1, 250000);

--
-- Trigger `cart`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `cart` FOR EACH ROW BEGIN
	UPDATE product SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(8, 'New Balance 327', 'New Balance 327', 'Sneakers', 250000, 10, 'sepatu1.jpg'),
(9, 'Louis Vuitton Trainer Sneaker', 'Louis Vuitton Trainer Sneaker', 'Sneakers', 400000, 10, 'sepatu2.jpg'),
(10, 'Nike Air Jordan Travis Scoot Low', 'Nike Air Jordan Travis Scoot Low', 'Sneakers', 300000, 5, 'sepatu3.jpg'),
(11, 'Nike Air Jordan 4 Retro', 'Nike Air Jordan 4 Retro', 'Sneakers', 320000, 5, 'sepatu4.jpg'),
(12, 'Nike Air Jordan 4 Retro', 'Nike Air Jordan 4 Retro', 'Sneakers', 320000, 5, 'sepatu5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `order_id` char(30) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `total` decimal(10,3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `city` varchar(255) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `ekspedisi` varchar(100) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `payment_limit` datetime DEFAULT NULL,
  `status` varchar(2) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`order_id`, `id_user`, `name`, `email`, `total`, `alamat`, `mobile_phone`, `city`, `kode_pos`, `payment_method`, `ekspedisi`, `tracking_id`, `transaction_time`, `payment_limit`, `status`, `gambar`) VALUES
('INV-10129860', '11', 'budi', 'budi@gmail.com', '250.000', 'Padang', '082165443677', 'Lampung Selatan', '25521', 'Transfer Bank Langsung', 'SICEPAT', '1057489848249', '2021-02-05 20:06:29', '2021-02-06 18:19:10', '1', 'Wireframe_-_1_(1)1.png'),
('INV-36034606', '11', 'budi', 'budi@gmail.com', '400.000', 'Padang', '082165443677', 'Karimun', '25521', 'Direct Bank Transfer', 'J&T Express', '529043347641', '2024-02-05 14:19:03', '2024-02-06 14:19:03', '1', 'Wireframe_-_1_(1)1.png'),
('INV-43184402', '11', 'budi', 'budi@gmail.com', '250.000', '082165443677', '082165443677', 'Pandeglang', '25521', 'Direct Bank Transfer', 'J&T Express', '687511475612', '2023-02-05 12:00:58', '2023-02-06 12:00:58', '1', 'Wireframe_-_1_(1)1.png'),
('INV-85519149', '11', 'budi', 'budi@gmail.com', '250.000', 'Padang', '082165443677', 'Buru Selatan', '25521', 'Direct Bank Transfer', 'J&T Express', '502515432982', '2022-02-05 20:06:23', '2022-02-06 11:39:48', '1', 'LG16b_(1)1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `level`, `avatar`) VALUES
(6, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', 'user.png'),
(11, 'budi', 'budi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
