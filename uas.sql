-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 07:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('039d512520a82a8899917c61c92dea73d1bdb8df', '127.0.0.1', 1484062913, '__ci_last_regenerate|i:1484062913;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('07a125de57e2c8f3ddac337a7960cad9b59b53c0', '127.0.0.1', 1484100545, '__ci_last_regenerate|i:1484100526;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('0a3777ff1c08a9c9dbb9fa28f447b0e3de1a5d5d', '127.0.0.1', 1484072445, '__ci_last_regenerate|i:1484072445;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('0c71035d9e13924298156f9dcd11e87add0e4a59', '127.0.0.1', 1484063283, '__ci_last_regenerate|i:1484063283;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('0e6f71ef983a6982e953f212df8abef02484717e', '127.0.0.1', 1484067431, '__ci_last_regenerate|i:1484067431;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('1c89bde8c22fc4278619a8e8d26a4cd10dd0f4e5', '127.0.0.1', 1484069397, '__ci_last_regenerate|i:1484069397;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('208a7e65f7a04e9a80d9f2482bcc974fd1539037', '127.0.0.1', 1484064081, '__ci_last_regenerate|i:1484064081;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('2ae7d09e78ce5f2d980be39dbdd65848d4315bc8', '127.0.0.1', 1484071700, '__ci_last_regenerate|i:1484071700;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('2d4eda5e95aaef3e5e045431e786d76405dc5ce3', '127.0.0.1', 1484060463, '__ci_last_regenerate|i:1484060463;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('2f5672c2b11ed1a55bcc5464eaea982e8717ff15', '127.0.0.1', 1484060607, '__ci_last_regenerate|i:1484060607;'),
('344be1cf13bbe4bc61155fa76180ff5982891f65', '127.0.0.1', 1484068941, '__ci_last_regenerate|i:1484068941;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('36a8bcd452a8e72a3b3ebf5a24d7a38b4c1a5ff2', '127.0.0.1', 1484061934, '__ci_last_regenerate|i:1484061934;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('465b3c88890884180aadf08d5c6ca89b449c2ca0', '127.0.0.1', 1484062558, '__ci_last_regenerate|i:1484062558;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('4d54fc48ed7f39e9b5fd8a4a84ee959b652fffb8', '127.0.0.1', 1484063686, '__ci_last_regenerate|i:1484063686;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('545213675561238280788f0418e7d0712dea0a67', '127.0.0.1', 1484071027, '__ci_last_regenerate|i:1484071027;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('5e017f9eeb2a40ce23cf19a68ac3727e0ee9a06f', '127.0.0.1', 1484067122, '__ci_last_regenerate|i:1484067122;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('65fe81af85f5889fc9c3c366b5f3017607d624e6', '127.0.0.1', 1484066429, '__ci_last_regenerate|i:1484066429;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('6a445ee88cb5f3a8e4457f8f5e2ffe4f33f6508e', '127.0.0.1', 1484072833, '__ci_last_regenerate|i:1484072833;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('70a043535c2a5cefd78829b3a3c0bf37ab0e9d91', '127.0.0.1', 1484068487, '__ci_last_regenerate|i:1484068487;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('723febf533c8763de4e144cff05116f7d47e96a9', '127.0.0.1', 1484067966, '__ci_last_regenerate|i:1484067966;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('82e55fc5edce2d2f8c3ac4799a173dc9b8d8c3ac', '127.0.0.1', 1484100271, '__ci_last_regenerate|i:1484100271;'),
('8fd24ded0571ef6f7edbcee1a7a0c0325e9a5502', '127.0.0.1', 1484066065, '__ci_last_regenerate|i:1484066065;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('90381f852a29602b5eeda650f15d1eed359425cd', '127.0.0.1', 1484064425, '__ci_last_regenerate|i:1484064425;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('a4efaaf17315c994a54ea94f892baae083ca8bec', '127.0.0.1', 1484065726, '__ci_last_regenerate|i:1484065726;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('a54d861f23de1a4bb4f235a61385f2dd796dc38e', '127.0.0.1', 1484061624, '__ci_last_regenerate|i:1484061624;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('a8fa08cdf8d5de078f69f3c65fae1d88ad60a6a2', '127.0.0.1', 1484072051, '__ci_last_regenerate|i:1484072051;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('af1ed969b679953abe0fc0f01ff8401d8140a66d', '127.0.0.1', 1484064761, '__ci_last_regenerate|i:1484064761;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('cae796526948035df8176097b4fb8ff95fe5a4de', '127.0.0.1', 1484065424, '__ci_last_regenerate|i:1484065424;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('cb344dabf51600cab35820ac4eb6ea5f05357619', '127.0.0.1', 1484070005, '__ci_last_regenerate|i:1484069843;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('cfb0f54ded36a9b9d7d87147ae0d13f37502c3e1', '127.0.0.1', 1484066820, '__ci_last_regenerate|i:1484066820;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('da2ddb87b5f8a6b9938e32fd1aa152b68dc9ff0e', '127.0.0.1', 1484060133, '__ci_last_regenerate|i:1484060132;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('e348ae86fa88750b41fc5c4f16757defeb0c2edf', '127.0.0.1', 1484061318, '__ci_last_regenerate|i:1484061318;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('ee165b542932065a1fb5f72baa6f80ee4aa2195a', '127.0.0.1', 1484070725, '__ci_last_regenerate|i:1484070725;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";'),
('ef7d2d71e458e98496858849d660908054f07c26', '127.0.0.1', 1484059432, '__ci_last_regenerate|i:1484059378;email|s:22:"crootbackbox@gmail.com";id|s:2:"11";nama_lengkap|s:19:"cakra aji wicaksono";username|s:7:"khalifa";');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
`id_cart` int(11) NOT NULL,
  `no_invoice` varchar(30) NOT NULL,
  `order_code` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `num_qty` int(11) NOT NULL,
  `num_price` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`id_category` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `category`, `slug`) VALUES
(1, 'AC', 'ac'),
(2, 'TV', 'tv'),
(3, 'HP', 'hp'),
(4, 'KOMPUTER', 'komputer'),
(5, 'MesinCuci', 'mesincuci'),
(6, 'RADIO', 'radio'),
(7, 'KipasAngin', 'kipasangin'),
(8, 'DVD', 'dvd'),
(10, 'MONITOR', 'monitor'),
(11, 'SOUND', 'sound'),
(12, 'LAPTOP', 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE IF NOT EXISTS `tbl_checkout` (
`id_checkout` bigint(20) NOT NULL,
  `no_invoice` varchar(30) NOT NULL,
  `order_code` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `nama_penerima` varchar(35) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `courier` varchar(3) NOT NULL,
  `bank` text NOT NULL,
  `order_date` date NOT NULL,
  `send_date` date NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
`id_products` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_products` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id_products`, `id_category`, `id_user`, `name_products`, `slug`, `kategori`, `description`, `qty`, `kondisi`, `berat`, `price`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(28, 1, 13, 'ac panasonic', 'ac-panasonic', 'ac', 'ac panasonic seken rasa baru', 10, 'sec', '12', 2000000, './assets/img/products/2017-01-13/toko barokah/e8922a6207cf30ea76db8782181f8066.jpg', '', '', '', ''),
(29, 8, 13, 'dvd player samsung', 'dvd-player-samsung', 'dvd player', 'dvd player masih mulus like new !!', 5, 'sec', '1000', 300000, './assets/img/products/2017-01-13/toko barokah/710011c5d21d506d980f4b0c26c9e578.jpg', '', '', '', ''),
(31, 3, 13, 'samsung s7 edge', 'samsung-s7-edge', 'hp', 'samsung s7 edge 32gb gold', 20, 'new', '600', 10000000, './assets/img/products/2017-01-13/toko barokah/12e75202f3a6c8ff31bf54af70e2d898.jpg', '', '', '', ''),
(32, 7, 13, 'kipas angim maspion', 'kipas-angim-maspion', 'kipas angi', 'kipas angin maspion asli buatan indonesia', 100, 'new', '400', 300000, './assets/img/products/2017-01-13/toko barokah/4bdcbb34a04644e8b62071dc857190f7.jpg', '', '', '', ''),
(33, 4, 13, 'CPU Gaming brand lenovo', 'cpu-gaming-brand-lenovo', 'komputer', 'Mobo: ASRock H110M-HDV (2xDDR4-2133, 4xSATA3, 6xUSB 3.0/2.0 Rear)\r\nProcie: Intel Core i3-6100 (4xHT 3,7GHz Skylake)\r\nGraphics: Sapphire Radeon R7 240 2GB GDDR5 128bit\r\nRAM: Corsair Value 8GB PC-17000 DDR4-2133\r\nHDD: 1TB\r\nPSU: PowerLogic Magnum Pro 450W\r\nCase: Armageddon Vulcan V1X / VenomRX Warlord (USB 3.0', 1, 'sec', '12000', 5500000, './assets/img/products/2017-01-13/toko barokah/cf7c569a795b75173090998a662e7d6c.jpg', '', '', '', ''),
(34, 12, 13, 'leptop tosiba', 'leptop-tosiba', 'leptop', 'Layar 14 Inchi\r\nProcessor Celeron Dual-core 1.6 GHz\r\nMemori Harddisk 320 GB\r\nMemori RAM 2 GB\r\nWebcam\r\nHDMI\r\nUSB 2.0', 2, 'sec', '1000', 2800000, './assets/img/products/2017-01-13/toko barokah/ba0ee8cf9c527ceebb6c0cfe9a9b1b32.jpg', '', '', '', ''),
(36, 5, 13, 'mesin cuci', 'mesin-cuci', 'mesin cuci', 'mesin cuci masih mulu dan bagus', 1, 'sec', '10000', 500000, './assets/img/products/2017-01-13/toko barokah/f4f3ded02c3b6389817012193db7fd48.jpg', '', '', '', ''),
(37, 10, 13, 'monitor acer gaming', 'monitor-acer-gaming', 'monitor', 'resolusi 2560 x 1440, 27-inch WQHD, 144Hz, HDMI, Display Port, G-Sync', 10, 'new', '1000', 8000000, './assets/img/products/2017-01-13/toko barokah/730c50e556545f578c1c84f1c72f6477.png', '', '', '', ''),
(38, 6, 13, 'radio', 'radio', 'radio', 'radio antik', 15, 'sec', '300', 100000, './assets/img/products/2017-01-13/toko barokah/c9faba1dc733d445d83d4fdb337d7844.jpg', '', '', '', ''),
(39, 11, 13, 'sound sistem', 'sound-sistem', 'sound', 'sound sistem rakitan', 2, 'sec', '2000', 350000, './assets/img/products/2017-01-13/toko barokah/5cc11e2f5a8860524a1c4f62733d26e6.jpg', '', '', '', ''),
(40, 2, 13, 'TV LED sanyo', 'tv-led-sanyo', 'tv', 'tv kualitas jos harga murah', 10, 'new', '3000', 2000000, './assets/img/products/2017-01-13/toko barokah/3564604fc1f65768868c2e0b62b92939.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `ip_address` varchar(35) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `nama_lengkap`, `gender`, `alamat`, `ip_address`, `user_agent`) VALUES
(13, 'toko barokah', 'tokobarokah@gmail.com', '6c3975195b76b5de2d801a639d9d6cae', 'syaifur rohman', 0, 'jl. pahlawan mlonggo jepara', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
 ADD PRIMARY KEY (`id_cart`), ADD KEY `id_products` (`id_products`,`buyer`), ADD KEY `id_user` (`buyer`), ADD KEY `seller` (`seller`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
 ADD PRIMARY KEY (`id_checkout`), ADD KEY `id_products` (`id_products`,`seller`,`buyer`), ADD KEY `seller` (`seller`), ADD KEY `buyer` (`buyer`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
 ADD PRIMARY KEY (`id_products`), ADD KEY `id_category` (`id_category`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
MODIFY `id_checkout` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
