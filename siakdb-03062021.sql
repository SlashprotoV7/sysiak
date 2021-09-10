-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:59 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_auth`
--

CREATE TABLE `a_auth` (
  `username` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL COMMENT 'NIP',
  `password` varchar(128) NOT NULL,
  `jenis_user` int(1) NOT NULL,
  `date_created` int(11) DEFAULT NULL COMMENT 'Kapan Akses Login dibuat',
  `last_login` datetime DEFAULT NULL COMMENT 'Terrakhir Login',
  `status` int(1) NOT NULL COMMENT 'Aktif / Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_auth`
--

INSERT INTO `a_auth` (`username`, `id_user`, `password`, `jenis_user`, `date_created`, `last_login`, `status`) VALUES
('admin', '-', '$2y$10$WIB5RQHzX049JYfNLB.fkuUHE0swmJNsTYDzs6Y8cglhm5Y2kVDyq', 1, 0, NULL, 1),
('hera', '202001', '$2y$10$lu/kvlkp7JZLx/KT7sQ.VeWFaI/1lNahZxtGNo6eSuiKDfJpwC./S', 4, NULL, NULL, 1),
('jokoda', '197612242001121001', '$2y$10$2MSY5sI5DBEBVM8CQ2XZpuQyUjGA1MypwhXT.FUZxeh.UIcw4nI8y', 2, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `a_hakim`
--

CREATE TABLE `a_hakim` (
  `nip` varchar(18) NOT NULL COMMENT 'NIP Hakim',
  `nama` varchar(128) NOT NULL COMMENT 'Nama Hakim',
  `gol` int(2) NOT NULL COMMENT 'Golongan Sekarang',
  `tmt1` date NOT NULL COMMENT 'Terhitung Mulai (Pangkat Golongan)',
  `jabatan` int(2) NOT NULL COMMENT 'Nama Jabatan Sekarang',
  `bagian` int(3) NOT NULL,
  `tmt2` date NOT NULL COMMENT 'Terhitung Mulai (Jabatan)',
  `masa_tahun` int(5) DEFAULT NULL COMMENT 'Tahun Masa Kerja',
  `masa_bulan` int(3) DEFAULT NULL COMMENT 'Bulan Masa Kerja',
  `latihan` varchar(128) NOT NULL COMMENT 'Nama Pelatihan Yang Pernah Diikuti',
  `latihan_tahun` varchar(5) NOT NULL COMMENT 'Tahun Selesai Pelatihan',
  `pendidikan` varchar(128) NOT NULL COMMENT 'Nama Perguruan Tinggi',
  `pend_tahun` varchar(5) NOT NULL COMMENT 'Tahun Lulus',
  `tk_ijazah` varchar(3) NOT NULL COMMENT 'SMA/SMK/D3/S1/S2/S3/',
  `tempat_lahir` varchar(128) NOT NULL COMMENT 'Tempat Lahir',
  `tgl_lahir` date DEFAULT NULL COMMENT 'Tangggal Lahir',
  `kgb` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Gaji Berkala',
  `kpk` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Pangkat',
  `mutasi` date DEFAULT NULL COMMENT 'Tanggal Mutasi',
  `ket` varchar(128) NOT NULL COMMENT 'Mutasi Dari',
  `email` varchar(64) DEFAULT NULL COMMENT 'Email Hakim',
  `no_hp` varchar(15) DEFAULT NULL COMMENT 'No. HP Hakim',
  `n_foto` varchar(20) DEFAULT NULL COMMENT 'nama foto',
  `status` int(3) NOT NULL COMMENT 'Masih/Sudah Pindah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_hakim`
--

INSERT INTO `a_hakim` (`nip`, `nama`, `gol`, `tmt1`, `jabatan`, `bagian`, `tmt2`, `masa_tahun`, `masa_bulan`, `latihan`, `latihan_tahun`, `pendidikan`, `pend_tahun`, `tk_ijazah`, `tempat_lahir`, `tgl_lahir`, `kgb`, `kpk`, `mutasi`, `ket`, `email`, `no_hp`, `n_foto`, `status`) VALUES
('197612242001121001', 'Joko Dwi Atmoko, SH, MH', 1, '2016-01-10', 1, 1, '2019-01-30', 18, 0, 'Diklat.Pim Lanjutan & Kehumasan', '2019', 'Univ.Muslim Indonesia', '2012', 'S2', 'Boyolali', '1976-12-24', '2021-12-01', '2020-10-01', '2019-01-30', 'PN.TOLITOLI', NULL, NULL, 'default.jpg', 11),
('197911062002121004', 'Eka Prasetya Budi Dharma, SH, MH', 5, '2020-11-10', 2, 2, '2020-11-03', NULL, NULL, 'Lahitan aja', '2020', 'Univ', '2020', 'S2', 'itu la', '2020-11-18', '2020-11-11', '2020-11-06', '2020-11-28', '-', NULL, NULL, NULL, 11);

-- --------------------------------------------------------

--
-- Table structure for table `a_honorer`
--

CREATE TABLE `a_honorer` (
  `id` varchar(18) NOT NULL COMMENT 'xxYYYYYY (xx = nomor urut, YYYYYY = tglblntahun Lahir)',
  `nama` varchar(128) NOT NULL COMMENT 'Nama Honorer',
  `jabatan` varchar(2) NOT NULL COMMENT 'Jabatan',
  `bagian` int(3) NOT NULL,
  `email` varchar(64) DEFAULT NULL COMMENT 'Email Honorer',
  `no_hp` varchar(15) NOT NULL COMMENT 'No HP Honorer',
  `dari` date NOT NULL COMMENT 'Tanggal Mulai Kerja',
  `hingga` date NOT NULL COMMENT 'Tanggal Berhenti',
  `n_foto` varchar(20) DEFAULT NULL COMMENT 'nama foto',
  `status` int(3) NOT NULL COMMENT 'Masih/Sudah Berhenti'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a_pegawai`
--

CREATE TABLE `a_pegawai` (
  `nip` varchar(18) NOT NULL COMMENT 'NIP Pegawai',
  `nama` varchar(128) NOT NULL COMMENT 'Nama Pegawai',
  `gol` int(2) NOT NULL COMMENT 'Golongan Sekarang',
  `tmt1` date NOT NULL COMMENT 'Terhitung Mulai (Pangkat Golongan)',
  `jabatan` int(2) NOT NULL COMMENT 'Jabatan Sekarang',
  `bagian` int(3) NOT NULL,
  `tmt2` date NOT NULL COMMENT 'Terhitung Mulai (Jabatan)',
  `masa_tahun` int(5) NOT NULL COMMENT 'Tahun Masa Kerja',
  `masa_bulan` int(3) NOT NULL COMMENT 'Bulan Masa Kerja',
  `latihan` varchar(128) NOT NULL COMMENT 'Nama Pelatihan Yang Pernah Diikuti',
  `latihan_tahun` varchar(5) NOT NULL COMMENT 'Tahun Selesai Pelatihan',
  `pendidikan` varchar(128) NOT NULL COMMENT 'Nama Perguruan Tinggi',
  `pend_tahun` varchar(5) NOT NULL COMMENT 'Tahun Lulus',
  `tk_ijazah` varchar(3) NOT NULL COMMENT 'SMA/SMK/D3/S1/S2/S3/',
  `tempat_lahir` varchar(128) NOT NULL COMMENT 'Tempat Lahir',
  `tgl_lahir` date NOT NULL COMMENT 'Tangggal Lahir',
  `kgb` date NOT NULL COMMENT 'Tanggal Kenaikan Gaji Berkala',
  `kpk` date NOT NULL COMMENT 'Tanggal Kenaikan Pangkat',
  `mutasi` date NOT NULL COMMENT 'Tanggal Mutasi',
  `ket` varchar(128) NOT NULL COMMENT 'Mutasi Dari',
  `email` varchar(64) DEFAULT NULL COMMENT 'Email Pegawai',
  `no_hp` varchar(15) DEFAULT NULL COMMENT 'No HP Pegawai',
  `n_foto` varchar(20) DEFAULT NULL,
  `status` int(3) NOT NULL COMMENT 'Masih/Sudah Pindah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_pegawai`
--

INSERT INTO `a_pegawai` (`nip`, `nama`, `gol`, `tmt1`, `jabatan`, `bagian`, `tmt2`, `masa_tahun`, `masa_bulan`, `latihan`, `latihan_tahun`, `pendidikan`, `pend_tahun`, `tk_ijazah`, `tempat_lahir`, `tgl_lahir`, `kgb`, `kpk`, `mutasi`, `ket`, `email`, `no_hp`, `n_foto`, `status`) VALUES
('132314', 'Asep', 2, '2020-10-01', 18, 9, '2020-11-03', 18, 2, '-', '2020', 'Politeknik Negeri Batam', '2017', 'D3', 'Balai', '2020-06-08', '2020-04-17', '2020-06-17', '2020-11-01', 'PN Bandung', 'asep@asep.com', '-', '-', 11);

-- --------------------------------------------------------

--
-- Table structure for table `a_personilpn`
--

CREATE TABLE `a_personilpn` (
  `nip` varchar(20) NOT NULL COMMENT 'NIP Hakim, Pegawai, ID Honorer',
  `nama` varchar(128) NOT NULL,
  `gol` int(3) DEFAULT NULL COMMENT 'Golongan Sekarang',
  `tmt1` date DEFAULT NULL COMMENT 'Terhitung Mulai (Pangkat Golongan)',
  `jabatan` int(2) DEFAULT NULL COMMENT 'Jabatan Sekarang',
  `tmt2` date DEFAULT NULL COMMENT 'Terhitung Mulai (Jabatan)',
  `masa_tahun` int(5) DEFAULT NULL COMMENT 'Tahun Masa Kerja',
  `masa_bulan` int(3) DEFAULT NULL COMMENT 'Bulan Masa Kerja',
  `latihan` varchar(128) DEFAULT NULL COMMENT 'Nama Pelatihan Yang Pernah Diikuti',
  `latihan_tahun` varchar(5) DEFAULT NULL COMMENT 'Tahun Selesai Pelatihan',
  `pendidikan` varchar(128) DEFAULT NULL COMMENT 'Nama Perguruan Tinggi',
  `pend_tahun` varchar(5) DEFAULT NULL COMMENT 'Tahun Lulus',
  `tk_ijazah` varchar(3) DEFAULT NULL COMMENT 'SMA/SMK/D3/S1/S2/S3/',
  `tempat_lahir` varchar(128) DEFAULT NULL COMMENT 'Tempat Lahir',
  `tgl_lahir` date DEFAULT NULL COMMENT 'Tangggal Lahir',
  `gender` varchar(2) DEFAULT NULL COMMENT 'Jenis Kelamin : 01 (Laki-Laki) | 02 (Perempuan) | - (NULL)',
  `kgb` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Gaji Berkala',
  `kpk` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Pangkat',
  `mutasi` date DEFAULT NULL COMMENT 'Tanggal Mutasi',
  `ket` varchar(128) DEFAULT NULL COMMENT 'Mutasi Dari',
  `email` varchar(64) DEFAULT NULL COMMENT 'Email Hakim',
  `no_hp` varchar(15) DEFAULT NULL COMMENT 'No. HP Hakim',
  `n_foto` varchar(20) DEFAULT NULL COMMENT 'nama foto',
  `status` int(3) NOT NULL COMMENT '11=Masih/12=Sudah Pindah/13=Berhenti',
  `status1` int(3) DEFAULT NULL COMMENT '18=Kawin/19=Belum Kawin/20=Bercerai',
  `status2` int(3) NOT NULL COMMENT '21=Hakim/22=Pegawai/23=CPNS/24=Honorer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_personilpn`
--

INSERT INTO `a_personilpn` (`nip`, `nama`, `gol`, `tmt1`, `jabatan`, `tmt2`, `masa_tahun`, `masa_bulan`, `latihan`, `latihan_tahun`, `pendidikan`, `pend_tahun`, `tk_ijazah`, `tempat_lahir`, `tgl_lahir`, `gender`, `kgb`, `kpk`, `mutasi`, `ket`, `email`, `no_hp`, `n_foto`, `status`, `status1`, `status2`) VALUES
('196511281993031003', 'Supriadi, SH', 7, '2020-10-01', 7, '2020-03-02', 0, 0, 'Pel.Manajerial', '1998', 'Universitas Batam', '2012', '3', 'SImalungun', '1965-11-28', '1', '2021-03-01', '2020-10-01', '2015-08-14', 'PN Batam', 'supriadi65@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 22),
('196908171993031007', 'Almasih', 8, '2018-10-01', 8, '2020-03-02', 0, 0, 'Pra Jabatan', '1993', '-', '1989', '5', 'Teluk Kuantan', '1969-08-17', '1', '2021-03-01', '2022-10-01', '2006-04-14', 'PN Batam', 'almasih@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 22),
('197203312014081002', 'Muhammad Yusuf', 12, '2018-10-01', 26, '2020-06-12', 0, 0, 'Pra Jabatan', '2015', '-', '1992', '5', 'Teluk Belitung', '1972-03-31', '1', '2021-08-01', '2022-10-01', '0001-01-01', '-', 'muhammadyusuf72@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 22),
('197206291993031001', 'Ronny Erlando', 8, '2016-10-01', 6, '2020-03-02', 0, 0, 'Pra Jabatan', '1995', '-', '1993', '5', 'Pekanbaru', '1972-06-29', '1', '2021-03-01', '2020-10-01', '2015-05-12', 'PN Pekanbaru', 'ronnyerlandolbs@gmail.com', NULL, 'default.jpg', 11, 18, 22),
('197612242001121001', 'Joko Dwi Atmoko, SH, MH', 1, '2016-01-10', 1, '2019-01-30', 18, 0, 'Diklat.Pim Lanjutan & Kehumasan', '2019', 'Univ.Muslim Indonesia', '2012', '2', 'Boyolali', '1976-12-24', NULL, '2021-12-01', '2020-10-01', '2019-01-30', 'PN.TOLITOLI', 'jokoda@gmail.com', NULL, 'default.jpg', 12, 18, 21),
('197911062002121004', 'Eka Prasetya Budi Dharma, SH, MH', 6, '2020-11-10', 2, '2020-11-03', NULL, NULL, 'Lahitan aja', '2020', 'Univ', '2020', '2', 'itu la', '2020-11-18', NULL, '2020-11-11', '2020-11-06', '2020-11-28', '-', 'ekapbd@gmail.com', NULL, 'default.jpg', 12, 18, 21),
('198005222003121001', 'Medi Rapi Batara Randa, SH', 5, '2018-04-01', 1, '2021-01-27', 0, 0, 'Pel.Yudisial Berkelanjutan', '2008', 'Sekolah Tinggi Ilmu Hukum IBLAM', '2008', '2', 'Toraja', '1980-05-22', '1', '2021-12-01', '2022-04-01', '2021-01-27', 'PN Majene', 'medirapi@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 21),
('198104212009041003', 'Muhammad Ronaldi, ST', 7, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ronaldi@gmail.com', NULL, 'default.jpg', 11, 18, 22),
('198308222014082002', 'Susi Wulandari', 12, '2018-10-01', 24, '2020-06-12', 0, 0, 'Pra Jabatan', '2015', '-', '2001', '5', 'Tg.Balai Karimun', '1983-08-22', '2', '2021-08-01', '2022-10-01', '0001-01-01', '-', 'susi@gmail.com', NULL, 'default.jpg', 11, 18, 22),
('198409022009041004', 'Syaiful Islami, SH', 7, '2017-04-01', 4, '2019-09-03', 0, 0, 'Pel.Teknis Fungsional Panitera Pengganti', '2014', 'Universitas Andalas', '2006', '3', 'Salo', '1984-09-02', '1', '2021-04-01', '2021-04-01', '2019-09-03', 'PN Ranai', 'syaifulislami@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 22),
('198506062009042007', 'Yuni Eka Putri, SH', 7, '2017-04-01', 11, '2019-04-29', 0, 0, 'Pra Jabatan', '2010', 'Universitas Jambi', '2007', '3', 'Jambi', '1985-06-06', '2', '2010-04-01', '2021-04-01', '2018-01-15', 'PT Jambi', 'ismanhumaira@gmail.com', NULL, 'default.jpg', 11, 18, 22),
('198512192009042006', 'Zaervina Kurniaty, A.Md, SH', 8, '2016-10-01', 12, '2015-12-29', 0, 0, 'Pra Jabatan', '2010', 'Universitas Lancang Kuning', '2013', '3', 'Teluk Kuantan', '1985-12-19', '2', '2021-04-01', '2021-04-01', '2015-12-29', 'PN Pekanbaru', 'kzaervina@yahoo.co.id', NULL, 'default.jpg', 11, 18, 22),
('198602082009042005', 'Renny Hidayati, SH', 7, '2007-04-01', 3, '2012-09-12', 0, 0, 'Pel.Hakim Berkelanjutan TK I', '2016', 'Universitas Riau', '2008', '3', 'Pekanbaru', '1986-02-08', '2', '2021-04-01', '2021-04-01', '2016-01-11', 'PN Bengkalis', 'renny@gmail.com', NULL, 'default.jpg', 11, 18, 21),
('198710112017121001', 'Rizka Fauzan, SH', 9, '2017-12-01', 3, '2020-04-23', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Universitas Muhammadiyah Jakarta', '2014', '3', 'Jakarta', '1987-10-11', '1', '2021-12-01', '2021-12-01', '0001-01-01', '-', 'rizkafauzan87@yahoo.com', NULL, 'default.jpg', 11, 18, 21),
('198908212014032003', 'Rosi Gustina, SH', 8, '2018-10-01', 23, '2020-06-12', 0, 0, 'Pra Jabatan', '2015', 'Universitas Andalas', '2012', '3', 'Agam', '1989-08-21', '1', '2020-03-01', '2022-10-01', '0001-01-01', '-', 'rosigustina22@gmail.com', NULL, 'default.jpg', 11, 18, 22),
('199208022017121005', 'Gracious Kesuma Prinstama Perangin Angin, SH', 9, '2017-12-01', 3, '2020-04-23', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Universitas Sumatera Utara', '2015', '3', 'Asahan', '1992-08-02', '1', '2021-12-01', '2021-12-01', '0001-01-01', '-', 'gractama@gmail.com', NULL, 'default.jpg', 11, 18, 21),
('199210102017121010', 'Ronal Roges Simorangkir, SH', 9, '2017-12-01', 3, '2020-04-23', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Univesitas Sriwijaya', '2014', '3', 'Muara Enim', '1992-10-10', '1', '2021-12-01', '2021-12-01', '0001-01-01', '-', 'ronalrogess@mahkamahagung.go.id', NULL, 'default.jpg', 11, 18, 21),
('199303272017121004', 'Aldonsius Joko Martin Pampang Siringoringo, SH', 9, '2017-12-01', 3, '2020-04-23', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Universitas Padjajaran', '2015', '3', 'Medan', '1993-03-27', '1', '2021-12-01', '2021-12-01', '0001-01-01', '-', 'alfonsiusjps@gmail.com', NULL, 'default.jpg', 11, 18, 21),
('199305122020122006', 'Goretti Anna Maria Situmorang, S.Kom', 9, '2020-12-01', 25, '2020-01-29', 0, 0, '-', '-', 'Perbanas Institute', '2019', '3', 'Toba Samosir', '1993-12-05', '2', '2022-12-01', '2024-12-01', '0001-01-01', '-', 'goretti@gmail.com', NULL, 'default.jpg', 11, 19, 23),
('199306242020121001', 'Reiva Adnan Sulaiman, A.MD, A.B', 11, '2020-12-01', 25, '2021-01-28', 0, 0, '-', '-', 'Politeknik Negeri Bandung', '2019', '4', 'Bandung', '1993-06-24', '1', '2021-12-01', '2024-12-01', '0001-01-01', '-', 'reiva.adnans@mahkamahagung.go.id', NULL, 'default.jpg', 11, 19, 24),
('199308092017122002', 'Tri Rahmi Khairunnisa, SH', 9, '2017-12-01', 3, '2020-04-12', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Universitas Riau', '2015', '3', 'Pekanbaru', '1993-08-09', '2', '2021-12-01', '2021-12-01', '0001-01-01', '-', 'trirahmikhairunnisa@mahkamahagung.go.id', NULL, 'default.jpg', 11, 19, 21),
('199406102017122005', 'Rifdah Juniarti Hasmi, SH', 9, '2017-12-01', 3, '2020-04-23', 0, 0, 'Diklat Calon Hakim Terpadu', '2019', 'Universitas Riau', '2016', '3', 'Kuantan Sengingi', '1994-06-10', '2', '2021-02-01', '2021-12-01', '0001-01-01', '-', 'rifdahjuniartihasmi@gmail.com', NULL, 'default.jpg', 11, 19, 21),
('202101', 'Hera Indra, S.Si', 18, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'hera@yahoo.co.id', NULL, 'default.jpg', 11, 18, 24),
('202102', 'Arex Riau Protomo, A.Md', 18, '0000-00-00', 20, '0000-00-00', 0, 0, '', '', 'Politeknik Negeri Batam', '2017', '4', 'Batu Lipai', '1996-04-16', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 19, 24),
('202103', 'Shodikul Waadil Amin, SH', 18, '0000-00-00', 15, '0000-00-00', 0, 0, '', '', 'Universitas Karimun', '2020', '3', 'Jepara', '1991-10-28', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202104', 'Ruth Hellen Simantupang, A.Md', 18, '0000-00-00', 15, '0000-00-00', 0, 0, '', '', 'STIK Tarakanita', '2009', '4', 'Tg.Balai karimun', '1989-06-17', '2', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202105', 'Ikhwandi Putra Rambe', 18, '0000-00-00', 16, '0000-00-00', 0, 0, '', '', '-', '2005', '5', 'Tg.Balai karimun', '1988-07-07', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202106', 'Sentia Gusrini', 18, '0000-00-00', 16, '0000-00-00', 0, 0, '', '', '-', '2015', '5', 'Meral Karimun', '1997-08-23', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202107', 'Mimi Susanti, SH', 18, '0000-00-00', 17, '0000-00-00', 0, 0, '', '', 'Universitas Karimun', '2020', '3', 'Inderapura', '1983-08-13', '2', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202108', 'Heri Irfan, SH', 18, '0000-00-00', 18, '0000-00-00', 0, 0, '', '', 'Universitas Terbuka', '2020', '3', 'Pulau Kijang', '1986-02-21', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202109', 'Iga Amilia Andriani, S.Si.', 18, '0000-00-00', 18, '0000-00-00', 0, 0, '', '', '-', '2015', '3', 'Kampung Baru', '1992-05-30', '2', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 19, 24),
('202110', 'Maimanah, S.Ip', 18, '0000-00-00', 18, '0000-00-00', 0, 0, '', '', 'Universitas Maritim Raja Ali Haji', '2017', '3', 'Tanjung Hutan', '1996-02-10', '2', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202111', 'Rosamin', 18, '0000-00-00', 18, '0000-00-00', 0, 0, '', '', '-', '1980', '5', 'Tanjung Pinang', '1957-04-10', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('202112', 'Khadir', 18, '0000-00-00', 18, '0000-00-00', 0, 0, '', '', '-', '1975', '5', 'Tg.Balai karimun', '0001-01-01', '1', '0000-00-00', '0000-00-00', '0000-00-00', '', NULL, NULL, 'default.jpg', 11, 18, 24),
('ADMIN', 'Administrator', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '', NULL, NULL, NULL, NULL, NULL, NULL, 'itpntbk018@gmail.com', NULL, 'admin.jpg', 11, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `b_surat`
--

CREATE TABLE `b_surat` (
  `id` int(11) NOT NULL,
  `kode1` varchar(8) NOT NULL,
  `kode2` varchar(8) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `bln` varchar(3) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `id_acc` varchar(18) NOT NULL COMMENT 'id penyetuju & pemberian ttd ke surat',
  `id_A` varchar(20) NOT NULL,
  `id_B` varchar(20) NOT NULL,
  `id_C` varchar(20) NOT NULL,
  `id_D` varchar(20) NOT NULL,
  `id_E` varchar(20) NOT NULL,
  `id_F` varchar(20) NOT NULL,
  `id_G` varchar(20) NOT NULL,
  `id_H` varchar(20) NOT NULL,
  `id_I` varchar(20) NOT NULL,
  `uraian` text NOT NULL,
  `tgl_surat` varchar(10) NOT NULL,
  `jam1` varchar(5) NOT NULL,
  `jam2` varchar(5) NOT NULL,
  `tgl_surat2` int(10) NOT NULL,
  `created_id` int(11) NOT NULL COMMENT 'dibuat oleh',
  `time_created` datetime DEFAULT NULL COMMENT 'Waktu Dibuatkan Suratnya'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_atk`
--

CREATE TABLE `c_atk` (
  `id` int(11) NOT NULL,
  `id_pengaju_atk` varchar(18) NOT NULL,
  `id_bidang` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_acc` varchar(18) NOT NULL,
  `tgl_acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_count_masuk_report_it`
--

CREATE TABLE `d_count_masuk_report_it` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL COMMENT 'id dari form masuk',
  `bulan` int(4) DEFAULT NULL,
  `tahun` year(4) NOT NULL COMMENT 'tahun form',
  `status` int(3) NOT NULL COMMENT '1 = masuk | 0 = proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_masuk_report_it`
--

INSERT INTO `d_count_masuk_report_it` (`id`, `id_form`, `bulan`, `tahun`, `status`) VALUES
(1, 1, 12, 2020, 0),
(2, 2, 12, 2020, 0),
(3, 3, 12, 2020, 0),
(4, 4, 12, 2020, 0),
(5, 5, 12, 2020, 0),
(6, 1, 3, 2021, 1);

-- --------------------------------------------------------

--
-- Table structure for table `d_count_proses_report_it`
--

CREATE TABLE `d_count_proses_report_it` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL COMMENT 'id dari form masuk',
  `bulan` int(4) DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(3) NOT NULL COMMENT '1 = proses | 0 = hapus/selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_proses_report_it`
--

INSERT INTO `d_count_proses_report_it` (`id`, `id_form`, `bulan`, `tahun`, `status`) VALUES
(1, 1, 12, 2020, 0),
(2, 2, 12, 2020, 0),
(3, 3, 12, 2020, 0),
(4, 4, 12, 2020, 1),
(5, 5, 12, 2020, 1),
(6, 1, 3, 2021, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_count_selesai_report_it`
--

CREATE TABLE `d_count_selesai_report_it` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL COMMENT 'id dari form masuk',
  `bulan` int(4) DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(3) NOT NULL COMMENT '1 = selesai | 0 = hapus/masuk/proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_selesai_report_it`
--

INSERT INTO `d_count_selesai_report_it` (`id`, `id_form`, `bulan`, `tahun`, `status`) VALUES
(1, 1, 12, 2020, 0),
(2, 2, 12, 2020, 0),
(3, 3, 12, 2020, 1),
(4, 4, 12, 2020, 0),
(5, 5, 12, 2020, 0),
(6, 1, 3, 2021, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_count_tolak_report_it`
--

CREATE TABLE `d_count_tolak_report_it` (
  `id` int(11) NOT NULL,
  `id_form` int(11) NOT NULL COMMENT 'id dari form masuk',
  `bulan` int(4) DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(3) NOT NULL COMMENT '1 = tolak | 0 = masuk'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_tolak_report_it`
--

INSERT INTO `d_count_tolak_report_it` (`id`, `id_form`, `bulan`, `tahun`, `status`) VALUES
(1, 1, 12, 2020, 1),
(2, 2, 12, 2020, 1),
(3, 3, 12, 2020, 0),
(4, 4, 12, 2020, 0),
(5, 5, 12, 2020, 0),
(6, 1, 3, 2021, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_laporan_pemeliharaan`
--

CREATE TABLE `d_laporan_pemeliharaan` (
  `id1` int(11) NOT NULL,
  `id_form` int(11) NOT NULL COMMENT 'Id Form Reset Setiap Tahun Menjadi 1',
  `id_pengaju` varchar(20) NOT NULL,
  `id_jabatan` int(3) DEFAULT NULL,
  `id_bagian` int(11) DEFAULT NULL,
  `tgl_pengajuan` date NOT NULL,
  `bulan` int(3) DEFAULT NULL COMMENT 'Diajukan Pada Bulan',
  `id_masalah` int(11) NOT NULL,
  `uraian_masalah` text NOT NULL,
  `status_form` int(11) NOT NULL COMMENT 'Masuk/Proses/Selesai',
  `id_pemeriksa` varchar(20) DEFAULT NULL COMMENT 'id_proses pengerjaan form',
  `tgl_pemeriksaan` date DEFAULT NULL COMMENT 'tgl proses pengerjaan',
  `hasil_pemeriksaan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_acc` varchar(20) DEFAULT NULL,
  `tgl_tolak` date DEFAULT NULL COMMENT 'tgl form ditolak',
  `id_penolak` varchar(20) DEFAULT NULL COMMENT 'user yang membatalkan form',
  `ket_tolak` text COMMENT 'alasan pembatalan form'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_laporan_pemeliharaan`
--

INSERT INTO `d_laporan_pemeliharaan` (`id1`, `id_form`, `id_pengaju`, `id_jabatan`, `id_bagian`, `tgl_pengajuan`, `bulan`, `id_masalah`, `uraian_masalah`, `status_form`, `id_pemeriksa`, `tgl_pemeriksaan`, `hasil_pemeriksaan`, `tgl_selesai`, `id_acc`, `tgl_tolak`, `id_penolak`, `ket_tolak`) VALUES
(1, 1, '197612242001121001', 1, 2, '2020-03-20', 12, 3, 'asd', 14, '0', '0000-00-00', '0', NULL, '0', '2021-03-18', '-', 'mnbhgjjj'),
(2, 2, '202001', 19, 2, '2020-12-20', 12, 1, 'o', 14, '0', '0000-00-00', '0', NULL, '0', '2021-03-16', '-', 'Tidak Jadi'),
(3, 3, '198104212009041003', 5, 4, '2020-12-20', 12, 4, 'dsa', 7, '-', '2020-12-24', 'Done', '2020-12-24', '-', NULL, '0', ''),
(4, 4, '202001', 19, 2, '2020-12-20', 12, 1, 'as', 6, '-', '2021-03-16', '', '0000-00-00', '0', '0000-00-00', '0', ''),
(5, 5, '197612242001121001', 1, 2, '2020-12-23', 12, 2, 'asd', 6, '-', '2020-12-22', '0', NULL, '0', NULL, '0', ''),
(6, 1, '197911062002121004', 2, 2, '2021-03-17', 3, 1, 'ert', 5, '0', '0000-00-00', '', '0000-00-00', '0', '0000-00-00', '0', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `ref_aktivasi`
--

CREATE TABLE `ref_aktivasi` (
  `id` int(1) NOT NULL,
  `aktivasii` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='untuk referensi aktivasi';

--
-- Dumping data for table `ref_aktivasi`
--

INSERT INTO `ref_aktivasi` (`id`, `aktivasii`) VALUES
(0, 'Tidak Aktif'),
(1, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `ref_bagian`
--

CREATE TABLE `ref_bagian` (
  `id` int(3) NOT NULL,
  `bagian` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_bagian`
--

INSERT INTO `ref_bagian` (`id`, `bagian`) VALUES
(1, 'Ketua Pengadilan'),
(2, 'Wakil Ketua Pengadilan'),
(3, 'Sekretaris'),
(4, 'Panitera Muda Pidana'),
(5, 'Panitera Muda Perdata'),
(6, 'Panitera Muda Hukum'),
(7, 'Jurusita'),
(8, 'Kepegawaian'),
(9, 'Umum & Keuangan'),
(10, 'PTIP'),
(11, 'Hakim'),
(12, 'PTSP - Hukum'),
(13, 'PTSP - Pidana'),
(14, 'PTSP - Umum'),
(15, 'PTSP - Perdata'),
(16, 'PTSP - Meja ECourt'),
(17, 'PTSP - Meja Informasi & Inzage');

-- --------------------------------------------------------

--
-- Table structure for table `ref_barang`
--

CREATE TABLE `ref_barang` (
  `id` int(3) NOT NULL,
  `indeks` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_barang`
--

INSERT INTO `ref_barang` (`id`, `indeks`) VALUES
(1, 'Kertas F4'),
(2, 'Kertas A4');

-- --------------------------------------------------------

--
-- Table structure for table `ref_bulan`
--

CREATE TABLE `ref_bulan` (
  `id_bulan` int(3) NOT NULL,
  `indeks_romawi` varchar(5) NOT NULL COMMENT 'Nama Bulan (ROMAWI)',
  `indeks_bulan` varchar(10) NOT NULL COMMENT 'Nama Bulan (Latin)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_bulan`
--

INSERT INTO `ref_bulan` (`id_bulan`, `indeks_romawi`, `indeks_bulan`) VALUES
(1, 'I', 'Januari'),
(2, 'II', 'Februari'),
(3, 'III', 'Maret'),
(4, 'IV', 'April'),
(5, 'V', 'Mei'),
(6, 'VI', 'Juni'),
(7, 'VII', 'Juli'),
(8, 'VIII', 'Agustus'),
(9, 'IX', 'September'),
(10, 'X', 'Oktober'),
(11, 'XI', 'November'),
(12, 'XII', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `ref_dipa`
--

CREATE TABLE `ref_dipa` (
  `id` int(11) NOT NULL,
  `dipa` varchar(10) NOT NULL,
  `ket` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_dipa`
--

INSERT INTO `ref_dipa` (`id`, `dipa`, `ket`) VALUES
(663005, 'Dipa 01', 'Badan Urusan Administrasi (BUA)'),
(663006, 'Dipa 03', 'Badan Peradilan Umum (Badilum)');

-- --------------------------------------------------------

--
-- Table structure for table `ref_gender`
--

CREATE TABLE `ref_gender` (
  `id` varchar(3) NOT NULL,
  `gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_gender`
--

INSERT INTO `ref_gender` (`id`, `gender`) VALUES
('-', '-'),
('1', 'Pria'),
('2', 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `ref_hari`
--

CREATE TABLE `ref_hari` (
  `id` int(11) NOT NULL,
  `hari_id` varchar(10) NOT NULL,
  `hari_en` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_hari`
--

INSERT INTO `ref_hari` (`id`, `hari_id`, `hari_en`) VALUES
(1, 'Senin', 'Monday'),
(2, 'Selasa', 'Tuesday'),
(3, 'Rabu', 'Wednesday'),
(4, 'Kamis', 'Thursday'),
(5, 'Jumat', 'Friday'),
(6, 'Sabtu', 'Saturday'),
(7, 'Minggu', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `ref_ijazah`
--

CREATE TABLE `ref_ijazah` (
  `id` varchar(3) NOT NULL,
  `tk_ijazah` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ijazah`
--

INSERT INTO `ref_ijazah` (`id`, `tk_ijazah`) VALUES
('1', 'S3'),
('2', 'S2'),
('3', 'S1'),
('4', 'D3'),
('5', 'SMU'),
('6', 'SMP'),
('7', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jabatan`
--

CREATE TABLE `ref_jabatan` (
  `id` int(3) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_jabatan`
--

INSERT INTO `ref_jabatan` (`id`, `jabatan`) VALUES
(1, 'Ketua Pengadilan'),
(2, 'Wakil Ketua'),
(3, 'Hakim'),
(4, 'Panitera'),
(5, 'Sekretaris'),
(6, 'Panitera Muda Pidana'),
(7, 'Panitera Muda Perdata'),
(8, 'Panitera Muda Hukum'),
(9, 'Panitera Pengganti'),
(10, 'Kasubbag Umum & Keuangan'),
(11, 'Kasubbag Kepegawaian & Organisasi Tata Laksana'),
(12, 'Kasubbag Perencanaan Teknologi Informasi & Pelaporan'),
(13, 'Jurusita'),
(14, 'Jurusita Pengganti'),
(15, 'Staff Pidana'),
(16, 'Staff Perdata'),
(17, 'Staff Hukum'),
(18, 'Staff Umum & Keuangan'),
(19, 'Staff Kepegawaian & Organisasi Tata Laksana'),
(20, 'Staff Perencanaan Teknologi Informasi & Pelaporan'),
(21, 'Pranata Komputer'),
(22, 'Arsiparis'),
(23, 'Pengelola Keuangan'),
(24, 'Bendahara'),
(25, 'CPNS'),
(26, 'Pengadministrasi Registrasi Perkara');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_perangkat`
--

CREATE TABLE `ref_jenis_perangkat` (
  `id` int(11) NOT NULL,
  `jenis` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_jenis_perangkat`
--

INSERT INTO `ref_jenis_perangkat` (`id`, `jenis`) VALUES
(1, 'Komputer'),
(2, 'Laptop'),
(3, 'TV / Smart TV'),
(4, 'UPS'),
(5, 'Kiosk'),
(6, 'Printer'),
(7, 'Scanner'),
(8, 'Running Text'),
(9, 'Proyektor'),
(10, 'Switch'),
(11, 'Router'),
(12, 'Server'),
(13, 'Finger Print'),
(14, 'CCTV'),
(15, 'Wifi'),
(16, 'LAN'),
(17, 'Radio Wireless (ISP)'),
(18, 'Camera CCTV'),
(19, 'DSLR'),
(20, 'Webcam');

-- --------------------------------------------------------

--
-- Table structure for table `ref_masalah`
--

CREATE TABLE `ref_masalah` (
  `id` int(11) NOT NULL,
  `masalah` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_masalah`
--

INSERT INTO `ref_masalah` (`id`, `masalah`) VALUES
(1, 'Windows'),
(2, 'Virus'),
(3, 'Data/Files'),
(4, 'HDD'),
(5, 'RAM'),
(6, 'Mainboard'),
(7, 'Internet'),
(8, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `ref_panggol`
--

CREATE TABLE `ref_panggol` (
  `id` int(3) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_panggol`
--

INSERT INTO `ref_panggol` (`id`, `pangkat`, `golongan`, `ket`) VALUES
(1, 'PEMBINA UTAMA', 'IV/e ', 'HAKIM UTAMA'),
(2, 'PEMBINA MADYA TK I', 'IV/d', 'HAKIM MADYA UTAMA'),
(3, 'PEMBINA MADYA', 'IV/c', 'HAKIM MADYA'),
(4, 'PEMBINA TK I', 'IV/b', 'HAKIM MADYA MUDA'),
(5, 'PEMBINA', 'IV/a', 'HAKIM MADYA PRATAMA'),
(6, 'PENATA TK I', 'III/d', 'HAKIM PRATAMA UTAMA'),
(7, 'PENATA', 'III/c', 'HAKIM PRATAMA MADYA'),
(8, 'PENATA MUDA TK I', 'III/b', 'HAKIM PRATAMA MUDA'),
(9, 'PENATA MUDA', 'III/a', 'HAKIM PRATAMA'),
(10, 'PENGATUR TK I', 'II/d', '-'),
(11, 'PENGATUR', 'II/c', '-'),
(12, 'PENGATUR MUDA TK I', 'II/b', '-'),
(13, 'PENGATUR MUDA', 'II/a', '-'),
(14, 'JURU TK I', 'I/d', '-'),
(15, 'JURU', 'I/c', '-'),
(16, 'JURU MUDA TK I', 'I/b', '-'),
(17, 'JURU MUDA', 'I/a', '-'),
(18, '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ref_perangkat`
--

CREATE TABLE `ref_perangkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(48) NOT NULL,
  `jenis` varchar(24) NOT NULL,
  `lokasi` varchar(48) NOT NULL,
  `status` varchar(12) NOT NULL COMMENT 'Aktif / Tidak',
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_ruangan`
--

CREATE TABLE `ref_ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ruangan`
--

INSERT INTO `ref_ruangan` (`id`, `nama`) VALUES
(1, 'Ruang Ketua'),
(2, 'Ruang Wakil Ketua'),
(3, 'Ruang Sekretaris'),
(4, 'Ruang Panitera'),
(5, 'Ruang Hakim 1'),
(6, 'Ruang Hakim 2'),
(7, 'Ruang Kepaniteraan Pidana'),
(8, 'Ruang Kepaniteraa Perdata'),
(9, 'Ruang Kepaniteraan Umum'),
(10, 'Ruang Umum & Keuangan'),
(11, 'Ruang PTIP'),
(12, 'Ruang Kepegawaian'),
(13, 'Ruang PTSP'),
(14, 'Ruang Sidang Cakra'),
(15, 'Ruang Sidang Kartika'),
(16, 'Ruang Sidang Ramah Anak'),
(17, 'Ruang Mediasi'),
(18, 'Ruang Tunggu Pengunjung'),
(19, 'Ruang Tamu Terbuka'),
(20, 'Ruang Tahanan');

-- --------------------------------------------------------

--
-- Table structure for table `ref_satuan`
--

CREATE TABLE `ref_satuan` (
  `id` int(5) NOT NULL,
  `satuan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_satuan`
--

INSERT INTO `ref_satuan` (`id`, `satuan`) VALUES
(1, 'Buah'),
(2, 'Kotak'),
(3, 'Rim'),
(4, 'Batang');

-- --------------------------------------------------------

--
-- Table structure for table `ref_status`
--

CREATE TABLE `ref_status` (
  `id` int(11) NOT NULL,
  `status` varchar(24) NOT NULL,
  `kode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_status`
--

INSERT INTO `ref_status` (`id`, `status`, `kode`) VALUES
(1, 'Aktif', 'a'),
(2, 'Tidak Aktif', 'a'),
(3, 'Digunakan', 'b'),
(4, 'Disimpan', 'b'),
(5, 'Masuk', 'c'),
(6, 'Proses', 'c'),
(7, 'Selesai', 'c'),
(8, 'Ada', 'd'),
(9, 'Tidak Ada', 'd'),
(10, 'Belum Ada', 'd'),
(11, 'Ada (Masih Bekerja)', 'e'),
(12, 'Pindah', 'e'),
(13, 'Berhenti (Resign)', 'e'),
(14, 'Tolak', 'f'),
(15, 'Antrian ( PTIP )', 'g'),
(16, 'Antrian ( UMUM )', 'g'),
(17, 'Antrian ( KEPEGAWIAN )', 'g'),
(18, 'Kawin', 'h'),
(19, 'Belum Kawin', 'h'),
(20, 'Bercerai', 'h'),
(21, 'Hakim', 'I'),
(22, 'Pegawai', 'I'),
(23, 'CPNS', 'I'),
(24, 'Honorer', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `ref_surat`
--

CREATE TABLE `ref_surat` (
  `id` int(1) NOT NULL COMMENT 'id Jenis Surat',
  `jenis` varchar(50) NOT NULL COMMENT 'jenis surat :Surat Tugas, Izin, cuti, dll'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_surat`
--

INSERT INTO `ref_surat` (`id`, `jenis`) VALUES
(1, 'Surat Tugas'),
(2, 'Surat Izin Keluar Kantor'),
(3, 'Surat Izin Tidak Masuk Kerja'),
(4, 'Surat Cuti');

-- --------------------------------------------------------

--
-- Table structure for table `ref_system`
--

CREATE TABLE `ref_system` (
  `id_pengadilan` varchar(8) NOT NULL,
  `kode1` varchar(5) NOT NULL,
  `kode2` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_system`
--

INSERT INTO `ref_system` (`id_pengadilan`, `kode1`, `kode2`, `nama`, `alamat`, `email`, `web`, `no_telp`) VALUES
('66306', 'W4.U9', 'KP.01.2', 'PENGADILAN NEGERI TANJUNG BALAI KARIMUN', 'JL. Jenderal Sudirman-Poros,Tj. Balai Karimun,29631,Indonesia', 'pn_tg.balaikarimun@yahoo.co.id', 'http://pn-tanjungbalaikarimun.go.id', '0777-7366088');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tahun`
--

CREATE TABLE `ref_tahun` (
  `id` int(11) NOT NULL,
  `terbilang` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_tahun`
--

INSERT INTO `ref_tahun` (`id`, `terbilang`) VALUES
(2015, 'Dua Ribu Lima Belas'),
(2016, 'Dua Ribu Enam Belas'),
(2017, 'Dua Ribu Tujuh Belas'),
(2018, 'Dua Ribu Delapan Belas'),
(2019, 'Dua Ribu Sembilan Belas'),
(2020, 'Dua Ribu Dua Puluh'),
(2021, 'Dua Ribu Dua Puluh Satu'),
(2022, 'Dua Ribu Dua Puluh Dua'),
(2023, 'Dua Ribu Dua Puluh Tiga'),
(2024, 'Dua Ribu Dua Puluh Empat'),
(2025, 'Dua Ribu Dua Puluh Lima'),
(2026, 'Dua Ribu Dua Puluh Enam'),
(2027, 'Dua Ribu Dua Puluh Tujuh'),
(2028, 'Dua Ribu Dua Puluh Delapan'),
(2029, 'Dua Ribu Dua Puluh Sembilan'),
(2030, 'Dua Ribu Tiga Puluh');

-- --------------------------------------------------------

--
-- Table structure for table `ref_tgl`
--

CREATE TABLE `ref_tgl` (
  `id` int(11) NOT NULL,
  `terbilang` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_tgl`
--

INSERT INTO `ref_tgl` (`id`, `terbilang`) VALUES
(1, 'Satu'),
(2, 'Dua'),
(3, 'Tiga'),
(4, 'Empat'),
(5, 'Lima'),
(6, 'Enam'),
(7, 'Tujuh'),
(8, 'Delapan'),
(9, 'Sembilan'),
(10, 'Sepuluh'),
(11, 'Sebelas'),
(12, 'Dua Belas'),
(13, 'Tiga Belas'),
(14, 'Empat Belas'),
(15, 'Lima Belas'),
(16, 'Enam Belas'),
(17, 'Tujuh Belas'),
(18, 'Delapan Belas'),
(19, 'Sembilan Belas'),
(20, 'Dua Puluh'),
(21, 'Dua Puluh Satu'),
(22, 'Dua Puluh Dua'),
(23, 'Dua Puluh Tiga'),
(24, 'Dua Puluh Empat'),
(25, 'Dua Puluh Lima'),
(26, 'Dua Puluh Enam'),
(27, 'Dua Puluh Tujuh'),
(28, 'Dua Puluh Delapan'),
(29, 'Dua Puluh Sembilan'),
(30, 'Tiga Puluh'),
(31, 'Tiga Puluh Satu');

-- --------------------------------------------------------

--
-- Table structure for table `ref_user`
--

CREATE TABLE `ref_user` (
  `id` int(1) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_user`
--

INSERT INTO `ref_user` (`id`, `jenis`) VALUES
(1, 'Admin'),
(2, 'Hakim'),
(3, 'Pegawai'),
(4, 'Honorer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_auth`
--
ALTER TABLE `a_auth`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `a_hakim`
--
ALTER TABLE `a_hakim`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `a_pegawai`
--
ALTER TABLE `a_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `a_personilpn`
--
ALTER TABLE `a_personilpn`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `b_surat`
--
ALTER TABLE `b_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_atk`
--
ALTER TABLE `c_atk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_count_masuk_report_it`
--
ALTER TABLE `d_count_masuk_report_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_count_proses_report_it`
--
ALTER TABLE `d_count_proses_report_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_count_selesai_report_it`
--
ALTER TABLE `d_count_selesai_report_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_count_tolak_report_it`
--
ALTER TABLE `d_count_tolak_report_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_laporan_pemeliharaan`
--
ALTER TABLE `d_laporan_pemeliharaan`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `ref_aktivasi`
--
ALTER TABLE `ref_aktivasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_bagian`
--
ALTER TABLE `ref_bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_bulan`
--
ALTER TABLE `ref_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `ref_dipa`
--
ALTER TABLE `ref_dipa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_gender`
--
ALTER TABLE `ref_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_hari`
--
ALTER TABLE `ref_hari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_ijazah`
--
ALTER TABLE `ref_ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jenis_perangkat`
--
ALTER TABLE `ref_jenis_perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_masalah`
--
ALTER TABLE `ref_masalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_panggol`
--
ALTER TABLE `ref_panggol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_perangkat`
--
ALTER TABLE `ref_perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_ruangan`
--
ALTER TABLE `ref_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_satuan`
--
ALTER TABLE `ref_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_status`
--
ALTER TABLE `ref_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_surat`
--
ALTER TABLE `ref_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_system`
--
ALTER TABLE `ref_system`
  ADD PRIMARY KEY (`id_pengadilan`);

--
-- Indexes for table `ref_tahun`
--
ALTER TABLE `ref_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_tgl`
--
ALTER TABLE `ref_tgl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_user`
--
ALTER TABLE `ref_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
