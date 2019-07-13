-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 06:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mproduklab`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `ID` int(11) NOT NULL,
  `KODE_PRODUK` char(9) DEFAULT NULL,
  `NAMA_PRODUK` varchar(55) DEFAULT NULL,
  `KODE_SATUAN` varchar(5) DEFAULT NULL,
  `HARGA_DASAR` double DEFAULT NULL,
  `DISKON_UMUM` double NOT NULL,
  `DISKON_BPJS` double NOT NULL,
  `HARGA_JUAL_UMUM` double DEFAULT NULL,
  `HARGA_JUAL_BPJS` double DEFAULT NULL,
  `HARGA_JUAL_MEDIS` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`ID`, `KODE_PRODUK`, `NAMA_PRODUK`, `KODE_SATUAN`, `HARGA_DASAR`, `DISKON_UMUM`, `DISKON_BPJS`, `HARGA_JUAL_UMUM`, `HARGA_JUAL_BPJS`, `HARGA_JUAL_MEDIS`) VALUES
(1, 'PRLA00001', 'Albumin', '', 20000, 0, 0, 20000, 20000, 25000),
(2, 'PRLA00002', 'Bilirubin', NULL, 32000, 0, 0, 32000, 32000, NULL),
(3, 'PRLA00003', 'Colesterol', '', 24000, 0, 0, 24000, 24000, NULL),
(4, 'PRLA00004', 'Creatinin', '', 25000, 0, 0, 25000, 25000, NULL),
(37, 'PRLA00035', 'CT Scan', 'Paket', 0, 0, 0, 40000, 30000, NULL),
(6, 'PRLA00006', 'Darah Rutin', '', 45000, 0, 0, 45000, 45000, NULL),
(8, 'PRLA00008', 'Faeces Rutin', '', 25000, 0, 0, 25000, 25000, NULL),
(9, 'PRLA00009', 'Globulin', NULL, 22000, 0, 0, 22000, 22000, NULL),
(10, 'PRLA00010', 'Hapusan DR Tepi', '', 60000, 0, 0, 60000, 60000, NULL),
(11, 'PRLA00011', 'HBsAg Rapid', '', 35000, 0, 0, 35000, 35000, NULL),
(12, 'PRLA00012', 'HDL Colesterol', '', 26000, 0, 0, 26000, 26000, NULL),
(13, 'PRLA00013', 'Hematokrit', '', 15000, 0, 0, 15000, 15000, NULL),
(14, 'PRLA00014', 'Hemoglobin', '', 15000, 0, 0, 15000, 15000, NULL),
(15, 'PRLA00015', 'Hitung Jenis', '', 15000, 0, 0, 15000, 15000, NULL),
(16, 'PRLA00016', 'LDL Colesterol', NULL, 27500, 0, 0, 27500, 27500, NULL),
(17, 'PRLA00017', 'LED', '', 13000, 0, 0, 13000, 13000, NULL),
(18, 'PRLA00018', 'Lekosit', '', 13000, 0, 0, 13000, 13000, NULL),
(19, 'PRLA00019', 'Malaria', '', 35000, 0, 0, 35000, 35000, NULL),
(20, 'PRLA00020', 'PH Urin', '', 11000, 0, 0, 11000, 11000, NULL),
(21, 'PRLA00021', 'Protein Urin', '', 11000, 0, 0, 11000, 11000, NULL),
(22, 'PRLA00022', 'Reduksi Urin', '', 11500, 0, 0, 11500, 11500, NULL),
(23, 'PRLA00023', 'SGOT', '', 23000, 0, 0, 23000, 23000, NULL),
(24, 'PRLA00024', 'SGPT', '', 23000, 0, 0, 23000, 23000, NULL),
(25, 'PRLA00025', 'TBICT', NULL, 122500, 0, 0, 122500, 122500, NULL),
(26, 'PRLA00026', 'Total Protein', NULL, 20000, 0, 0, 20000, 20000, NULL),
(27, 'PRLA00027', 'Trigliserida', '', 25000, 0, 0, 25000, 25000, NULL),
(28, 'PRLA00028', 'Trombosit', '', 17000, 0, 0, 17000, 17000, NULL),
(29, 'PRLA00029', 'Ureum', '', 25000, 0, 0, 25000, 25000, NULL),
(30, 'PRLA00030', 'Uric Acid', NULL, 23500, 0, 0, 23500, 23500, NULL),
(31, 'PRLA00031', 'Urin Rutin', '', 25000, 0, 0, 25000, 25000, NULL),
(32, 'PRLA00032', 'VDRL', NULL, 52000, 0, 0, 52000, 52000, NULL),
(33, 'PRLA00033', 'Widal', '', 41000, 0, 0, 41000, 41000, NULL),
(34, 'PRLA00034', 'Gula Darah', NULL, 15000, 0, 0, 15000, 15000, NULL),
(38, 'PRLA00038', 'HBsAg Titer', '', 35000, 0, 0, 35000, 35000, NULL),
(40, 'PRLA00039', 'Test Kehamilan', '', 15000, 0, 0, 15000, 15000, NULL),
(41, 'PRLA00041', 'Test Golongan Darah', '', 10000, 0, 0, 10000, 10000, NULL),
(42, 'PRLA00042', 'Test Goldar', '', 10000, 0, 0, 10000, 10000, NULL),
(43, 'PRLA00043', 'DR + LED', '', 55000, 0, 0, 55000, 55000, NULL),
(44, 'PRLA00044', 'CTBT TEST', '-', 15000, 0, 10, 15000, 15000, NULL),
(48, '087', 'TEST4', 'Strip', 20000, 0, 0, 20000, 15000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'kosmetik'),
(2, 'Makanan'),
(3, 'Minuman'),
(4, 'Makanan Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `mproduklab_template`
--

CREATE TABLE `mproduklab_template` (
  `ID` int(11) NOT NULL,
  `ID_TEMPLATE` int(11) DEFAULT NULL,
  `KODE_PRODUK` varchar(255) DEFAULT NULL,
  `ITEM_PEMERIKSAAN` varchar(255) DEFAULT NULL,
  `NILAI_NORMAL_LD` varchar(255) DEFAULT NULL,
  `NILAI_NORMAL_LA` varchar(255) DEFAULT NULL,
  `NILAI_NORMAL_PD` varchar(255) DEFAULT NULL,
  `NILAI_NORMAL_PA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mproduklab_template`
--

INSERT INTO `mproduklab_template` (`ID`, `ID_TEMPLATE`, `KODE_PRODUK`, `ITEM_PEMERIKSAAN`, `NILAI_NORMAL_LD`, `NILAI_NORMAL_LA`, `NILAI_NORMAL_PD`, `NILAI_NORMAL_PA`) VALUES
(1, NULL, '', NULL, NULL, NULL, NULL, NULL),
(2, NULL, '', NULL, NULL, NULL, NULL, NULL),
(3, NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(13) NOT NULL,
  `nm_pasien` varchar(100) DEFAULT NULL,
  `ttl` time(6) DEFAULT NULL,
  `bpjs` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `produk`
-- (See below for the actual view)
--
CREATE TABLE `produk` (
`KODE_PRODUK` char(9)
,`KODE_SATUAN` varchar(5)
,`NAMA_PRODUK` varchar(55)
,`HARGA_DASAR` double
,`DISKON_UMUM` double
,`HARGA_JUAL_UMUM` double
,`DISKON_BPJS` double
,`HARGA_JUAL_BPJS` double
,`ITEM_PEMERIKSAAN` varchar(255)
,`NILAI_NORMAL_LD` varchar(255)
,`NILAI_NORMAL_LA` varchar(255)
,`NILAI_NORMAL_PD` varchar(255)
,`NILAI_NORMAL_PA` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `subkategori_nama` varchar(50) NOT NULL,
  `subkategori_kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`subkategori_id`, `subkategori_nama`, `subkategori_kategori_id`) VALUES
(1, 'face wash', 1),
(2, 'lipstik', 1),
(3, 'Minuman dingin', 2),
(4, 'Minuman Hangat', 2),
(5, 'makan malam', 3),
(6, 'makan siang', 3);

-- --------------------------------------------------------

--
-- Structure for view `produk`
--
DROP TABLE IF EXISTS `produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `produk`  AS  select `data_obat`.`KODE_PRODUK` AS `KODE_PRODUK`,`data_obat`.`KODE_SATUAN` AS `KODE_SATUAN`,`data_obat`.`NAMA_PRODUK` AS `NAMA_PRODUK`,`data_obat`.`HARGA_DASAR` AS `HARGA_DASAR`,`data_obat`.`DISKON_UMUM` AS `DISKON_UMUM`,`data_obat`.`HARGA_JUAL_UMUM` AS `HARGA_JUAL_UMUM`,`data_obat`.`DISKON_BPJS` AS `DISKON_BPJS`,`data_obat`.`HARGA_JUAL_BPJS` AS `HARGA_JUAL_BPJS`,`mproduklab_template`.`ITEM_PEMERIKSAAN` AS `ITEM_PEMERIKSAAN`,`mproduklab_template`.`NILAI_NORMAL_LD` AS `NILAI_NORMAL_LD`,`mproduklab_template`.`NILAI_NORMAL_LA` AS `NILAI_NORMAL_LA`,`mproduklab_template`.`NILAI_NORMAL_PD` AS `NILAI_NORMAL_PD`,`mproduklab_template`.`NILAI_NORMAL_PA` AS `NILAI_NORMAL_PA` from (`data_obat` left join `mproduklab_template` on((`data_obat`.`ID` = `mproduklab_template`.`ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `KODE_PRODUK` (`KODE_PRODUK`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `mproduklab_template`
--
ALTER TABLE `mproduklab_template`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TEMPLATE` (`ID_TEMPLATE`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkategori_id`),
  ADD KEY `kategori_id` (`subkategori_kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mproduklab_template`
--
ALTER TABLE `mproduklab_template`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
