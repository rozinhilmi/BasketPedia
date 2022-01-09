-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 23.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BasketPedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`) VALUES
(1, 'Paul George 4', 'Paul George 4 Black.jpg', 1700000),
(2, 'Kevin Durant 13 aunt pearl', 'Kevin Durant aunt pearl.jpg', 1700000),
(3, 'Harden 5 White', 'Harden 5 white.jpg', 2300000),
(4, 'Kobe 6 Protro Green', 'Kobe 6 Protro green.jpg', 2600000),
(5, 'Lebron 18 black', 'Lebron 18 black.jpg', 2900000),
(6, 'Kyrie 7 black', 'Kyrie 7 black.jpg', 1900000),
(7, 'Zoom Freak 2 black', 'Zoom Freak 2 black.jpg', 1700000),
(8, 'Kyrie Low 3 white', 'Kyrie Low 3 white.jpg', 1300000),
(9, 'Harden 4 orange', 'Harden 4 orange.jpg', 1100000),
(10, 'Lebron Soldier 14 lakers', 'Lebron Soldier 14 lakers.jpg', 2000000),
(11, 'Paul George 3 white', 'Paul George 3 white.jpg', 960000),
(12, 'Kevin Durant 12 black', 'Kevin Durant 12 black.jpg', 1100000),
(13, 'Kobe 5 Protro lakers', 'Kobe 5 Protro lakers.jpg', 4200000),
(14, 'Air Jordan 34 white', 'Air Jordan 34 white.jpg', 2300000),
(15, 'Air Jordan 35 white', 'Air Jordan 35 white.jpg', 2800000),
(16, 'Air Jordan 1 purple', 'Air Jordan 1 purple.jpg', 2600000),
(17, 'Dame 7 Pink', 'Dame 7 Black.jpg', 1600000),
(18, 'Pro Boost White', 'Pro Boost White.jpg', 1400000),
(19, 'Paul George 5', 'Paul George 5.jpg', 1600000),
(20, 'Curry 8', 'Curry 8.jpg', 2500000),
(21, 'Don Issue 2', 'Don Issue 2.jpeg', 1600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `fullName` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `homeAddress` varchar(300) DEFAULT NULL,
  `trackingNumber` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `name`, `size`, `price`, `fullName`, `email`, `homeAddress`, `trackingNumber`, `message`, `status`) VALUES
(1, 'Curry 8', 41, 2500000, 'ojin', 'ojin@gmail.com', 'landung sari A/65', 'JNT : 123123', 'ditunggu', 'accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `size`
--

INSERT INTO `size` (`id`, `name`, `size`, `stok`) VALUES
(1, 'Paul George 4', 41, 2),
(2, 'Paul George 4', 42, 4),
(3, 'Paul George 4', 43, 3),
(4, 'Paul George 4', 44, 6),
(5, 'Paul George 4', 45, 5),
(6, 'Kevin Durant 13 aunt pearl', 41, 4),
(7, 'Kevin Durant 13 aunt pearl', 42, 5),
(8, 'Kevin Durant 13 aunt pearl', 43, 4),
(9, 'Kevin Durant 13 aunt pearl', 44, 3),
(10, 'Kevin Durant 13 aunt pearl', 45, 4),
(11, 'Harden 5 White', 41, 4),
(12, 'Harden 5 White', 42, 5),
(13, 'Harden 5 White', 43, 4),
(14, 'Harden 5 White', 44, 4),
(15, 'Harden 5 White', 45, 4),
(16, 'Lebron 18 black', 41, 3),
(17, 'Lebron 18 black', 42, 5),
(18, 'Lebron 18 black', 43, 4),
(19, 'Lebron 18 black', 44, 4),
(20, 'Lebron 18 black', 45, 4),
(21, 'Kyrie 7 black', 41, 4),
(22, 'Kyrie 7 black', 42, 5),
(23, 'Kyrie 7 black', 43, 4),
(24, 'Kyrie 7 black', 44, 6),
(25, 'Kyrie 7 black', 45, 4),
(26, 'Zoom Freak 2 black', 41, 4),
(27, 'Zoom Freak 2 black', 42, 5),
(28, 'Zoom Freak 2 black', 43, 4),
(29, 'Zoom Freak 2 black', 44, 4),
(30, 'Zoom Freak 2 black', 45, 4),
(31, 'Kyrie Low 3 white', 41, 4),
(32, 'Kyrie Low 3 white', 42, 5),
(33, 'Kyrie Low 3 white', 43, 4),
(34, 'Kyrie Low 3 white', 44, 4),
(35, 'Kyrie Low 3 white', 45, 4),
(36, 'Harden 4 orange', 41, 4),
(37, 'Harden 4 orange', 42, 5),
(38, 'Harden 4 orange', 43, 4),
(39, 'Harden 4 orange', 44, 4),
(40, 'Harden 4 orange', 45, 4),
(41, 'Lebron Soldier 14 lakers', 41, 4),
(42, 'Lebron Soldier 14 lakers', 42, 5),
(43, 'Lebron Soldier 14 lakers', 43, 4),
(44, 'Lebron Soldier 14 lakers', 44, 4),
(45, 'Lebron Soldier 14 lakers', 45, 4),
(46, 'Paul George 3 white', 41, 4),
(47, 'Paul George 3 white', 42, 5),
(48, 'Paul George 3 white', 43, 4),
(49, 'Paul George 3 white', 44, 4),
(50, 'Paul George 3 white', 45, 4),
(51, 'Kevin Durant 12 black', 41, 4),
(52, 'Kevin Durant 12 black', 42, 5),
(53, 'Kevin Durant 12 black', 43, 4),
(54, 'Kevin Durant 12 black', 44, 4),
(55, 'Kevin Durant 12 black', 45, 4),
(56, 'Kobe 5 Protro lakers', 41, 4),
(57, 'Kobe 5 Protro lakers', 42, 5),
(58, 'Kobe 5 Protro lakers', 43, 4),
(59, 'Kobe 5 Protro lakers', 44, 4),
(60, 'Kobe 5 Protro lakers', 45, 4),
(61, 'Kobe 6 Protro Green', 41, 4),
(62, 'Kobe 6 Protro Green', 42, 5),
(63, 'Kobe 6 Protro Green', 43, 4),
(64, 'Kobe 6 Protro Green', 44, 4),
(65, 'Kobe 6 Protro Green', 45, 4),
(66, 'Air Jordan 34 white', 41, 5),
(67, 'Air Jordan 34 white', 42, 5),
(68, 'Air Jordan 34 white', 43, 5),
(69, 'Air Jordan 34 white', 44, 4),
(70, 'Air Jordan 34 white', 45, 4),
(71, 'Air Jordan 35 white', 41, 4),
(72, 'Air Jordan 35 white', 42, 5),
(73, 'Air Jordan 35 white', 43, 4),
(74, 'Air Jordan 35 white', 44, 4),
(75, 'Air Jordan 35 white', 45, 4),
(76, 'Air Jordan 1 purple', 41, 4),
(77, 'Air Jordan 1 purple', 42, 5),
(78, 'Air Jordan 1 purple', 43, 4),
(79, 'Air Jordan 1 purple', 44, 4),
(80, 'Air Jordan 1 purple', 45, 4),
(81, 'Dame 7 Pink', 41, 2),
(82, 'Dame 7 Pink', 42, 2),
(83, 'Dame 7 Pink', 43, 0),
(84, 'Dame 7 Pink', 44, 3),
(85, 'Dame 7 Pink', 45, 4),
(86, 'Pro Boost White', 41, 4),
(87, 'Pro Boost White', 42, 4),
(88, 'Pro Boost White', 43, 2),
(89, 'Pro Boost White', 44, 3),
(90, 'Pro Boost White', 45, 1),
(91, 'Paul George 5', 41, 3),
(92, 'Paul George 5', 42, 4),
(93, 'Paul George 5', 43, 5),
(94, 'Paul George 5', 44, 3),
(95, 'Paul George 5', 45, 4),
(96, 'Curry 8', 41, 3),
(97, 'Curry 8', 42, 3),
(98, 'Curry 8', 43, 4),
(99, 'Curry 8', 44, 3),
(100, 'Curry 8', 45, 5),
(101, 'Don Issue 2', 41, 3),
(102, 'Don Issue 2', 42, 4),
(103, 'Don Issue 2', 43, 3),
(104, 'Don Issue 2', 44, 4),
(105, 'Don Issue 2', 45, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
