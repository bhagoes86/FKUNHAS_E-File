-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2014 at 02:05 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmed_efilen`
--

-- --------------------------------------------------------

--
-- Table structure for table `civitas`
--

CREATE TABLE IF NOT EXISTS `civitas` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cNip` varchar(50) DEFAULT NULL,
  `cNama` varchar(100) DEFAULT NULL,
  `cAlamat` varchar(100) DEFAULT NULL,
  `cTelp` varchar(50) DEFAULT NULL,
  `cEmail` varchar(50) DEFAULT NULL,
  `cFoto` varchar(100) NOT NULL,
  `cPass` char(32) NOT NULL,
  `cSession` varchar(100) NOT NULL,
  `idj` int(5) DEFAULT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000 ;

--
-- Dumping data for table `civitas`
--

INSERT INTO `civitas` (`cId`, `cNip`, `cNama`, `cAlamat`, `cTelp`, `cEmail`, `cFoto`, `cPass`, `cSession`, `idj`) VALUES
(1, 'dekan', 'Dekan', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '3da2f457ad7c0edf1c94e1ea87b0818d', 've9csqrr3ttopa8o4ls3h9qc36', 2),
(2, 'wd1', 'Wakil Dekan I', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '7df782b10a945d8ff6a4e83f22a11b03', 'hoonic4b1v00h0tjrv716aeib3', 3),
(0, '97531', 'Administrator', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e5690832f4b0b47bdc6382c1b10623ce', '4lvdgfko1lefiriiq2r9d36ij3', 0),
(999, '999', 'Operator', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '04c9548cc74bcd31ece56644b6067b61', 'tb1jqpr9r2p44t8upgi34l3ip1', 1),
(15, '20140122001', 'Ketua Koodinator TKP-PPDS', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '336d5ebc5436534e61d16e63ddfca327', '', 8),
(17, '196712121999031001', 'Marhaen Hardjo, dr. Ph.D', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '5f1982b03b333720beb0365fc6ca76f9', '', 8),
(18, 'DirekturRSWS', 'DirekturRSWS', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '251a84d7c9c7bec4da84eeac47a77e50', '', 8),
(19, '195502031983121001', 'A.Armyn Nurdin,Dr. dr. Msc', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '8e6e0a65d86c619edee67a0b19f0b854', '', 8),
(20, 'KaTKPPDS', 'Ketua TK.PPDS', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '9c936dcdb108d81756d59ab4c70747c3', '', 8),
(21, 'KonsultanSPKK', 'Tim Veriflkasi Sp.KK Konsultan', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '6084c04bdab80a2bc25665efe4ff6220', '', 8),
(22, 'KoordPPDS ', 'Koordinator PPDS ', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '532b99df49e500ecc2ebbd9f782861b8', '', 8),
(23, 'DirekturPMK', 'Direktur Pelayanan Medik dan Keperawatan', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '53ca6a489a97539ee39d1bdf6025b42b', '', 8),
(25, 'KaKPPDS', 'Ketua Konsentrasi PPDS', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'd095c09dd4668affa6a40637ae98fd42', '', 8),
(26, 'rektorUH', 'Rektor Universitas Hasanuddin', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '726d28bdb473e64ac697f60e9e837d9e', '', 8),
(5, 'KTU', 'Kabag. Tata Usaha', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '481ac2b425faa4b84451797ec3d5477c', '', 6),
(30, 'warekUH', 'Wakil Rektor', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '736d5bd399b8409ced3b6f2fbb8835ff', '', 8),
(31, 'DirekturPTK', 'Direktur Pendidik dan Tenaga Kependidikan u.p. Kasubdit Karir', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'fefafcb1a27211184671c5606b732f57', '', 8),
(32, 'BPPDL', 'Bendahara Pengeluaran Pembantu Dalam Lingkungan', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '36dc151875457caf7738b8de206f7423', '', 8),
(33, 'KaKIP', 'Ketua Kolegium llmu Penyakit', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '8801c1e570c3324eebdc49ffd14a8b06', '', 8),
(34, 'KaBlPD', 'Kepala Bagian llmu Penyakit Dalam FIC', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '6e2f53e8df89ba6a69e255ce56f16c5c', '', 8),
(3, 'wd2', 'Wakil Dekan II', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'd5a09a7f1a424d040c110a0bca8546de', '', 4),
(36, 'Prof.Dr.Ir. Salama, M.T', 'Prof.Dr.Ir. Salama, M.T', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'a1ee07832d75ba11a4bd65c636dacddc', '', 8),
(37, 'Drs. Burhanuddin Taebe, M.Si', 'Drs. Burhanuddin Taebe, M.Si', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e10adc3949ba59abbe56e057f20f883e', '', 8),
(38, 'MabaPPDS', 'Mahasiswa Baru Program Pendidikan Dokter Spesialis (PPDS)', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '2456eef3f7378db1b532f4df7d30c891', '', 8),
(39, 'KaPNBD', 'Panitia Perayaan Natal Bersama (Oikumene) Dosen', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'b3b94ded59f01e96f13b0de13de02908', '', 8),
(40, 'Dr.Robertus setiadi. M.Kes', 'Dr.Robertus Setiadi. M.Kes', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'ec6c14cf87047ea5c4f98e85f11e7ddd', '', 8),
(41, 'SekjenKEMENDIKBUD', 'Sekretaris Jenderal Kementerian Pendidikan dan Kebudayaan R.I.', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'c34063320a107b7a9b1b88ecf79468e8', '', 8),
(42, 'DirekturRSIS', 'Direktur RS Ibnu Sina', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '86793bf91ea4c9ebce8035e7b68235be', '', 8),
(43, 'Dr.dr. A. Wardihan Sinrang, M.S.', 'Dr.dr. A. Wardihan Sinrang, M.S.', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e10adc3949ba59abbe56e057f20f883e', '', 8),
(44, 'KaBA', 'Ketua Bagian Anastesi', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '5e009fc887d6c07c1c775dcf8da808ab', '', 8),
(4, 'wd3', 'Wakil Dekan III', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'wd3', '', 5),
(46, 'DirekturPPUI', 'Direktur Program Pascasarjana Universitas Indonesia', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'a27a00026ffda335d8c948c4623ce296', '', 8),
(47, 'dr. Felix Sander Batuna, Mr', 'dr. Felix Sander Batuna, Mr', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e10adc3949ba59abbe56e057f20f883e', '', 8),
(48, 'KaPK', 'Ketua Penyelenggara Kegiatan', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', '4062ca35e27da33c2117fb0707b12a62', '', 8),
(49, 'Dr. Muh. Tamar, M.Psi.', 'Dr. Muh. Tamar, M.Psi.', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e10adc3949ba59abbe56e057f20f883e', '', 8),
(50, 'Dr. dr. Susi Aulina, Sp.S(K)', 'Dr. dr. Susi Aulina, Sp.S(K)', 'FKUNHAS', '', 'fkunhas@med.unhas.ac.id', '', 'e10adc3949ba59abbe56e057f20f883e', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `dId` int(11) NOT NULL AUTO_INCREMENT,
  `dNoagenda` varchar(10) NOT NULL,
  `dTglM` date NOT NULL,
  `dTglS` date NOT NULL,
  `dPendisposisi` int(11) NOT NULL,
  `dInstruksi` text NOT NULL,
  `dSifat` enum('A','B','C') NOT NULL,
  `iid` int(11) NOT NULL,
  PRIMARY KEY (`dId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`dId`, `dNoagenda`, `dTglM`, `dTglS`, `dPendisposisi`, `dInstruksi`, `dSifat`, `iid`) VALUES
(1, '001', '2014-02-04', '0000-00-00', 1, 'Disposisi I', 'A', 26),
(2, '002', '2014-02-04', '0000-00-00', 1, 'Disposisi II (WD1 dan WD2)', 'A', 25);

-- --------------------------------------------------------

--
-- Table structure for table `isurat`
--

CREATE TABLE IF NOT EXISTS `isurat` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `inmr` varchar(50) NOT NULL,
  `itgl` date NOT NULL,
  `ipengirim` varchar(100) NOT NULL,
  `ikepada` int(11) NOT NULL,
  `iperihal` varchar(100) NOT NULL,
  `iket` text NOT NULL,
  `ifile` varchar(100) NOT NULL,
  `istatus` enum('Y','N') NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `isurat`
--

INSERT INTO `isurat` (`iid`, `inmr`, `itgl`, `ipengirim`, `ikepada`, `iperihal`, `iket`, `ifile`, `istatus`) VALUES
(26, '841/UN4.7.4.5.19/PP.31/12013', '2013-12-24', 'Dasri Daud, Prof. dr. H. S..A(K)', 1, 'Permohonan Penerbitan SK Panitia Penilai Tesis', 'Bersama ini kami mohon untuk menerbitkan SK Panitia Penilai Tesis Peserta Program Studi llmu<br>Kesehatan Anak Fakultas Kedokteran UNHAS<br>', '42Permohonan Penerbitan SK a.n.dr.Syamsul Nur.pdf', 'Y'),
(25, '842/UN4.7.4.5.1.9/TU.14/2013', '2013-04-24', 'Dasri Daud, Prof. dr. H. S..A(K)', 1, 'Permintaan Izin dr. A. Dwi Bahagia Febriani, PhD, SpA(K)', 'Permohonan izin untuk mengikuti Pertemuan dengan Universitas Shimane Jepang dan<br>Urtiversitas Hasanuddin Makassar di Jepan, terhitung mulai tanggal 25-des-2013 s/d 2 jan 2014<br>', '41Permohonan Izin a.n. dr.A.Dwi Bahagia Febriani,Ph.D.Sp.A(K) & Permohonan Penerbitan SK Tesis.pdf', 'Y'),
(24, '814/UN4.7.4.5.19/LK.26/2013', '2013-12-12', 'Husein Albar, Prof. dr., Sp.A(K)', 15, 'Permintaan Pengadaan Barang', 'Untuk penihgkatan mutu dan kelancaran penyelenggaraan<br>pendidikan/administrasi perkantoran Departemen Ilmu Kesehatan Anak FK-UNHAS,<br>kami memerlukan barang/bahan/alat kesehatan dengan spesifikasi terlampir<br>', '81Permintaan Pengadaan Barang.pdf', 'N'),
(27, '822/UN.4.7.4.5.19/PP.41/2O13', '2013-12-18', 'Dasri Daud, Prof. dr. H. S..A(K)', 1, 'Permohonan Penerbitan SK Panitia Ujian evaluasi Akhir PPDS IKA FK-UNHAS', 'Bersama ini kami mohon untuk menerbitkan SK Panitia Ujian Kompetensi "EValuasi Akhir<br>Peserte Pendidikan Dokrer Spesialis" bagi Peserta Pendidrkan Dokter Spesialis Ilmu Kesehatan Anak Fakultas Kedokteran Universitas Hasanuddin<br><br>', '51Permohonan Penerbitan SK.pdf', 'Y'),
(28, '808/UN.4.7.4.5.19/KP.36/2Ol3', '2013-12-10', 'Husein Albar, Prof. dr., Sp.A(K)', 1, 'Permohonan Surat Perintah Perjalanan Dinas (SPPD)', 'Sehubungan acara "Preliminary Result Study dan Expert Meeting" maka bersama ini dari Departemen Ilmu Kesehatan Anak Fakultas Kedokteran UNHAS menugaskan (dua) orang untuk mengikuti acara tersebut<br>', '64Permohonan SPPD.pdf', 'N'),
(30, '837/UN4.7.4.5.19/PP.17/2013', '2013-12-22', 'Dasri Daud, Prof. dr. H. S..A(K)', 15, 'Usulan Perjanjian Kerjasama', '', '96Usulan Perjanjian Kerjasama.pdf', 'N'),
(31, '789/UN4.7.4.5.19/PP.17/2013', '2013-11-27', 'Dasri Daud, Prof. dr. H. S..A(K)', 1, 'Usulan Perjanjian Kerjasama', 'Menindak lanjuti surat tertanggal 22 Oktober 2013 nomor 5775/RSUSR/X/2013, perihal<br>Usulan kerjasama dengan RSUD Sayang Rakyat, pada prinsipnya Departemen llmu<br>Kesehatan Anak FK UNHAS tidak berkeberatan demi peningkatan pelayanan kesehatan Anak<br>di RSUD Sayang Rakyat.<br>', '21Usulan Perjanjian Kerjasanma Bag. Anak.pdf', 'N'),
(32, '3641/UN4.7.4.4/PP.32/2013', '2013-12-05', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Penerbitan SK Panitia Persiapan Ujian Akhir Lisan Lokal', '', '82Anestesi Permintaan Penerbitan SK.pdf', 'N'),
(33, '3752/UN4.7.4.4/UM.16/2013', '2013-12-17', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Bantuan Dana RKAT', '', '56Anestesi Permohonan Bantuan Dana RKAT - dr.Hisbullah.pdf', 'N'),
(84, '108/UN4.7.1.12/PM.17/2013', '2013-12-07', 'Cahyono Kaelan, dr. PhD,SpPA(K)', 3, 'Permintaan bantuan dana', '', '8Permintaan Bantuan Dana.pdf', 'N'),
(85, '102/UN4.7.12/PM.17/2013', '2013-12-17', 'Cahyono Kaelan, dr. PhD,SpPA(K)', 3, 'Permintaan bantuan dana', '', '61Permohonan Bantuan Dana.pdf', 'N'),
(35, '3673/UN4.7.4.4/UM.16/2013', '2013-12-09', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Bantuan Dana RKAT', '', '50Anestesi Permohonan Bantuan Dana RKAT.pdf', 'N'),
(36, '7817/UN4.7.4.4/LN.03/2013', '2013-12-24', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Izin', 'Izin Umrah atas nama dr. Abdul Wahab, Sp.An <br>', '58Anestesi Permohonan Izin a.n. dr.Abdul Wahab,Sp.An & dr.Syarifuddin Gaus,Ph.D Sp.An.pdf', 'N'),
(37, '7818/UN4.7.4.4/LN.03/2013', '2013-12-24', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Izin berangkat ke Jepang', 'atas nama dr. Syafruddin Gaus, Ph.D, Sp.An-KMN-KNA<br><br>', '33Anestesi Permohonan Izin a.n. dr.Abdul Wahab,Sp.An & dr.Syarifuddin Gaus,Ph.D Sp.An.pdf', 'N'),
(38, '3700/UN4.7.4.4/PP.32/2013', '2013-12-13', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Penerbitan SK Panitia Persiaoan Uiian Akhir Lisan Lokal', '', '84Anestesi Permohonan Penerbitan SK Panitia.pdf', 'N'),
(39, '3701/UN4.7.4.4/PP.32/2013', '2013-12-13', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan Penerbitan SK Panitia Persianan Uiian Akhir Lisan Nasional', '&nbsp; Permohonan Penerbitan SK Panitia persiapan Ujian Akhir Lisan Nasional<br>', '58Anestesi Permohonan Penerbitan SK Panitia.pdf', 'N'),
(40, '7858/UN4.7.4.4/PP.17/2013', '2013-12-27', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Perrnohonan Penerbitan Surat Penupasan', 'I dr. Ahmad RSUD. Morowali 1 Januari 2013 - 28 Februari 2014<br>2 dr. Dessy Nathalia Halim RS. Toto Kabila I Januari 2013 -28 Februari 2014<br>J dr. Jusman Handayani Y. RS. PT. INCO 1 Januari 2013 - 28 Februari 2014<br>i dr. Aditya Chriswhamo RSUD. Talaud I Januari 2013 -28 Februari 2014<br>5 dr. Ashari Makmur RSUD. Pasarwaio 1 Januari 2013 - 28 Februari 2014<br>6 dr. Moh. Reza C. Noor RSUD. Maiene 1 Januari 2013 - 28 Februari 2014<br>1 dr. Muharnmad Dahlan RSUD- Largntuke I Januari 2013 - 28 Febru*i 2014<br>8 dr. kntihanah Amd RSUD. Kabelota<br>Donggala I Januari 2013 - 28 Februari 20 I 4<br>9 df. Reza Prakosa S. RSUD. Boalemo 1 Januati 2013 - 28 Februari 2014<br>10 dr. A. Bau Sumange R. RSUD. Polewali 1 Januari 2013 - 28 Februari 2014<br>ll dr. Ahmad Safari Samud RSUD. Anuntaloko I Januari 2013 -28 Februari 2014<br>', '9Anestesi Permohonan Penerbitan Surat Penugasan.pdf', 'N'),
(41, '3594/UN4.7.4.4/PP.17/2013', '2013-12-03', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Permohonan SK Penguji Ujian Usulan Proposal. Hasil Penelitian. dan Uiian Tesis', '', '62Anestesi Permohonan SK Penguji Ujian Proposal.pdf', 'N'),
(42, '3674/UN4.7.4.4/PP.32/2013', '2013-12-05', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Revisi Permohonan Penerbitan SK Panitia Persiapan Ujian Akhir Lisan Lokal', '', '74Anestesi Revisi Permohonan Penerbitan SK Panitia Ujian Akhir Lokal.pdf', 'N'),
(43, '7980/UN4.7.4.4/UM.16/20l3', '2013-12-31', 'Muh Ramli Ahmad, Dr. dr., Sp.Ad-KAP-KMN', 1, 'Usulan Pengangkatan Guru Besar/ Professor Emiritus', 'Permohonan Pengangkatan Guru Besar / Prof Emiritus : Prof. dr. A. Hunsi Tanra. Ph.D<br><br>', '42Anestesi_Usulan_Pengangkatan_Guru_Besar_Emiritus.pdf', 'N'),
(44, '034/UN4.7.4/KP.49/2013', '2013-12-24', 'Rosdiana Natzir, Prof. dr., PhD ', 1, 'Surat Teguran', '', '34Surat_Teguran_untuk_dr_Marhaen_Hardjo_PhD_MKes.pdf', 'N'),
(48, '530/UN4.7.1.13/PP.12/2013', '2013-12-28', 'Muh.Husni Cangara,dr. ,PhD, DFM', 18, 'Penuqasan Co.Ass Baqian Forensik FK. Unhas', '', '3Desember_2013_Penugasan_CoAsisten.pdf', 'N'),
(46, '503/UN4.7.1.13/PP.12/2013', '2013-12-07', 'Muh.Husni Cangara,dr. ,PhD, DFM', 1, 'Penuqasan Co.Ass Baqian Forensik FK. Unhas', '', '89Desember_2013_Penugasan_Co_Ass.pdf', 'N'),
(47, '040/4N4.5.3/TU.15/2013', '2013-12-09', 'Robert Setiadji, dr.,Msc', 1, 'Usulan dosen Luar Biasa', '', '28Farmakologi_2013_Usulan_Dosen_LB.pdf', 'N'),
(49, '519/UN4.7.1.13/PP.12/2013', '2013-12-21', 'Muh.Husni Cangara,dr. ,PhD, DFM', 18, 'Penuqasan Co.Ass Baqian Forensik FK. Unhas', '', '70Desember_2013_Penugasan_CoAss_di_RSUP_Wahidin_N_RS_Bhayangkara.pdf', 'N'),
(50, '508/UN4.7.1.13/PP.15/2013', '2013-12-14', 'Muh.Husni Cangara,dr. ,PhD, DFM', 1, 'Penugasan Co.Ass Baqian Forensik FK. Unhas', '', '96Desember_2013_Penugasan_CoAss1.pdf', 'N'),
(51, '99/UN4.7.12/PM.17/2013', '2013-11-29', 'Cahyono Kaelan,dr. Phd, SpPa(K)', 3, 'Permintaan bantuan dana', '', '43Desember_2013_Permintaan Dana  - Penugasan Co.Ass.pdf', 'N'),
(52, '512/UN4.7.1.13/PP.17/2013', '2013-12-16', 'Muh.Husni Cangara,dr. ,PhD, DFM', 1, 'Permohonan perpanianqan beasiswa DIKTI', '', '86Desember_2013_Permohonan Perpanjangan Beasiswa DIKTI.pdf', 'N'),
(53, '029/H4.8.4.5.4/LK.09/2013', '2013-12-20', 'Rahmawati Minhajat,dr. Ph.D,Sp.PD', 1, 'Permintaan LCD', '', '39Permintaan LCD dan 1 set Komputer.pdf', 'N'),
(54, '028/H4.8.4.5.4/LK.09/2013', '2013-12-09', 'Rahmawati Minhajat,dr. Ph.D,Sp.PD', 1, 'Permintaan Monitor Komputer', '', '64Permintaan Monitor Komputer.pdf', 'N'),
(55, '027/UN4.7.4.5.4/KP.43/2013', '2013-12-05', 'Rahmawati Minhajat,dr. Ph.D,Sp.PD', 1, 'Perpanjangan Tenaga Dosen Purnabakti', '', '71Perpanjangan  Tenaga Dosen Purnabakti.pdf', 'N'),
(56, '1455/UN4.7.4.5.8/UM.13/2013', '2013-12-03', 'A.Armyn Nurdin,Dr. dr. Msc', 3, 'Bantuan Dana Snack', '', '97Bantuan Dana Snack.pdf', 'N'),
(57, '1454/UN4.7.4.5.8/UM.13./2013', '2013-12-03', 'A.Armyn Nurdin,Dr. dr. Msc', 3, 'Permohonan Pemakaian Reunian LT5', '', '73Pemakaian Ruangan LT5.pdf', 'N'),
(58, '137/HO4.8.4.5.15/XII/13', '2013-12-03', 'Andi Asadul islam', 3, 'Permintaan surat tugas/SPPD', '', '65Permintaan Surat Tugas-SPPD.pdf', 'N'),
(59, '162/UN4.7.5.5/PP.17/2013', '2013-11-27', 'Haerani Rasyid,Dr. dr. M.Kes., SpPd-KGH.,Sp.GK.', 1, 'Permintaan SK Pertemuan llmiah Tahunan Gizi Klinik Fakultas Kedokteran Unhas', '', '11Permintaan SK Panitia PIT.pdf', 'N'),
(60, '177/UN4.7.5.5/PP.17/2013', '2013-12-17', 'Haerani Rasyid,Dr. dr. M.Kes., SpPd-KGH.,Sp.GK.', 1, 'Permintarn SK Penguji Ujian Tesis PPDS Gizi Klinik FKUH', '', '71Permintaan SK Penguji Ujian Tesis PPDS Gizi Klinik.pdf', 'N'),
(61, '175/UN4.7.5.5/PP.17/2013', '2013-12-16', 'Haerani Rasyid,Dr. dr. M.Kes., SpPd-KGH.,Sp.GK.', 1, 'Permintaan SK Penguji Ujian Tesis PPDS Gizi Klinik FKUH', '', '67Permintaan SK Penguji Ujian Tesis PPDS.pdf', 'N'),
(62, '167/UN4.7.5.5/PP.17/2013', '2013-12-05', 'Haerani Rasyid,Dr. dr. M.Kes., SpPd-KGH.,Sp.GK.', 1, 'Permintaan SK Penguji Ujian Lokal', '', '98Permintaan SK Penguji Ujian.pdf', 'N'),
(63, '411/H4.8.4.5.26/KP.42/2013', '2013-12-12', 'A.Jayalangkara, Prof. dr. Ph.D,Sp.KJ(K)', 1, 'Nama-nama Dosen LB', '', '70Nama-nama Dosen LB.pdf', 'N'),
(64, '420/H4.8.4.5.26/TU.15/2013', '2013-12-20', 'A.Jayalangkara, Prof. dr. Ph.D,Sp.KJ(K)', 1, 'Permohonan izin', '', '41Permohonan Izin.pdf', 'N'),
(65, '301/H4.8.4.5.25/TU.23/X/2O13', '2013-12-24', 'Peter Kabo, Prof. dr. PhD,SpFK,SpJP(K)', 20, 'Nama-Nama Peserta Combined Degree', '', '30Nama-nama Peserta Combined Degree PPDS Kardiologi.pdf', 'N'),
(66, '170/H4.8.4.5.2/TU/II/2013', '2013-12-19', 'Juzny Alkatiri, dr. SpPD,SpJP,FIHA,FINASIM', 1, 'Permohonan Cuti', '', '8Permohonan Cuti a.n. dr.Juzny Alkatiri,Sp.PD.pdf', 'N'),
(67, '252/H4.8.4.5.25/TU.23/X/2O13', '2013-11-14', 'Peter Kabo, Prof. dr. PhD,SpFK,SpJP(K)', 1, 'SK Dosen Luar Biasa', '', '8SK Dosen Luar Biasa.pdf', 'N'),
(68, '263/H4.8.4.5.25/TU.23/XII/2013', '2013-12-03', 'Peter Kabo, Prof. dr. PhD,SpFK,SpJP(K)', 1, 'SK Komisi Penasehat Tesis', '', '24SK Komisi Penasehat Tesis a.n. dr.Abubakar S.Zubaidi.pdf', 'N'),
(69, '784/UN4.7.4.5.1/KU.17/2013', '2013-11-29', 'Alwi A. Mappiasse, dr.Sp.KK.Ph.D, FINSDV, SH', 1, 'Permohonan Izin dan SPJ', '', '47Permohonan Izin dan SPJ.pdf', 'N'),
(70, '841/UN4.7.4.5.16/KP.42/2013', '2013-12-24', 'Alwi A. Mappiasse, dr.Sp.KK.Ph.D, FINSDV, SH', 21, 'Surat Penugasan Tim Veriflkasi Sp.KK Konsultan Bagian I.K. Kulit dan Kelamin FK-UNHAS', '', '95Surat Tugas.pdf', 'N'),
(71, '542/UN4.8.4.5.17/PP.17/2013', '2013-12-06', 'Halimah Pagarra,dr. Sp.M(K)', 1, 'Peneiriman Residen', '', '77Pengiriman Residen.pdf', 'N'),
(72, '558/UN4.7.4.5.17/PP.31/2013', '2013-12-17', 'Halimah Pagarra,dr. Sp.M(K)', 1, 'Permohonan S.K. Penasehat Akademik', '', '81Permohonan SK Penasehat Akademik.pdf', 'N'),
(73, '556/UN.4.7.4.5.17/PP.17/2013', '2013-12-19', 'Habibah S. Muhiddin, Dr. dr. Sp.M(K)', 22, 'Peserta Combained Dagree', '', '50Peserta Combined Degree.pdf', 'N'),
(74, '102/UN4.7.4.5.8/LN.11/2013', '2014-01-30', 'Rizalinda Sjahril, dr. M.Sc.,Ph.D.', 1, 'Penyampaian', '', '33Penyampaian.pdf', 'N'),
(75, '097/UN4.7.4.5.8/LK.34/2013', '2014-01-11', 'Muh.Nasrum Massi, Prof. dr. Ph.D.', 3, 'Permintaan Alat dan Bahan Praktikum', '', '55Permintaan Alat dan Bahan Praktikum.pdf', 'N'),
(76, '100/UN4.7.4.5.8/LN.03/2013', '2013-12-24', 'Muh.Nasrum Massi, Prof. dr. Ph.D.', 1, 'Permohonan Izin', '', '57Permohonan Izin a.n. Prof.dr.Muh.Nasrum Massi,Ph.D.pdf', 'N'),
(77, '735/UN4.7.4/KP.53/2013', '2013-12-23', 'Nusratuddin Abdullah, Dr. dr. SpOG-K,MARS', 1, 'Permohonan ljin', '', '2Permohonan Izin a.n. r.dr.A.Mardiah Tahir,Sp.OG.pdf', 'N'),
(78, '723/UN4.7.4/KU.01/2013', '2013-12-13', 'Nusratuddin A., Dr. dr. SpOG-K,MARS', 1, 'Permohonan permintaan barang', '', '43Permohonan Permintaan Barang.pdf', 'N'),
(79, '0270/UN4.7.4.24/PP.17/KPS/2013', '2013-12-10', 'H.R. Agung Saifullah, Prof. DR. Dr. Sp.B,SpOT', 1, 'Penyampaian Surat Pindah Tempat Pendidikan', '', '76Penyampaian Surat Pindah Tempat Pendidikan.pdf', 'N'),
(80, '0051/UN4.7.4.24/KU.17/2013', '2013-12-10', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 1, 'Permohonan Izin dan SPPD', '', '37Permohonan Izin & SPPD a.n. dr.M.Ruksal Saleh,Ph.D.pdf', 'N'),
(81, '0054/UN4.7.4.24/PP.17/2013', '2013-12-16', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 1, 'Permohonln lzin dan SPPD', '', '43Permohonan Izin dan SPPD.pdf', 'N'),
(82, '103/UN4.7.12/TU.14/2013', '2013-12-06', 'Cahyono Kaelan, dr. PhD,SpPA(K)', 23, 'Pelayanan Medik RS. Unhas', '', '73Pelayanan Medik RS Unhas.pdf', 'N'),
(83, '108/UN4.7.1.12/PM.17/2013', '2013-12-07', 'Cahyono Kaelan,dr. Phd, SpPa(K)', 1, 'Permintaan bantuan dana', '', '79Permintaan Bantuan Dana.pdf', 'N'),
(86, '302/UN4.7.4.4/UM.13/XII/2013', '2013-12-27', 'Mansyur Arif,dr. PhD,SpPK(K)', 1, 'Permintaan Rekomendasi Pendidik Klinis', '', '82Permintaan Rekomendasi Pendidik Klinis.pdf', 'N'),
(87, '301/UN4.7.44/XII/2013', '2013-12-24', 'Mansyur Arif,dr. PhD,SpPK(K)', 3, 'Permohonan Bantuan Dana Pemuatan Artikel Penelitian di Jurnal Nasional Terkreditasi', '', '33Permohonan Bantuan Dana Pertemuan Artikel Penelitian di Jurnal Nasional Terakreditasi.pdf', 'N'),
(88, '854/UN4.7.4.5.14/TU.17/XI/2013', '2013-11-29', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Laporan Selesai Pendidikan', '', '81Laporan Selesai Pendidikan a.n. dr.Wa Ode Nelly Estika.pdf', 'N'),
(89, '892/UN4.7.4.5.14/PP.42/XII/2013', '2013-12-30', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Penugasan', '', '27Penugasan di RS.PT.Inco a.n. dr.Fahidah.pdf', 'N'),
(90, 'KU.01.02/4.2488/2013', '2013-12-11', 'Sukendar Adam,DIM.M.Kes', 1, 'Penyampaian Nomor Rekening Tenaga Medis Residen dan Residen Senior Pada RSU/RSUD Kab/Kota TA.2013', '', '40Penyampaian Nomor Rekening.pdf', 'N'),
(91, '809/UN4.7.4.5.14/PP.42/2013', '2013-11-27', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Permintaan SK Tim Penguji Ujian Kompetensi lntemal Bagian limu Penyakit Dalam FKUH', '', '8Permintaan SK Tin Penguji Ujian Kompetensi.pdf', 'N'),
(92, '88/UN4.7.4.5.14/XII/2013', '2013-12-23', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Permohonen Izin', '', '33Permohonan Izin - Dr.dr.A.akbul Aman,SpPD.pdf', 'N'),
(93, '835/UN4.7.4.5.14/LN.03/XII/2013', '2013-12-04', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Permohonen lzin', '', '67Permohonan Izin a.n. dr. Dimas Bayu,Sp.PD.pdf', 'N'),
(94, '871/UN4.7.4.5.114/XII/2013', '2013-12-17', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'Permohonan Izin', '', '68Permohonan Izin Bagian P.Dalam.pdf', 'N'),
(95, '857/UN4.7.4.14/PP.19/2013', '2013-12-11', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'SK Panitia Kenaikan Tahap II PPDS', '', '85SK Panitia Kenaikan Tahap II PPDS.pdf', 'N'),
(96, '886/UN4.7.4.5.14/PP.19/2013', '2013-12-23', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'SK Panitia Ujian Tahap III PPDS llmu Penyakit Dalam', '', '13SK Panitia Ujian Tahap III PPDS.pdf', 'N'),
(97, '852/UN4.7.4.5.14/PP.19/2013', '2013-12-06', 'Syakib Bakri, Prof. Dr.dr. ,SpPD,K-GH', 1, 'SK Penilai Seminar Hasil Penelitian', '', '78SK Penilai Seminar Hasil Penelitian.pdf', 'N'),
(98, '410/H4.8.4.5.26/PP.17/2013', '2013-12-10', 'Andi J. Tanra, Prof. dr. Ph.D, Sp.KJ(K)', 20, 'Peserta Combined Degree', '', '42Peserta Combined Degree.pdf', 'N'),
(99, '036/H4.8.4.5.14/KU.17/XII/2013', '2013-12-13', 'Nur Ahmad Tabri,dr. Sp.PD,K-P Sp.P', 1, 'Jawaban atas permohonan Dr. dr. Bob Wahyudin, Sp.AIt IBCLC', '', '77Jawaban atas Permohonan Dr.dr.Bob Wahyudin,Sp.AK.pdf', 'N'),
(100, '253/UN4.7.4.5.22/TU.13/2013', '2013-12-02', 'Nurlaily Idris,dr. Sp.Rad(K)', 1, 'Nama-Nama Penasehat Akademik PPDS Periode Januari 2014', '', '43Nama Penasehat Akademik PPDS Periode Januari 2014.pdf', 'N'),
(101, '257/UN4.7.4.5.22/PP.17/2013', '2013-12-16', 'Nurlaily Idris,dr. Sp.Rad(K)', 20, 'Nama-Nama Peserta Combined Degree', '', '45Nama-nama Peserta Combined Degree.pdf', 'N'),
(102, '537/UN4.7.4.5.22/KP.23/2013', '2013-12-17', 'Muhammad Ilyas,Prof. Dr.dr. Sp.Rad(K)', 1, 'Penugasan Pelayanan Radiologi di RS.PT. VALE Indonesia, Tbk', '', '22Penugasan di RS.PT.Vale.pdf', 'N'),
(103, '605/UN7.4.5.22/KP.23/2013', '2013-12-30', 'Muhammad Ilyas,Prof. Dr.dr. Sp.Rad(K)', 1, 'Penugasan Pelayanan Residen Radiologi di RsuD Sele Be Solu Kota Sorong', '', '77Penugasan Pelayanan Residen di RSUD Sele Be Solu Kota Sorong.pdf', 'N'),
(104, '595/UN4.7.4.5.22/UM.13/2013', '2013-12-23', 'Muhammad Ilyas,Prof. Dr.dr. Sp.Rad(K)', 2, 'Perkuliahan FK-UNPATTI Ambon', '', '38Perkuliahan FK-UNPATI Ambon.pdf', 'Y'),
(105, '513/UN7.8.4.5.22/UM.13/2013', '2013-11-28', 'Muhammad Ilyas,Prof. Dr.dr. Sp.Rad(K)', 1, 'Permohonan Bantuan Biaya', '', '51Permohonan Bantuan Biaya.pdf', 'N'),
(106, '525/UN7.4.5.22/UM.13/2013', '2013-12-02', 'Muhammad Ilyas,Prof. Dr.dr. Sp.Rad(K)', 1, 'Permohonan Izin', '', '80Permohonan Izin.pdf', 'N'),
(107, '1210/UN4.7.4.5.23/PP.17/2013', '2013-12-27', 'Abdul Muis,dr. Sp.S(K)', 1, 'Penyampaian penempatan Residn Senior ke RSUD Kabupaten Luwu Timur', '', '72Penyampaian Penempatan Residen ke RSUD Luwu & RSUD Samboja.pdf', 'N'),
(108, '1177/UN4.7.5.23/PP.17/2013', '2013-12-04', 'Muhammad Akbar,dr. Ph.D,Sp.S(K)', 1, 'Permohonan Dokumen Menqajar', '', '88Permohonan Dokumen Mengajar.pdf', 'N'),
(109, '1272/UN4.7.4.5.18/TU.23/2013', '2013-12-09', 'Sutji Pratiwi Rahardjo', 20, 'Penyampaian Nama-Nama Penasehat Akademik Bagi PeSerta PPDS THT-KL Periode Masuk Januari 2014', '', '15Penyampaian Nama-nama PA.pdf', 'N'),
(110, '1278/UN4.7.4.5.18/PP.12/2013', '2013-12-11', 'Sutji Pratiwi,Prof. Dr.dr.Sp.THT(K)', 2, 'Penyampaian Nama-Nama peserta Combined Degree PPDS Terpadu Bagian l.K.THT-KL FK UNHAS periode Januar', '', '8Penyampaian Nama-nama Peserta Combined degree.pdf', 'N'),
(111, '1320/UN4.7.4.5.18/PP17/2013', '2013-12-20', 'Abdul Qadar Punagi,Dr.dr. Sp.THT-KL(K)', 1, 'Komisi Penasehat Tesis', '', '46Permintaan SK.pdf', 'N'),
(112, 'B/1175/XII/2013/Balai Rehab', '2013-03-16', 'Dany Harianto Ludong,dr. Sp.KJ', 1, 'Perpanjangan Kerjasama', '', '48Perpanjangan Kerjasama.pdf', 'N'),
(113, '440/36.68/B.5161/2013', '2013-12-17', 'H.Aswidan Randalembah,Ir. M.Si ', 26, 'Permohonan Penugasan Dokter Internship', '', '1Permohonan Penugasan Dokter Intermship.pdf', 'N'),
(114, '001/UMM/DIR/BsD/Xu/2013', '2013-12-02', 'Hermayanto Nurya,Dr. MM', 1, 'Permohonan lzin Pemasangan Info Lowongan Kerja', '', '2Izin Pemasangan Info Lowongan Kerja.pdf', 'N'),
(115, '009/PP-7 HADAYS/SEK-7 HADAYS/IMA FE-UH/XII/2013', '2013-12-23', 'Hardi Nugraha', 3, 'Peminjaman Ruangan', '', '86Peminjaman Aula Prof.Amiruddin.pdf', 'N'),
(116, '694/UN13 /FK/2013', '2013-12-20', 'Bertha J. Que,Dr.dr.Sp.S.,M.Kes', 1, 'Kepaniteraan Klinik Bagian Kulit ilan Kelamin', '', '38Kepaniteraan Klinik Bagian Kulit dan Kelamin.pdf', 'N'),
(117, '1155/UN4.14.4/KM.12/2013', '2013-12-04', 'M.Hendra Chanha,Prof.Dr.drg. MS', 3, 'Peminjaman Gedung Prof. A. Amiruddin Unhas.', '', '65Peminjaman Gedung Prof.Amiruddin.pdf', 'N'),
(118, '046/PANPEL-HSF/MYRC-FKUNHAS/XII/2013', '2013-12-14', 'Aflah Dhea Bariz Yasta', 1, 'Permohonan peminiaman auditorium', '', '35Permohonan Pemijaman Auditorium Prof.Amiruddin.pdf', 'N'),
(119, '006/PP.IKAPPS-UH/XII/2013', '2013-12-20', 'Andi Sumidarti,Dr.drg. M.Kes', 1, 'Penggunaan Auditorium Prof. A. Amiruddin, Fak. Kedoyeran Unhas', '', '76Penggunaan Auditorium Prof.Amiruddin.pdf', 'N'),
(120, '009/PP/lGN/XII/2013', '2013-12-16', 'Suryadi Syamsu,S.Kom', 3, 'Pengadaan Peralatan', '', '93Pengadaan Peralatan.pdf', 'N'),
(121, '25729/UN4.43.3/UM.13/2013', '2013-12-06', 'Ernawati Rifai, SE', 1, 'Penyampaian Perbaikan Surat Keputusan Mendikbud', '', '99Kenaikan Pangkat - dr. Mirna,Sp.Rad.pdf', 'N'),
(122, '25738/UN 4.43.3 lUM.L3/2013', '2013-12-06', 'Ernawati Rifai, SE', 1, 'Penyampaian Surat Keputusan Mendikubud', '', '43Kenaikan Pangkat - dr.Sitti Rafiah,S.Ked.,M.Si.pdf', 'N'),
(123, '25004/UN4.43.3/UM.13/2013', '2013-12-27', 'Ernawati Rifai, SE', 1, 'Penyampaian Surat Keputusan Mendikbud R.I', '', '21Pemberian Tugas Belajar a.n. dr.Rini Rahmawarni,S.Ked.pdf', 'N'),
(124, '25805/UN4.43.3/UM.113/2013', '2013-12-09', 'Ernawati Rifai, SE', 1, 'Penyampaian Surat Keputusan Mendikbud R.I', '', '23Pengantar- Kenaikan Jabatan Fungsional Dosen - dr.Mansyur Arif.pdf', 'N'),
(125, 'B13/30/XI/2013/Pusdokkes', '2013-12-28', 'Arthur Tampi, Dr.', 1, 'permohonan persetuiuan untuk mengikuti pendidikan spesialisasi a.n. AKBP Dr.Muhammad Haris', '', '5Permohonan Persetujuan mengikuti PPDS.pdf', 'N'),
(126, '25619/UN4.2/UM.12/2013', '2013-12-06', 'Abd. Halim Doko, Drs. M.Si', 1, 'Beban Kerja Dosen', '', '7Beban Kerja Dosen.pdf', 'N'),
(127, '25473/UN4.43/UM.13/2013', '2013-12-03', 'Abd. Halim Doko,Prof. Drs. M.Si', 5, 'Evaluasi Tenaga Honorer', '', '48Evaluasi Tenaga Honorer.pdf', 'N'),
(128, '25500/UN4.43/UM .16/2013', '2013-12-04', 'Abd. Halim Doko,Prof. Drs. M.Si', 1, 'Pengantar tentang Beasiswa Unggulan', '', '59Pengantar tentang Beasiswa Unggulan.pdf', 'N'),
(129, '2443/UN4.43 /UM. 13/2013', '2013-11-21', 'Abd. Halim Doko, Drs. M.Si', 1, 'Penyampaian Hasil Penilaian Tim PAK Pusat Untuk Kenaikan Pangkat Dengan menggunakan Angka Kredit 30%', '', '23Penyampaian Hasil Penilaian PAK - dr. Upik A. Miskad.pdf', 'N'),
(130, '2592/UN4.43/UM.13/2013', '2013-12-10', 'Abd. Halim Doko,Prof. Drs. M.Si', 1, 'Penyampaian Hasil Penilaian Tim PAK Pusat Untuk Kenaikan Jabatan Fungsional/ Pangkat a.n. Dr. dr. Nu', '', '35Penyampaian Hasil Penilaian Tim PAK- Dr.dr.Nusratuddin Abdullah.pdf', 'N'),
(131, '2633/UN4.43/UM .13/2013', '2013-12-13', 'Abd. Halim Doko,Prof. Drs. M.Si', 1, 'Permintaan Daftar Nominatif Pegawai Sesuai Nama Jabatan', '', '47Permintaan Daftar Nominatif Pegawai Sesuai Nama Jabatan.pdf', 'N'),
(132, '25616/UN4.43/ KP.L4/ 2013', '2013-12-09', 'Abd. Halim Doko,Prof. Drs. M.Si', 1, 'Rencana Pendidikan & Pelatihan (Diklat) Tahun Anggaran 2014', '', '99Rencana Pendidikan & Pelatihan (Diklat) Thn 2014.pdf', 'N'),
(133, '26079/UN4.43/UM1r3/2013', '2013-12-11', 'Abd. Halim Doko,Prof. Drs. M.Si', 30, 'Surat pengantar tentang Hari Libur Nasional dan Cuti Bersama Tahun 2014', '', '54Surat pengantar tentang Hari Libur Nasional dan Cuti Bersama Tahun 2014.pdf', 'N'),
(134, '25742/UN4.43/KP.36/2013', '2013-12-06', 'Abd. Halim Doko,Prof. Drs. M.Si', 31, 'Tambahan Angka Kredit Bidang " B " a.n. Dr. dr. Mluhammad Ramli Ahmad, Sp.An.(K)', '', '22Tambahan Angka Kredit Bidang B Dr.dr.Muh.Ramli Ahmad.pdf', 'N'),
(135, '25802/UN4.42/UM.13/2013', '2013-12-09', 'Mukmin, Drs. M.Si.,Ak.', 32, 'Permintaan Rekening Koran per 31 Desember 2013', '', '87Permintaan Rekening Koran per 31 Desember 2013.pdf', 'N'),
(136, '592/400/Bid.I/PNK3/XI/2013', '2013-11-29', 'Suwandi,Ir.H. M.Si', 1, 'Bhakti Social', '', '89Bhakti Sosial.pdf', 'N'),
(137, '638/400/Bid./PNK3/Xll/2013', '2013-12-10', 'Suwandi,Ir.H. M.Si', 1, 'Donor Darah', '', '47Donor arah.pdf', 'N'),
(138, '614/400/Bid.l/PNK.3/Xll/2013', '2013-12-04', 'Hj. Ratnawati Arif,Drs.  M.Si', 1, 'Pastisipasi Donor Darah', '', '22Partisipasi Donor Darah.pdf', 'N'),
(139, '008/KU. KM.SK/12.2013', '2013-12-16', 'A.Muhammad Ichsan, dr. Ph.D, Sp.M', 1, 'lzin Renovasi Kantin Mahasiswa', '', '8Izin Renovasi kantin Mahasiswa - Keteraturan Pembayaran Sewa.pdf', 'N'),
(140, '005/B/MECS/FKUNHAS/XII/2013', '2013-12-02', 'Muh. Zhafran Darwis', 3, 'Permohonan Pengadaan dan Perbaikan Sarana dan Prasarna Penunjang Kegiatan', '', '18Permohonan Pengadaan dan Perbaikan Sarana dan Prasarana Penunjang Kegiatan.pdf', 'N'),
(141, '428/MENKES/SK/Xl/2013', '2013-11-01', 'NAFSIAH MBOI', 1, 'Permohonan Pengadaan dan Perbaikan Sarana dan Prasarana Penunjang Kegiatan', '', '19SK Menkes RI, Penerima Bantuan PPDS.pdf', 'N'),
(142, '030/PA/MKS/13', '2013-11-06', 'Ganjar P. Sobari', 3, 'PEMELIHARAAN 1 UNIT ELEVATOR OTIS (C3NE25(p) DI GEDUNG FAKULTAS KEDOKTERAN UNHAS', '', '49Pemeliharaan 1 Unit Elevator OTIS.pdf', 'N'),
(143, '78021/UN4 .19/PP .26/2013', '2013-11-28', 'Mursalim, Prof. Dr. Ir', 1, 'Daftar Mahasiswa PPs Unhas yang Dinyatakan Mengundurkan Diridan Futus Studi', '', '42Daftar Mahasiswa PPS PPs Unhas yg dinyatakan .....pdf', 'N'),
(144, '23/PB.PETRI/XI/2013', '2013-11-28', 'Djoko Widodo,Prof.Dr. Sp.PD-KPTI', 33, 'Permohonan Pengesahan sebagai Konsultan Penyakit Tropik dan Infeksi', '', '95Permohonan Pengesahan sebagai Konsultan.pdf', 'N'),
(145, '556 /UN.4 .7 .4.1/KP.23/2013', '2013-12-27', 'Djohan Aras,Drs. S.Ft,Physio,M.Pd,M.Kes', 3, 'Usul pengembalian tenaga administrasi Sdri. Masita Syukri, SS', '', '2Usul Pengembalian tenaga Adm. a.n. Masita Syukri,SS.pdf', 'N'),
(146, '56/UN4.7. 4.1/KP.36/2013', '2013-12-27', 'Djohan Aras,Drs. S.Ft,Physio,M.Pd,M.Kes', 1, 'Usul Perpanjangan SK. Dosen Luar Biasa Pada Proili-S l Fisioterapi Profesi Fakultas Kedokteran Unhas', '', '82Usul Perpanjangan SK Dosen L.B.pdf', 'N'),
(147, '560/UN4.7.4.1/KP.36/2013', '2013-12-27', 'Djohan Aras,Drs. S.Ft,Physio,M.Pd,M.Kes', 1, 'Usul Perpanjangan SK. Dosen Tidak Tetap (Kontrak) Pada Prodi-S lTisioterapi Profesi Fakultris Kedokt', '', '98Usul Perpanjangan SK Dosen Tidak Tetap.pdf', 'N'),
(148, '876/UN4.7.4.1.27/TU.15/2013', '2013-12-19', 'Werna Nontji,Dr. S.Kp.M.Kep', 3, 'Laporan Kejadian', '', '21Laporan Kejadian.pdf', 'N'),
(149, 'Werna Nontji,Dr. S.Kp.M.Kep', '2013-12-04', '866/UN4.7.4.271/KU.15/2013', 3, 'Permintaan Barang', '', '69Permintaan Barang.pdf', 'N'),
(150, '057/UN.7 4.2/TU.15/2013', '2013-12-10', 'Muhammad Tamar,Dr. M.Psi', 3, 'Permintaan Print Lazer Jet', '', '68Permintaan Print Lazer Jet.pdf', 'N'),
(151, '667/UN4.7 .30/KM.01/2013', '2013-11-02', 'Ariyanti Saleh,Dr. S.Kp.,M.Kes', 3, 'Pemasangan lnternet', '', '37Pemasangan Internet.pdf', 'N'),
(152, '339/KMU/Dir/XI/2013', '2013-11-25', 'Nurul Fathoni,Dr.M.Kes', 1, 'Perpanjangan Perjanjian Kerjasama Pelayanan Dokter Spec Peny.Dalam', '', '61Perpanjangan Perjanjian Kerjasama Dokter Peny.Dalam.pdf', 'N'),
(153, '', '2013-12-24', 'Yoyok Sui Yusuf', 1, 'Permohonan Izin Acara Sushi tei Goes To Campus', '', '13Permohonan Izin Acara Sushi tei Goes To Campus.pdf', 'N'),
(154, '3064/DN/P3S/2013', '2013-10-28', 'R. Sjamsuhidajat, Prof.dr.', 1, 'Lulusan PPDSI', '', '95Lulusan PPDSI.pdf', 'N'),
(155, '25803/UN4.2/ PP.42/ 2013', '2013-12-09', 'A.Warhidan Sinrang,Dr.dr. Ms', 1, 'Penetapan Daya Tarnpung PTN 2014', '', '42Penetapan Daya Tampung PTN 2014.pdf', 'N'),
(156, '24395/UN4/KP.04/2013', '2013-11-21', 'Idrus A. Paturusi', 36, 'PEMBERHENTIAN DAN PENGANGKATAN KEPALA PUSAT PENELITIAN DAN PENGEMBANGAN ENERGI DAN KELISTRIKAN PADA ', '', '17SK Pemberhentian dan Pengangkatan  Kepala LP2M Unhas.pdf', 'N'),
(157, '25382/UN4/KP.04/2013', '2013-12-02', 'Idrus A. Paturusi,Prof.Dr.dr.', 37, 'PEMBERHENTIAN DAN PENGANGKATAN ANGGOTA SENAT UNIVERSITAS HASANUDDIN', '', '66SK Pemberhentian dan Pengangkatan Anggota Senat Unhas.pdf', 'N'),
(158, '24058/UN4/PP.37 /2013', '2013-11-18', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 38, 'PENERIMAAN MAHASISWA BARU PROGRAM PENDIDIKAN DOKTER SPESIALIS (PPDS) PADA FAKULTAS KEDOKTERAN UNIVER', '', '13SK Penerimaan Maba PPDS Januari 2014.pdf', 'N'),
(159, '24433/UN4/UM.13/2013', '2013-11-21', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 39, 'PENGANGKATAN PANITIA PEMYAAN NATAL BERSAMA (OIKUMENE) DOSEN,KARYAWAN DAN MAHASISWA UNIVERSITAS HASAN', '', '59SK Rektor - Pengangkatan Panitia Perayaan Natal Bersama Unhas thn 2013.pdf', 'N'),
(160, '26090/UN4/KP.04/2013', '2013-12-11', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 40, 'PENGANGKATAN KETUA BAGIAN FARMAKOLOGI PADAFAKULTASKEDOKTERANUNIVERSITASHASANUDDIN', '', '40SK Rektor tentang Pengangkatan Ketua Bagian Farmakologi FK Unhas.pdf', 'N'),
(161, '22769/UN4/KP.24/2013', '2013-10-30', 'Idrus A Paturusi, Prof. Dr. dr. SpB,SpOT', 41, 'Usul Pindah Tugas Antar Instansi dari Dinas Peternakan dan Perikanan Kabupaten Sidrap Prov. Sulawesi', '', '30Usul Pindah Tugas a.n. drh.Zainal Abidin,s.KH.pdf', 'N'),
(162, 'B/321/Xll/2013/Rumkit', '2013-12-16', 'Swi Miyarsi Mars, drg.', 1, 'Permohonan Data Pelaiar (alumni)', '', '53Permohonan Data Pelajar (alumni).pdf', 'N'),
(163, '001/SMF Kardiologi/Rs. IBSI/YW-UMI/VIU20t3', '2013-07-19', 'H.Junus Alkatiri,Prof. dr. SpPD-KKV,SpJP(K),FINASiM,FIHA,FAsCC', 42, 'Penyampaian', '', '26Penyampaian Susunan Organisasi SMF Kardiologi.pdf', 'N'),
(164, '031/Dir/RS.IBSIAW-UMI/Xll/2013', '2013-12-04', 'A.Husni Tanra,Prof.dr.Ph.D', 1, 'Penyampaian', '', '89Penyampaian.pdf', 'N'),
(165, '240/BI.AdmdKa/XI/13', '2013-11-28', 'Eko Juni Puwandari,SE.Ak.MM', 1, 'Permohonan Verifikasi ljazah', '', '80Permohonan Verifikasi Ijazah.pdf', 'N'),
(166, '3438/UN4.32./TU.23/2013', '2013-12-28', 'Syamsu,Prof.Dr.dr.Sp,PD-KAI', 1, 'Permohonan lzin', '', '98Permohonan Izin a.n. dr.A.Kurnia Bintang - dkk.pdf', 'N'),
(167, '25317/UN4/1N.05/2013', '2013-12-02', 'Rektor Universitas Hasanuddin', 1, 'Surat Tugas a.n. Dr.dr.A.Wardihan Sinrang,M.S', '', '18Surat Tugas a.n. Dr.dr.A.Wardihan Sinrang,M.S.pdf', 'N'),
(168, '01825/ PERS/ RSIAHP/Vlll/2013', '2013-08-05', 'lrma Suryani,Dr. MM', 1, 'Surat Permohonan Verifikasi Dokter Umum', '', '4Permohonan Verifikasi Dokter Umum.pdf', 'N'),
(169, '445/ 3950 /000.800/Xll/2013', '2013-12-11', 'Musafirah Akil Ali,drg. MARS', 1, 'Perpanjangan MOU Penyelenggaraan Pelayanan Kesehatan Masyarakat', '', '17Perpanjangan MOU - Pemberhentian Kerjasama Dokter THT - Permohonan Kerjasama Obgyn.pdf', 'N'),
(170, '1409/TU/RSUD/XII/2013', '2013-12-04', 'Hj.Nurhasnah Palinrungi,Drg. M.Kes', 44, 'Permohonan kerjasama dan penempatan dokter spesialis Anastesi dan Residen Anastesi', '', '89Permohonan Kerjasama.pdf', 'N'),
(171, '0996/A-Um/TU-RSUD/Mln/XII/2013', '2013-12-10', 'Naomi Mua,dr.M.Kes', 1, 'Pemberitahuan berakhirnya kerjasama Residen THT.', '', '12Pemberitahuan berakhirnya kerjasama Residen THT.pdf', 'N'),
(172, '445/574/RSUD-MRW/XI/2013', '2013-11-18', 'Sandra Susanty,dr. MARS', 1, 'Tindak Laniut Mou', '', '32Tindak Lanjut Mou.pdf', 'N'),
(173, 'KP.00.02/ll.405/2013.', '2013-12-03', 'Setiawaty,Drg. M.Kes', 1, 'Konfirmasi Ijazah', '', '92Konfirmasi Ijazah.pdf', 'N'),
(174, 'KU.01.02/4/2488/2013', '2013-12-11', 'Sukendar Adam,DIM,M.Kes', 1, 'Penyampaian Nomor Rekening Tenaga Medis Residen dan Residen Senior Pada RSU/RSUD Kab/Kota TA.2013', '', '1Penyampaian Nomor Rekening.pdf', 'N'),
(175, '25503/UN4.3/KM .02/2013', '2013-12-04', 'H. Nasaruddin Salam,Ir. M.T.', 4, 'Kuota Beasiswa PPA dan BBBM Tahun 2014', '', '39Kouta Beasiswa PPA dan B3M tahun 2014.pdf', 'N'),
(176, '25726/UN4. 1/LN.11/2013', '2013-12-06', 'D.A.Suriamiharja,Prof M.Eng', 46, 'Permintaan Kemajuan Studi', '', '79Permintaan Kemajuan Studi.pdf', 'N'),
(177, '26538/UN4.1/UM.13/2013', '2013-12-17', 'D.A.Suriamiharja,Prof M.Eng', 1, 'Permintaan Laporan Hasil Pelaksanaan Pekerjaan', '', '95Permintaan Laporan Hasil Pelaksanaan Pekerjaan.pdf', 'N'),
(178, '26922/UN4.1 /LN.11/2013', '2013-12-20', 'D.A.Suriamiharja,Prof M.Eng', 1, 'Permohonan belajar di Fakultas Kedokteran Unhas a.n. Mustafa Abdulkasem Abdulssalam dan Adell M. Ahm', '', '11Permohonan belajar di Fakultas Kedokteran Unhas a.n. Mustafa Abdulkasem, dkk.pdf', 'N'),
(179, '26854/UN 4.L/PP.22/2013', '2013-12-20', 'D.A.Suriamiharja,Prof M.Eng', 1, 'Pindah Studi', '', '22Pindah Studi.pdf', 'N'),
(180, '26437/UN4.1 /PP.22/2013', '2014-01-16', 'D.A.Suriamiharja,Prof M.Eng', 47, 'PENERIMAAN MAHASISWA LANJUT STUDI PROGRAM PENDIDIKAN DOKTER SPESIALIS (PPDS) A.N. dT. FELIX SANDER B', '', '41SK Rektor tentang Penerimaan Mahasiswa Lanjut Studi PPDS a.n. dr.Felix Sander Batuna,MD.pdf', 'N'),
(181, '27143/UN4.1/PP.42/2013', '2013-12-23', 'D.A.Suriamiharja,Prof M.Eng', 1, 'Kepastian Hukum, Permintaann daftar nama peserta PPDS dan PDGS', '', '94Surat Pengantar tentang, Kepastian Hukum, Permintaann daftar nama peserta PPDS dan PDGS.pdf', 'N'),
(182, '27252/UN4.1/PP.42/2013', '2013-12-27', 'D.A.Suriamiharja,Prof M.Eng', 1, 'Penjelasan Program Fast Trak & Permohonan Penugasan dokter internship', '', '80Surat Pengantar tentang, Penjelasan Program Fast Trak & Permohonan Penugasan dokter internship.pdf', 'N'),
(183, '25741/UN4.2/UM.13/2013', '2013-12-06', 'A.Warhidan Sinrang,Dr.dr. Ms', 48, 'Batas Penerimaan Surat Permintaan Pembayaran', '', '6Batas Penerimaan Surat Permintaan Pembayaran.pdf', 'N'),
(184, '25913/UN4.43/UM.13/2013', '2013-12-09', 'A.Warhidan Sinrang,Dr.dr. Ms', 1, 'Pengisian SIPKD', '', '15Pengisian SIPKD.pdf', 'N'),
(185, '25840/UN4.2/KP.53/2013', '2013-12-09', 'A.Warhidan Sinrang,Dr.dr. Ms', 1, 'Pengukuran Beban Kerja untuk Penyusunan Formasi CPNS Tahun 2014', '', '61Pengukuran Beban Kerja Untuk Penyusunan Formasi CPNS 2014.pdf', 'N'),
(186, '27107 /UN4./NM.13/2013', '2013-12-23', 'A.Warhidan Sinrang,Dr.dr. Ms', 3, 'Penyampaian Laporan BMN dan Barang Persediaan', '', '80Penyampaian Laporan BMN dan Barang Persediaan.pdf', 'N'),
(187, '26356/UN4.2/UM.7/2013', '2013-12-13', 'A.Warhidan Sinrang,Dr.dr. Ms', 3, 'Permintaan Data Piutang per 31 Desember 2013', '', '66Permintaan Data Piutang  Per 31 Desember 2013.pdf', 'N'),
(188, '25084/U4.2/KP .20/2013', '2013-11-28', 'A.Warhidan Sinrang,Dr.dr. Ms', 1, 'Percyaratan Pengusulan Calon Penerima Tanda Kehormatan Satyalancana Karyasatya Tahun 2013', '', '2Persyaratan Pengusulan Calon Penerima Tanda Kehormatan....pdf', 'N'),
(189, '25728/UN4.2/KP.24 /2013', '2013-12-06', 'Rektor Universitas Hasanuddin', 1, 'Sehubungan dengan surat Ketua Prodi Psikologi Fakultas Kedokteran Unhas', '', '61Surat Tugas - Dr.Muh. Tamar,M.Psi.pdf', 'N'),
(190, '25843/UN4.2/KP.24/2013', '2013-12-09', 'Rektor Universitas Hasanuddin', 50, 'sehubungan dengan surat Pembantu Dekan II Fakultas Kedokteran unhas', '', '48Surat Tugas.pdf', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `idj` int(5) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`idj`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idj`, `jabatan`) VALUES
(2, 'Dekan'),
(3, 'Wakil Dekan I'),
(4, 'Wakil Dekan II'),
(5, 'Wakil Dekan III'),
(6, 'Tata Usaha'),
(7, 'Staff'),
(8, 'Dosen'),
(1, 'Operator'),
(0, 'Adminstrator');

-- --------------------------------------------------------

--
-- Table structure for table `osurat`
--

CREATE TABLE IF NOT EXISTS `osurat` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `onmr` varchar(50) NOT NULL,
  `otgl` date NOT NULL,
  `opengirim` int(11) NOT NULL,
  `okepada` varchar(100) NOT NULL,
  `operihal` varchar(100) NOT NULL,
  `oket` text NOT NULL,
  `ofile` varchar(100) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `osurat`
--


-- --------------------------------------------------------

--
-- Table structure for table `pdis`
--

CREATE TABLE IF NOT EXISTS `pdis` (
  `pdid` int(11) NOT NULL AUTO_INCREMENT,
  `ptgl` date NOT NULL,
  `pId` int(11) NOT NULL,
  `cId` int(11) NOT NULL,
  `psACC` enum('Y','N') NOT NULL,
  `psTglbaca` date NOT NULL,
  `iid` int(11) NOT NULL,
  PRIMARY KEY (`pdid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pdis`
--

INSERT INTO `pdis` (`pdid`, `ptgl`, `pId`, `cId`, `psACC`, `psTglbaca`, `iid`) VALUES
(1, '2014-02-04', 1, 2, 'N', '2014-02-05', 26),
(2, '2014-02-04', 1, 3, 'N', '0000-00-00', 26),
(3, '2014-02-04', 1, 4, 'N', '0000-00-00', 26),
(4, '2014-02-04', 1, 2, 'N', '0000-00-00', 25),
(5, '2014-02-04', 1, 3, 'N', '0000-00-00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `psin`
--

CREATE TABLE IF NOT EXISTS `psin` (
  `psid` int(11) NOT NULL AUTO_INCREMENT,
  `cId` int(11) NOT NULL,
  `sistatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `siid` int(11) NOT NULL,
  PRIMARY KEY (`psid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `psin`
--


-- --------------------------------------------------------

--
-- Table structure for table `sinter`
--

CREATE TABLE IF NOT EXISTS `sinter` (
  `siid` int(11) NOT NULL AUTO_INCREMENT,
  `sinmr` varchar(50) NOT NULL,
  `sitgl` date NOT NULL,
  `sipengirim` int(11) NOT NULL,
  `siperihal` varchar(100) NOT NULL,
  `siket` text NOT NULL,
  `sifile` varchar(100) NOT NULL,
  PRIMARY KEY (`siid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sinter`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
