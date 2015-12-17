-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 05:22 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bpjs`
--

CREATE TABLE IF NOT EXISTS `daftar_bpjs` (
  `no_bpjs` int(100) NOT NULL AUTO_INCREMENT,
  `no_kk` int(100) NOT NULL,
  `no_pegawai` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`no_bpjs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `daftar_bpjs`
--

INSERT INTO `daftar_bpjs` (`no_bpjs`, `no_kk`, `no_pegawai`, `created_at`) VALUES
(1, 2147483647, 351037, '2015-12-12 17:03:36'),
(3, 123723534, 354567, '2015-12-12 17:05:55'),
(6, 2147483647, 354545, '2015-12-12 17:13:08'),
(7, 123723534, 817837123, '2015-12-12 17:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `kartukk`
--

CREATE TABLE IF NOT EXISTS `kartukk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` int(99) NOT NULL,
  `nama_kk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(99) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kartukk`
--

INSERT INTO `kartukk` (`id`, `no_kk`, `nama_kk`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(1, 2147483647, 'Adi Nurlemma', 'Kutoarjo ', 3, 5, 'Bayan', 'Bayan', 'Purworejo', 'Jawa Tengah', 54222),
(2, 0, '', '', 0, 0, '', '', '', '', 0),
(3, 123723534, 'Pinto Anugrah', 'Padang', 5, 5, 'Padang', 'Padang', 'Padang', 'Sumatera Barat', 77473);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jenis_kelamin`, `tgl_lahir`, `jabatan`) VALUES
(351037, 'Adi Nurlemma', 'pria', '1995-11-15', 'IA'),
(354567, 'Dhanar Januardhi K', 'pria', '1995-01-28', 'IA'),
(354545, 'Hesti Kukuh', 'pria', '1994-11-15', 'IA'),
(817837123, 'Pinto Anugrah', 'pria', '1990-01-11', 'IA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
