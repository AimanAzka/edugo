-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2016 pada 03.25
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `edugo`
--
CREATE DATABASE IF NOT EXISTS `edugo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `edugo`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE IF NOT EXISTS `detail_pemesanan` (
  `id_belajar` varchar(7) NOT NULL,
  `id_tutor` varchar(6) NOT NULL,
  `id_murid` varchar(6) NOT NULL,
  `subjek` varchar(12) NOT NULL,
  `tingkat` varchar(6) NOT NULL,
  `total_bayar` varchar(9) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY (`id_belajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `id_murid` varchar(6) NOT NULL,
  `nama_lengkap_murid` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_foto` varchar(50) NOT NULL,
  `status_tutor` varchar(5) NOT NULL,
  PRIMARY KEY (`no_tlp`),
  KEY `nama_lengkap_murid` (`nama_lengkap_murid`,`tempat_lahir`,`tgl_lahir`,`email`,`provinsi`,`kota`,`alamat`,`tingkat`,`no_tlp`,`jenis_kelamin`,`password`,`nama_foto`),
  KEY `nama_lengkap_murid_2` (`nama_lengkap_murid`,`tempat_lahir`,`tgl_lahir`,`email`,`provinsi`,`kota`,`alamat`,`tingkat`,`no_tlp`,`jenis_kelamin`,`password`,`nama_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_lengkap_murid`, `tempat_lahir`, `tgl_lahir`, `email`, `provinsi`, `kota`, `alamat`, `tingkat`, `no_tlp`, `jenis_kelamin`, `password`, `nama_foto`, `status_tutor`) VALUES
('M00001', 'YusranPanca Putra', 'Curup', '1996-07-05', 'yusranpanca@gmail.co', 'jabar', 'bdg', 'AMB', 'mhs', '089656544435', 'pr', 'asdfg', 'images/foto/murid/pp1.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjadwalan`
--

CREATE TABLE IF NOT EXISTS `penjadwalan` (
  `id_jadwal` varchar(7) NOT NULL,
  `jadwal` varchar(7) NOT NULL,
  `id_pembelajaran` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `id_tutor` varchar(6) NOT NULL,
  `status` varchar(19) NOT NULL,
  `nama_lengkap_tutor` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `lulusan` varchar(20) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `keahlian` varchar(20) NOT NULL,
  `nama_berkas` varchar(40) NOT NULL,
  `nama_foto` varchar(50) NOT NULL,
  PRIMARY KEY (`no_tlp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `status`, `nama_lengkap_tutor`, `tempat_lahir`, `tgl_lahir`, `email`, `provinsi`, `kota`, `alamat`, `lulusan`, `tingkat`, `no_tlp`, `jenis_kelamin`, `password`, `keahlian`, `nama_berkas`, `nama_foto`) VALUES
('T00003', 'Terverifikasi', 'Anita Asiholan', 'Jakarta Utara', '2016-07-05', 'cc@cc.com', 'sumbar', 'bdg', 'cimahi', 'S1', '', '342342342323', 'wanita', 'admin', 'sejarah', 'images/berkas/3.jpg', 'images/foto/tutor/pp3.jpg'),
('T00004', 'Terverifikasi', 'Adi Nugroho', 'malang', '2016-07-14', 'ada@AFASF.COM', 'jabar', 'bdg', 'cc', 'S1', '', '34234324', 'pria', 'admin', 'biologi', 'images/berkas/4.jpg', 'images/foto/tutor/pp4.jpg'),
('T00006', 'Terverifikasi', 'Budi', 'bandung', '2016-07-11', 'aaaa@eee.com', 'sumbar', 'bdg', 'cibabat', 'S1', '', '343434343', 'pria', 'admin', 'kimia', 'images/berkas/7.jpg', 'images/foto/tutor/pp7.jpg'),
('T00002', 'Terverifikasi', 'Septika Nur D', 'Jakarta Barat', '2016-07-08', 'bb@bb.com', 'sumbar', 'bdg', 'jakarta', 'S1', '', '97887876767', 'wanita', '12345', 'kimia', 'images/berkas/2.jpg', 'images/foto/tutor/pp2.jpg'),
('T00001', 'Terverifikasi', 'Aditya K', 'cimahi', '2016-07-14', 'aa@aa.com', 'sumbar', 'bdg', 'cibabat', 'S1', '', 'admin', 'pria', '12345', 'biologi', 'images/berkas/1.jpg', 'images/foto/tutor/pp1.jpg'),
('T00005', 'Terverifikasi', 'sdfsdfd', 'sdfsdfsdf', '2016-07-06', 'dfdfdf@sfdsf.com', 'sumbar', 'bdg', 'afafdfdf', 'S1', '', 'sdsdsd', 'pria', '34234234', 'fisika', 'images/berkas/adi.jpg', 'images/foto/tutor/pp6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
