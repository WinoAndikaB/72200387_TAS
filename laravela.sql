-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 06:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravela`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa1`
--

CREATE TABLE `mahasiswa1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` bigint(20) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_minat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa1`
--

INSERT INTO `mahasiswa1` (`id`, `nim`, `nama`, `gender`, `jurusan`, `bidang_minat`, `created_at`, `updated_at`) VALUES
(8, 72200387, 'Wino Andika Batara', 'Pria', 'Sistem Informasi', 'Mechanical', NULL, '2022-06-18 02:44:29'),
(11, 72200405, 'Laila Zalindra Hassanah', 'Wanita', 'Kedokteran', 'Medical,Musical', NULL, NULL),
(17, 72200380, 'Vanesa Suartini', 'Wanita', 'Akutansi', 'Guru', NULL, '2022-05-28 23:35:49'),
(25, 72200370, 'Farhunnisa Pratiwi', 'Wanita', 'Akutansi', 'Mekanik', NULL, '2022-05-28 23:36:09'),
(31, 72200200, 'Warta Utama', 'Wanita', 'Kedokteran', 'Guru', NULL, '2022-05-28 23:51:11'),
(32, 213, 'Embuh Aris Saragih S.T.', 'Wanita', 'Akutansi', 'Pendeta', NULL, '2022-05-28 23:52:07'),
(33, 9202021509079460, 'Ikin Setiawan', 'S.Pt', 'Hj.', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(41, 7601032805967168, 'Martaka Harjasa Prabowo', 'S.E.I', 'dr.', 'Tukang Gigi', NULL, NULL),
(45, 9205042909191106, 'Taufik Saadat Maheswara', 'S.Sos', 'Dr.', 'Promotor Acara', NULL, NULL),
(46, 1102020706154669, 'Zaenab Cornelia Hassanah', 'S.H.', 'drg.', 'Konstruksi', NULL, NULL),
(47, 1209675409205369, 'Tasdik Galih Anggriawan', 'S.Pd', 'drg.', 'Kepala Desa', NULL, NULL),
(48, 1305761404963507, 'Bakidin Uwais', 'M.Kom.', 'Drs.', 'Buruh Harian Lepas', NULL, NULL),
(49, 3502962706052991, 'Najwa Hastuti', 'S.I.Kom', 'Hj.', 'Seniman', NULL, NULL),
(50, 9122120208115167, 'Raisa Citra Suryatmi', 'S.Psi', 'Ir.', 'Seniman', NULL, NULL),
(51, 2172964702079326, 'Ajeng Riyanti S.IP', 'S.I.Kom', 'Dr.', 'Tentara Nasional Indonesia (TNI)', NULL, NULL),
(52, 7310731010211479, 'Rusman Wisnu Dabukke M.Kom.', 'M.Ak', 'drg.', 'Pilot', NULL, NULL),
(53, 5105805608012788, 'Vanya Wijayanti', 'S.IP', 'H.', 'Jaksa', NULL, NULL),
(56, 1811802912172446, 'Jarwadi Marpaung', 'S.H.', 'Hj.', 'Tukang Sol Sepatu', NULL, NULL),
(57, 1214832201993860, 'Cakrawala Halim', 'S.Farm', 'Ir.', 'Pialang', NULL, NULL),
(59, 3402970110107690, 'Ismail Kemba Sitompul', 'M.TI.', 'Dr.', 'Guru', NULL, NULL),
(60, 6310516006088272, 'Fathonah Aurora Uyainah S.E.I', 'M.TI.', 'H.', 'Transportasi', NULL, NULL),
(61, 1215741911006026, 'Yuliana Putri Puspasari M.TI.', 'S.Gz', 'Hj.', 'Karyawan Swasta', NULL, NULL),
(62, 3373113003006595, 'Praba Latupono', 'S.E.', 'Ir.', 'Karyawan Swasta', NULL, NULL),
(63, 1811151110096240, 'Gambira Kusumo', 'S.E.', 'Dr.', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(64, 3372176910045638, 'Elisa Betania Widiastuti', 'S.Ked', 'Dr.', 'Paraji', NULL, NULL),
(65, 6309390901109519, 'Restu Kuswandari', 'S.Pt', 'Dr.', 'Perdagangan', NULL, NULL),
(66, 9121266601931234, 'Nova Rahmawati', 'S.Sos', 'drg.', 'Penata Rias', NULL, NULL),
(67, 6571381906000864, 'Vicky Winarsih', 'S.IP', 'Dr.', 'Mengurus Rumah Tangga', NULL, NULL),
(68, 7501551505933561, 'Maida Carla Anggraini M.Farm', 'S.E.I', 'Dr.', 'Pramusaji', NULL, NULL),
(69, 6207981507931993, 'Vicky Widiastuti', 'S.IP', 'drg.', 'Karyawan Honorer', NULL, NULL),
(70, 1702365611217652, 'Latif Ghani Wacana', 'M.TI.', 'Dr.', 'Pastor', NULL, NULL),
(71, 1372505802168080, 'Wawan Darimin Pratama M.Pd', 'M.TI.', 'Dr.', 'Karyawan BUMD', NULL, NULL),
(72, 1702294202173715, 'Salwa Farah Hastuti', 'S.Farm', 'Drs.', 'Ustaz / Mubaligh', NULL, NULL),
(73, 1223226706165540, 'Vivi Hasanah S.I.Kom', 'S.Pt', 'H.', 'Konstruksi', NULL, NULL),
(74, 1207166402223480, 'Galak Nababan', 'S.Ked', 'H.', 'Pramusaji', NULL, NULL),
(77, 7310525206147137, 'Gantar Tarihoran', 'S.T.', 'drg.', 'Pegawai Negeri Sipil (PNS)', NULL, NULL),
(78, 1117412111978752, 'Cakrabuana Hidayat', 'S.I.Kom', 'dr.', 'Notaris', NULL, NULL),
(79, 5307916006989896, 'Dodo Manullang', 'M.Farm', 'drg.', 'Penyiar Televisi', NULL, NULL),
(81, 1276415007107084, 'Ganep Lembah Waskita S.Psi', 'S.Farm', 'drg.', 'Industri', NULL, NULL),
(82, 5314966004997837, 'Oni Uyainah', 'M.Ak', 'drg.', 'Kepala Desa', NULL, NULL),
(84, 1308472512185258, 'Cornelia Hassanah', 'S.Psi', 'dr.', 'Hakim', NULL, NULL),
(85, 1603295012132300, 'Bakiman Suwarno', 'M.Farm', 'H.', 'Penyiar Radio', NULL, NULL),
(86, 5371041303129824, 'Jabal Latupono', 'M.Kom.', 'dr.', 'Seniman', NULL, NULL),
(87, 1202375904170208, 'Gaman Imam Tamba', 'M.Pd', 'H.', 'Wartawan', NULL, NULL),
(88, 1301722405011057, 'Hana Wulandari M.Ak', 'S.IP', 'Dr.', 'Paraji', NULL, NULL),
(89, 1308886304201461, 'Maryadi Sirait', 'M.M.', 'dr.', 'Psikiater / Psikolog', NULL, NULL),
(90, 1902636102198008, 'Victoria Lestari', 'S.Ked', 'Drs.', 'Pramusaji', NULL, NULL),
(91, 6301531905008195, 'Winda Zelda Yuniar', 'S.Kom', 'drg.', 'Petani / Pekebun', NULL, NULL),
(92, 1114311612147027, 'Almira Prastuti', 'S.Farm', 'dr.', 'Dokter', NULL, NULL),
(93, 7206234407148413, 'Halima Rahimah', 'S.I.Kom', 'Hj.', 'Tentara Nasional Indonesia (TNI)', NULL, NULL),
(94, 1377375907952658, 'Yosef Suryono', 'S.E.I', 'dr.', 'Kepala Desa', NULL, NULL),
(95, 1403506204999354, 'Pia Faizah Fujiati', 'S.E.I', 'drg.', 'Nelayan / Perikanan', NULL, NULL),
(96, 9107951311937426, 'Rina Zulaika', 'S.Sos', 'Dr.', 'Pemandu Wisata', NULL, NULL),
(97, 1112504411924881, 'Bahuwarna Sinaga', 'S.T.', 'Dr.', 'Penata Rias', NULL, NULL),
(98, 9110570602224548, 'Laila Natalia Yolanda', 'M.Kom.', 'Hj.', 'Pastor', NULL, NULL),
(100, 6401632108087755, 'Daliman Wijaya', 'S.E.', 'Ir.', 'Seniman', NULL, NULL),
(107, 1403804408973097, 'Adikara Sitorus', 'S.E.', 'Dr.', 'Belum / Tidak Bekerja', NULL, NULL),
(108, 3208501306182879, 'Ellis Laksmiwati', 'M.M.', 'Dr.', 'Penata Busana', NULL, NULL),
(109, 1222930711017668, 'Shakila Dian Astuti', 'S.I.Kom', 'drg.', 'Psikiater / Psikolog', NULL, NULL),
(114, 9104885505119133, 'Daruna Pradipta', 'S.Ked', 'Drs.', 'Penyelam', NULL, NULL),
(116, 7309130712966021, 'Salman Pradipta', 'M.M.', 'Dr.', 'Wakil Presiden', NULL, NULL),
(117, 3328510212215475, 'Belinda Yunita Zulaika M.M.', 'S.E.', 'Dr.', 'Buruh Tani / Perkebunan', NULL, NULL),
(119, 3174071906971350, 'Kusuma Salahudin', 'S.E.', 'dr.', 'Konsultan', NULL, NULL),
(120, 8107831404124340, 'Anastasia Pratiwi', 'M.Pd', 'Ir.', 'Juru Masak', NULL, NULL),
(121, 1810205305981743, 'Bagas Karna Budiman M.Farm', 'M.TI.', 'drg.', 'Mekanik', NULL, NULL),
(123, 2104424908943149, 'Salimah Safitri', 'S.E.I', 'drg.', 'Penyelam', NULL, NULL),
(124, 3516741608197156, 'Alambana Uwais', 'M.M.', 'Dr.', 'Penata Rambut', NULL, NULL),
(125, 7108056408966442, 'Ellis Mardhiyah', 'S.H.', 'dr.', 'Tentara Nasional Indonesia (TNI)', NULL, NULL),
(126, 3321382104990819, 'Almira Winarsih S.E.I', 'S.Pt', 'H.', 'Tentara Nasional Indonesia (TNI)', NULL, NULL),
(127, 3509832006195422, 'Anggabaya Najam Sihombing S.T.', 'S.H.', 'Ir.', 'Desainer', NULL, NULL),
(128, 3573095409036631, 'Harsaya Ikin Saefullah S.Gz', 'S.Pd', 'Dr.', 'Pialang', NULL, NULL),
(129, 1872196508200778, 'Cornelia Usamah', 'S.H.', 'Dr.', 'Pelajar / Mahasiswa', NULL, NULL),
(130, 1277475106925362, 'Jaka Sihombing', 'S.Pt', 'drg.', 'Penambang', NULL, NULL),
(131, 5107944411021658, 'Dian Oktaviani', 'S.Gz', 'H.', 'Kondektur', NULL, NULL),
(132, 1804834405206406, 'Malika Prastuti', 'S.Kom', 'dr.', 'Industri', NULL, NULL),
(133, 5319931203958493, 'Cakrabuana Dabukke', 'S.Pd', 'Dr.', 'Penata Rambut', NULL, NULL),
(134, 7111974901166117, 'Genta Wulandari', 'S.Pt', 'drg.', 'Jaksa', NULL, NULL),
(135, 3301505806216973, 'Soleh Capa Suryono', 'S.I.Kom', 'Dr.', 'Wiraswasta', NULL, NULL),
(136, 1272786706193498, 'Puput Nuraini', 'S.IP', 'H.', 'Kondektur', NULL, NULL),
(137, 5308864206935702, 'Rahayu Hani Prastuti S.Pt', 'M.Ak', 'drg.', 'Juru Masak', NULL, NULL),
(138, 1210616207197585, 'Salwa Rahmi Mardhiyah', 'S.Psi', 'dr.', 'Penata Rambut', NULL, NULL),
(140, 3506402211997314, 'Eman Drajat Tarihoran', 'S.Farm', 'dr.', 'Wiraswasta', NULL, NULL),
(142, 3202535608979279, 'Siti Dinda Usada', 'M.TI.', 'Dr.', 'Pastor', NULL, NULL),
(144, 72200500, 'Moona Hoshinova', 'Wanita', 'Sistem Informasi', 'Musical,Computational', '2022-05-21 08:28:11', '2022-05-21 08:28:11'),
(145, 72200101, 'Takahashi Kiara', 'Wanita', 'Desain Produk', 'Medical,Musical,Aesthetic', '2022-05-21 08:32:40', '2022-05-21 08:32:40'),
(146, 72200501, 'Sakamata Chloe', 'Wanita', 'Kedokteran', 'Mechanical,Medical,Musical', '2022-05-21 08:42:06', '2022-05-21 08:42:06'),
(148, 72200606, 'Kobo Kanaeru', 'Wanita', 'Informatika', 'Mechanical,Musical,Computational,Aesthetic', '2022-05-21 20:38:08', '2022-05-21 20:38:08'),
(149, 72200895, 'asdsad2', 'Pria', 'Manajemen', 'Mechanical,Computational', '2022-05-27 04:20:41', '2022-05-27 04:20:41'),
(150, 72200965, 'Nanashi', 'Wanita', 'Desain Produk', 'Computational,Aesthetic', '2022-05-27 05:42:50', '2022-05-27 05:42:50'),
(151, 1312312, 'sadsadad', 'Pria', 'Akutansi', 'Medical,Aesthetic', '2022-05-28 23:46:35', '2022-05-28 23:46:35'),
(152, 13212321, '3123aseda', 'Wanita', 'Informatika', 'Medical,Computational', '2022-05-28 23:50:39', '2022-05-28 23:50:39'),
(154, 21321231, 'Bro', 'Pria', 'Informatika', 'Mechanical,Computational', '2022-06-18 02:45:51', '2022-06-18 02:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_20_014618_create_mahasiswa1_table', 1),
(7, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_user` int(11) NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik_user`, `nama_user`, `no_hp`, `password`, `created_at`, `updated_at`) VALUES
(4, 72200387, 'Wino Andika Batara', '081242376466', '$2y$10$AjWytHjwAummmJLjjgGX1ObRxq8R7A8uEzhLXB4OKnBUtdlhp.neW', '2022-06-04 22:56:20', '2022-06-04 22:56:20'),
(5, 72200388, 'Kobo Kanaeru', '081241243247', '$2y$10$uvuMmPklRMAaLRNupnisK.l07fWi9fqXXMyh7fQGV24AbNrHhFlMG', '2022-06-04 22:56:48', '2022-06-04 22:56:48'),
(6, 72200389, 'Moona Hoshinova', '081242356455', '$2y$10$4BXHe5nMS/zXKWYlwIJm2el.h2JHDzD0VlNniwFTlqGo0P7dMZ7tC', '2022-06-04 22:57:19', '2022-06-04 22:57:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa1`
--
ALTER TABLE `mahasiswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_no_hp_unique` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa1`
--
ALTER TABLE `mahasiswa1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
