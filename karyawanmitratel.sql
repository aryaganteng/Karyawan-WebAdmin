-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 05:13 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawanmitratel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `nik_tg` varchar(250) NOT NULL,
  `nama_karyawan` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `kontrak` varchar(250) NOT NULL,
  `regional` varchar(250) NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `no_telp` varchar(250) NOT NULL,
  `pendidikan` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pkwt` varchar(250) NOT NULL,
  `perpanjangan_pkwt` varchar(250) NOT NULL,
  `amandemen` varchar(250) NOT NULL,
  `start_kontrak` date NOT NULL,
  `finish_kontrak` date NOT NULL,
  `alamat` text NOT NULL,
  `merk_laptop` varchar(250) NOT NULL,
  `aset_komitel` varchar(250) NOT NULL,
  `no_aset` varchar(250) NOT NULL,
  `id_komitel` varchar(250) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `sn_laptop` varchar(250) NOT NULL,
  `tgl_pemakaian` varchar(250) NOT NULL,
  `perusahaan_sewa` varchar(250) NOT NULL,
  `keterangan_laptop` varchar(250) NOT NULL,
  `yakes` varchar(250) NOT NULL,
  `bpjs_kesehatan` varchar(250) NOT NULL,
  `bpjs_ketenagakerjaan` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nik_tg`, `nama_karyawan`, `gambar`, `level`, `status`, `kontrak`, `regional`, `tgl_kontrak`, `keterangan`, `jabatan`, `email`, `no_telp`, `pendidikan`, `agama`, `tgl_lahir`, `pkwt`, `perpanjangan_pkwt`, `amandemen`, `start_kontrak`, `finish_kontrak`, `alamat`, `merk_laptop`, `aset_komitel`, `no_aset`, `id_komitel`, `id_laptop`, `sn_laptop`, `tgl_pemakaian`, `perusahaan_sewa`, `keterangan_laptop`, `yakes`, `bpjs_kesehatan`, `bpjs_ketenagakerjaan`, `username`, `password`, `id_level`) VALUES
(5, '-', '', 'admin', 'worker211.png', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', '-', '', '-', 4, '', '', '-', '', '-', '-', '-', 'admin', 'admin', 1),
(6, '840025', '845387', 'YOVI EFIDORI', 'worker212.png', 'B', 'KARYAWAN TETAP', 'MITRATEL', 'JATENG', '0000-00-00', '-', 'MGR SM REGIONAL JATENG & DIY', 'yovi@mitratel.co.id', '08114179225', 'S1', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', 'DR.CIPTO MK GG.ARYA KIBAN NO.291 PEKIRINGAN KESAMBI', '', 'K19007062', '', '', 5, '', '', 'Komitel', '', '-', '-', '-', 'yovie', 'mitratel123', 1),
(7, '760002', '765320', 'SUHANDOKO', 'worker18.png', 'D', 'KARYAWAN TETAP', 'MITRATEL', 'JATENG', '2001-06-01', '-', 'PM - CONTRUCTION', 'handoko@mitratel.co.id', '081215800352', 'S1', 'ISLAM', '1976-05-19', '-', '-', '-', '0000-00-00', '0000-00-00', 'JL. MANGGIS VI/1852-D SEMARANG SELATAN', '', 'K19007061', '', '', 6, '', '', 'Komitel', '', '-', '-', '-', 'suhan', 'mitratel123', 2),
(8, '770218', '775370', 'MUKHZIDIN', 'worker19.png', 'D', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2012-02-01', '-', 'PM - SITAC', 'mukhzidin@mitratel.co.id', '08122683300', 'S1', 'ISLAM', '1977-09-25', '01/11/18', '31/10/20', '-', '0000-00-00', '0000-00-00', 'JL. BARONGAN 11 NO 203 B KOTA KUDUS', '', 'B18007054', '', '', 7, '', '', 'Komitel', '', '-', '-', '-', 'mukhz', 'mitratel123', 2),
(9, '860438', '865672', 'AZIZI HAKIM KOMARA', 'worker20.png', 'D', 'KARYAWAN TETAP', 'MITRATEL', 'JATENG', '0000-00-00', '-', 'PM', 'azizi.hakim@mitratel.co.id', '0852-2601-5160', 'S1', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', 'K1700A068', '', '', 8, '', '', 'Komitel', '', '-', '-', '-', 'azizi', 'mitratel123', 2),
(10, '760437', '765548', 'IMAM SUROSO', 'worker22.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2015-07-01', '-', 'GRUP WASPANG*', 'imam.suroso@mitratel.co.id', '081325453320', 'S1', 'ISLAM', '1976-08-11', '01/11/18', '31/10/20', '-', '0000-00-00', '0000-00-00', 'JL.EROWATI BARU 1/NO 138 SEMARANG UTARA', '', 'K17007057', '', '', 9, '', '', 'Komitel', '', '-', '-', '-', 'imam', 'mitratel123', 2),
(11, '870310', '875260', 'RACHMAT HIDAYAT', 'worker23.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2013-05-01', '-', 'GRUP WASPANG*', 'rachmat.hidayat@mitratel.co.id', '085291437414', 'S1', 'ISLAM', '0000-00-00', '01/11/18', '31/10/20', '-', '0000-00-00', '0000-00-00', 'CANDISARI', '', 'K17007054', '', '', 10, '', '', 'Komitel', '', '-', '-', '-', '-', '-', 2),
(12, '790436', '795651', 'DWI ERFIANTO', 'worker24.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2015-07-01', '-', 'GRUP WASPANG*', 'dwi.erfianto@mitratel.co.id', '085290489256', 'S1', 'ISLAM', '1979-10-23', '01/11/18', '31/10/20', '-', '0000-00-00', '0000-00-00', 'BONGSARI RT5/RW3 BONGSARI SEMARANG BARAT', '', 'B18007057', '', '', 12, '', '', 'Komitel', '', '-', '-', '-', 'dwierfi', 'mitratel123', 2),
(13, '830047', '835399', 'DEWY ATIKASARI', 'worker81.png', 'D', 'KARYAWAN TETAP', 'MITRATEL', 'JATENG', '2010-05-01', '-', 'OFFICER PERFORMANCE JAWA TENGAH', 'dewy_atikasari@mitratel.co.id', '08112607070', 'S1', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', 'K19007063', '', '', 13, '', '', 'Komitel', '', '-', '-', '-', 'dewy', 'mitratel123', 1),
(14, '840686', '845960', 'NI PUTU ANGGARANINGSIH', 'worker25.png', 'D', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2012-05-08', '-', 'ACCOUNT MANAGER', 'anggara.ningsi@mitratel.co.id', '085239153667', 'S1', 'HINDU', '1984-04-24', '01/01/19', '31/08/20', '-', '0000-00-00', '0000-00-00', 'BR.MANIKAN GUWANG SUKAWATI', '', 'K17007055', '', '', 14, '', '', 'Komitel', '', '-', '-', '-', 'ningsih', 'mitratel123', 2),
(15, '846035', '846035', 'DIAN NUGRAHINI', 'worker26.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2015-07-01', '-', 'STAFF BILLING', 'dian.nugrahini@mitratel.co.id', '081228092200', 'S1', 'ISLAM', '0000-00-00', '01/06/19', '31/03/21', '-', '0000-00-00', '0000-00-00', '-', '', 'B18007055', '', '', 15, '', '', 'Komitel', '', '-', '-', '-', 'dian', 'mitratel123', 2),
(16, '790651', '795707', 'DEWI YULIA NURBANI', 'worker152311.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2016-09-01', '-', 'STAFF GENERAL SUPPORT', 'dewi.yulia@mitratel.co.id', '081326720878', 'S1', 'ISLAM', '0000-00-00', '01/10/19', '30/09/20', '-', '0000-00-00', '0000-00-00', '-', '', 'K17007054', '', '', 16, '', '', 'Komitel', '', '-', '-', '-', 'dewi', 'mitratel123', 2),
(17, '061702114', '-', 'MARLINA KRISTINA SILALAHI', 'worker152312.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'ADMIN PROJECT', 'lina.silalahi@pt-sdm.co.id', '087832499127', 'S1', 'KATOLIK', '1983-11-04', '01/02/19', '31/01/20', '-', '0000-00-00', '0000-00-00', 'ADIREJA WETAN RT.05/RW01 ADIPALA CILACAP', '', 'B19000903', '', '', 17, '', '', 'Komitel', '', '-', '-', '-', 'marlina', 'mitratel123', 2),
(18, '061802121', '-', 'DENNI ZULKARNAIN', 'worker1523121.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'ADMIN PROJECT', 'denni.zulkarnain@pt-sdm.co.id', '081225213979', 'SMK', 'ISLAM', '1989-07-19', '01/02/19', '31/01/20', '-', '0000-00-00', '0000-00-00', 'LAMPER MIJEN RT6/RW6 LAMPER TENGAH SEMARANG SELATAN', '', 'B18008405', '', '', 18, '', '', 'Komitel', '', '-', '-', '-', 'denni', 'mitratel123', 2),
(19, '928483', '928244', 'KURNIA TRIANTORO', 'worker15231211.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2015-12-01', '-', 'GRUP SITAC IMPLEMENTATION*', 'kurnia.triantoro@mitratel.co.id', '082225406383', 'S1', 'ISLAM', '0000-00-00', '01/12/18', '01/12/19', '-', '0000-00-00', '0000-00-00', '-', '', 'K15007047', '', '', 19, '', '', 'Komitel', '', '-', '-', '-', 'kurnia', 'mitratel123', 2),
(20, '705431', '705431', 'SUGENG MU\'TI', 'worker152312111.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2013-07-01', '-', 'GRUP SITAC IMPLEMENTATION*', 'sugeng.muti@mitratel.co.id', '081226400664', 'S1', 'ISLAM', '1970-09-02', '01/06/19', '31/03/21', '-', '0000-00-00', '0000-00-00', 'PERUM BKD BLOK 22 NO.B 146 KEBONMANIS CILACAP UTARA', '', 'B19007060', '', '', 20, '', '', 'Komitel', '', '-', '-', '-', 'sugeng', 'mitratel123', 2),
(21, '876998', '876998', 'NILA ARISA', 'worker1523121111.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '2013-09-16', '-', 'GRUP SITAC IMPLEMENTATION*', 'nila.arisa@mitratel.co.id', '085291201616', 'S1', 'PROTESTAN', '0000-00-00', '01/06/19', '31/03/21', '-', '0000-00-00', '0000-00-00', '-', '', 'B18008404', '', '', 21, '', '', 'Komitel', '', '-', '-', '-', 'nila', 'mitratel123', 2),
(22, '830799', '835918', 'RAMDHAN BUDIMAN', 'worker15231211111.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '0000-00-00', '-', 'STAFF SITE MANAGEMENT', 'ramdhan.budiman@mitratel.co.id', '-', '-', 'ISLAM', '0000-00-00', '01/11/18', '31/10/20', '-', '0000-00-00', '0000-00-00', '-', '', 'B18007056', '', '', 23, '', '', 'Komitel', '', '-', '-', '-', 'ramdhan', 'mitratel123', 2),
(23, '061609113', '-', 'AWINDA LUTFINA RATNASARI', 'worker152312111111.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '2016-09-15', '-', 'ADMIN - PROJECT RO JATENG', 'awindalutfina@pt-sdm.co.id', '081325409882', 'S1', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', 'B19007059', '', '', 24, '', '', 'Komitel', '', '-', '-', '-', 'awinda', 'mitratel123', 2),
(24, '061702115', '-', 'LANA KARINA SEPGIKA QUEEN', 'worker1523121111111.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'ADMIN SITE MANAGEMENT', 'lana.karina@pt-sdm.co.id', '085100597546', 'S1', 'ISLAM', '1993-09-24', '01/02/19', '31/01/20', '-', '0000-00-00', '0000-00-00', 'JL. SAWUNGGALING RAYA 22, PEDALANGAN, BANYUMANIK SEMARANG', '', 'B190000904', '', '', 25, '', '', 'Komitel', '', '-', '-', '-', 'lana', 'mitratel123', 2),
(25, '-', '-', 'ANANDA BOBBY', 'worker15231211111111.png', '-', 'SWAKELOLA', 'OM', 'JATENG', '0000-00-00', '-', 'Koordinator Squat B', '-', '-', '-', 'ISLAM', '0000-00-00', '01/04/18', '01/04/20', '-', '0000-00-00', '0000-00-00', '-', '', '-', '', '', 29, '', '', '-', '', '-', '-', '-', 'ananda', 'mitratel123', 2),
(26, '061902124', '-', 'ARIEF NUR KARIM', 'worker152312111111111.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'OM', '-', '-', '-', 'ISLAM', '0000-00-00', '11/02/19', '10/02/20', '-', '0000-00-00', '0000-00-00', '-', '', 'B19000905', '', '', 26, '', '', 'Komitel', '', '-', '-', '-', 'arief', 'mitratel123', 2),
(27, '-', '-', 'FATHUR', 'worker1523121111111111.png', '-', 'SWAKELOLA', 'OM', 'JATENG', '0000-00-00', '-', 'Staff Swakelola', '-', '-', '-', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', 'JTG/03/LTP', '', '', 27, '', '', 'Komitel', '', '-', '-', '-', 'fathur', 'mitratel123', 2),
(28, '-', '-', 'YUNITA', 'worker15231211111111111.png', '-', 'SWAKELOLA', 'OM', 'JATENG', '0000-00-00', '-', 'Staff Swakelola', '-', '-', '-', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', '-', '', '', 30, '', '', '-', '', '-', '-', '-', 'yunita', 'mitratel123', 2),
(29, '-', '-', 'SHINTA', 'worker152312111111111111.png', '-', 'SWAKELOLA', 'OM', 'JATENG', '0000-00-00', '-', 'Staff Swakelola', '-', '-', '-', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', 'JTG/04/LTP', '', '', 28, '', '', 'Komitel', '', '-', '-', '-', 'shinta', 'mitratel123', 2),
(30, '-', '', 'SUGENG RIYADI', 'worker1523121111111111111.png', '-', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'DRIVER', '-', '081226446383', 'SMK', 'ISLAM', '1968-10-02', '-', '-', '-', '0000-00-00', '0000-00-00', 'KARANGANYAR GUNUNG 306 CANDISARI', '', '-', '', '-', 4, '', '', '-', '', '-', '-', '-', 'sugengriyadi', 'mitratel123', 2),
(31, '-', '', 'EKO SUDARYANTO', 'worker15231211111111111111.png', '-', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'DRIVER', '-', '085385828268', 'SMK', 'ISLAM', '1974-12-02', '-', '-', '-', '0000-00-00', '0000-00-00', 'SELOMULYO MUKTI RAYA F308 RT07/RW09 TLOGOMULYO SEMARANG', '', '-', '', '-', 4, '', '', '-', '', '-', '-', '-', 'ekosudaryanto', 'mitratel123', 2),
(32, '-', '', 'EKO WAHYU PRAMONO', 'worker152312111111111111111.png', '-', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'DRIVER', '-', '-', 'SMK', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', '-', '', '-', 4, '', '', '-', '', '-', '-', '-', 'ekowahyu', 'mitratel123', 2),
(33, '-', '', 'REFI AJEID', 'worker1523121111111111111111.png', '-', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', 'OFFICE BOY', '-', '-', '-', 'ISLAM', '0000-00-00', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '', '-', '', '-', 4, '', '', '-', '', '-', '-', '-', 'refi', 'mitratel123', 2),
(34, '061804123', '-', 'OKY SJAHRUL', 'worker28.png', 'E', 'OUTSOURCING', 'PT. SDM', 'JATENG', '0000-00-00', '-', '-', '-', '-', '-', '-', '0000-00-00', '09/04/19', '08/04/20', '-', '0000-00-00', '0000-00-00', '-', '', 'B18007058', '', '', 11, '', '', 'Komitel', '', '-', '-', '-', 'okys', 'mitratel123', 2),
(35, '865931', '865931', 'DENI SETIYAWAN', 'worker29.png', 'E', 'KARYAWAN KONTRAK', 'MITRATEL', 'JATENG', '0000-00-00', '-', '-', '-', '-', '-', '-', '0000-00-00', '31/10/18', '30/11/18', '-', '0000-00-00', '0000-00-00', '-', '', 'K17007056', '', '', 22, '', '', 'Komitel', '', '-', '-', '-', 'denys', 'mitratel123', 2),
(36, '68878777', '666676', 'q', 'worker30.png', '3', 'f', '5', 't', '2019-09-16', 'g', 'g', 'jh', '765', 'hj', 'hh', '2019-09-17', 'gjh', 'g7', 'y', '2019-09-18', '2019-09-13', 'hjn', '', '78888', '', '', 4, '', '', 'u', '', 'u', 'u', 'u', 'u', 'u', 2);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_peminjam` varchar(250) NOT NULL,
  `merk_laptop` varchar(250) NOT NULL,
  `sn_laptop` varchar(250) NOT NULL,
  `no_aset` varchar(250) NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `mouse` varchar(250) NOT NULL,
  `keterangan_laptop` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_peminjam`, `merk_laptop`, `sn_laptop`, `no_aset`, `tgl_pemakaian`, `tgl_berakhir`, `mouse`, `keterangan_laptop`) VALUES
(4, '-', '-', '-', '-', '0000-00-00', '0000-00-00', '-', '-'),
(5, 'YOVI EFIDORI', 'HP', '-', '-', '2019-02-01', '2021-02-01', '-', '-'),
(6, 'SUHANDOKO', 'HP', '5CG6124N46', '033/MKT/537/XI/16', '2019-02-01', '2021-02-01', '-', '-'),
(7, 'MUKHZIDIN', 'HP', '-', '-', '2018-07-01', '2020-07-01', '-', '-'),
(8, 'AZIZI HAKIM KOMARA', 'HP', '5CD7111XQL', 'SKR/MITRA/1706/008', '2017-12-13', '2019-12-13', '-', '-'),
(9, 'IMAM SUROSO', 'HP', '-', '-', '2017-11-29', '2019-11-29', '-', '-'),
(10, 'RACHMAT HIDAYAT', 'HP', '5CD7237CJB', 'SKR/MITRA/1707/121', '2017-10-23', '2019-10-23', '-', '-'),
(11, 'OKY SJAHRUL', 'Lenovo', '-', '-', '2018-08-01', '2020-08-01', '-', '-'),
(12, 'DWI ERFIANTO', 'Lenovo', '-', '-', '2018-08-01', '2020-08-01', '-', '-'),
(13, 'DEWY ATIKASARI', 'HP', '5MP16E9K8', 'SKR/MITRA/1701/005', '2019-03-01', '2021-03-01', '-', '-'),
(14, 'NI PUTU ANGGARANINGSIH', 'HP', '-', '-', '2017-10-23', '2019-10-23', '-', '-'),
(15, 'DIAN NUGRAHINI', 'Lenovo', '-', '-', '2018-08-01', '2020-08-01', '-', '-'),
(16, 'DEWI YULIA NURBANI', 'Lenovo', 'SMP16EHN7', 'SKR/MITRA/1701/072', '2017-02-01', '2019-02-01', '-', '-'),
(17, 'MARLINA KRISTINA SILALAHI', 'Lenovo', '-', '-', '2019-03-18', '2021-03-18', '-', '-'),
(18, 'DENNI ZULKARNAIN', 'Lenovo', '-', '-', '2018-03-01', '2020-03-01', '-', '-'),
(19, 'KURNIA TRIANTORO', 'Lenovo', 'MP09J8UC', '018/ /437/IV/2016', '2016-04-27', '2018-04-27', '-', '-'),
(20, 'SUGENG MU\'TI', 'Lenovo', '-', '-', '2019-01-01', '2021-01-01', '-', '-'),
(21, 'NILA ARISA', 'Lenovo', '-', '-', '2018-03-01', '2020-03-01', '-', '-'),
(22, 'DENI SETIYAWAN', 'HP', '5CD7237CFJ', 'SKR/MITRA/1707/137', '2017-11-29', '2019-11-29', '-', '-'),
(23, 'RAMDHAN BUDIMAN', 'Lenovo', '-', '-', '2018-08-01', '2020-08-01', '-', '-'),
(24, 'AWINDA LUTFINA RATNASARI', 'Lenovo', '-', '-', '2019-01-01', '2021-01-01', '-', '-'),
(25, 'LANA KARINA SEPGIKA QUEEN', 'Lenovo', '-', '-', '2019-03-18', '2021-03-18', '-', '-'),
(26, 'ARIEF NUR KARIM', 'Lenovo', '-', '-', '2019-03-18', '2021-03-18', '-', '-'),
(27, 'FATHUR', 'Lenovo', '-', '-', '2018-09-17', '2020-09-17', '-', '-'),
(28, 'TIKA SHINTA', 'Lenovo', '-', '-', '2018-09-17', '2020-09-17', '-', '-'),
(29, 'ANANDA BOBBY ADITYA\r\n', 'Laptop RO Jateng', '', '', '0000-00-00', '0000-00-00', '', ''),
(30, 'YUNITA', 'Pinjam Mas Boby', '-', '-', '0000-00-00', '0000-00-00', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `nama_request` varchar(250) NOT NULL,
  `jumlah_request` varchar(250) NOT NULL,
  `tgl_request` date NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `no_telp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_laptop` (`id_laptop`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_laptop`) REFERENCES `laptop` (`id_laptop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
