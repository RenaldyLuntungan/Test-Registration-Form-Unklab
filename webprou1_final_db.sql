-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2019 at 10:54 PM
-- Server version: 5.7.28-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprou1_final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

CREATE TABLE `collages` (
  `id_collages` int(11) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `tribe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_num` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `home_address` text NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_program` varchar(255) NOT NULL,
  `school_telephone` varchar(255) NOT NULL,
  `school_address` text NOT NULL,
  `school_postal` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_mobile` varchar(255) NOT NULL,
  `father_email` varchar(255) NOT NULL,
  `father_education` varchar(255) NOT NULL,
  `father_religion` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_mobile` varchar(255) NOT NULL,
  `mother_email` varchar(255) NOT NULL,
  `mother_education` varchar(255) NOT NULL,
  `mother_religion` varchar(255) NOT NULL,
  `date_submit` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collages`
--

INSERT INTO `collages` (`id_collages`, `reg_num`, `nik`, `full_name`, `birthplace`, `dob`, `gender`, `blood`, `tribe`, `email`, `telephone_num`, `mobile_num`, `status`, `religion`, `home_address`, `postal_code`, `school_name`, `school_program`, `school_telephone`, `school_address`, `school_postal`, `father_name`, `father_mobile`, `father_email`, `father_education`, `father_religion`, `mother_name`, `mother_mobile`, `mother_email`, `mother_education`, `mother_religion`, `date_submit`) VALUES
(1, '101001', '7172052604980001', 'Renaldy Louis Luntungan', 'Manado', '1998-04-26', 'M', 'O', 'Minahasa', 'renaldylouisluntungan@gmail.com', '80555', '081243467912', 'Single', 'Christian Protestant', 'Sagerat', '95546', 'SMA N 1 Bitung', 'IPA', '21384', 'Girian', '95543', 'Walter G.I.U. Luntungan', '085240218910', 'walter@gmail.com', 'S1', 'Christian Protestant', 'Deiby E. Makarau', '085240387868', 'deiby@gmail.com', 'Highschool', 'Christian Protestant', '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_collages` int(11) NOT NULL,
  `gelombang` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `paralel_bahasa_ing` varchar(255) NOT NULL,
  `waktu_bahasa_ing` varchar(255) NOT NULL,
  `tempat_bahasa_ing` varchar(255) NOT NULL,
  `paralel_matematika` varchar(255) NOT NULL,
  `waktu_matematika` varchar(255) NOT NULL,
  `tempat_matematika` varchar(255) NOT NULL,
  `paralel_kesehatan` varchar(255) NOT NULL,
  `waktu_kesehatan` varchar(255) NOT NULL,
  `tempat_kesehatan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_collages`, `gelombang`, `tanggal`, `paralel_bahasa_ing`, `waktu_bahasa_ing`, `tempat_bahasa_ing`, `paralel_matematika`, `waktu_matematika`, `tempat_matematika`, `paralel_kesehatan`, `waktu_kesehatan`, `tempat_kesehatan`) VALUES
(1, 1, '1', '21/05/2020', 'A', '09:00', 'GA-201', 'A', '13:00', 'GK1-101', 'A', '11:00', 'GK1-204');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id_operator` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id_operator`, `username`, `password`) VALUES
(1, 'Renaldy', '$2y$10$gE3SuQ967bFYNS31qwyNROoCobsP/1lXkePcJ6/h3EqtdVb39wQMe');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_collages` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status_transaksi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_collages`, `order_id`, `status_transaksi`) VALUES
(1, 1, '', 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id_collages`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id_collages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
