-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 01:36 AM
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
('hera', '202001', '$2y$10$Xk.ysqoNFe1HFZ/teN2ELuwXZseRop/KrcBLT0Hmun/nSHrBoAaA2', 4, NULL, NULL, 1),
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
  `gol` int(2) DEFAULT NULL COMMENT 'Golongan Sekarang',
  `tmt1` date DEFAULT NULL COMMENT 'Terhitung Mulai (Pangkat Golongan)',
  `jabatan` int(2) DEFAULT NULL COMMENT 'Jabatan Sekarang',
  `bagian` int(3) DEFAULT NULL COMMENT 'Ketua/Wakil Ketua/Sekretaris/Panitera/Pidana/Perdata/Hukum/Umum/PTIP/Kepegawaian/PTSP',
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
  `kgb` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Gaji Berkala',
  `kpk` date DEFAULT NULL COMMENT 'Tanggal Kenaikan Pangkat',
  `mutasi` date DEFAULT NULL COMMENT 'Tanggal Mutasi',
  `ket` varchar(128) DEFAULT NULL COMMENT 'Mutasi Dari',
  `email` varchar(64) DEFAULT NULL COMMENT 'Email Hakim',
  `no_hp` varchar(15) DEFAULT NULL COMMENT 'No. HP Hakim',
  `n_foto` varchar(20) DEFAULT NULL COMMENT 'nama foto',
  `status` int(3) NOT NULL COMMENT 'Masih/Sudah Pindah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_personilpn`
--

INSERT INTO `a_personilpn` (`nip`, `nama`, `gol`, `tmt1`, `jabatan`, `bagian`, `tmt2`, `masa_tahun`, `masa_bulan`, `latihan`, `latihan_tahun`, `pendidikan`, `pend_tahun`, `tk_ijazah`, `tempat_lahir`, `tgl_lahir`, `kgb`, `kpk`, `mutasi`, `ket`, `email`, `no_hp`, `n_foto`, `status`) VALUES
('-', 'Administrator', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'itpntbk018@gmail.com', NULL, NULL, 11),
('197612242001121001', 'Joko Dwi Atmoko, SH, MH', 1, '2016-01-10', 1, 1, '2019-01-30', 18, 0, 'Diklat.Pim Lanjutan & Kehumasan', '2019', 'Univ.Muslim Indonesia', '2012', 'S2', 'Boyolali', '1976-12-24', '2021-12-01', '2020-10-01', '2019-01-30', 'PN.TOLITOLI', 'jokoda@gmail.com', NULL, 'default.jpg', 11),
('197911062002121004', 'Eka Prasetya Budi Dharma, SH, MH', 5, '2020-11-10', 2, 2, '2020-11-03', NULL, NULL, 'Lahitan aja', '2020', 'Univ', '2020', 'S2', 'itu la', '2020-11-18', '2020-11-11', '2020-11-06', '2020-11-28', '-', 'ekapbd@gmail.com', NULL, NULL, 11),
('198104212009041003', 'Muhammad Ronaldi, ST', 7, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11),
('202001', 'Hera Indra, S.Si', NULL, NULL, 20, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'hera@yahoo.co.id', NULL, NULL, 11);

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
  `id_form` int(11) NOT NULL COMMENT 'id dari form masuk',
  `tahun` year(4) NOT NULL COMMENT 'tahun form',
  `status` int(3) NOT NULL COMMENT '1 = masuk | 0 = proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_masuk_report_it`
--

INSERT INTO `d_count_masuk_report_it` (`id_form`, `tahun`, `status`) VALUES
(1, 2020, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_count_proses_report_it`
--

CREATE TABLE `d_count_proses_report_it` (
  `id_form` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(3) NOT NULL COMMENT '1 = proses | 0 = hapus/selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_proses_report_it`
--

INSERT INTO `d_count_proses_report_it` (`id_form`, `tahun`, `status`) VALUES
(1, 2020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `d_count_selesai_report_it`
--

CREATE TABLE `d_count_selesai_report_it` (
  `id_form` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(3) NOT NULL COMMENT '1 = selesai | 0 = hapus/masuk/proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_count_selesai_report_it`
--

INSERT INTO `d_count_selesai_report_it` (`id_form`, `tahun`, `status`) VALUES
(1, 2020, 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_laporan_pemeliharaan`
--

CREATE TABLE `d_laporan_pemeliharaan` (
  `id` int(11) NOT NULL,
  `id_pengaju` varchar(20) NOT NULL,
  `id_jabatan` varchar(3) DEFAULT NULL,
  `id_bagian` int(11) DEFAULT NULL,
  `tgl_pengajuan` date NOT NULL,
  `id_masalah` int(11) NOT NULL,
  `uraian_masalah` text NOT NULL,
  `status_form` int(11) NOT NULL COMMENT 'Masuk/Proses/Selesai',
  `id_pemeriksa` varchar(20) DEFAULT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `hasil_pemeriksaan` text,
  `id_acc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_laporan_pemeliharaan`
--

INSERT INTO `d_laporan_pemeliharaan` (`id`, `id_pengaju`, `id_jabatan`, `id_bagian`, `tgl_pengajuan`, `id_masalah`, `uraian_masalah`, `status_form`, `id_pemeriksa`, `tgl_pemeriksaan`, `hasil_pemeriksaan`, `id_acc`) VALUES
(1, '197911062002121004', '1', 2, '2020-12-02', 3, 'asd', 6, '0', '0000-00-00', '0', '0');

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
(3, 'III', 'March'),
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
-- Table structure for table `ref_jabatan`
--

CREATE TABLE `ref_jabatan` (
  `id` int(11) NOT NULL,
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
(21, 'Security'),
(22, 'Supir'),
(23, 'Pegawai'),
(24, 'Honorer');

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
-- Table structure for table `ref_kategori`
--

CREATE TABLE `ref_kategori` (
  `id` int(1) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kategori`
--

INSERT INTO `ref_kategori` (`id`, `kategori`) VALUES
(1, 'Hakim'),
(2, 'Pegawai'),
(3, 'Honorer');

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
  `id` int(11) NOT NULL,
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
(13, 'Berhenti (Resign)', 'e');

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
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `d_count_proses_report_it`
--
ALTER TABLE `d_count_proses_report_it`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `d_count_selesai_report_it`
--
ALTER TABLE `d_count_selesai_report_it`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `d_laporan_pemeliharaan`
--
ALTER TABLE `d_laporan_pemeliharaan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ref_dipa`
--
ALTER TABLE `ref_dipa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_hari`
--
ALTER TABLE `ref_hari`
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
-- Indexes for table `ref_kategori`
--
ALTER TABLE `ref_kategori`
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
-- AUTO_INCREMENT for table `d_count_masuk_report_it`
--
ALTER TABLE `d_count_masuk_report_it`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id dari form masuk', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_count_proses_report_it`
--
ALTER TABLE `d_count_proses_report_it`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_count_selesai_report_it`
--
ALTER TABLE `d_count_selesai_report_it`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_laporan_pemeliharaan`
--
ALTER TABLE `d_laporan_pemeliharaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_jabatan`
--
ALTER TABLE `ref_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ref_panggol`
--
ALTER TABLE `ref_panggol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
