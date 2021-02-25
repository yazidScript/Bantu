-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 07:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantu`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodebayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `post_id`, `email`, `notlp`, `namalengkap`, `metodebayar`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'arif@gmail.com', '089765432123', 'Arif Dewangga', 'BRI', 20000, 'Di terima', NULL, NULL),
(2, 1, 'arifdewangga2@gmail.com', '098765432123', 'Arif Dewangga', 'BRI', 10000, 'Di terima', NULL, NULL),
(3, 1, 'yazid@gmail.com', '098765432121', 'Yazid', 'BRI', 20000, 'Belum diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategory`
--

CREATE TABLE `kategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategory`
--

INSERT INTO `kategory` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Bencana Alam', NULL, NULL),
(2, 'Lingkungan', NULL, NULL),
(3, 'Kesehatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Dawe', NULL, NULL),
(2, 'Gebog', NULL, NULL),
(3, 'Bae', NULL, NULL),
(4, 'Kota', NULL, NULL),
(5, 'Jekulo', NULL, NULL),
(6, 'Jati', NULL, NULL),
(7, 'Mejobo', NULL, NULL),
(8, 'Kaliwungu', NULL, NULL),
(9, 'Undaan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metodebayar`
--

CREATE TABLE `metodebayar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metodebayar`
--

INSERT INTO `metodebayar` (`id`, `nama`, `nomor`, `created_at`, `updated_at`) VALUES
(1, 'BRI', '812201010731530', NULL, NULL),
(2, 'DANA', '081215327003', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_02_04_081707_create_donasi_table', 2),
(4, '2021_02_08_054543_create_kecamatan_table', 3),
(5, '2021_02_08_055846_create_kecamatan_table', 4),
(6, '2021_02_15_074950_create_metodebayar_table', 5),
(7, '2021_02_15_075448_create_metodebayar_table', 6),
(8, '2021_02_15_081003_create_donatur_table', 7),
(9, '2021_02_15_093418_create_donatur_table', 8),
(10, '2021_02_16_042014_create_kategory_table', 9),
(11, '2021_02_16_065817_create_donatur_table', 10),
(12, '2021_02_16_112756_create_pengajuan_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `email`, `notlp`, `namalengkap`, `tanggal`, `alamat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'arif@gmail.com', '086754321234', 'Yazid', '2021-02-24', 'Dawe', '1614232438.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `jumlah_sekarang` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `penerima`, `kategori`, `kecamatan`, `title`, `content`, `slug`, `thumbnail`, `jumlah_sekarang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pak Kepala Desa', 'Bencana Alam', 'Gebog', 'Longsor Terjang Kudus, 2 Rumah Rusak-6 Titik Jalan Sempat Tertutup', '<p><strong>Kudus</strong> - Hujan deras sejak tadi malam menyebabkan <a href=\"https://www.detik.com/tag/longsor\">longsor</a> di Desa Menawan, Kecamatan Gebog, Kabupaten <a href=\"https://www.detik.com/tag/kudus\">Kudus</a>, Jawa Tengah. Dua rumah warga mengalami rusak dan enam titik jalan desa tertutup longsor.</p><p>Pantauan di lokasi rumah pertama milik Budi Santoso di RT 1 RW 6. Rumah miliknya mengalami kerusakan pada ruang tamu dan teras rumah. Longsoran tanah berasal dari tebing ketinggian 50 meter.</p><p>\"Rusak teras ruang tamu. Kejadian 3.00 WIB dini hari tadi. Ini kita mulai melakukan bersih-bersih sisa longsor. Tidak ada korban jiwa,\" kata Budi ditemui di lokasi, Rabu (24/2/2021).</p><p>Sedangkan satu rumah lainnya milik Hadi Sampurna. Hadi menceritakan <a href=\"https://www.detik.com/tag/longsor\">longsor</a> terjadi pada pukul 3.00 WIB dini hari tadi. Pada saat kejadian terdapat suara runtuhan dan secara cepat dinding rumah miliknya tertimpa longsor.</p><p>\"Hujan deras, terus ada batu turun dor gitu. Habis itu ada suara <i>reg</i>, saya lompat, ke tempat anak-anak kecil. Sudah tertimbun batu yang turun sudah di atas anak saya. Anak saya kecil tertimbun runtuhan bata-bata longsor,\" terang Hadi ditemui di lokasi pagi ini.</p><p>Hadi mengungkap anaknya sempat tertimbun tanah longsor. Setelah dievakuasi, anaknya tak mengalami luka.</p><p>\"Hati saya gimana, mati apa gimana. <i>Guh-guh</i>, itu sudah ada pasir sembarang di kepalanya. Saya tarik sudah <i>jagongi</i> (panggil). Katanya lemas, tidak ada yang luka sehat semuanya,\" ujar dia.</p><p>\"Yang rusak itu ruang tidur sampa dapur itu rusak parah,\" sambung Hadi.</p><p>Staf BPBD Kudus, Johan, mengatakan ada delapan titik <a href=\"https://www.detik.com/tag/longsor\">longsor</a> di Desa Menawan. Longsor terjadi pada pukul 03.00 WIB. Longsor terjadi karena curah hujan lebat di wilayah Desa Menawan.</p><p>\"Delapan titik longsor, rumahnya dua. Jalan enam titik yang dua titik rumah. Kerugian Rp 15 juta per rumah. Korban jiwa tidak. Hanya luka ringan anaknya pak Hadi,\" ujar dia ditemui di lokasi pagi ini.</p><p>Informasi dihimpun longsor juga terjadi di Desa Rahtawu Kecamatan Gebog. Longsor menutup jalan desa. Tidak ada korban jiwa dalam kejadian tersebut.</p>', 'longsor-terjang-kudus-2-rumah-rusak-6-titik-jalan-sempat-tertutup', '1614231476.jpeg', 90000, '2021-02-25 13:37:56', '2021-02-25 05:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', NULL, 'admin321', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategory`
--
ALTER TABLE `kategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodebayar`
--
ALTER TABLE `metodebayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategory`
--
ALTER TABLE `kategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `metodebayar`
--
ALTER TABLE `metodebayar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
