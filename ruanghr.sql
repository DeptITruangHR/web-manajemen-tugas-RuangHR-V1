-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 04:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruanghr`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'IT'),
(2, 'Jurnalis'),
(3, 'Entry Data'),
(4, 'Graphic Design'),
(5, 'Content Creator'),
(6, 'Digital Marketing'),
(7, 'Social Media Development'),
(8, 'Social Media Assistant'),
(9, 'Data Analist');

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(512) NOT NULL,
  `sts_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`, `sts_grup`) VALUES
(1, 'Management', 1),
(2, 'HRD', 1),
(3, 'Staff', 1),
(4, 'Leader', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `id_grup`, `id_user`, `id_departemen`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 1),
(3, 3, 3, 1),
(4, 3, 4, 1),
(5, 4, 7, 1),
(6, 3, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `notulensi`
--

CREATE TABLE `notulensi` (
  `id_notulensi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `subject` text NOT NULL,
  `detail` text NOT NULL,
  `kode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notulensi`
--

INSERT INTO `notulensi` (`id_notulensi`, `id_member`, `tanggal`, `subject`, `detail`, `kode`) VALUES
(1, 3, '2021-07-14', 'Rapat Anggota Mobile', 'Rapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabatRapat ini merupakan salah satu anjuran bagi semua anggota mobile untuk tetap mau bersemangat menjungjung tinggi harkat dan martabat', 'c7c4137ec47601e8fb35571821b0c294'),
(2, 3, '2021-07-23', 'Rapat Anggota Mobile 2', 'Ini merupakan rapat kedua anggota mobile', '95cc51db7d80e2021331ecbbcd847d9b'),
(3, 3, '2021-07-13', 'Rapat Anggota Mobile LokerBee', 'Ini merupakan sebuah hasil rapat tim mobile', '8bad08ab1eb17d133714d8ca2f5b154d'),
(4, 4, '2021-07-13', 'Rapat Anggota Website', 'Ini merupakan sebuah detail dari rapat malam iniIni merupakan sebuah detail dari rapat malam iniIni merupakan sebuah detail dari rapat malam ini', '671ad3c82b4b46f78a23130ea0a0b0d2'),
(5, 5, '2021-07-12', 'Notulensi Leader', 'Ini sebuah detail yang bmerpakan hasil rapat', '2b1b4f4ae06747de2bc6491b2b40f816');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `pekerjaan` varchar(2048) NOT NULL,
  `detail` text NOT NULL,
  `file` varchar(2048) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deadline` date NOT NULL,
  `kode` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `id_member`, `pekerjaan`, `detail`, `file`, `link`, `date`, `deadline`, `kode`, `status`) VALUES
(1, 3, 'Pekerjaan 1', 'Ini sebuah data Deskripsi Data', 'website-mockup.png', 'https://www.thg.com/', '2021-07-14 07:26:35', '0000-00-00', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(2, 3, 'Pekerjaan 2', 'Ini sebuah data Deskripsi Data', 'website-mockup.png', 'https://www.thg.com/', '2021-07-14 07:26:38', '2021-07-14', 'c81e728d9d4c2f636f067f89cc14862c', 0),
(3, 3, 'Pekerjaan 4', 'Ini sebuah data Deskripsi Data', 'bedroom.png', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-15 13:18:07', '0000-00-00', '726a81a1804186e42f8b4dc593a18a7d', 0),
(4, 3, 'Pekerjaan 3', 'Ini sebuah data Deskripsi Data', 'spektogram.PNG', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-15 13:18:10', '0000-00-00', '726a81a1804186d42f8b4dc593a18a7d', 0),
(5, 3, 'Mencoba Sebuah Fitur', 'ini sebuah percobaan deskripsi kembali', 'tampak depan.png', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-13 12:24:07', '0000-00-00', '98afb0fb0607278c5a7257b82f6788b7', 2),
(6, 4, 'Mencoba Sebuah Fitur Upload', 'Ini sebuah deskripsi tugas yaaa', 'tampak depan.png', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-14 07:26:30', '0000-00-00', 'd925bb6dbddaa3c792972eaa48e0a3b5', 0),
(7, 5, 'Belajar Menjadi Ledaer', 'Ini merupakan sebuah tugas yang diberikan oleh pak suandi', 'kitchen.png', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-13 15:57:40', '0000-00-00', '97eb10ed9cbd82b363e84bae8e906fb6', 2),
(8, 5, 'Menjadi Leader Yang baik', 'Ini merupakan sebuah tugas yang diberikan oleh pak suandi', 'bedroom.png', 'https://ianfelixjoanthanSimanjuntak.com', '2021-07-13 15:28:21', '0000-00-00', 'bdb61ceeb8b473e7c7feabd4c00fd9d7', 2),
(9, 4, 'Mencoba Sebuah Fitur', 'Carilah Sebuah fitur yang ada didalam masyarakat', NULL, NULL, '2021-07-13 16:49:28', '1970-01-01', '7d0ef8fe0d9b2300524c35c1291188ff', 1),
(10, 5, 'Sanitasi Data Website', 'Sanitasi data data yang ada di website', NULL, NULL, '2021-07-14 07:17:58', '2021-07-19', '9eaed191ffa11c574a6085e66c0f8652', 1),
(11, 3, 'Coba cari artikel baru', 'blabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdskblabvcakjdfhoasfhjdsk', 'ba628ee0f0eb51934c068e83234f95d6.png', 'https://www.thg.com/', '2021-07-15 13:18:17', '2021-07-29', '19d81e05a6975e6e4ab90e9971572fe0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL,
  `nama_user` varchar(512) DEFAULT NULL,
  `nomor_telepon` varchar(512) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `sts_user` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `nomor_telepon`, `alamat`, `sts_user`) VALUES
(1, 'testingManagement', '202cb962ac59075b964b07152d234b70', 'testingManagement', NULL, NULL, 1),
(2, 'testingHrd', '202cb962ac59075b964b07152d234b70', 'testingHrd', '082389234133', 'Alamat saya dijalan ini sumatera utara', 1),
(3, 'testingStaff', '202cb962ac59075b964b07152d234b70', 'Ian Felix Jonathan Simanjuntak', '0895611287772', 'Kompleks Perumahan PT.RAPP TownSite1 DM 35 A, Pangkalan Kerinci, Pekanbaru, Riau', 1),
(4, 'testingStaff2', '202cb962ac59075b964b07152d234b70', 'Calvin Simatupang', '089561128777', 'Jalan Kebangsaan Timur No 13 Jakarta Pusat, DKI Jakarta', 1),
(7, 'testingLeader', '202cb962ac59075b964b07152d234b70', 'testingLeader', '081273267734', 'Jalan Kebangsaan timur no 16 angkasa pura jakarta bagian mana', 1),
(8, 'zeldaSibuea', '202cb962ac59075b964b07152d234b70', 'Zelda Elma Sibuea', '082389234133', 'Jalan Sisingamangaraja no 18 Balige, Sumatera Utara', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `notulensi`
--
ALTER TABLE `notulensi`
  ADD PRIMARY KEY (`id_notulensi`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notulensi`
--
ALTER TABLE `notulensi`
  MODIFY `id_notulensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
