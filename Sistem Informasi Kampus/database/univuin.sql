-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 09:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univuin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(5) NOT NULL,
  `ktp_dosen` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat_dosen` varchar(100) NOT NULL,
  `email_dosen` varchar(100) DEFAULT NULL,
  `notlp_dosen` varchar(15) NOT NULL,
  `bidang_dosen` varchar(100) NOT NULL,
  `jadwal_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `ktp_dosen`, `nama_dosen`, `alamat_dosen`, `email_dosen`, `notlp_dosen`, `bidang_dosen`, `jadwal_dosen`) VALUES
(1, '0102030405', 'Indra Permana, S.Kom', 'Jl. Biaung Gede Gianyar', 'indra_prm@gmail.com', '081999777889', 'Jaringan', 'Senin, Selasa, Kamis'),
(2, '0103040401', 'Santika Wahyu, S.T', 'Jl. Mendalo Asri Jambi', 'stk_wahyu@gmail.com', '089767888123', 'RPL', 'Senin, Rabu, Jumat'),
(3, '0102040505', 'Gede Suparwata, S.Kom, M.Cs.', 'Jl. Bidak Jelantik IIC No. 4 Renon', 'suparwata@gmail.com', '084995996997', 'Jaringan', 'Rabu, Kamis, Jumat'),
(4, '0103030405', 'Gede Karim, S.T', 'Jalan Gunung Rinjani Gang Kasuari IIA', 'karim@gmail.com', '081999775776', 'Komputasi', 'Selasa, Rabu, Kamis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(10) NOT NULL,
  `ktp_mhs` varchar(10) DEFAULT NULL,
  `nim_mhs` varchar(10) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `agama_mhs` varchar(10) DEFAULT NULL,
  `tgllahir_mhs` varchar(20) DEFAULT NULL,
  `jk_mhs` varchar(10) DEFAULT NULL,
  `alamat_mhs` varchar(200) DEFAULT NULL,
  `email_mhs` varchar(50) DEFAULT NULL,
  `notlp_mhs` varchar(15) DEFAULT NULL,
  `foto_mhs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `ktp_mhs`, `nim_mhs`, `nama_mhs`, `agama_mhs`, `tgllahir_mhs`, `jk_mhs`, `alamat_mhs`, `email_mhs`, `notlp_mhs`, `foto_mhs`) VALUES
(1, '0101020201', '2019046001', 'Wayan Agus Wirayasa', 'Hindu', '1992-08-03', 'Laki', 'Jl. Dangin Bingin Sading Kangin', 'wira@gmail.com', '081999675883', '657d67d333d81__311490a6-e910-4236-a02c-93cc4a52c4db.jpg'),
(3, '0101020202', '2019046002', 'Andi Siswanto', 'Muslim', '1993-04-09', 'Laki', 'Jl. Dauh Tukad Bilok', 'andis@gmail.com', '081345445675', '657d67e8cdbba__9df071b8-66ef-4b3e-b86a-e6f6c1fce628.jpg'),
(4, '678566794', '788554', 'putri', 'Kristen', '2003-02-05', 'Perempuan', 'sumatra utara', 'putri@gmail.com', '08210838291', '657d686ae7c35__45339181-94e5-4e3f-8e8e-a701697c0641.jpg'),
(5, '12983747', '234958354', ' jevo', 'Muslim', '2003-12-13', 'Laki', 'jl.simpang muara', 'jevo@gmail.com', '081532321764', '6593dff50f2bf__7e1d3d13-e195-4f3e-b58b-28f36716c4f9.jpg'),
(9, '097895765', '08096765', 'citra', 'Muslim', '2004-02-05', 'Perempuan', 'JL.Muara Bungo', 'citra@gmail', '081532325422', '657d69935e6bc__5e3fae00-55d3-4a79-b8cf-ff3afb9f3eac.jpg'),
(12, '39342', '33342323', 'yosep', 'Muslim', '2006-03-04', 'Laki', 'jl setia budi lorong 6', 'yosep@gmail.com', '081532325423', '657d7431e9dc7__d33071f9-0db8-4667-b851-3edb7a92746f.jpg'),
(13, '3464656232', '235345455', 'robert', 'Kristen', '2004-03-05', 'Laki', 'jln simpang merpati', 'robert@gmail.com', '08210838291', '657d74cb1c062__7e1d3d13-e195-4f3e-b58b-28f36716c4f9.jpg'),
(14, '5653', '3432525', 'Julea', 'Kristen', '2004-03-05', 'Perempuan', 'jln seokarno, no 13', 'julea@gmail', '082108382924', '657d75343c564__416e9065-5b28-456d-bf51-f960677ff026.jpg'),
(17, '000', '000', 'ngylty', 'Muslim', '9786-02-05', 'Laki', 'jyguyruy', 'hjhbjhg@tgfu', '0887678868', 'uploads/_54d50bca-fee3-4002-8421-ef796e015e39.jpg'),
(18, '058395', '039459083', 'russ', 'Muslim', '2004-02-12', 'Laki', 'fdfads', 'mdnsaj@gmail.com', '08097773', 'uploads/WIN_20230520_19_00_11_Pro.jpg'),
(19, '024893', '98584', 'gurr', 'Hindu', '2003-03-04', 'Perempuan', 'jgdifhgfd', 'hjkvff2ykfy@gmail', '081332', '657d0e47233eb.jpg'),
(20, 'p8987t', '07986587', 'jkbyukfyu', 'Lainnya', '6768-09-07', 'Laki', 'hgjtyuy', 'hhjhbjhg@tgfu', '08899', '657d1080f31a0.jpg'),
(22, '1435646547', '6040402', 'sudirman', 'Hindu', '2004-03-04', 'Laki', 'makuku', 'sei@mail.com', '0823432123', '657d53b56ae8c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa2`
--

CREATE TABLE `tb_mahasiswa2` (
  `id_mhs` int(10) NOT NULL,
  `ktp_mhs` varchar(10) DEFAULT NULL,
  `nim_mhs` varchar(10) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `tgllahir_mhs` varchar(20) DEFAULT NULL,
  `tmplahir_mhs` varchar(20) DEFAULT NULL,
  `agama_mhs` varchar(10) DEFAULT NULL,
  `kwn_mhs` varchar(10) DEFAULT NULL,
  `jk_mhs` varchar(10) DEFAULT NULL,
  `alamat_mhs` varchar(200) DEFAULT NULL,
  `email_mhs` varchar(50) DEFAULT NULL,
  `notlp_mhs` varchar(15) DEFAULT NULL,
  `smak_mhs` varchar(50) DEFAULT NULL,
  `almtsmak_mhs` varchar(100) DEFAULT NULL,
  `llssmak_mhs` varchar(10) DEFAULT NULL,
  `ortu_mhs` varchar(50) DEFAULT NULL,
  `tlportu_mhs` varchar(15) DEFAULT NULL,
  `almtortu_mhs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_mahasiswa2`
--

INSERT INTO `tb_mahasiswa2` (`id_mhs`, `ktp_mhs`, `nim_mhs`, `nama_mhs`, `tgllahir_mhs`, `tmplahir_mhs`, `agama_mhs`, `kwn_mhs`, `jk_mhs`, `alamat_mhs`, `email_mhs`, `notlp_mhs`, `smak_mhs`, `almtsmak_mhs`, `llssmak_mhs`, `ortu_mhs`, `tlportu_mhs`, `almtortu_mhs`) VALUES
(1, '0404010103', '2019046001', 'Agus Wirayasa', '1993-03-01', 'Tabanan', 'Hindu', 'Indonesia', 'Laki', 'Jl. Dangin Bingin Sading', 'wirayasa@gmail.com', '081333444333', 'SMAN 2 Denpasar', 'Jl. Sudirman Denpasar', '2010', 'Resti Ketut', '084333929123', 'Jl. Raya Baturiti Tabanan'),
(2, '0404031102', '2019046002', 'Made Bagus Indra', '1999-02-02', 'Singaraja', 'hindu', 'Indonesia', 'Laki', 'Jl. Patih Jelantik IIIC', 'indrabagus@gmail.com', '081345445675', 'SMAN 1 Singaraja', 'Jl. Ahmad Yani Utara Singaraja', '2011', 'Ni Made Surtiningsih', '082334556665', 'Jl. Dangin Peken SIngaraja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(10) NOT NULL,
  `kode_matkul` varchar(50) DEFAULT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  `jmlsks_matkul` varchar(5) DEFAULT NULL,
  `semester_matkul` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`, `jmlsks_matkul`, `semester_matkul`) VALUES
(1, 'ILKD101', 'Interaksi Manusia dan Komputer', '3', '1'),
(2, 'ILKD102', 'Kalkulus', '3', '1'),
(3, 'ILKD103', 'Aljabar Linear Elementer', '2', '1'),
(4, 'ILKD201', 'Kalkulus 2', '3', '2'),
(5, 'ILKD202', 'Pemrograman Dasar', '3', '2'),
(6, 'ILKD203', 'Fisika Dasar', '3', '2'),
(7, 'ILKD301', 'Praktikum Pemrograman Dasar', '3', '3'),
(8, 'ILKD302', 'Praktikum Jaringan', '3', '3'),
(9, 'ILKD303', 'Jaringan Komputer', '3', '3'),
(10, 'ILKD304', 'Arsitektur Komputer', '2', '3'),
(11, 'ILKD305', 'Arsitektur dan Struktur Data', '3', '3'),
(12, 'ILKD111', 'INTERAKSI MANUSIA DAN KIMPUTER', '4', '3'),
(13, 'ILKD190', 'PSIKOLOGI', '4', '3'),
(14, ' ILKD114', 'Kewarganegaraan', '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$15w5WEl0gVtM1/JDAKmySek88wK4T1wrIIkHOhyUYZkV10dvfr1o2'),
(3, 'administrator', '$2y$10$BSdwXZrvkYvxaTBhbzhMleLfAi7PzoLOLD8Z9IuoB.UZ.lpcsjf42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'mahasiswa', '123', 'mahasiswa'),
(3, 'dosen', '123', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_mahasiswa2`
--
ALTER TABLE `tb_mahasiswa2`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_mahasiswa2`
--
ALTER TABLE `tb_mahasiswa2`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
