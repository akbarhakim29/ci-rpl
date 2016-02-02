-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2013 at 11:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`ID_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'staff', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `baranglelang`
--

CREATE TABLE IF NOT EXISTS `baranglelang` (
  `nomorlelang` varchar(20) NOT NULL,
  `namalelang` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `hargalelang` varchar(30) NOT NULL,
  `waktuawal` date NOT NULL,
  `waktuakhir` date NOT NULL,
  PRIMARY KEY (`nomorlelang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baranglelang`
--

INSERT INTO `baranglelang` (`nomorlelang`, `namalelang`, `deskripsi`, `hargalelang`, `waktuawal`, `waktuakhir`) VALUES
('01/01/11/2013', 'kopi aneh', 'aselole', '20-30 juta', '2013-12-12', '2013-12-19'),
('02/01/11/2013', 'Kursi dan Meja', 'uapik', '30-40 jutaan', '2013-12-10', '2013-12-11'),
('03/01/11/2013', 'kopi aceh', 'enak,bergizi', '20-30 juta', '2013-12-11', '2013-12-15'),
('04/01/11/2013', 'Biji Kopi Papua Wamena', 'yes,10 ton', '20-40 juta', '2013-12-12', '2013-12-26'),
('05/01/11/2013', 'Kopi luwak', '1 ton .\r\nbiji luwak asli.\r\nhitam dan harum', '40-50 juta', '2013-12-12', '2013-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `historimember`
--

CREATE TABLE IF NOT EXISTS `historimember` (
  `nomorlelang` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `namalelang` varchar(20) NOT NULL,
  `tawaran` varchar(30) NOT NULL,
  `desk_tawaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`nomorlelang`,`username`,`npwp`),
  KEY `username` (`username`),
  KEY `npwp` (`npwp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historimember`
--

INSERT INTO `historimember` (`nomorlelang`, `username`, `nama_perusahaan`, `npwp`, `namalelang`, `tawaran`, `desk_tawaran`, `gambar`, `keterangan`) VALUES
('01/01/11/2013', 'memb', 'pt. a', '1123', 'kopi aneh', '200000', 'coba', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0101112013_tes.jpg', ''),
('01/01/11/2013', 'tes', 'pt. b', '2345', 'kopi aneh', '11000000', 'tes', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0101112013_tes1.jpg', ''),
('01/01/11/2013', 'wazza', 'PT. Maju Jaya', '12.222.233.3-202.000', 'kopi aneh', '200000000', 'Kopi dari biji asli.', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0101112013_wazza.jpg', 'pemenang'),
('03/01/11/2013', 'memb', 'pt. a', '1123', 'kopi aceh', '200000000', 'yes ,uenak nikmat', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0301112013_memb.jpg', ''),
('03/01/11/2013', 'tes', 'pt. b', '2345', 'kopi aceh', '100000', 'enak jos', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0301112013_tes2.jpg', 'pemenang'),
('03/01/11/2013', 'wazza', 'PT. Maju Jaya', '12.222.233.3-202.000', 'kopi aceh', '100000', 'tes', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0301112013_wazza2.jpg', ''),
('04/01/11/2013', 'memb', 'pt. a', '1123', 'Biji Kopi Papua Wame', '100000', 'tes', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0401112013_memb.jpg', ''),
('05/01/11/2013', 'wazza', 'PT. Maju Jaya', '12.222.233.3-202.000', 'Kopi luwak', '100000', 'enak, bergizi', 'C:/xampp/htdocs/ci-rpl/uploads/gambar_0501112013_wazza.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` int(20) NOT NULL,
  `faxsimile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_pengurus` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  PRIMARY KEY (`username`,`npwp`),
  KEY `npwp` (`npwp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `npwp`, `nama_perusahaan`, `alamat`, `provinsi`, `kota`, `kode_pos`, `telepon`, `faxsimile`, `email`, `nama_pengurus`, `jabatan`, `file_upload`) VALUES
('memb', 'memb', '1123', 'pt. a', 'jalan indah raya', 'pilih propinsi', '112', '65666', 0, '', '', 'oooo', '', ''),
('tes', 'tes', '2345', 'pt. b', 'jalanan', '', '', '', 0, '', '', '', '', ''),
('tesfile', 'file', '1111', '', '', 'pilih propinsi', 'pilih kota', '', 0, '', '', '', '', 'C:/xampp/htdocs/ci-rpl/uploads/file_tesfile.rar'),
('wazza', 'kimkim', '12.222.233.3-202.000', 'PT. Maju Jaya', 'JL.suprapto no.22', 'Jawa Timur', '411', '61200', 2147483647, '12345', 'golden_road14@yahoo.co.id', 'akbar hakim', 'CEO', 'C:/xampp/htdocs/ci-rpl/uploads/file_wazza.rar');

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE IF NOT EXISTS `waitinglist` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `telepon` int(20) NOT NULL,
  `faxsimile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_pengurus` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  PRIMARY KEY (`username`,`npwp`),
  KEY `npwp` (`npwp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`username`, `password`, `npwp`, `nama_perusahaan`, `alamat`, `provinsi`, `kota`, `kode_pos`, `telepon`, `faxsimile`, `email`, `nama_pengurus`, `jabatan`, `file_upload`) VALUES
('aku', 'ini', '134', 'la', 'lala', '111', '111', '', 0, '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historimember`
--
ALTER TABLE `historimember`
  ADD CONSTRAINT `historimember_ibfk_2` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historimember_ibfk_3` FOREIGN KEY (`npwp`) REFERENCES `member` (`npwp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historimember_ibfk_4` FOREIGN KEY (`nomorlelang`) REFERENCES `baranglelang` (`nomorlelang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
