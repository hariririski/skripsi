-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 09:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('hariririski@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Hariririski');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(100) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `jumlah`, `id_kamar`) VALUES
(1, 'Ac Politron', 2, 'AGsNlp1iRkhe27qdmX0n'),
(2, 'Lemari Pakaian', 1, 'AGsNlp1iRkhe27qdmX0n'),
(3, 'TV', 1, 'AGsNlp1iRkhe27qdmX0n'),
(6, 'TV 32inc', 10, '90OU1XCh2q6n7gYysFmD'),
(8, 'Dispenser', 1, 'LRs1rjw8teYgkT9SDqCW'),
(9, 'TV', 1, 'LRs1rjw8teYgkT9SDqCW'),
(10, 'AC', 1, 'LRs1rjw8teYgkT9SDqCW'),
(11, 'Kulkas', 1, 'LRs1rjw8teYgkT9SDqCW'),
(12, 'Lemari', 1, 'LRs1rjw8teYgkT9SDqCW'),
(13, 'Kursi Tamu 1 set', 1, 'LRs1rjw8teYgkT9SDqCW'),
(14, 'Meja Makan Pasien', 1, 'LRs1rjw8teYgkT9SDqCW'),
(15, 'Kamar Mandi', 1, 'LRs1rjw8teYgkT9SDqCW'),
(16, 'Dispenser', 1, 'LRO9UrjkEb3p1z2GV04S'),
(17, 'TV', 1, 'LRO9UrjkEb3p1z2GV04S'),
(18, 'AC', 1, 'LRO9UrjkEb3p1z2GV04S'),
(19, 'Kulkas', 1, 'LRO9UrjkEb3p1z2GV04S'),
(20, 'Lemari', 1, 'LRO9UrjkEb3p1z2GV04S'),
(21, 'Full Set Kursi Tamu', 1, 'LRO9UrjkEb3p1z2GV04S'),
(22, 'Meja Makan Pasien', 1, 'LRO9UrjkEb3p1z2GV04S'),
(23, 'Kamar Mandi', 1, 'LRO9UrjkEb3p1z2GV04S'),
(24, 'TV', 1, 'vBryTuCGJhDbx5XZ37IA'),
(25, 'Kulkas', 1, 'vBryTuCGJhDbx5XZ37IA'),
(26, 'Lemari', 1, 'vBryTuCGJhDbx5XZ37IA'),
(27, 'Meja Makan Pasien', 1, 'vBryTuCGJhDbx5XZ37IA'),
(28, 'Kamar Mandi', 1, 'vBryTuCGJhDbx5XZ37IA'),
(29, 'TV', 1, 'SapwgGeUDTvP0Z2LMHJ9'),
(30, 'Kulkas', 1, 'SapwgGeUDTvP0Z2LMHJ9'),
(31, 'Lemari', 1, 'SapwgGeUDTvP0Z2LMHJ9'),
(32, 'Meja Makan Pasien', 1, 'SapwgGeUDTvP0Z2LMHJ9'),
(33, 'Kamar Mandi', 1, 'SapwgGeUDTvP0Z2LMHJ9'),
(34, 'TV', 1, 'J6tdsInYhRgUBN4eTPDx'),
(35, 'Kulkas', 1, 'J6tdsInYhRgUBN4eTPDx'),
(36, 'Lemari', 1, 'J6tdsInYhRgUBN4eTPDx'),
(37, 'Meja Makan Pasien', 1, 'J6tdsInYhRgUBN4eTPDx'),
(38, 'Kamar Mandi', 1, 'J6tdsInYhRgUBN4eTPDx'),
(39, 'Dispenser', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(40, 'TV', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(41, 'AC', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(42, 'Kulkas', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(43, 'Lemari', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(44, '1 Set Kursi Tamu', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(45, 'Meja Makan Pasien', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(46, 'Kamar Mandi', 1, 'dvOnmK8WhHuXNeoI7S3Q'),
(47, 'Dispenser', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(48, 'TV', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(49, 'AC', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(50, 'Kulkas', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(51, 'Lemari', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(52, 'Kursi Tamu 1 set', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(53, 'Meja Makan Pasien', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(54, 'Kamar Mandi', 1, 'sC6iWTSVKeGIOgbcdjEQ'),
(60, 'TV', 1, 'AT1V6nUjy0J7BZWRtkbH'),
(61, 'Kulkas', 1, 'AT1V6nUjy0J7BZWRtkbH'),
(62, 'Lemari', 1, 'AT1V6nUjy0J7BZWRtkbH'),
(63, 'Meja Makan Pasien', 1, 'AT1V6nUjy0J7BZWRtkbH'),
(64, 'Kamar Mandi', 1, 'AT1V6nUjy0J7BZWRtkbH'),
(65, 'TV', 1, 'vN2JQMFy4Zd79Ut8X3Hs'),
(66, 'Kulkas', 1, 'vN2JQMFy4Zd79Ut8X3Hs'),
(67, 'Lemari', 1, 'vN2JQMFy4Zd79Ut8X3Hs'),
(68, 'Meja Makan Pasien', 1, 'vN2JQMFy4Zd79Ut8X3Hs'),
(69, 'Kamar Mandi', 1, 'vN2JQMFy4Zd79Ut8X3Hs'),
(70, 'TV', 1, 'ZAeCPS0K3zowsB9paMuh'),
(71, 'Kulkas', 1, 'ZAeCPS0K3zowsB9paMuh'),
(72, 'Lemari', 1, 'ZAeCPS0K3zowsB9paMuh'),
(73, 'Meja Makan Pasien', 1, 'ZAeCPS0K3zowsB9paMuh'),
(74, 'Kamar Mandi', 1, 'ZAeCPS0K3zowsB9paMuh'),
(75, 'Kulkas', 1, 'BUo3HmZ7CPQSpXKeatvk'),
(76, 'Loker', 1, 'BUo3HmZ7CPQSpXKeatvk'),
(77, 'Meja Makan Pasien', 1, 'BUo3HmZ7CPQSpXKeatvk'),
(78, 'AC', 1, 'BUo3HmZ7CPQSpXKeatvk'),
(79, 'Kamar Mandi', 1, 'BUo3HmZ7CPQSpXKeatvk'),
(80, 'Kulkas', 1, 'qNekU4EaxQZjzc70PfVB'),
(81, 'Loker', 1, 'qNekU4EaxQZjzc70PfVB'),
(82, 'Meja Makan Pasien', 1, 'qNekU4EaxQZjzc70PfVB'),
(83, 'AC', 1, 'qNekU4EaxQZjzc70PfVB'),
(84, 'Kamar Mandi', 1, 'qNekU4EaxQZjzc70PfVB'),
(85, 'Loker', 1, 'FM47oq3WREnHvIpkjVhu'),
(86, 'Meja Makan Pasien', 5, 'FM47oq3WREnHvIpkjVhu'),
(87, 'Kamar Mandi', 1, 'FM47oq3WREnHvIpkjVhu'),
(89, 'Loker', 5, 'kS0LBualHgnObpdjxJce'),
(90, 'Meja Makan / Bed', 1, 'kS0LBualHgnObpdjxJce'),
(91, 'Kamar Mandi', 1, 'kS0LBualHgnObpdjxJce'),
(92, 'TV', 1, 'ZacTF7oqAKEIghdtykuY'),
(93, 'Kulkas', 1, 'ZacTF7oqAKEIghdtykuY'),
(94, 'Lemari', 1, 'ZacTF7oqAKEIghdtykuY'),
(95, 'Meja Makan', 1, 'ZacTF7oqAKEIghdtykuY'),
(96, 'Kamar Mandi', 1, 'ZacTF7oqAKEIghdtykuY'),
(98, 'TV', 1, '5WNsdMkpJ6OhC1enlUDo'),
(99, 'Kulkas', 1, '5WNsdMkpJ6OhC1enlUDo'),
(100, 'Lemari', 1, '5WNsdMkpJ6OhC1enlUDo'),
(101, 'Meja Makan Pasien', 1, '5WNsdMkpJ6OhC1enlUDo'),
(102, 'Kamar Mandi', 1, '5WNsdMkpJ6OhC1enlUDo'),
(103, 'TV', 1, 'nUX4Li7y2oqzpSc8HV96'),
(104, 'Kulkas', 1, 'nUX4Li7y2oqzpSc8HV96'),
(105, 'Lemari', 1, 'nUX4Li7y2oqzpSc8HV96'),
(106, 'Meja Makan Pasien', 1, 'nUX4Li7y2oqzpSc8HV96'),
(107, 'Kamar Mandi', 1, 'nUX4Li7y2oqzpSc8HV96'),
(108, 'Kulkas', 1, 'ZHhkM9ySAoYOXVeb25CB'),
(109, 'Loker', 1, 'ZHhkM9ySAoYOXVeb25CB'),
(110, 'Meja Makan Pasien', 1, 'ZHhkM9ySAoYOXVeb25CB'),
(111, 'AC', 1, 'ZHhkM9ySAoYOXVeb25CB'),
(112, 'Kamar Mandi', 1, 'ZHhkM9ySAoYOXVeb25CB'),
(113, 'Kulkas', 1, 'pgUzQya15qCTfLBWYlnK'),
(114, 'Loker', 1, 'pgUzQya15qCTfLBWYlnK'),
(115, 'Meja Makan Pasien', 1, 'pgUzQya15qCTfLBWYlnK'),
(116, 'AC', 1, 'pgUzQya15qCTfLBWYlnK'),
(117, 'Kamar Mandi', 1, 'pgUzQya15qCTfLBWYlnK'),
(118, 'Loker', 1, 'FqyH1zpDodmuKgJY8QWn'),
(119, 'Meja Makan Pasien', 1, 'FqyH1zpDodmuKgJY8QWn'),
(120, 'Kamar Mandi', 1, 'FqyH1zpDodmuKgJY8QWn'),
(121, 'Box Bayi', 3, 'FqyH1zpDodmuKgJY8QWn'),
(122, 'Loker', 1, '8Nh59srlqZ2kGQu4OK6B'),
(123, 'Meja Makan Pasien', 1, '8Nh59srlqZ2kGQu4OK6B'),
(124, 'Kamar Mandi', 1, '8Nh59srlqZ2kGQu4OK6B'),
(125, 'Box Bayi', 3, '8Nh59srlqZ2kGQu4OK6B'),
(126, 'Loker', 1, 'iXJ3KWem0PvfBANjlVqH'),
(127, 'Meja Makan Pasien', 1, 'iXJ3KWem0PvfBANjlVqH'),
(128, 'Kamar Mandi', 1, 'iXJ3KWem0PvfBANjlVqH'),
(129, 'Box Bayi', 3, 'iXJ3KWem0PvfBANjlVqH'),
(130, 'Loker', 1, 'YdVDCxo7R8hTApHPilty'),
(131, 'Meja Makan Pasien', 1, 'YdVDCxo7R8hTApHPilty'),
(132, 'Kamar Mandi', 1, 'YdVDCxo7R8hTApHPilty'),
(133, 'Loker', 1, 'peFMhHXjP98IkV0CU3is'),
(134, 'Meja Makan Pasien', 1, 'peFMhHXjP98IkV0CU3is'),
(135, 'Kamar Mandi', 1, 'peFMhHXjP98IkV0CU3is'),
(136, 'Loker', 1, 'm5UGu3wJe0k2j4ZgEV9t'),
(137, 'Meja Makan Pasien', 1, 'm5UGu3wJe0k2j4ZgEV9t'),
(138, 'Kamar Mandi', 1, 'm5UGu3wJe0k2j4ZgEV9t'),
(139, 'TV', 1, 'LzZH7NUi3roCwSRbqycQ'),
(140, 'Kulkas', 1, 'LzZH7NUi3roCwSRbqycQ'),
(141, 'Lemari', 1, 'LzZH7NUi3roCwSRbqycQ'),
(142, 'Meja Makan Pasien', 1, 'LzZH7NUi3roCwSRbqycQ'),
(143, 'Kamar Mandi', 1, 'LzZH7NUi3roCwSRbqycQ'),
(144, 'TV', 1, '0zBvVCbp4Z6OegTkl1jL'),
(145, 'Kulkas', 1, '0zBvVCbp4Z6OegTkl1jL'),
(146, 'Lemari', 1, '0zBvVCbp4Z6OegTkl1jL'),
(147, 'Meja Makan Pasien', 1, '0zBvVCbp4Z6OegTkl1jL'),
(148, 'Kamar Mandi', 1, '0zBvVCbp4Z6OegTkl1jL'),
(149, 'AC', 1, 'iPOskXq3aYMu7ZB2SzgR'),
(150, 'Kulkas', 1, 'iPOskXq3aYMu7ZB2SzgR'),
(151, 'Loker', 1, 'iPOskXq3aYMu7ZB2SzgR'),
(152, 'Meja Makan Pasien', 1, 'iPOskXq3aYMu7ZB2SzgR'),
(153, 'Kamar Mandi', 1, 'iPOskXq3aYMu7ZB2SzgR'),
(154, 'Kulkas', 1, 'vc2fkCqIQZs17pi8FKwU'),
(155, 'Loker', 1, 'vc2fkCqIQZs17pi8FKwU'),
(156, 'Meja Makan Pasien', 1, 'vc2fkCqIQZs17pi8FKwU'),
(157, 'AC', 1, 'vc2fkCqIQZs17pi8FKwU'),
(158, 'Kamar Mandi', 1, 'vc2fkCqIQZs17pi8FKwU'),
(159, 'Meja Makan Pasien', 7, 'LhWtrg35fkwMm0qzNEy6'),
(160, 'loker', 7, 'LhWtrg35fkwMm0qzNEy6'),
(161, 'Kamar Mandi', 2, 'LhWtrg35fkwMm0qzNEy6'),
(162, 'Meja Makan Pasien', 3, 'G2RElDiZcK8MIOWbzAS0'),
(163, 'Loker', 3, 'G2RElDiZcK8MIOWbzAS0'),
(164, 'AC', 2, 'SbLM8s1tpnmoGYjaPAHV'),
(165, 'Ventilator', 2, 'SbLM8s1tpnmoGYjaPAHV'),
(166, 'Monitor', 2, 'SbLM8s1tpnmoGYjaPAHV'),
(167, 'Infuce pum', 2, 'SbLM8s1tpnmoGYjaPAHV'),
(168, 'TV', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(169, 'Sofa Tamu 1 Set', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(170, 'Kamar Mandi', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(171, 'Rak', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(172, 'Lemari', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(173, 'AC', 1, 'wyvNO2mn3tQ0JiCExgqX'),
(174, 'TV', 1, 'tIlNUi5ydRZ34YTAEFjM'),
(175, 'AC', 1, 'tIlNUi5ydRZ34YTAEFjM'),
(176, 'Kamar Mandi', 1, 'tIlNUi5ydRZ34YTAEFjM'),
(177, 'Rak ', 2, 'tIlNUi5ydRZ34YTAEFjM'),
(178, 'Lemari', 2, 'tIlNUi5ydRZ34YTAEFjM'),
(179, 'TV', 1, 'zloidECLntgkKSBmN029'),
(180, 'AC', 1, 'zloidECLntgkKSBmN029'),
(181, 'Kamar Mandi', 1, 'zloidECLntgkKSBmN029'),
(182, 'Rak', 2, 'zloidECLntgkKSBmN029'),
(183, 'Lemari', 2, 'zloidECLntgkKSBmN029'),
(184, 'TV', 1, 'q4Z18PxvuaNphziEKFcX'),
(185, 'AC', 1, 'q4Z18PxvuaNphziEKFcX'),
(186, 'Kamar Mandi', 1, 'q4Z18PxvuaNphziEKFcX'),
(187, 'Rak', 2, 'q4Z18PxvuaNphziEKFcX'),
(188, 'Lemari', 2, 'q4Z18PxvuaNphziEKFcX'),
(189, 'AC', 2, 'ZmevzSd0Fr3PxRLMIo8b'),
(190, 'Kamar Mandi', 2, 'ZmevzSd0Fr3PxRLMIo8b'),
(191, 'Lemari', 7, 'ZmevzSd0Fr3PxRLMIo8b'),
(194, 'AC ', 2, 'enD935YRtTcIFVEAdHXz'),
(195, 'Kamar Mandi', 2, 'enD935YRtTcIFVEAdHXz'),
(196, 'Lemari', 2, 'enD935YRtTcIFVEAdHXz'),
(197, 'Lemari', 7, 'qEJSZVle9QyxtbGPAKzB'),
(198, 'Kamar Mandi', 1, 'qEJSZVle9QyxtbGPAKzB'),
(199, 'AC', 2, 'rpdw4jXN0bQocCZIey9h'),
(200, 'Kamar Mandi', 2, 'rpdw4jXN0bQocCZIey9h'),
(201, 'Lemari', 7, 'rpdw4jXN0bQocCZIey9h');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(5) NOT NULL,
  `nama_jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
(12, 'Laki-Laki'),
(13, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_rs`
--

CREATE TABLE `jenis_rs` (
  `id_jenis_rs` int(5) NOT NULL,
  `nama_jenis_rs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_rs`
--

INSERT INTO `jenis_rs` (`id_jenis_rs`, `nama_jenis_rs`) VALUES
(5, 'Rumah Sakit Ibu Dan Anak (RSIA)'),
(6, 'Rumah Sakit Jiwa (RSJ)'),
(4, 'Rumah Sakit Umum (RSU)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ruang`
--

CREATE TABLE `jenis_ruang` (
  `id_jenis_ruang` int(5) NOT NULL,
  `nama_jenis_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_ruang`
--

INSERT INTO `jenis_ruang` (`id_jenis_ruang`, `nama_jenis_ruang`) VALUES
(6, 'Anak'),
(7, 'Anak (Luka Bakar)'),
(11, 'Bedah'),
(31, 'CVCU/ICCU'),
(32, 'HCU'),
(28, 'ICU/RICU'),
(21, 'Infeksi'),
(24, 'Isolasi Air Borne'),
(26, 'Isolasi Imunisasi Menurun'),
(27, 'Isolasi Radioaktif'),
(25, 'Isolasi TB MDR'),
(16, 'Jantung'),
(20, 'JIwa'),
(10, 'Kandungan'),
(12, 'Kanker'),
(9, 'Kebidanan'),
(33, 'Kedokteran Nuklir'),
(18, 'Kulit dan Kelamin'),
(22, 'Luka Bakar'),
(13, 'Mata'),
(23, 'NAPZA'),
(29, 'NICU'),
(17, 'Orthopedi'),
(15, 'Paru'),
(8, 'Penyakit Dalam'),
(30, 'PICU'),
(19, 'Saraf'),
(14, 'THT'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kelas_kamar` int(5) NOT NULL,
  `id_kamar` varchar(100) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `id_ruang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kelas_kamar`, `id_kamar`, `nama_kamar`, `id_ruang`) VALUES
(4, '0wCR1qpQ3tHTeLKGdVgz', 'Ade Irma 1', 96),
(5, '0zBvVCbp4Z6OegTkl1jL', 'Melati', 37),
(5, '2LVSRBDrGA3Y1waMhq5J', 'Cut Nyak Dhien 5', 95),
(5, '3A7veYmM0uXQzibhf6Kj', 'Ade Irma 3', 96),
(4, '3haKlWZpHXR2QvnYEwJf', 'Cut Nyak Dhien 3', 95),
(5, '3Z5kETSmYOw9QMnvWf0F', 'Ade Irma 6', 96),
(10, '4btjUon3JDYR7ecPHVSM', 'Isolasi', 37),
(6, '4iaYzeE6l3bm2HZF5MRq', 'Arafah 4', 90),
(6, '50ITQVF6aoUtlWYq2p9G', 'Cut Mutia 4', 97),
(5, '5Ft2137XIOKGrvSezsgo', 'Teuku Umar 10', 93),
(5, '5WNsdMkpJ6OhC1enlUDo', 'Matahari', 103),
(6, '6dOoALMhKIlUr9Y0gVus', 'Humaira 7', 91),
(6, '6EA4fW0ou2qipURQzrn8', 'Humaira 5', 91),
(4, '6JyHWFXbgCUIMhOnj80o', 'Cempaka A', 60),
(5, '7raVNJe0bBKv1RhqLF9U', 'Cut Nyak Dhien 4', 95),
(10, '8D1vCq9JBHlMkEW70xoL', 'NICU Level III', 106),
(7, '8Nh59srlqZ2kGQu4OK6B', 'Bugenvile', 103),
(6, '8UHVkyOLJg1dNaWw3IzC', 'Mahalayati 1', 98),
(3, '90OU1XCh2q6n7gYysFmD', 'Ibnu Sina 1', 3),
(4, '9FHgRG7Qobzp35c2liN1', 'Teuku Umar 1', 93),
(5, '9L6zjOsxX4lDtFpUcnA1', 'Humaira 2', 91),
(5, '9txihaKyk4cXPVrHwAQe', 'Humaira 3', 91),
(5, 'a0kmvbqcGYSjTrHthFNX', 'Teuku Umar 8', 93),
(10, 'AgDpYMGexwsUPZN6mbLd', 'NICU Level II', 106),
(5, 'AS2Pz4wElvIoqkD8QRGs', 'Senarai 2', 84),
(5, 'AT1V6nUjy0J7BZWRtkbH', 'Mawar', 102),
(5, 'b5Y9NH7d2IwSpkvOfui4', 'Teuku Umar 11', 93),
(6, 'BUo3HmZ7CPQSpXKeatvk', 'Jeruk', 102),
(7, 'C3x64RYBrdvIDa1em2Ui', 'Cut Mutia 5', 97),
(4, 'c95vxPhJHsdekQ4t3mZz', 'Cut Nyak Dhien 1', 95),
(6, 'chBLEd0aJmxNDUI5Yoif', 'Senarai 7', 84),
(3, 'CNsSpVxiD06vj4wzO8HF', 'T.P Polem 3', 100),
(5, 'CQyRlFnbaj8f0AsDPUdH', 'Teuku Umar 9', 93),
(4, 'cWyrEmBg1H0uGpCUkIR6', 'T. Hamzah 7', 94),
(4, 'DBjRZHfxC96eKvdlOMPb', 'Teuku Umar 5', 93),
(4, 'dvOnmK8WhHuXNeoI7S3Q', 'Asoka', 104),
(10, 'e2PSEpBwu1nQMNAXDz35', 'PICU', 36),
(5, 'eAcGwmU6HBXES5o7sMDg', 'Humaira 1', 91),
(4, 'EkchxT2MZCqPVbrno6dW', 'T. Hamzah 10', 94),
(5, 'eNasXDnCdyMLfvGzgY3c', 'T. Hamzah 6', 94),
(7, 'enD935YRtTcIFVEAdHXz', 'Mahalayati', 66),
(6, 'ePhE1yCMt7Tkp2cnsJW3', 'Cut Nyak Dhien 8', 95),
(5, 'EwHzdAjm30cRCSnVgJYv', 'Senarai 5', 84),
(7, 'FM47oq3WREnHvIpkjVhu', 'Manggis', 102),
(7, 'FqyH1zpDodmuKgJY8QWn', 'Angrek', 103),
(4, 'FWU25DvYgu9eNikdGTpQ', 'T. Hamzah 3', 94),
(7, 'G2RElDiZcK8MIOWbzAS0', 'Panda', 37),
(4, 'G6Omk1Pbde0sfaiFTqYQ', 'T. Hamzah 9', 94),
(4, 'g6qDib4pSv0mady93FJ8', 'T. Hamzah 7', 94),
(5, 'gBsy4Vn8YbJTFaR1cjqL', 'Senarai 1', 84),
(5, 'gf4AjkOY0Hxocl9BdyN5', 'Arafah 2', 90),
(6, 'h0PmXHWvNDK1VtYAl8IL', 'Ade Irma 8', 96),
(4, 'hADF6ueRxaL9iXrzV2mU', 'Teuku Umar 2', 93),
(6, 'HfcvpmLkbjaPlGdzYs0R', 'Cut Nyak Dhien 7', 95),
(7, 'hSKb6depqYk1PuXiCJja', 'Teuku Panglima Polem', 67),
(4, 'HvoAOU7rY5IpEhGzFdQk', 'T. Hamzah 2', 94),
(5, 'IBkxLbROhwp1nM4lYNtv', 'Ade Irma 5', 96),
(5, 'IDTnRYNgb1H8xf7wjEGB', 'Cut Mutia 3', 97),
(7, 'IfiEvy0ROzGw2XAc5ueU', 'Mahalayati 4', 98),
(6, 'iPOskXq3aYMu7ZB2SzgR', 'Apel', 37),
(7, 'iXJ3KWem0PvfBANjlVqH', 'Jeumpa', 103),
(5, 'J6tdsInYhRgUBN4eTPDx', 'Kenanga', 42),
(3, 'JLctxzGwkUWofy81eRHT', 'T.P Polem 6', 100),
(10, 'jlp3v9hotskfwuEJHXG2', 'Bersalin', 71),
(4, 'jzi7J9gaOP5KoAvSXs2q', 'Cut Nyak Dhien 2', 95),
(6, 'K52zwrue1Dd9bvy7Bp6Q', 'Senarai 4', 84),
(5, 'KE9gis4zSwZQ3Taet0c1', 'Cut Nyak Dhien 6', 95),
(7, 'kS0LBualHgnObpdjxJce', 'Sirsak', 102),
(7, 'l5bO0u6L1nCaxjzK4wcT', 'Cut Nyak Dhien 9', 95),
(7, 'LhWtrg35fkwMm0qzNEy6', 'Kelinci', 37),
(4, 'LRO9UrjkEb3p1z2GV04S', 'Jeumpa', 39),
(4, 'LRs1rjw8teYgkT9SDqCW', 'Asoka', 38),
(6, 'LsiV0GwvIpRrkQU5xDNC', 'Ade Irma 7', 96),
(5, 'LzZH7NUi3roCwSRbqycQ', 'Kenanga', 37),
(7, 'm5UGu3wJe0k2j4ZgEV9t', 'Melati', 103),
(4, 'MYiHelxfXZpVUzTsbBO3', 'Teuku Umar 4', 93),
(7, 'NAmlYHPSqzBpjOZx1he2', 'Arafah 8', 90),
(6, 'nPo1FbQRJU5l8kGqSexs', 'Humaira 6', 91),
(5, 'nUX4Li7y2oqzpSc8HV96', 'Teratai', 103),
(3, 'OoJunt6pPkL0zIY59cms', 'T.P Polem 5', 100),
(6, 'OsFPWLNmQGKC3qZdBR7e', 'Arafah 5', 90),
(7, 'OwEcqmWjus7aCMtVRABK', 'Senarai 9', 84),
(7, 'peFMhHXjP98IkV0CU3is', 'Seulanga', 103),
(6, 'pgUzQya15qCTfLBWYlnK', 'Mangga', 103),
(5, 'PnhB9EqSIM7yxtA8YHZm', 'Teuku Umar 6', 93),
(5, 'PWE4pBej8JFwSTOqXQUc', 'Cut Mutia 2', 97),
(3, 'q2W8mU4MFh3JZjdExNeL', 'T.P Polem 2', 100),
(6, 'q4Z18PxvuaNphziEKFcX', 'Cut Mutia', 64),
(10, 'QcgIT3E9RDu8aVhGtjfU', 'ICCU/ICCU', 72),
(10, 'qEJSZVle9QyxtbGPAKzB', 'Isolasi', 68),
(7, 'QlKFT3oW2O4Zm5nHcyqe', 'Arafah 9', 90),
(6, 'qNekU4EaxQZjzc70PfVB', 'Markisa', 102),
(5, 'qVpdwcMuQnD4RNl0I8Oi', 'Ade Irma 2', 96),
(6, 'qZP0BeohvNSCx1HXgbj7', 'Humara 4', 91),
(5, 'RcmEwVSU6jP1sFvyoYi7', 'Arafah 1', 90),
(3, 'RmrNdAk3aY1uyWtQVKSF', 'T.P Polem 4', 100),
(7, 'rpdw4jXN0bQocCZIey9h', 'Teuku Panglima Polem', 108),
(3, 'rZS9jwkn7T3PJyd2xsMp', 'T.P Polem 1', 100),
(5, 'SapwgGeUDTvP0Z2LMHJ9', 'Seruni', 41),
(10, 'SbLM8s1tpnmoGYjaPAHV', 'ICU', 34),
(4, 'sC6iWTSVKeGIOgbcdjEQ', 'Jeumpa', 105),
(6, 'SgXA8YaPHBINxbw3dyhO', 'Senarai 6', 84),
(7, 'Srwhetj1YKOoVHduPQIl', 'Mahalayati 3', 98),
(7, 'sXVE60J4Z2dar9K8Bzl7', 'Malikul Saleh 2', 99),
(7, 'SYiobe6l4yjWm5FrNZcg', 'Humaira 9', 91),
(5, 'TIJ6NmUxjqLwlf2nHe5g', 'Teuku Umar 12', 93),
(5, 'tIlNUi5ydRZ34YTAEFjM', 'Teuku Umar', 62),
(6, 'TkSNb94MraGslLoCgqR8', 'Mahalayati 2', 98),
(10, 'Tq0sAUYaPHno3NiZQJzB', 'NICU', 69),
(7, 'TtP3VAKNvr6hbJQcje7o', 'Malikul Saleh 1', 99),
(5, 'tV7IcKvHOldSZ861weEk', 'Arafah 3', 90),
(4, 'tXIB6euj30py8iqU9WoZ', 'Teuku Umar 3', 93),
(10, 'UNM3Tc6WXjg8evLSsxwA', 'HCU', 70),
(4, 'Uq47KB9Fu1e5RalbgS3D', 'T. Hamzah 1', 94),
(5, 'UvCbsIAX9QKF0TfRMoec', 'Teuku Umar 13', 93),
(5, 'vBryTuCGJhDbx5XZ37IA', 'Mawar', 40),
(6, 'vc2fkCqIQZs17pi8FKwU', 'Anggur', 103),
(5, 'vN2JQMFy4Zd79Ut8X3Hs', 'Melur', 102),
(4, 'WE9tQj7H0aXBKgh6Fzlc', 'T. Hamzah 8', 94),
(5, 'wyvNO2mn3tQ0JiCExgqX', 'Sri Safiatuddin', 61),
(5, 'wzBuhFSJIOD3VtWoxivd', 'Teuku Umar 14', 93),
(5, 'X79dI3MAPoxEYhNpU4Cv', 'Arafah 6', 90),
(7, 'XBLwN5V0k4HYnMTp97ga', 'Ade Irma 9', 96),
(5, 'XEoysFOwWAjP0CTGu4BK', 'Cut Mutia 1', 97),
(6, 'yCiFtZWLV7K9ohImYUdp', 'Arafah 7', 90),
(7, 'YdVDCxo7R8hTApHPilty', 'Mawar', 103),
(4, 'Yf6FwUlkLm3TGANQeDvt', 'T. Hamzah 5', 94),
(5, 'ysFhfvIKNgtSuiodY7OT', 'Teuku Umar 7', 93),
(7, 'Ysy58hVzCv4E6qkMGpZ7', 'Senarai 8', 84),
(7, 'yWX46m1jpHaQU3sqv0Zl', 'Humara 8', 91),
(5, 'Z2WwXka9MfzutLHSOliD', 'Ade Irma 4', 96),
(5, 'ZacTF7oqAKEIghdtykuY', 'Seuruni', 103),
(5, 'ZAeCPS0K3zowsB9paMuh', 'Seulanga', 102),
(5, 'zfGaIHUylKpVCMYo2cb1', 'Senarai 3', 84),
(6, 'ZHhkM9ySAoYOXVeb25CB', 'Jambu', 103),
(6, 'zloidECLntgkKSBmN029', 'Cut Nyak Dhien', 63),
(7, 'ZmevzSd0Fr3PxRLMIo8b', 'Teuku Nyak Arief', 65),
(4, 'zRrpMIhQak6VgPdFXsHA', 'T. Hamzah 4', 94);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kamar`
--

CREATE TABLE `kelas_kamar` (
  `id_kelas_kamar` int(5) NOT NULL,
  `nama_kelas_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_kamar`
--

INSERT INTO `kelas_kamar` (`id_kelas_kamar`, `nama_kelas_kamar`) VALUES
(8, 'Intermediate'),
(9, 'Isolasi'),
(5, 'Kelas 1'),
(6, 'Kelas 2'),
(7, 'Kelas 3'),
(10, 'Rawat Khusus'),
(11, 'Stroke Care Unit'),
(3, 'Super VIP'),
(4, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_rs`
--

CREATE TABLE `kelas_rs` (
  `id_kelas_rs` int(5) NOT NULL,
  `nama_kelas_rs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_rs`
--

INSERT INTO `kelas_rs` (`id_kelas_rs`, `nama_kelas_rs`) VALUES
(3, 'A'),
(4, 'B'),
(7, 'Belum ditetapkan'),
(5, 'C'),
(6, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(30) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `id_jenis_kelamin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nik`, `nama_pasien`, `id_jenis_kelamin`) VALUES
('1171022509950001', 'Hariririski', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_rs`
--

CREATE TABLE `pemilik_rs` (
  `id_pemilik` int(5) NOT NULL,
  `nama_pemilik_rs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_rs`
--

INSERT INTO `pemilik_rs` (`id_pemilik`, `nama_pemilik_rs`) VALUES
(12, 'aaa'),
(4, 'Kabupaten/Kota'),
(6, 'Organisasi Sosial'),
(9, 'Perusahaan'),
(7, 'POLRI'),
(3, 'Propinsi'),
(8, 'Swasta/Lainnya'),
(5, 'TNI');

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `id_tempat_tidur` int(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `id_rawat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`id_tempat_tidur`, `nik`, `tanggal_masuk`, `tanggal_keluar`, `id_rawat`) VALUES
(76, '1171022509950001', '2018-06-21', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `kode_rs` int(10) NOT NULL,
  `nama_rs` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pemilik` int(5) DEFAULT NULL,
  `id_kelas_rs` int(5) DEFAULT NULL,
  `id_jenis_rs` int(5) DEFAULT NULL,
  `verifikasi` int(2) DEFAULT NULL,
  `username_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`kode_rs`, `nama_rs`, `password`, `alamat`, `email`, `no_hp`, `gambar`, `tanggal_update`, `id_pemilik`, `id_kelas_rs`, `id_jenis_rs`, `verifikasi`, `username_admin`) VALUES
(1171015, 'RS Umum Daerah Dr. Zainoel Abidin', '3a2d7564baee79182ebc7b65084aabd1', 'Jl.Tgk.Daud Beureueh No.108 Banda Aceh', 'rsudza@acehprov.go.id', '0651-34562', 'zN0iZS4rQaLfvkmC3MAP.jpg', '2018-06-22 07:41:47', 3, 3, 4, 1, 'admin'),
(1171026, 'RS Tk. II Iskandar Muda Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. T. Hamzah Bendahara No. 1 Banda Aceh', 'rumahsakitim@yahoo.com', '065124712', 'cuSwfYWPxA3qgNL8GCUv.jpg', '2018-04-14 14:57:37', 5, 4, 4, 1, 'admin'),
(1171085, 'RS Umum Malahayati', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Nyak Dhien No : 498 ,Banda Aceh', 'rumahsakitmalahayati@yahoo.co.id', '065148114', 'bAoQMva6I3USy1k7Cslj.jpg', '2018-04-14 15:30:14', 6, 7, 4, 1, 'admin'),
(1171106, 'RS Umum Teuku Fakinah', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Jend.Sudirman 27-29,Banda Aceh', 'teungkufakinah.hospital@yahoo.com', '065141454', 'f8oVMw5i6bGEhBAK2gcN.jpg', '2018-04-14 15:30:22', 6, 5, 4, 1, 'admin'),
(1171110, 'RS Umum Daerah Meuraxa', '3a2d7564baee79182ebc7b65084aabd1', 'Jalan Soekarno Hatta Km.2 Desa Mibo Kecamatan Banda Raya Kota Banda Aceh', 'rsum@bandaacehkota.go.id', '065143097', 'VkTHofiWDNaCw1R9Ghnj.jpg', '2018-04-14 15:30:44', 4, 4, 4, 1, 'admin'),
(1171121, 'RS Ibu dan Anak Propinsi NAD', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Prof.A.Madjid Ibrahim I, No. 3 Banda Aceh', 'rsia@acehprov.go.id', '0651-637796', 'l0SF34bENXLDhJUActBx.jpg', '2018-04-14 15:30:27', 4, 4, 5, 1, 'admin'),
(1171143, 'RS Bhayangkara Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Nyak Dhien No. 23, Lamteumen Barat Banda Aceh', 'bhayangkara_banda_aceh@yahoo.co.id', '06517555750', 'e7FcsGWaB8LDlXCVhxTA.jpg', '2018-04-14 15:30:39', 7, 5, 6, 1, 'admin'),
(1171145, 'RS Umum Meutia', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Cut Meutia No. 55', 'mutia@gmail.com', '081288419988', 'PXQiZjYxUOE5KSMTHq9D.png', '2018-05-17 09:08:24', 8, 6, 4, 1, 'admin'),
(1171146, 'RS Umum Cempaka Az Zahra Banda Aceh', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Pocut Baren, 36-40', 'rsu_azzahra@yahoo.com', '065131066', 'e4Zpha62m7zFUOxES90w.png', '2018-06-21 06:56:10', 9, 5, 4, 1, 'admin'),
(1171147, 'RS Umum Prince Nayef Bin Abdul Aziz Syiah Universitas Kuala Kuala', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Lingkar Kampus', 'hrd.rspn@gmail.com', '08116819755', 'cbozG4DPEAR3WqfHSjiw.jpg', '2018-06-21 06:58:22', 9, 6, 4, 1, 'admin'),
(1171150, 'RS Umum Pertamedika Ummi Rosnati', '3a2d7564baee79182ebc7b65084aabd1', 'Jl. Sekolah No. 5 Gampoeng Ateuk Pahlawan, Kecamatan Baiturahman, Kota Banda Aceh 23241', 'office@rspur.co.id', '065135092', 'D1a2fYXkPMeG4oFWjZqd.jpg', '2018-04-14 15:43:03', 9, 5, 4, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(15) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kode_rs` int(10) NOT NULL,
  `id_jenis_ruang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_rs`, `id_jenis_ruang`) VALUES
(2, 'ibnu sina', 1171015, 13),
(4, 'Aqsha2 (Pria)', 1171015, 8),
(5, 'Aqsha3 (Wanita)', 1171015, 8),
(6, 'Arafah 1', 1171015, 6),
(7, 'Arafah 2', 1171015, 10),
(8, 'Arafah 3', 1171015, 10),
(9, 'Bersalin', 1171015, 10),
(10, 'HCU Medical', 1171015, 32),
(11, 'MIna 1 (pria)', 1171015, 19),
(12, 'MIna 2 (Wanita)', 1171015, 19),
(13, 'NICU', 1171015, 29),
(14, 'Zamzam 1', 1171015, 5),
(15, 'Zamzam 2', 1171015, 5),
(16, 'Raudhah 1', 1171015, 16),
(17, 'Raudhah 2 (Bedah Wanita)', 1171015, 11),
(18, 'Raudhah 2 (Bedah Wanita)', 1171015, 11),
(19, 'Raudhah 4  (Bedah Pria)', 1171015, 11),
(20, 'Raudhah 5 (Bedah Pria)', 1171015, 11),
(21, 'Raudhah 6', 1171015, 11),
(22, 'Raudhah 7', 1171015, 11),
(23, 'Zamzam 3', 1171015, 5),
(24, 'Zamzam 4', 1171015, 5),
(25, 'HCU Surgical', 1171015, 32),
(26, 'Nabawi', 1171015, 18),
(27, 'Shafa', 1171015, 16),
(28, 'ICU 1', 1171015, 28),
(29, 'ICU 2', 1171015, 28),
(30, 'ICCU', 1171015, 31),
(31, 'PICU', 1171015, 30),
(32, 'RHCU', 1171015, 15),
(33, 'Marwah', 1171015, 15),
(34, 'ICU', 1171121, 28),
(36, 'PICU', 1171121, 30),
(37, 'RAWAT ANAK', 1171121, 6),
(61, 'Sri Safiatuddin', 1171147, 5),
(62, 'Teuku Umar', 1171147, 5),
(63, 'Cut Nyak Dhien', 1171147, 5),
(64, 'Cut Mutia', 1171147, 5),
(65, 'Teuku Nyak Arief', 1171147, 5),
(66, 'Mahalayati', 1171147, 5),
(68, 'Isolasi', 1171147, 26),
(69, 'NICU', 1171147, 29),
(70, 'HCU', 1171147, 32),
(71, 'Bersalin', 1171147, 10),
(72, 'ICCU/ICCU', 1171026, 31),
(74, 'ALBAYAN 1', 1171110, 5),
(75, 'ALBAYAN 2', 1171110, 5),
(76, 'ALBAYAN 3', 1171110, 5),
(77, 'Raudah', 1171110, 6),
(78, 'Bayi', 1171110, 6),
(79, 'Annur', 1171110, 11),
(80, 'Az-zahra', 1171110, 11),
(81, 'Bersalin', 1171110, 9),
(82, 'ICCU', 1171110, 31),
(83, 'ICU', 1171110, 28),
(84, 'Senarai', 1171110, 15),
(85, 'Asy Syifa', 1171110, 9),
(87, 'Alhuda', 1171110, 5),
(88, 'Ar-Rahman', 1171110, 5),
(89, 'NICU', 1171110, 29),
(90, 'Arafah', 1171110, 8),
(91, 'Humaira', 1171110, 8),
(92, 'PICU', 1171110, 30),
(93, 'Teuku Umar', 1171026, 5),
(94, 'T. Hamzah', 1171026, 5),
(95, 'Cut Nyak Dhien', 1171026, 9),
(96, 'Ade Irma', 1171026, 5),
(97, 'Cut Mutia', 1171026, 5),
(98, 'Mahalayati', 1171026, 5),
(99, 'Malikul Saleh', 1171026, 5),
(100, 'T.P Polem', 1171026, 5),
(102, 'KEBIDANAN & KANDUNGAN', 1171121, 9),
(103, 'RUANG RAWAT DEWASA', 1171121, 5),
(104, 'Asoka', 1171121, 5),
(105, 'Jeumpa', 1171121, 5),
(106, 'NICU', 1171121, 29),
(107, 'PICU', 1171121, 30),
(108, 'Teuku Panglima Polem', 1171147, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidur`
--

CREATE TABLE `tempat_tidur` (
  `id_kamar` varchar(100) NOT NULL,
  `id_tempat_tidur` int(100) NOT NULL,
  `nama_tempat_tidur` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_tidur`
--

INSERT INTO `tempat_tidur` (`id_kamar`, `id_tempat_tidur`, `nama_tempat_tidur`, `status`) VALUES
('ZmevzSd0Fr3PxRLMIo8b', 69, 'Teuku Nyak Arief 1', 0),
('ZmevzSd0Fr3PxRLMIo8b', 70, 'Teuku Nyak Arief 2', 0),
('ZmevzSd0Fr3PxRLMIo8b', 71, 'Teuku Nyak Arief 3', 0),
('ZmevzSd0Fr3PxRLMIo8b', 72, 'Teuku Nyak Arief 4', 0),
('ZmevzSd0Fr3PxRLMIo8b', 73, 'Teuku Nyak Arief 5', 0),
('ZmevzSd0Fr3PxRLMIo8b', 74, 'Teuku Nyak Arief 6', 0),
('ZmevzSd0Fr3PxRLMIo8b', 75, 'Teuku Nyak Arief 7', 0),
('wyvNO2mn3tQ0JiCExgqX', 76, 'Sri Safiatuddin 1', 1),
('tIlNUi5ydRZ34YTAEFjM', 77, 'Teuku Umar 1', 0),
('zloidECLntgkKSBmN029', 78, 'Cut Nyak Dhien 1', 0),
('zloidECLntgkKSBmN029', 79, 'Cut Nyak Dhien 2', 0),
('q4Z18PxvuaNphziEKFcX', 80, 'Cut Mutia 1', 0),
('q4Z18PxvuaNphziEKFcX', 81, 'Cut Mutia 2', 0),
('enD935YRtTcIFVEAdHXz', 82, 'Mahalayati 1', 0),
('enD935YRtTcIFVEAdHXz', 83, 'Mahalayati 2', 0),
('enD935YRtTcIFVEAdHXz', 84, 'Mahalayati 3', 0),
('enD935YRtTcIFVEAdHXz', 85, 'Mahalayati 4', 0),
('enD935YRtTcIFVEAdHXz', 86, 'Mahalayati 5', 0),
('enD935YRtTcIFVEAdHXz', 87, 'Mahalayati 6', 0),
('enD935YRtTcIFVEAdHXz', 88, 'Mahalayati 7', 0),
('hSKb6depqYk1PuXiCJja', 89, 'Teuku Panglima Polem', 0),
('hSKb6depqYk1PuXiCJja', 90, 'Teuku Panglima Polem', 0),
('hSKb6depqYk1PuXiCJja', 91, 'Teuku Panglima Polem', 0),
('hSKb6depqYk1PuXiCJja', 92, 'Teuku Panglima Polem', 0),
('hSKb6depqYk1PuXiCJja', 93, 'Teuku Panglima Polem', 0),
('qEJSZVle9QyxtbGPAKzB', 94, 'Isolasi 1', 0),
('Tq0sAUYaPHno3NiZQJzB', 95, 'NICU 1', 0),
('Tq0sAUYaPHno3NiZQJzB', 96, 'NICU 2', 0),
('Tq0sAUYaPHno3NiZQJzB', 97, 'NICU 3', 0),
('UNM3Tc6WXjg8evLSsxwA', 98, 'HCU 1', 0),
('UNM3Tc6WXjg8evLSsxwA', 99, 'HCU 2', 0),
('UNM3Tc6WXjg8evLSsxwA', 100, 'HCU 3', 0),
('jlp3v9hotskfwuEJHXG2', 101, 'Bersalin 1', 0),
('jlp3v9hotskfwuEJHXG2', 102, 'Bersalin 2', 0),
('9FHgRG7Qobzp35c2liN1', 103, 'Teuku Umar 1 1', 0),
('hADF6ueRxaL9iXrzV2mU', 104, 'Teuku Umar 2 1', 0),
('tXIB6euj30py8iqU9WoZ', 105, 'Teuku Umar 3 1', 0),
('xmMBugzGJivkQpHWe7Rd', 106, 'Teuku Umar 4 1', 0),
('MYiHelxfXZpVUzTsbBO3', 107, 'Teuku Umar 4 1', 0),
('DBjRZHfxC96eKvdlOMPb', 108, 'Teuku Umar 5 1', 0),
('PnhB9EqSIM7yxtA8YHZm', 109, 'Teuku Umar 6 1', 0),
('ysFhfvIKNgtSuiodY7OT', 110, 'Teuku Umar 7 1', 0),
('a0kmvbqcGYSjTrHthFNX', 111, 'Teuku Umar 8 1', 0),
('jaeWF831oA4tcp6YhJIP', 112, 'Teuku Umar 8 1', 0),
('CQyRlFnbaj8f0AsDPUdH', 113, 'Teuku Umar 9 1', 0),
('5Ft2137XIOKGrvSezsgo', 114, 'Teuku Umar 10 1', 0),
('b5Y9NH7d2IwSpkvOfui4', 115, 'Teuku Umar 11 1', 0),
('TIJ6NmUxjqLwlf2nHe5g', 116, 'Teuku Umar 12 1', 0),
('UvCbsIAX9QKF0TfRMoec', 117, 'Teuku Umar 13 1', 0),
('wzBuhFSJIOD3VtWoxivd', 118, 'Teuku Umar 14 1', 0),
('QcgIT3E9RDu8aVhGtjfU', 119, 'ICCU/ICCU 1', 0),
('QcgIT3E9RDu8aVhGtjfU', 120, 'ICCU/ICCU 2', 0),
('QcgIT3E9RDu8aVhGtjfU', 121, 'ICCU/ICCU 3', 0),
('QcgIT3E9RDu8aVhGtjfU', 122, 'ICCU/ICCU 4', 0),
('QcgIT3E9RDu8aVhGtjfU', 123, 'ICCU/ICCU 5', 0),
('QcgIT3E9RDu8aVhGtjfU', 124, 'ICCU/ICCU 6', 0),
('Uq47KB9Fu1e5RalbgS3D', 125, 'T. Hamzah 1 1', 0),
('HvoAOU7rY5IpEhGzFdQk', 126, 'T. Hamzah 2 1', 0),
('FWU25DvYgu9eNikdGTpQ', 127, 'T. Hamzah 3 1', 0),
('zRrpMIhQak6VgPdFXsHA', 128, 'T. Hamzah 4 1', 0),
('Yf6FwUlkLm3TGANQeDvt', 129, 'T. Hamzah 5 1', 0),
('eNasXDnCdyMLfvGzgY3c', 130, 'T. Hamzah 6 1', 0),
('g6qDib4pSv0mady93FJ8', 131, 'T. Hamzah 7 1', 0),
('cWyrEmBg1H0uGpCUkIR6', 132, 'T. Hamzah 7 1', 0),
('WE9tQj7H0aXBKgh6Fzlc', 133, 'T. Hamzah 8 1', 0),
('G6Omk1Pbde0sfaiFTqYQ', 134, 'T. Hamzah 9 1', 0),
('EkchxT2MZCqPVbrno6dW', 135, 'T. Hamzah 10 1', 0),
('c95vxPhJHsdekQ4t3mZz', 136, 'Cut Nyak Dhien 1 1', 0),
('jzi7J9gaOP5KoAvSXs2q', 137, 'Cut Nyak Dhien 2 1', 0),
('3haKlWZpHXR2QvnYEwJf', 138, 'Cut Nyak Dhien 3 1', 0),
('7raVNJe0bBKv1RhqLF9U', 139, 'Cut Nyak Dhien 4 1', 0),
('2LVSRBDrGA3Y1waMhq5J', 140, 'Cut Nyak Dhien 5 1', 0),
('KE9gis4zSwZQ3Taet0c1', 141, 'Cut Nyak Dhien 6 1', 0),
('HfcvpmLkbjaPlGdzYs0R', 142, 'Cut Nyak Dhien 7 1', 0),
('HfcvpmLkbjaPlGdzYs0R', 143, 'Cut Nyak Dhien 7 2', 0),
('ePhE1yCMt7Tkp2cnsJW3', 144, 'Cut Nyak Dhien 8 1', 0),
('ePhE1yCMt7Tkp2cnsJW3', 145, 'Cut Nyak Dhien 8 2', 0),
('l5bO0u6L1nCaxjzK4wcT', 146, 'Cut Nyak Dhien 9 1', 0),
('l5bO0u6L1nCaxjzK4wcT', 147, 'Cut Nyak Dhien 9 2', 0),
('l5bO0u6L1nCaxjzK4wcT', 148, 'Cut Nyak Dhien 9 3', 0),
('l5bO0u6L1nCaxjzK4wcT', 149, 'Cut Nyak Dhien 9 4', 0),
('l5bO0u6L1nCaxjzK4wcT', 150, 'Cut Nyak Dhien 9 5', 0),
('l5bO0u6L1nCaxjzK4wcT', 151, 'Cut Nyak Dhien 9 6', 0),
('l5bO0u6L1nCaxjzK4wcT', 152, 'Cut Nyak Dhien 9 7', 0),
('0wCR1qpQ3tHTeLKGdVgz', 153, 'Ade Irma 1 1', 0),
('qVpdwcMuQnD4RNl0I8Oi', 154, 'Ade Irma 2 1', 0),
('3A7veYmM0uXQzibhf6Kj', 155, 'Ade Irma 3 1', 0),
('Z2WwXka9MfzutLHSOliD', 156, 'Ade Irma 4 1', 0),
('IBkxLbROhwp1nM4lYNtv', 157, 'Ade Irma 5 1', 0),
('3Z5kETSmYOw9QMnvWf0F', 158, 'Ade Irma 6 1', 0),
('LsiV0GwvIpRrkQU5xDNC', 159, 'Ade Irma 7 1', 0),
('LsiV0GwvIpRrkQU5xDNC', 160, 'Ade Irma 7 2', 0),
('h0PmXHWvNDK1VtYAl8IL', 161, 'Ade Irma 8 1', 0),
('h0PmXHWvNDK1VtYAl8IL', 162, 'Ade Irma 8 2', 0),
('XBLwN5V0k4HYnMTp97ga', 163, 'Ade Irma 9 1', 0),
('XBLwN5V0k4HYnMTp97ga', 164, 'Ade Irma 9 2', 0),
('XBLwN5V0k4HYnMTp97ga', 165, 'Ade Irma 9 3', 0),
('XBLwN5V0k4HYnMTp97ga', 166, 'Ade Irma 9 4', 0),
('XBLwN5V0k4HYnMTp97ga', 167, 'Ade Irma 9 5', 0),
('XBLwN5V0k4HYnMTp97ga', 168, 'Ade Irma 9 6', 0),
('XEoysFOwWAjP0CTGu4BK', 169, 'Cut Mutia 1 1', 0),
('PWE4pBej8JFwSTOqXQUc', 170, 'Cut Mutia 2 1', 0),
('IDTnRYNgb1H8xf7wjEGB', 171, 'Cut Mutia 3 1', 0),
('50ITQVF6aoUtlWYq2p9G', 172, 'Cut Mutia 4 1', 0),
('50ITQVF6aoUtlWYq2p9G', 173, 'Cut Mutia 4 2', 0),
('C3x64RYBrdvIDa1em2Ui', 174, 'Cut Mutia 5 1', 0),
('C3x64RYBrdvIDa1em2Ui', 175, 'Cut Mutia 5 2', 0),
('C3x64RYBrdvIDa1em2Ui', 176, 'Cut Mutia 5 3', 0),
('C3x64RYBrdvIDa1em2Ui', 177, 'Cut Mutia 5 4', 0),
('C3x64RYBrdvIDa1em2Ui', 178, 'Cut Mutia 5 5', 0),
('C3x64RYBrdvIDa1em2Ui', 179, 'Cut Mutia 5 6', 0),
('C3x64RYBrdvIDa1em2Ui', 180, 'Cut Mutia 5 7', 0),
('8UHVkyOLJg1dNaWw3IzC', 181, 'Mahalayati 1 1', 0),
('8UHVkyOLJg1dNaWw3IzC', 182, 'Mahalayati 1 2', 0),
('TkSNb94MraGslLoCgqR8', 183, 'Mahalayati 2 1', 0),
('TkSNb94MraGslLoCgqR8', 184, 'Mahalayati 2 2', 0),
('TkSNb94MraGslLoCgqR8', 185, 'Mahalayati 2 3', 0),
('IfiEvy0ROzGw2XAc5ueU', 186, 'Mahalayati 4 1', 0),
('IfiEvy0ROzGw2XAc5ueU', 187, 'Mahalayati 4 2', 0),
('IfiEvy0ROzGw2XAc5ueU', 188, 'Mahalayati 4 3', 0),
('IfiEvy0ROzGw2XAc5ueU', 189, 'Mahalayati 4 4', 0),
('IfiEvy0ROzGw2XAc5ueU', 190, 'Mahalayati 4 5', 0),
('IfiEvy0ROzGw2XAc5ueU', 191, 'Mahalayati 4 6', 0),
('IfiEvy0ROzGw2XAc5ueU', 192, 'Mahalayati 4 7', 0),
('Srwhetj1YKOoVHduPQIl', 193, 'Mahalayati 3 1', 0),
('Srwhetj1YKOoVHduPQIl', 194, 'Mahalayati 3 2', 0),
('Srwhetj1YKOoVHduPQIl', 195, 'Mahalayati 3 3', 0),
('Srwhetj1YKOoVHduPQIl', 196, 'Mahalayati 3 4', 0),
('Srwhetj1YKOoVHduPQIl', 197, 'Mahalayati 3 5', 0),
('Srwhetj1YKOoVHduPQIl', 198, 'Mahalayati 3 6', 0),
('Srwhetj1YKOoVHduPQIl', 199, 'Mahalayati 3 7', 0),
('wXeRv6x2ErGBmjMAf3Hd', 200, 'Mahalayati 1 1', 0),
('wXeRv6x2ErGBmjMAf3Hd', 201, 'Mahalayati 1 2', 0),
('wXeRv6x2ErGBmjMAf3Hd', 202, 'Mahalayati 1 3', 0),
('wXeRv6x2ErGBmjMAf3Hd', 203, 'Mahalayati 1 4', 0),
('wXeRv6x2ErGBmjMAf3Hd', 204, 'Mahalayati 1 5', 0),
('wXeRv6x2ErGBmjMAf3Hd', 205, 'Mahalayati 1 6', 0),
('wXeRv6x2ErGBmjMAf3Hd', 206, 'Mahalayati 1 7', 0),
('wXeRv6x2ErGBmjMAf3Hd', 207, 'Mahalayati 1 8', 0),
('wXeRv6x2ErGBmjMAf3Hd', 208, 'Mahalayati 1 9', 0),
('wXeRv6x2ErGBmjMAf3Hd', 209, 'Mahalayati 1 10', 0),
('wXeRv6x2ErGBmjMAf3Hd', 210, 'Mahalayati 1 11', 0),
('wXeRv6x2ErGBmjMAf3Hd', 211, 'Mahalayati 1 12', 0),
('wXeRv6x2ErGBmjMAf3Hd', 212, 'Mahalayati 1 13', 0),
('wXeRv6x2ErGBmjMAf3Hd', 213, 'Mahalayati 1 14', 0),
('PpzxcZYyJaLhGrEOeMvl', 214, 'Mahalayati 2 1', 0),
('PpzxcZYyJaLhGrEOeMvl', 215, 'Mahalayati 2 2', 0),
('PpzxcZYyJaLhGrEOeMvl', 216, 'Mahalayati 2 3', 0),
('PpzxcZYyJaLhGrEOeMvl', 217, 'Mahalayati 2 4', 0),
('PpzxcZYyJaLhGrEOeMvl', 218, 'Mahalayati 2 5', 0),
('PpzxcZYyJaLhGrEOeMvl', 219, 'Mahalayati 2 6', 0),
('PpzxcZYyJaLhGrEOeMvl', 220, 'Mahalayati 2 7', 0),
('PpzxcZYyJaLhGrEOeMvl', 221, 'Mahalayati 2 8', 0),
('PpzxcZYyJaLhGrEOeMvl', 222, 'Mahalayati 2 9', 0),
('PpzxcZYyJaLhGrEOeMvl', 223, 'Mahalayati 2 10', 0),
('PpzxcZYyJaLhGrEOeMvl', 224, 'Mahalayati 2 11', 0),
('PpzxcZYyJaLhGrEOeMvl', 225, 'Mahalayati 2 12', 0),
('PpzxcZYyJaLhGrEOeMvl', 226, 'Mahalayati 2 13', 0),
('PpzxcZYyJaLhGrEOeMvl', 227, 'Mahalayati 2 14', 0),
('PpzxcZYyJaLhGrEOeMvl', 228, 'Mahalayati 2 15', 0),
('rZS9jwkn7T3PJyd2xsMp', 229, 'T.P Polem 1 1', 0),
('q2W8mU4MFh3JZjdExNeL', 230, 'T.P Polem 2 1', 0),
('CNsSpVxiD06vj4wzO8HF', 231, 'T.P Polem 3 1', 0),
('RmrNdAk3aY1uyWtQVKSF', 232, 'T.P Polem 4 1', 0),
('OoJunt6pPkL0zIY59cms', 233, 'T.P Polem 5 1', 0),
('JLctxzGwkUWofy81eRHT', 234, 'T.P Polem 6 1', 0),
('TtP3VAKNvr6hbJQcje7o', 235, 'Malikul Saleh 1 1', 0),
('TtP3VAKNvr6hbJQcje7o', 236, 'Malikul Saleh 1 2', 0),
('TtP3VAKNvr6hbJQcje7o', 237, 'Malikul Saleh 1 3', 0),
('TtP3VAKNvr6hbJQcje7o', 238, 'Malikul Saleh 1 4', 0),
('TtP3VAKNvr6hbJQcje7o', 239, 'Malikul Saleh 1 5', 0),
('TtP3VAKNvr6hbJQcje7o', 240, 'Malikul Saleh 1 6', 0),
('TtP3VAKNvr6hbJQcje7o', 241, 'Malikul Saleh 1 7', 0),
('TtP3VAKNvr6hbJQcje7o', 242, 'Malikul Saleh 1 8', 0),
('TtP3VAKNvr6hbJQcje7o', 243, 'Malikul Saleh 1 9', 0),
('TtP3VAKNvr6hbJQcje7o', 244, 'Malikul Saleh 1 10', 0),
('TtP3VAKNvr6hbJQcje7o', 245, 'Malikul Saleh 1 11', 0),
('TtP3VAKNvr6hbJQcje7o', 246, 'Malikul Saleh 1 12', 0),
('TtP3VAKNvr6hbJQcje7o', 247, 'Malikul Saleh 1 13', 0),
('TtP3VAKNvr6hbJQcje7o', 248, 'Malikul Saleh 1 14', 0),
('sXVE60J4Z2dar9K8Bzl7', 249, 'Malikul Saleh 2 1', 0),
('sXVE60J4Z2dar9K8Bzl7', 250, 'Malikul Saleh 2 2', 0),
('sXVE60J4Z2dar9K8Bzl7', 251, 'Malikul Saleh 2 3', 0),
('sXVE60J4Z2dar9K8Bzl7', 252, 'Malikul Saleh 2 4', 0),
('sXVE60J4Z2dar9K8Bzl7', 253, 'Malikul Saleh 2 5', 0),
('sXVE60J4Z2dar9K8Bzl7', 254, 'Malikul Saleh 2 6', 0),
('sXVE60J4Z2dar9K8Bzl7', 255, 'Malikul Saleh 2 7', 0),
('sXVE60J4Z2dar9K8Bzl7', 256, 'Malikul Saleh 2 8', 0),
('sXVE60J4Z2dar9K8Bzl7', 257, 'Malikul Saleh 2 9', 0),
('sXVE60J4Z2dar9K8Bzl7', 258, 'Malikul Saleh 2 10', 0),
('sXVE60J4Z2dar9K8Bzl7', 259, 'Malikul Saleh 2 11', 0),
('sXVE60J4Z2dar9K8Bzl7', 260, 'Malikul Saleh 2 12', 0),
('sXVE60J4Z2dar9K8Bzl7', 261, 'Malikul Saleh 2 13', 0),
('sXVE60J4Z2dar9K8Bzl7', 262, 'Malikul Saleh 2 14', 0),
('sXVE60J4Z2dar9K8Bzl7', 263, 'Malikul Saleh 2 15', 0),
('dvOnmK8WhHuXNeoI7S3Q', 264, 'Asoka 1', 0),
('sC6iWTSVKeGIOgbcdjEQ', 265, 'Jeumpa 1', 0),
('AT1V6nUjy0J7BZWRtkbH', 266, 'Mawar 1', 0),
('vN2JQMFy4Zd79Ut8X3Hs', 267, 'Melur 1', 0),
('ZAeCPS0K3zowsB9paMuh', 268, 'Seulanga 1', 0),
('BUo3HmZ7CPQSpXKeatvk', 269, 'Jeruk 1', 0),
('BUo3HmZ7CPQSpXKeatvk', 270, 'Jeruk 2', 0),
('qNekU4EaxQZjzc70PfVB', 271, 'Markisa 1', 0),
('qNekU4EaxQZjzc70PfVB', 272, 'Markisa 2', 0),
('FM47oq3WREnHvIpkjVhu', 273, 'Manggis 1', 0),
('FM47oq3WREnHvIpkjVhu', 274, 'Manggis 2', 0),
('FM47oq3WREnHvIpkjVhu', 275, 'Manggis 3', 0),
('FM47oq3WREnHvIpkjVhu', 276, 'Manggis 4', 0),
('FM47oq3WREnHvIpkjVhu', 277, 'Manggis 5', 0),
('kS0LBualHgnObpdjxJce', 278, 'Sirsak 1', 0),
('kS0LBualHgnObpdjxJce', 279, 'Sirsak 2', 0),
('kS0LBualHgnObpdjxJce', 280, 'Sirsak 3', 0),
('kS0LBualHgnObpdjxJce', 281, 'Sirsak 4', 0),
('kS0LBualHgnObpdjxJce', 282, 'Sirsak 5', 0),
('AgDpYMGexwsUPZN6mbLd', 283, 'NICU Level II 1', 0),
('AgDpYMGexwsUPZN6mbLd', 284, 'NICU Level II 2', 0),
('AgDpYMGexwsUPZN6mbLd', 285, 'NICU Level II 3', 0),
('8D1vCq9JBHlMkEW70xoL', 286, 'NICU Level III 1', 0),
('8D1vCq9JBHlMkEW70xoL', 287, 'NICU Level III 2', 0),
('8D1vCq9JBHlMkEW70xoL', 288, 'NICU Level III 3', 0),
('e2PSEpBwu1nQMNAXDz35', 289, 'PICU 1', 0),
('e2PSEpBwu1nQMNAXDz35', 290, 'PICU 2', 0),
('e2PSEpBwu1nQMNAXDz35', 291, 'PICU 3', 0),
('e2PSEpBwu1nQMNAXDz35', 292, 'PICU 4', 0),
('ZacTF7oqAKEIghdtykuY', 293, 'Seuruni 1', 0),
('5WNsdMkpJ6OhC1enlUDo', 294, 'Matahari 1', 0),
('nUX4Li7y2oqzpSc8HV96', 295, 'Teratai 1', 0),
('ZHhkM9ySAoYOXVeb25CB', 296, 'Jambu 1', 0),
('ZHhkM9ySAoYOXVeb25CB', 297, 'Jambu 2', 0),
('pgUzQya15qCTfLBWYlnK', 298, 'Mangga 1', 0),
('pgUzQya15qCTfLBWYlnK', 299, 'Mangga 2', 0),
('FqyH1zpDodmuKgJY8QWn', 300, 'Angrek 1', 0),
('FqyH1zpDodmuKgJY8QWn', 301, 'Angrek 2', 0),
('FqyH1zpDodmuKgJY8QWn', 302, 'Angrek 3', 0),
('8Nh59srlqZ2kGQu4OK6B', 303, 'Bugenvile 1', 0),
('8Nh59srlqZ2kGQu4OK6B', 304, 'Bugenvile 2', 0),
('8Nh59srlqZ2kGQu4OK6B', 305, 'Bugenvile 3', 0),
('iXJ3KWem0PvfBANjlVqH', 306, 'Jeumpa 1', 0),
('iXJ3KWem0PvfBANjlVqH', 307, 'Jeumpa 2', 0),
('iXJ3KWem0PvfBANjlVqH', 308, 'Jeumpa 3', 0),
('YdVDCxo7R8hTApHPilty', 309, 'Mawar 1', 0),
('YdVDCxo7R8hTApHPilty', 310, 'Mawar 2', 0),
('YdVDCxo7R8hTApHPilty', 311, 'Mawar 3', 0),
('peFMhHXjP98IkV0CU3is', 312, 'Seulanga 1', 0),
('peFMhHXjP98IkV0CU3is', 313, 'Seulanga 2', 0),
('peFMhHXjP98IkV0CU3is', 314, 'Seulanga 3', 0),
('peFMhHXjP98IkV0CU3is', 315, 'Seulanga 4', 0),
('peFMhHXjP98IkV0CU3is', 316, 'Seulanga 5', 0),
('m5UGu3wJe0k2j4ZgEV9t', 317, 'Melati 1', 0),
('m5UGu3wJe0k2j4ZgEV9t', 318, 'Melati 2', 0),
('m5UGu3wJe0k2j4ZgEV9t', 319, 'Melati 3', 0),
('m5UGu3wJe0k2j4ZgEV9t', 320, 'Melati 4', 0),
('m5UGu3wJe0k2j4ZgEV9t', 321, 'Melati 5', 0),
('LzZH7NUi3roCwSRbqycQ', 322, 'Kenanga 1', 0),
('0zBvVCbp4Z6OegTkl1jL', 323, 'Melati 1', 0),
('iPOskXq3aYMu7ZB2SzgR', 324, 'Apel 1', 0),
('iPOskXq3aYMu7ZB2SzgR', 325, 'Apel 2', 0),
('vc2fkCqIQZs17pi8FKwU', 326, 'Anggur 1', 0),
('vc2fkCqIQZs17pi8FKwU', 327, 'Anggur 2', 0),
('LhWtrg35fkwMm0qzNEy6', 328, 'Kelinci 1', 0),
('LhWtrg35fkwMm0qzNEy6', 329, 'Kelinci 2', 0),
('LhWtrg35fkwMm0qzNEy6', 330, 'Kelinci 3', 0),
('LhWtrg35fkwMm0qzNEy6', 331, 'Kelinci 4', 0),
('LhWtrg35fkwMm0qzNEy6', 332, 'Kelinci 5', 0),
('LhWtrg35fkwMm0qzNEy6', 333, 'Kelinci 6', 0),
('LhWtrg35fkwMm0qzNEy6', 334, 'Kelinci 7', 0),
('G2RElDiZcK8MIOWbzAS0', 335, 'Panda 1', 0),
('G2RElDiZcK8MIOWbzAS0', 336, 'Panda 2', 0),
('G2RElDiZcK8MIOWbzAS0', 337, 'Panda 3', 0),
('4btjUon3JDYR7ecPHVSM', 338, 'Isolasi 1', 0),
('SbLM8s1tpnmoGYjaPAHV', 339, 'ICU 1', 0),
('SbLM8s1tpnmoGYjaPAHV', 340, 'ICU 2', 0),
('SbLM8s1tpnmoGYjaPAHV', 341, 'ICU 3', 0),
('rpdw4jXN0bQocCZIey9h', 342, 'Teuku Panglima Polem', 0),
('rpdw4jXN0bQocCZIey9h', 343, 'Teuku Panglima Polem', 0),
('rpdw4jXN0bQocCZIey9h', 344, 'Teuku Panglima Polem', 0),
('eAcGwmU6HBXES5o7sMDg', 345, 'Humaira 1 1', 0),
('9L6zjOsxX4lDtFpUcnA1', 346, 'Humaira 2 1', 0),
('9txihaKyk4cXPVrHwAQe', 347, 'Humaira 3 1', 0),
('qZP0BeohvNSCx1HXgbj7', 348, 'Humara 4 1', 0),
('qZP0BeohvNSCx1HXgbj7', 349, 'Humara 4 2', 0),
('6EA4fW0ou2qipURQzrn8', 350, 'Humaira 5 1', 0),
('6EA4fW0ou2qipURQzrn8', 351, 'Humaira 5 2', 0),
('nPo1FbQRJU5l8kGqSexs', 352, 'Humaira 6 1', 0),
('nPo1FbQRJU5l8kGqSexs', 353, 'Humaira 6 2', 0),
('6dOoALMhKIlUr9Y0gVus', 354, 'Humaira 7 1', 0),
('6dOoALMhKIlUr9Y0gVus', 355, 'Humaira 7 2', 0),
('yWX46m1jpHaQU3sqv0Zl', 356, 'Humara 8 1', 0),
('yWX46m1jpHaQU3sqv0Zl', 357, 'Humara 8 2', 0),
('yWX46m1jpHaQU3sqv0Zl', 358, 'Humara 8 3', 0),
('yWX46m1jpHaQU3sqv0Zl', 359, 'Humara 8 4', 0),
('SYiobe6l4yjWm5FrNZcg', 360, 'Humaira 9 1', 0),
('SYiobe6l4yjWm5FrNZcg', 361, 'Humaira 9 2', 0),
('SYiobe6l4yjWm5FrNZcg', 362, 'Humaira 9 3', 0),
('SYiobe6l4yjWm5FrNZcg', 363, 'Humaira 9 4', 0),
('RcmEwVSU6jP1sFvyoYi7', 364, 'Arafah 1 1', 0),
('gf4AjkOY0Hxocl9BdyN5', 365, 'Arafah 2 1', 0),
('tV7IcKvHOldSZ861weEk', 366, 'Arafah 3 1', 0),
('4iaYzeE6l3bm2HZF5MRq', 367, 'Arafah 4 1', 0),
('4iaYzeE6l3bm2HZF5MRq', 368, 'Arafah 4 2', 0),
('OsFPWLNmQGKC3qZdBR7e', 369, 'Arafah 5 1', 0),
('OsFPWLNmQGKC3qZdBR7e', 370, 'Arafah 5 2', 0),
('X79dI3MAPoxEYhNpU4Cv', 371, 'Arafah 6 1', 0),
('X79dI3MAPoxEYhNpU4Cv', 372, 'Arafah 6 2', 0),
('yCiFtZWLV7K9ohImYUdp', 373, 'Arafah 7 1', 0),
('yCiFtZWLV7K9ohImYUdp', 374, 'Arafah 7 2', 0),
('NAmlYHPSqzBpjOZx1he2', 375, 'Arafah 8 1', 0),
('NAmlYHPSqzBpjOZx1he2', 376, 'Arafah 8 2', 0),
('NAmlYHPSqzBpjOZx1he2', 377, 'Arafah 8 3', 0),
('NAmlYHPSqzBpjOZx1he2', 378, 'Arafah 8 4', 0),
('QlKFT3oW2O4Zm5nHcyqe', 379, 'Arafah 9 1', 0),
('QlKFT3oW2O4Zm5nHcyqe', 380, 'Arafah 9 2', 0),
('QlKFT3oW2O4Zm5nHcyqe', 381, 'Arafah 9 3', 0),
('QlKFT3oW2O4Zm5nHcyqe', 382, 'Arafah 9 4', 0),
('gBsy4Vn8YbJTFaR1cjqL', 383, 'Senarai 1 1', 0),
('AS2Pz4wElvIoqkD8QRGs', 384, 'Senarai 2 1', 0),
('zfGaIHUylKpVCMYo2cb1', 385, 'Senarai 3 1', 0),
('K52zwrue1Dd9bvy7Bp6Q', 386, 'Senarai 4 1', 0),
('K52zwrue1Dd9bvy7Bp6Q', 387, 'Senarai 4 2', 0),
('EwHzdAjm30cRCSnVgJYv', 388, 'Senarai 5 1', 0),
('EwHzdAjm30cRCSnVgJYv', 389, 'Senarai 5 2', 0),
('SgXA8YaPHBINxbw3dyhO', 390, 'Senarai 6 1', 0),
('SgXA8YaPHBINxbw3dyhO', 391, 'Senarai 6 2', 0),
('chBLEd0aJmxNDUI5Yoif', 392, 'Senarai 7 1', 0),
('chBLEd0aJmxNDUI5Yoif', 393, 'Senarai 7 2', 0),
('Ysy58hVzCv4E6qkMGpZ7', 394, 'Senarai 8 1', 0),
('Ysy58hVzCv4E6qkMGpZ7', 395, 'Senarai 8 2', 0),
('OwEcqmWjus7aCMtVRABK', 396, 'Senarai 9 1', 0),
('OwEcqmWjus7aCMtVRABK', 397, 'Senarai 9 2', 0),
('OwEcqmWjus7aCMtVRABK', 398, 'Senarai 9 3', 0),
('OwEcqmWjus7aCMtVRABK', 399, 'Senarai 9 4', 0),
('OwEcqmWjus7aCMtVRABK', 400, 'Senarai 9 5', 0),
('OwEcqmWjus7aCMtVRABK', 401, 'Senarai 9 6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`),
  ADD UNIQUE KEY `nama_jenis_kelamin` (`nama_jenis_kelamin`);

--
-- Indexes for table `jenis_rs`
--
ALTER TABLE `jenis_rs`
  ADD PRIMARY KEY (`id_jenis_rs`),
  ADD UNIQUE KEY `nama_jenis_rs` (`nama_jenis_rs`);

--
-- Indexes for table `jenis_ruang`
--
ALTER TABLE `jenis_ruang`
  ADD PRIMARY KEY (`id_jenis_ruang`),
  ADD UNIQUE KEY `nama_jenis_ruang` (`nama_jenis_ruang`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kelas_kamar`
--
ALTER TABLE `kelas_kamar`
  ADD PRIMARY KEY (`id_kelas_kamar`),
  ADD UNIQUE KEY `nama_kelas_kamar` (`nama_kelas_kamar`);

--
-- Indexes for table `kelas_rs`
--
ALTER TABLE `kelas_rs`
  ADD PRIMARY KEY (`id_kelas_rs`),
  ADD UNIQUE KEY `nama_kelas_rs` (`nama_kelas_rs`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pemilik_rs`
--
ALTER TABLE `pemilik_rs`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD UNIQUE KEY `nama_pemilik_rs` (`nama_pemilik_rs`);

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`id_rawat`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`kode_rs`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_tlp` (`no_hp`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  ADD PRIMARY KEY (`id_tempat_tidur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jenis_rs`
--
ALTER TABLE `jenis_rs`
  MODIFY `id_jenis_rs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jenis_ruang`
--
ALTER TABLE `jenis_ruang`
  MODIFY `id_jenis_ruang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `kelas_kamar`
--
ALTER TABLE `kelas_kamar`
  MODIFY `id_kelas_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas_rs`
--
ALTER TABLE `kelas_rs`
  MODIFY `id_kelas_rs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pemilik_rs`
--
ALTER TABLE `pemilik_rs`
  MODIFY `id_pemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `id_rawat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  MODIFY `id_tempat_tidur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
