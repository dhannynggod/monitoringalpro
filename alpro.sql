-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2023 pada 02.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alpro`
--

CREATE TABLE `data_alpro` (
  `id` int(11) NOT NULL,
  `nama_teknisi` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gangguan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_alpro`
--

INSERT INTO `data_alpro` (`id`, `nama_teknisi`, `created`, `alamat`, `gangguan`, `keterangan`, `status`, `longitude`, `latitude`, `file1`, `file2`, `file3`) VALUES
(11, 'Zidan & Yoga', '2023-06-12 14:34:28', 'kawasan industri candi', 'Kabel Teruntai', 'lokasi di depan gudang dan bisa digunakan akses keluar masuk truk besar, Saya tdi juga tanya satpam ', 'Belum', '110.363674', '-6.992749', 'photo_6057428291968677591.jpg', '', ''),
(12, 'Noval & lutfun', '2023-06-12 14:36:14', 'kawasan industri candi', 'Kabel Teruntai', 'lokasi di depan kemfarm Indonesia PT, di gunakan untuk keluar masuk truk besar', 'Belum', '110.360821', '-7.003265', 'photo_60574282919686775911.jpg', '', ''),
(13, 'Rasyid & Luthfun', '2023-06-12 14:37:42', 'kawasan industri candi', 'Tiang Miring', ' lokasi kawasan industri candi blok 8d', 'Belum', '110.367517', '-7.008089', 'photo_60574282919686775912.jpg', '', ''),
(14, ' Arif & Naufal', '2023-06-12 14:38:53', 'kawasan industri candi', 'Tiang Miring', 'Lokasi di depan PT dwihandal hadetrada', 'Belum', '110.358151', '-7.002908', 'photo_60574282919686775913.jpg', '', ''),
(15, ' Zidan & Yoga', '2023-06-12 14:39:44', 'Sebrang Toko/Gudang Marimas Jl Gatot Subroto', 'Tiang Miring', 'Tiang miring dan hampir mengenai pohon dan menyebabkan kabel agak terjuntai', 'Belum', '110.366211', '-6.992093', 'photo_60574282919686775914.jpg', '', ''),
(16, 'Zidan & Yoga', '2023-06-12 14:40:33', 'Deket gate kawasan industri candi', 'Tiang Hampir Roboh', 'Tiang hampir roboh mengenai tiang sebalahnya', 'Belum', '110.366289', '-6.992652', 'photo_60574282919686775915.jpg', '', ''),
(17, 'Zidan & Yoga', '2023-06-12 14:41:39', 'Kawasan industri candi blok 2', 'Kabel Teruntai', 'Kabel terjuntai, lokasi depan gudang dan biasa digunakan untuk keluar masuk truk, laporan dari warga', 'Belum', '110.357995', '-7.001609', 'photo_60574282919686775916.jpg', '', ''),
(18, ' Rasyid & Luthfun', '2023-06-12 14:42:37', 'Kawasan industri Wijaya Kusuma', 'ODP Terbuka', '-', 'Belum', '110.336618', '-6.977446', 'photo_60574282919686775917.jpg', '', ''),
(19, 'Zidan & Yoga', '2023-06-12 14:44:21', 'Kawasan Industri Wijayakusuma', 'ODP Terbuka', 'odp terbuka seperti di gambar', 'Belum', '110.335907', '-6.978361', 'photo_60574282919686775918.jpg', '', ''),
(21, 'Rasyid & Luthfun', '2023-06-12 14:49:39', 'Kawasan industri Wijaya Kusuma', 'ODP Terbuka', ' lokasi didepan PT.LENTERA PERSADA GAS', 'Belum', '110.330960', '-6.971767', 'photo_605742829196867759110.jpg', '', ''),
(22, 'Zidan & Yoga', '2023-06-12 14:50:57', 'Kawasan Industri Wijayakusuma', 'Kabel Teruntai', 'terdapat beberapa kabel telkom yang terjuntai dan laporan dari pekerja setempat jika ada truk kabel ', 'Belum', '110.336526', '-6.976451', 'photo_605742829196867759111.jpg', '', ''),
(23, 'Zidan & Yoga', '2023-06-12 14:51:52', 'Kawasan Industri Wijayakusuma', 'ODP Terbuka', 'odp terbuka, kabel di sangga oleh pemilik bangunan setempat (terdapat kabel telkom yang di sangga)', 'Belum', '110.335322', '-6.971682', 'photo_605742829196867759112.jpg', '', ''),
(24, 'Zidan & Yoga', '2023-06-12 14:53:03', 'Kawasan Industri Wijayakusuma', 'Kabel Teruntai', 'kabel terjuntai dan hampir setinggi mobil, lokasi digang masuk perumahan graha wijaya kusuma asri', 'Belum', '110.336632', '-6.975807', 'photo_605742829196867759113.jpg', '', ''),
(25, 'Lutfun & Rasyid', '2023-06-12 14:53:55', 'JI Beringin Rejo A I', 'ODP Terbuka', 'lokasi di depan Bringin Indah', 'Belum', '110.334914', '-6.996603', 'photo_605742829196867759114.jpg', '', ''),
(26, 'Lutfun & Rasyid', '2023-06-12 14:54:49', 'JI terboyo III', 'Tiang Hampir Roboh', 'lokasi di jln terboyo III', 'Belum', '110.465012', '-6.948447', 'photo_605742829196867759115.jpg', '', ''),
(27, 'Rasyid & Luthfun', '2023-06-12 14:56:46', 'JI terboyo industri', 'ODP Terbuka', 'lokasi di JI terboyo industri', 'Belum', '110.467163', '-6.951541', 'photo_605742829196867759116.jpg', '', ''),
(28, 'lutfun & rasyid', '2023-06-12 14:57:41', 'JI terboyo', 'ODP Terbuka', 'lokasi di tempat PT. PADANG KENCANA', 'Belum', '110.468901', '-6.951697', 'photo_605742829196867759117.jpg', '', ''),
(29, 'lutfun & rasyid', '2023-06-12 14:59:43', 'JI terboyo IV', 'Tiang Miring', 'lokasi di jln terboyo IV', 'Belum', '110.467727', '-6.948749', 'photo_605742829196867759118.jpg', '', ''),
(30, 'lutfun & rasyid', '2023-06-12 15:00:33', 'JI terboyo industri I', 'ODP Terbuka', 'lokasi di jln terboyo Industri I.  PT TERBOYO MEGAH', 'Belum', '110.469240', '-6.949839', 'photo_605742829196867759119.jpg', '', ''),
(31, 'lutfun & rasyid', '2023-06-12 15:01:31', 'JI terboyo', 'Tiang Miring', 'lokasi di jln terboyo Pasific sevice centre', 'Belum', '110.465382', '-6.947068', 'photo_605742829196867759120.jpg', '', ''),
(32, 'arif & naufal', '2023-06-12 15:02:22', 'jl empu sendok raya', 'ODP Terbuka', 'lokasi di depan gerbang smp 26 semarang', 'Belum', '110.417206', '-7.084539', 'photo_605742829196867759121.jpg', '', ''),
(33, 'Rasyid & Lutfun', '2023-06-12 15:03:21', 'JL. Padiraya', 'Tiang Miring', '-', 'Belum', '110.465816', '-6.958382', 'photo_605742829196867759122.jpg', '', ''),
(34, 'Zidan & Yoga', '2023-06-12 15:04:26', 'Jl Letjan S Parman', 'ODP Terbuka', 'odp terbuka letak depan richese factory', 'Belum', '110.411268', '-7.004997', 'photo_605742829196867759123.jpg', '', ''),
(35, 'Zidan & Yoga', '2023-06-12 15:05:11', 'JL. Kapas VIII', 'ODP Terbuka', ' odp terbuka letak sebrang kedai kopi cafe gunung sawo', 'Belum', '110.406116', '-6.997056', 'photo_605742829196867759124.jpg', '', ''),
(36, 'Rasyid & Lutfun', '2023-06-12 15:05:51', 'JL. Kapas VIII', 'ODP Terbuka', '-', 'Belum', '110.468202', '-6.968321', 'photo_605742829196867759125.jpg', '', ''),
(37, 'Rasyid & Lutfun', '2023-06-12 15:06:42', 'JL. Anom Raya', 'Kabel Teruntai', 'ODP tertutup tetapi kabel keluar', 'Belum', '110.469268', '-6.968482', 'photo_605742829196867759126.jpg', '', ''),
(38, 'arif & naufal', '2023-06-12 15:07:40', 'jl grafika raya', 'ODP Terbuka', 'lokasi sebelah pertashop', 'Belum', '110.421105', '-7.078793', 'photo_605742829196867759127.jpg', '', ''),
(39, 'Zidan & Yoga', '2023-06-12 15:08:21', 'mijen ', 'ODP Terbuka', 'ODP terbuka ', 'Belum', '110.316669', '-7.052848', 'photo_605742829196867759128.jpg', '', ''),
(40, 'arif & naufal', '2023-06-12 15:09:24', 'jl. RM. Hadisoebono', 'ODP Terbuka', 'lokasi depan pasar mijen', 'Belum', '110.317061', '-7.051559', 'photo_605742829196867759129.jpg', '', ''),
(41, 'Zidan & Yoga', '2023-06-12 15:10:09', 'Kawasan Industri Candi', 'ODP Terbuka', '-', 'Belum', '110.360658', '-6.993975', 'photo_605742829196867759130.jpg', '', ''),
(42, 'Zidan & Yoga', '2023-06-12 15:10:50', 'Kawasan Industri Candi', 'ODP Terbuka', 'odp terbuka dan odp tidak ada', 'Belum', '110.360374', '-7.005637', 'photo_605742829196867759131.jpg', '', ''),
(43, 'Zidan & Yoga', '2023-06-12 15:11:38', 'Kawasan Industri Candi', 'ODP Terbuka', 'odp terbuka dan berantakan', 'Belum', '110.360662', '-6.992797', 'photo_605742829196867759132.jpg', '', ''),
(44, 'Naufal & rasyid', '2023-06-12 15:12:40', 'jl. Tentara Pelajar', 'ODP Terbuka', 'ODP terbuka ', 'Belum', '110.438157', '-7.009599', 'photo_605742829196867759133.jpg', '', ''),
(45, 'Arif', '2023-06-12 15:13:21', 'jl. syuhada raya', 'ODP Terbuka', 'odp terbuka dan kabel fo keluar', 'Belum', '110.465742', '-6.994727', 'photo_605742829196867759134.jpg', '', ''),
(46, 'arif & lutfun', '2023-06-12 15:13:56', 'jl. dr wahidin', 'ODP Terbuka', 'depan kios mixue', 'Belum', '110.425310', '-7.019240', 'photo_605742829196867759135.jpg', '', ''),
(47, 'arif & lutfun', '2023-06-12 15:14:41', 'jl. ngesrep timur V', 'ODP Terbuka', 'depan koprasi centra dana', 'Belum', '110.421547', '-7.049591', 'photo_605742829196867759136.jpg', '', ''),
(48, 'arif & lutfun', '2023-06-12 15:15:29', 'jl. ngesrep timur V', 'Tiang Miring', 'depan tk pgri 33 sumur boto', 'Belum', '110.426078', '-7.051075', 'photo_605742829196867759137.jpg', '', ''),
(49, 'arif & lutfun', '2023-06-12 15:16:17', 'jl. ngesrep timur V', 'ODP Terbuka', 'depan tk pgri 33 sumur boto', 'Belum', '110.426204', '-7.051585', 'photo_605742829196867759138.jpg', '', ''),
(50, 'arif & lutfun', '2023-06-12 15:16:52', 'jl. sumur boto utara', 'ODP Terbuka', 'depan rusun pupr', 'Belum', '110.427115', '-7.051903', 'photo_605742829196867759139.jpg', '', ''),
(51, 'Rasyid & Naufal', '2023-06-12 15:17:31', 'Jl. Menoreh raya sampangan', 'ODP Terbuka', '-', 'Belum', '110.390585', '-7.012501', 'photo_605742829196867759140.jpg', '', ''),
(52, 'Rasyid & Naufal', '2023-06-12 15:18:19', 'Jl.Sukorejo', 'ODP Terbuka', ' Odp terbuka kabel FO terlepas', 'Belum', '110.388934', '-7.020061', 'photo_605742829196867759141.jpg', '', ''),
(53, 'Rasyid & Naufal', '2023-06-12 15:19:01', 'Jl. Rajabasa karangrejo', 'ODP Terbuka', ' Odp terbuka kabel FO terlepas', 'Belum', '110.412854', '-7.024038', 'photo_605742829196867759142.jpg', '', ''),
(54, 'Zidan & Yoga', '2023-06-12 15:19:49', 'Jl Gatot Subroto', 'ODP Terbuka', 'odp terbuka ', 'Belum', '110.368238', '-7.002576', 'photo_605742829196867759143.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_alpro`
--
ALTER TABLE `data_alpro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_alpro`
--
ALTER TABLE `data_alpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
