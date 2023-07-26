-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `password`, `role_id`) VALUES
(0, 'admin', 'admin', 'jl. jalan', 'Perempuan', '08987654321', '21232f297a57a5a743894a0e4a801fc3', 0),
(1, 'aaa', 'aaa', 'aaa', 'Laki-laki', 'aaa', '74b87337454200d4d33f80c4663dc5e5', 2),
(13, 'bbb', 'bbb', 'bbb', 'Laki-laki', 'bbb', '08f8e0260c64418510cefb2b06eee5cd', 2),
(14, 'lucy', 'lucy', 'Jl. aaaa', 'Perempuan', '081234567890', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(16, 'serena', 'serena', 'Jl. aaaa', 'Perempuan', '081111111111', '74b87337454200d4d33f80c4663dc5e5', 2),
(17, 'darien', 'darien', 'aaa', 'Laki-laki', '0899999999999', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(18, 'aaa', 'aa', 'a', 'Laki-laki', '111', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(19, 'anya', 'anya', 'Jl.aaaaa', 'Perempuan', '1234567890', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(20, 'mio', 'mio', 'aaa', 'Perempuan', '12345', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(21, 'dace', 'dace', 'jl. dace', 'Laki-laki', '123456', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(22, 'Saphire', 'saphire', 'jl.aaaa', 'Laki-laki', '0899977766', '47bce5c74f589f4867dbd57e9ca9f808', 2),
(24, 'Pak Manajer', 'pak_manajer', 'Jl. Manajer, Samarinda', 'Laki-laki', '08999999999', '69b731ea8f289cf16a192ce78a37b4f0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE `gadget` (
  `id_gadget` int(11) NOT NULL,
  `kode_kategori` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `prosesor` varchar(120) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `kamera` varchar(45) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`id_gadget`, `kode_kategori`, `merk`, `tipe`, `prosesor`, `ram`, `kamera`, `status`, `gambar`, `harga`, `denda`) VALUES
(1, 'SMP', 'Apple ', 'iPhone 13 Pro Max', 'Chip A15 Bionic', ' 6GB RAM', '12 MP, f/1.5, 26mm (wide)', '1', 'apple-iphone-13-pro-max-5g-dual-sim.jpg', 75000, 80000),
(5, 'SMP', 'Samsung', 'Galaxy Z Flip3 5G', 'Qualcomm SM8350 Snapdragon', '8 GB RAM', '12 MP, f/1.8, 27mm (wide)', '0', 'samsung_flip_z.jpg', 75000, 80000),
(16, 'SMP', 'Samsung', 'Galaxy A53 5G', 'Exynos 1280 5nm', '8GB', 'Wide 64MP, Ultrawide 12MP', '1', 'galaxy-a53.jpg', 50000, 60000),
(17, 'SMP', 'Samsung ', 'Galaxy FE 23', 'Snapdragon 750G', '6 GB', 'V50MP, Ultrawide 8MP', '1', 'samsung-galaxy-f23-1.jpg', 60000, 70000),
(20, 'SMP', 'Xiaomi', 'Xiaomi 12 Pro', 'Snapdragon 8 Gen 1 (4 nm)', 'Snapdragon 8 Gen 1 (', '50 MP (wide), 50 MP (ultrawide)', '1', 'Xiaomi_12_Pro.jpg', 60000, 65000),
(21, 'SMP', 'Samsung ', 'Galaxy S22 Ultra 5G ', 'Octa-core (1x3.00 GHz Cortex)', '8/12GB', '40MP', '1', 's22.jpg', 80000, 85000),
(22, 'LTP', 'Acer ', 'Predator Helios 300', 'Intel Core i7-10750H', '16GB RAM DDR4', '14MP', '1', '031389200_1625744881-WhatsApp_Image_2021-07-08_at_18_24_25.jpeg', 12000, 125000),
(23, 'LTP', 'ROG ', 'Zephyrus G GA502DU', 'Zephyrus G GA502DU', '8GB RAM DDR4', '16MP', '1', '412517_fc39ca9b-20af-4afb-94ed-4f2eb8907ca1_700_700.jpg', 150000, 160000),
(24, 'TBT', 'Apple', 'iPad mini (2021)', 'Apple A15 Bionic (5 nm)', '64 GB', '12 MP (wide)', '1', 'download.jpg', 60000, 70000),
(25, 'TBT', 'Apple', 'iPad Air 5 (2022)', ' Apple M1', '8GB', '12MP', '1', '6227f23893459.jpg', 16000, 170000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'SMP', 'Smartphone'),
(2, 'LTP', 'Laptop'),
(3, 'TBT', 'Tablet'),
(4, 'SMW', 'Smartwatch');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_gadget` int(11) NOT NULL,
  `tanggal_rental` varchar(32) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_denda` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(111) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_gadget`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_harga`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(22, 22, 1, '2022-05-15', '2022-05-17', 75000, 80000, 150000, 80000, '2022-05-18', 'Kembali', 'Selesai', 'bukti_pembayaran_1540163953_7607c8d5_progressive1.jpg', 1),
(27, 22, 17, '2022-05-16', '2022-05-17', 60000, 70000, 60000, 0, '2022-05-17', 'Kembali', 'Selesai', 'EukeNCTUUAEiamp1.jpg', 1),
(30, 14, 5, '2022-05-20', '2022-05-22', 75000, 80000, 150000, 0, '0000-00-00', 'Belum kembali', 'Belum selesai', 'download.png', 0),
(32, 14, 25, '2022-05-18', '2022-05-19', 16000, 170000, 16000, 0, '2022-05-19', 'Kembali', 'Selesai', 'a7fd70b3-f638-42ec-adda-b4a7d494e53d_(1).jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
  ADD PRIMARY KEY (`id_gadget`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `id_gadget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
