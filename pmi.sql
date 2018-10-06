-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 10:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mobil`
--

CREATE TABLE `jadwal_mobil` (
  `id` int(10) NOT NULL,
  `tgl_update` date NOT NULL,
  `waktu` time NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_mobil`
--

INSERT INTO `jadwal_mobil` (`id`, `tgl_update`, `waktu`, `alamat`) VALUES
(1, '2018-07-30', '08:00:00', 'FBA(Forum Bangun Aceh), Banda Aceh'),
(2, '2018-07-29', '07:00:00', 'Blang Padang'),
(3, '2018-07-29', '08:08:00', 'Lanud SIM, Blang Bintang'),
(4, '2018-07-29', '08:00:00', 'CAR FREE DAY, Depan DPRA '),
(5, '2018-07-28', '08:00:00', 'Tupperware, Batoh'),
(6, '2018-07-26', '08:00:00', 'Bank Aceh Syariah Batoh'),
(7, '2018-07-24', '08:00:00', 'Bank Aceh Jeulingke');

-- --------------------------------------------------------

--
-- Table structure for table `kantong_darah`
--

CREATE TABLE `kantong_darah` (
  `id_ukuran` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `id_pendonor` varchar(50) DEFAULT NULL,
  `id_darah` int(11) NOT NULL,
  `pesan` int(3) DEFAULT NULL,
  `id_rs` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `tanggal pesan` date DEFAULT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pmi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantong_darah`
--

INSERT INTO `kantong_darah` (`id_ukuran`, `id_komponen`, `id_pendonor`, `id_darah`, `pesan`, `id_rs`, `user`, `tanggal pesan`, `tanggal_input`, `id_pmi`) VALUES
(1, 6, '13', 3331, NULL, NULL, NULL, NULL, '2018-07-27 17:54:09', 4),
(1, 6, '3', 3333, NULL, NULL, NULL, NULL, '2018-07-27 17:49:09', 4),
(1, 5, '1', 123456789, NULL, NULL, NULL, NULL, '2018-07-27 17:33:56', 2),
(1, 4, '16', 987654321, NULL, NULL, NULL, NULL, '2018-07-27 17:34:01', 2),
(1, 1, '9', 2147483647, NULL, NULL, NULL, NULL, '2018-07-27 17:34:03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `id_komponen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id_komponen`, `nama`) VALUES
(5, 'Cryoprecipitated AHF (AHF)'),
(4, 'Fresh Frozen Plasma (FFP)'),
(8, 'Fresh Plasma (FP)'),
(9, 'Leucodepleted'),
(6, 'Liquid Plasma (LP)'),
(2, 'PackedRed Cell (PRC)'),
(3, 'Trombocyte Concentrate (TC)'),
(7, 'Washed Erytrocyte (WE)'),
(1, 'Whole Blood (WB)');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nm_dokter` varchar(30) NOT NULL,
  `nm_pasien` varchar(30) NOT NULL,
  `diagnosa` varchar(30) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `verifikasi` int(3) DEFAULT NULL,
  `jumlah_verifikasi` int(11) DEFAULT NULL,
  `id_rs` varchar(50) NOT NULL,
  `no_rekam_medis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `j_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id_pendonor`, `nama`, `alamat`, `no_hp`, `gol_darah`, `nik`, `pekerjaan`, `j_kelamin`) VALUES
(1, 'Fachruddin', 'Baitussalam', '0852 5057 4747', 'O', '', '', 'laki-laki'),
(2, 'Nurul Izzati bt Anshari', 'Banda Aceh', '0823 6133 6503', 'AB', '', '', ''),
(3, 'M. Fadhilah', 'Sigli', '0853 7239 5524', 'B', '', '', 'laki-laki'),
(4, 'Teuku Munandar', 'Aceh Besar', '0812  6857 7142', 'A', '', '', 'laki-laki'),
(5, 'Andi Masta', 'Lhokseumawe', '0852 7749 9188', 'A', '', '', 'laki-laki'),
(6, 'Muhammad Afzal', '-', '0821 6742 0403', 'A', '', '', 'laki-laki'),
(7, 'Nazar', 'Banda Aceh', '0852 7733 8034', 'B+', '', '', 'laki-laki'),
(8, 'Fhonna', 'Ulee kareng', '0823 6552 1339', 'B', '', '', ''),
(9, 'T. Saifuddin', '-', '0852 6222 8577', 'B', '', '', 'laki-laki'),
(10, 'Putra Diansyah', '-', '0852 6017 0880', 'A', '', '', 'laki-laki'),
(11, 'Syibran', '-', '0852 6022 3333', 'B', '', '', 'laki-laki'),
(12, 'Zulheri', '-', '0853 6270 1906', 'O+', '', '', 'laki-laki'),
(13, 'Komar', '-', '0813 7718 0000', 'O', '', '', 'laki-laki'),
(14, 'Nurul Syahputri', 'Rukoh', '0852 1167 5411', 'B-', '', '', ''),
(15, 'Oky Sanjaya', 'Panterik', '0852 6119 7714', 'AB', '', '', 'laki-laki'),
(16, 'Agus Naufal', 'Batoh', '0813 8054 5011', 'O+', '', '', 'laki-laki'),
(17, 'Putri', 'Lueng Bata', '0823 7021 2394', 'O', '', '', ''),
(18, 'Yunda Fitria', 'Barabung', '0853 7086 4229', 'A+', '', '', ''),
(19, 'Ilyani Yusuf', 'Banda Aceh', '0852 9683 5379', 'O', '', '', 'laki-laki'),
(20, 'Ita Kurniawati', 'Banda Aceh', '0823 6144 4463', 'B', '', '', ''),
(21, 'Khaidir', 'Ulee kareng', '0823 6700 0556', 'B+', '', '', 'laki-laki'),
(22, 'Hendra Saputra', 'Aceh Utara', '0823 6166 3166', 'O', '', '', 'laki-laki'),
(23, 'Bahrijal', 'Ulee kareng', '0852 7652 5443', 'A', '', '', 'laki-laki'),
(24, 'Rubi Akbar', 'Banda Aceh', '0852 6038 3216', 'B', '', '', 'laki-laki'),
(25, 'Rahmat Darmawan', 'Indrapuri', '0852 2959 8180', 'O+', '', '', 'laki-laki'),
(26, 'Riyan Maulana', '-', '0852 6038 6296', 'O', '', '', 'laki-laki'),
(27, 'Rizki Andriani', '-', '0853 6004 5677', 'A', '', '', ''),
(28, 'Khalid Dahlan', '-', '0823 6165 7376', 'O+', '', '', 'laki-laki'),
(29, 'Alfi S', '-', '0852 6081 7762', 'A', '', '', 'laki-laki'),
(30, 'Muhammad Fadhil', '-', '0823 6134 3569', 'A', '', '', 'laki-laki'),
(31, 'Syahril', 'Banda Aceh', '0812 6963 640', 'A', '', '', ''),
(32, 'Eliana', 'Blang Oi', '0812 6298 8577', 'O+', '', '', ''),
(33, 'Ahmad Zikra', '-', '0812 6920 0700', 'O+', '', '', ''),
(34, 'Lidya Marisca', 'Banda Aceh', '0812 2189 5712', 'B+', '', '', ''),
(35, 'Adifatra Agussalim', 'Lhokseumawe', '0812 6958 510', 'B+', '', '', ''),
(36, 'Devi Fitriani', 'Blangpidie', '0852 7709 4842', 'O+', '', '', ''),
(37, 'Offi Miranda', 'Banda Aceh', '0852 7044 0101', 'A+', '', '', ''),
(38, 'Ahmad Zaki', 'Lhong Raya', '0852 6095 9130', 'A', '', '', ''),
(39, 'Murni Bustari', 'Mata Ie', '0852 6059 5477 ', 'B', '', '', ''),
(40, 'Darmadi', 'Lhokseumawe', '0823 6780 0511', 'B', '', '', ''),
(41, 'Junaidi', 'Lhokseumawe', '0852 6079 4423', 'AB', '', '', ''),
(42, 'Muslim', 'Banda Aceh', '0853 7074 2894', 'O', '', '', ''),
(43, 'T. Nurullah', 'Banda Aceh', '0822 7321 7015', 'O', '', '', ''),
(44, 'Jufnandar', 'Darussalam', '0813 6019 6951', 'B+', '', '', ''),
(45, 'Miska Rahmah', 'Darussalam', '0823 6132 8130', 'AB+', '', '', ''),
(46, 'Faisal', 'Banda Aceh', '0823 6920 4603', 'AB+', '', '', ''),
(47, 'Yudis', 'Aceh Utara', '0813 6006 6665', 'B', '', '', ''),
(48, 'Amda Resdiar', 'Banda Aceh', '0822 7748 3839', 'O+', '', '', ''),
(49, 'Khaliqun Setiawati', 'Banda Aceh', '0853 1522 0132', 'A+', '', '', ''),
(50, 'Zikri', 'Banda Aceh', '0812 6026 7012', 'O+', '', '', ''),
(51, 'Fauzan', 'Darussalam', '0852 6036 7276', 'B', '', '', ''),
(52, 'Muhammad Afzal', 'Banda Aceh', '0822 4854 6369', 'B', '', '', ''),
(53, 'Fitri Anizar', 'Aceh Besar', '0853 60 79 9525', 'O ', '', '', ''),
(54, 'Muhammad Imam Sugiri', 'Meulaboh', '0852 6031 4822', 'O', '', '', ''),
(55, 'Khairatul Ulfa', 'Lamgugop', '0822 7616 9339', 'B', '', '', ''),
(56, 'Teuku Anzar', 'Darussalam', '0821 6072 9859', 'B', '', '', ''),
(57, 'Reza Fahmi', 'Ateuk Pahlawan', '0852 6093 3343', 'O', '', '', ''),
(58, 'Tia Hidayatullah', 'Lamdingin', '0852 7701 1471', 'B+', '', '', ''),
(59, 'Aldi', 'Taman Sari', '0852 6025 2752', 'B+', '', '', ''),
(60, 'Maulina Sari Bancin', 'Ulee kareng', '0811 6722 900', 'A+', '', '', ''),
(61, 'Eki Wiranda', 'Singkil', '0813 7734 9869', 'O+', '', '', ''),
(62, 'Putri Azuwanna', 'Banda Aceh', '0823 7021 2394', 'O', '', '', ''),
(63, 'Juanda', 'Reuloh, Ingin Jaya', '0852 7732 0323', 'O+', '', '', ''),
(64, 'Ahmad Yanis', 'Tungkop', '0811 6709 001', 'B+', '', '', ''),
(65, 'Birrul Walidain', 'Banda Aceh', '0852 7770 4297', 'O', '', '', ''),
(66, 'Hilpi Reza', 'Banda Aceh', '0852 2298 1440', 'O', '', '', ''),
(67, 'Miswar', 'Pidie Jaya', '0852 6007 1050', 'O', '', '', ''),
(68, 'Dordi Musehu Yunsa', 'Banda Aceh', '0852 6054 0224', 'B', '', '', ''),
(69, 'Ridho', 'Banda Aceh', '0852 7757 9396', 'B', '', '', ''),
(70, 'Shafwandi', 'Pidie', '0852 6055 0388', 'O', '', '', ''),
(71, 'Rita Zahara', 'Banda Aceh', '0823 6030 6321', 'A', '', '', ''),
(72, 'Tuanku Ihsan', 'Neusu, Banda Aceh', '0852 3701 0053', 'B+', '', '', ''),
(73, 'Faisal Hardiansyah', 'Lamdingin', '0853 6063 3553', 'O+', '', '', ''),
(74, 'Zulfikar', 'Lamteumen', '0811 6811 789', 'B', '', '', ''),
(75, 'Furqan Ar-Rasyid', 'Banda Aceh', '0852 1502 6061', 'O+', '', '', ''),
(76, 'Arif Sardi', 'Banda Aceh', '0852 6474 7434', 'O', '', '', ''),
(77, 'Khalif', 'Banda Aceh', '0852 2125 4972', 'B+', '', '', ''),
(78, 'Windi', '-', '0822 7770 5553', 'A+', '', '', ''),
(79, 'Wardazifal', 'Banda Aceh', '0812 6235 5335', 'A', '', '', ''),
(80, 'Reza Novianda', 'MatangKumpangdua', '-', 'A+', '', '', ''),
(81, 'M. Farhan Maulana', 'Lhoknga', '0852 7742 2221', 'O+', '', '', ''),
(82, 'Alfi Rahman', 'Banda Aceh', '0853 7206 2122', 'B', '', '', ''),
(83, 'Tazkiah', 'Lambaro Angan', '-', 'O+', '', '', ''),
(84, 'Fifit Yunailisa', 'Darussalam', '0823 6210 1994', 'B+', '', '', ''),
(85, 'Danoel', 'Banda Aceh', '0852 3474 3989', 'O', '', '', ''),
(86, 'Anita Ridwan', 'Banda Aceh', '0852 7757 3354', 'O+', '', '', ''),
(87, 'Hendria Irawan', '-', '0822 7742 3760', 'B', '', '', ''),
(88, 'Nurul Rahmah Desilia', '-', '0822 1350 2371', 'B', '', '', ''),
(89, 'Arian Dwi Putra', 'Baitussalam', '0823 7044 1926', 'O', '', '', ''),
(90, 'Rizki Prayoga', 'Ketapang', '0823 6928 4141', 'AB', '', '', ''),
(91, 'Syamsul Bahri', '-', '0822 7330 1853', 'O+', '', '', 'laki-laki'),
(92, 'Taufiq Akbar', '-', '0852 7742 0518', 'O', '', '', 'laki-laki'),
(93, 'Yulia', 'Darussalam', '0852 7034 1572', 'O', '', '', ''),
(94, 'M. Surairi', 'Aceh Besar', '0812 6051 5548', 'O', '', '', 'laki-laki'),
(95, 'Sudarliadi', 'Garot, Aceh Besar', '0853 7033 4010', 'O+', '', '', ''),
(96, 'Annisa Putri Yanda', 'Gp. Pande', '-', 'O+', '', '', ''),
(97, 'Rahmat Ridha', '-', '0852 0676 4336', 'O+', '', '', ''),
(98, 'Annisak', 'Peukan Bada', '-', 'O', '', '', ''),
(99, 'Raudhatul Jannah', '-', '0852 60684543', 'O', '', '', ''),
(100, 'Irwan', '-', '0812 6298 0030', 'O', '', '', 'laki-laki'),
(101, 'Zati', 'Banda Aceh', '0812 6429 6578', 'O', '', '', ''),
(102, 'Haikal Noviandri', 'Ulee kareng', '0853 7005 1394', 'B', '', '', 'laki-laki'),
(103, 'Rainiral', 'Kuta Baro', '0823 6181 8814', 'O', '', '', ''),
(104, 'Novri Hasian', 'Gp. Pineung', '0853 2201 1903', 'O', '', '', 'laki-laki'),
(105, 'Muhajir', '-', '0823 7053 1530', 'B', '', '', 'laki-laki'),
(106, 'Zikri Ubaidillah', 'Ulee kareng', '0823 6267 3646', 'B', '', '', 'laki-laki'),
(107, 'Shella Yuni Sara', 'Banda Aceh', '0853 7123 2792', 'O+', '', '', ''),
(108, 'Ghalif Mahesa', 'Cot Masjid', '0823 6536 7835', 'O+', '', '', 'laki-laki'),
(109, 'Fera BZ', 'Aceh Besar', '0821 6741 9600', 'O+', '', '', ''),
(110, 'Ihsan', 'Banda Aceh', '0853 7039 7090', 'B', '', '', 'laki-laki'),
(111, 'Renni YP', 'Banda Aceh', '0823 6001 6306', 'B+', '', '', ''),
(112, 'Syarkawi', 'Banda Aceh', '-', 'O+', '', '', 'laki-laki'),
(113, 'Sri Mawarni', 'Ulee kareng', '0823 8632 3291', 'A+', '', '', ''),
(114, 'Mirwan', 'Blang Bintang', '0852 7780 8189', 'AB', '', '', 'laki-laki'),
(115, 'Maisura', 'Lampoh Daya', '0823 6609 2818', 'O', '', '', ''),
(116, 'Avicenna', 'Banda Aceh', '0846 001 5808', 'B', '', '', ''),
(117, 'Prayoga', 'Ulee kareng', '0852 6951 5121', 'O', '', '', 'laki-laki'),
(118, 'Dek Pon', '-', '0821 6850 4387', 'B', '', '', 'laki-laki'),
(119, 'Ulfa', 'Banda Aceh', '0852 6003 5130', 'O+', '', '', ''),
(120, 'Fahzian Aldevan', 'Lamgapang', '0852 6044 6268', 'B', '', '', 'laki-laki'),
(121, 'Fera Muzdalifah', 'Darussalam', '0823 6672 3032', 'B', '', '', 'laki-laki'),
(122, 'Nur Inda Rahayu', '-', '0823 6107 1100', 'A+', '', '', ''),
(123, 'Fahrizal ', 'Meulaboh', '0853 7295 0913', 'O', '', '', 'laki-laki'),
(124, 'Agus Rizal ', 'Jambo Tape', '0852 7745 0540', 'B', '', '', 'laki-laki'),
(125, 'Nuhazisah', 'Peuniti', '0813 6447 7249', 'O+', '', '', ''),
(126, 'Surimoulina', 'Gp. Pineung', '0852 6141 2399', 'B+', '', '', ''),
(127, 'Derial N', 'Lamgugop', '0811 6808 011', 'O+', '', '', 'laki-laki'),
(128, 'Dedi Sufriadi', 'Indrapuri', '0852 6008 2672', 'A+', '', '', 'laki-laki'),
(129, 'Farid Wajidi', 'Indrapuri', '0823 6550 7171', 'AB', '', '', 'laki-laki'),
(130, 'Eka Kurnia Sari', 'Prada', '0823 6087 2324', 'A', '', '', ''),
(131, 'Cut Miftahul Jannah', 'Darussalam', '0823 6876 3152', 'A', '', '', ''),
(132, 'Miftahuddin', 'Jeulingke', '0852 6020 0776', 'O', '', '', ''),
(133, 'Ainal Mardhiah', 'Tungkop', '0813 6067 7404', 'B', '', '', ''),
(134, 'Ashlan', 'Pidie Jaya', '0852 6054 6562', 'A', '', '', 'laki-laki'),
(135, 'Devi Mulia Sari', 'Ulee kareng', '0852 6007 0255', 'O', '', '', ''),
(136, 'Rama Setia', 'Langsa', '0852 2692 8581', 'O+', '', '', 'laki-laki'),
(137, 'Mirwan ', 'Ulee kareng', '0852 7780 8189', 'AB', '', '', 'laki-laki'),
(138, 'Putri ', 'Lampeunerut', '0822 7420 6882', 'B+', '', '', ''),
(139, 'Rini Mairika', 'Tapak Tuan', '0852 6088 4521', 'B', '', '', ''),
(140, 'Emi Vovo Sembiring', 'Lhokseumawe', '0853 6100 4240', 'A+', '', '', 'laki-laki'),
(141, 'Riazul Iqbal', 'Sigli', '0823 6026 4446', 'A+', '', '', 'laki-laki'),
(142, 'Rafsan Jani', 'Prada', '-', 'O', '', '', 'laki-laki'),
(143, 'Rizki Munandar', 'Blang Bintang', '0852 7704 6906', 'B', '', '', 'laki-laki'),
(144, 'Khaidir Ali', 'Banda Aceh', '0852 3159 1485', 'A', '', '', 'laki-laki'),
(145, 'T. Riyan Al Kausar', 'Banda Aceh', '0853 7361 1905', 'A', '', '', 'laki-laki'),
(146, 'Rizkan Jadid', 'Prada', '0853 6005 8402', 'O', '', '', 'laki-laki'),
(147, 'M. Nur Wahyudi', 'Banda Aceh', '0853 5991 5212', 'AB', '', '', 'laki-laki'),
(148, 'Al Mendar Saputra', 'Aceh Utara', '-', 'B', '', '', 'laki-laki'),
(149, 'M. Ahmadi Kelana', 'Aceh Utara', '0852 6179 1181', 'O', '', '', 'laki-laki'),
(150, 'Nurul Hadya Usman', 'Montasik', '-', 'B', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` varchar(50) NOT NULL,
  `nm_dokter` varchar(30) NOT NULL,
  `nm_pasien` varchar(30) NOT NULL,
  `diagnosa` varchar(30) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `verifikasi` int(3) DEFAULT NULL,
  `jumlah_verifikasi` int(11) DEFAULT NULL,
  `id_rs` varchar(50) NOT NULL,
  `no_rekam_medis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `nm_dokter`, `nm_pasien`, `diagnosa`, `gol_darah`, `jumlah`, `verifikasi`, `jumlah_verifikasi`, `id_rs`, `no_rekam_medis`) VALUES
('cOgo9sfLQK', 'Zulfian', 'Anto', 'Jantung', 'B', 2, NULL, NULL, '1171015', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_rs` varchar(50) NOT NULL,
  `id_darah` varchar(50) DEFAULT NULL,
  `id_pesan` int(50) NOT NULL,
  `id_pmi` varchar(50) NOT NULL,
  `id_permintaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_rs`, `id_darah`, `id_pesan`, `id_pmi`, `id_permintaan`) VALUES
('1171015', NULL, 3, '2', 'cOgo9sfLQK'),
('1171015', NULL, 4, '2', 'cOgo9sfLQK');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id_rs` varchar(50) NOT NULL,
  `nm_rs` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id_rs`, `nm_rs`, `type`, `no_hp`, `alamat`, `email`, `password`) VALUES
('1171015', 'RS Umum Daerah Dr. Zainoel Abidin', 'A', '0651-34562', 'Jl. Tgk Daud Beureueh, NO. 108 B. Aceh', 'www.rsuza.acehprov.go.id', '3a2d7564baee79182ebc7b65084aabd1'),
('1171026', 'RS Tk. II Iskandar Muda Banda Aceh', 'B', ' 065124712', 'Jl. T. Hamzah Bendahara No. 1 Banda Aceh', ' rumahsakitim@yahoo.com', ''),
('1171041', 'RS Jiwa Banda Aceh', 'A', '0651-32020', 'Jl. Dr.T.Syarief Thayeb,No.25 Banda Aceh', 'sirs@acehprov.go.id', ''),
('1171085', 'RS Umum Malahayati', '', '0651- 46115', 'Jl. Cut Nyak Dhien No : 498 ,Banda Aceh', ' rumahsakitmalahayati@yahoo.co', ''),
('1171096', 'RS Umum Harapan Bunda Banda Aceh', 'C', '0651- 48114', 'Jl. Teuku Umar 181,Banda Aceh', 'rsharapanbunda181@gmail.com', ''),
('1171106', 'RS Umum Teuku Fakinah', 'C', '0651 41454', 'Jl. Jend.Sudirman 27-29,Banda Aceh', ' teungkufakinah.hospital@yahoo', ''),
('1171110', 'RS Umum Daerah Meuraxa', 'B', '	  0651-43097', 'Jalan Soekarno Hatta Km.2 Desa Mibo Kecamatan Band', ' rsum@bandaacehkota.go.id', ''),
('1171121', 'RS Ibu dan Anak Propinsi NAD', 'B', ' 0651-637796', 'Jl. Prof.A.Madjid Ibrahim I, No. 3 Banda Aceh', ' rsia@acehprov.go.id', ''),
('1171132', 'RS Umum Permata Hati', 'C', ' 0651-7428872', 'Jl. Sultan Iskandar Muda No.217,Banda Aceh', '', ''),
('1171143', 'RS Bhayangkara Banda Aceh', 'C', '0651-41470', 'Jl. Cut Nyak Dhien No. 23, Lamteumen Barat Banda A', 'bhayangkara_banda_aceh@yahoo.c', ''),
('1171145', 'RS Umum Meutia', 'D', ' 0651-33149', 'Jl. Cut Meutia No. 55', '', ''),
('1171146', 'RS Umum Cempaka Az Zahra Banda Aceh', 'C', ' 0651-31066', 'Jl. Pocut Baren, 36-40', ' rsu_azzahra@yahoo.com', ''),
('1171147', 'RS Umum Prince Nayef Bin Abdul Aziz Syiah Kuala', 'D', '08116819755', 'Jl. Lingkar Kampus', ' hrd.rspn@gmail.com', ''),
('1171148', 'RS Umum Bulan Sabit Merah Indonesia Aceh', 'C', '0651-638701', 'Jl. Sultan Malikul Saleh No. 17 Lamlagang, Kec. Ba', ' deydifitriady@yahoo.co.id', ''),
('1171150', 'RS Umum Pertamedika Ummi Rosnati', 'C', '0651 35092', 'Jl. Sekolah No. 5 Gampoeng Ateuk Pahlawan, Kecamat', 'office@rspur.co.id', '');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `ukuran`, `harga`) VALUES
(1, '350', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `id_pmi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `user`, `email`, `no_hp`, `alamat`, `password`, `level`, `id_pmi`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
('PMI Banda Aceh', 'pmi', 'pmi', 'pmi', 'pmi', '995f0d99ad310ee6ba78be2ce2e84e3f', 2, 2),
('PMI Aceh Besar', 'pmi_aceh_besar', 'pmi', 'pmi', 'pmi', '995f0d99ad310ee6ba78be2ce2e84e3f', 2, 4),
('rs', 'rs', 'rs', 'rs', 'rs', '3a2d7564baee79182ebc7b65084aabd1', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kantong_darah`
--
ALTER TABLE `kantong_darah`
  ADD PRIMARY KEY (`id_darah`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id_komponen`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`),
  ADD UNIQUE KEY `ukuran` (`ukuran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `id_pmi` (`id_pmi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kantong_darah`
--
ALTER TABLE `kantong_darah`
  MODIFY `id_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pmi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
