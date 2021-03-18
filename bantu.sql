-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 06:02 AM
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
  `gambar_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `post_id`, `email`, `notlp`, `namalengkap`, `metodebayar`, `nominal`, `status`, `gambar_ktp`, `created_at`, `updated_at`) VALUES
(6, 3, 'pp@gmail.com', '098765432123', 'yazid', 'BRI', 20000, 'Belum diterima', '1615967935.jpeg', '2021-03-17 14:58:55', NULL),
(7, 2, 'dika@gamil.com', '098765432123', 'dika', 'DANA', 2000, 'Belum diterima', '1616034472.jfif', '2021-03-18 09:27:52', NULL);

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
  `gambar_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `email`, `notlp`, `namalengkap`, `tanggal`, `alamat`, `gambar_ktp`, `created_at`, `updated_at`) VALUES
(2, 'arifdewangga2@gmail.com', '098765432134', 'Yazid', '2021-03-15', 'aaaa', '1615876525.jfif', '2021-03-16 13:35:25', NULL);

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
  `total_donatur` int(191) DEFAULT NULL,
  `jumlah_sekarang` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `penerima`, `kategori`, `kecamatan`, `title`, `content`, `slug`, `thumbnail`, `total_donatur`, `jumlah_sekarang`, `created_at`, `updated_at`) VALUES
(3, 1, 'Kepala Desa', 'Bencana Alam', 'Dawe', 'Longsor Terjang Kudus, 2 Rumah Rusak-6 Titik Jalan Sempat Tertutup', '<p>Kudus  Hujan deras sejak tadi malam menyebabkan <a href=\"https://www.detik.com/tag/longsor\">longsor</a> di Desa Menawan, Kecamatan Gebog, Kabupaten <a href=\"https://www.detik.com/tag/kudus\">Kudus</a>, Jawa Tengah. Dua rumah warga mengalami rusak dan enam titik jalan desa tertutup longsor</p>\r\n\r\n<p>Pantauan di lokasi rumah pertama milik Budi Santoso di RT 1 RW 6. Rumah miliknya mengalami kerusakan pada ruang tamu dan teras rumah. Longsoran tanah berasal dari tebing ketinggian 50 meter.</p>\r\n\r\n<p>\"Rusak teras ruang tamu. Kejadian 3.00 WIB dini hari tadi. Ini kita mulai melakukan bersih-bersih sisa longsor. Tidak ada korban jiwa,\" kata Budi ditemui di lokasi, Rabu (24/2/2021).</p>\r\n\r\n<p>Sedangkan satu rumah lainnya milik Hadi Sampurna. Hadi menceritakan <a href=\"https://www.detik.com/tag/longsor\">longsor</a> terjadi pada pukul 3.00 WIB dini hari tadi. Pada saat kejadian terdapat suara runtuhan dan secara cepat dinding rumah miliknya tertimpa longsor.</p>\r\n\r\n<p>\"Hujan deras, terus ada batu turun dor gitu. Habis itu ada suara <em>reg</em>, saya lompat, ke tempat anak-anak kecil. Sudah tertimbun batu yang turun sudah di atas anak saya. Anak saya kecil tertimbun runtuhan bata-bata longsor,\" terang Hadi ditemui di lokasi pagi ini.</p>\r\n\r\n<p>Hadi mengungkap anaknya sempat tertimbun tanah longsor. Setelah dievakuasi, anaknya tak mengalami luka.</p>\r\n\r\n<p>\"Hati saya gimana, mati apa gimana. <em>Guh-guh</em>, itu sudah ada pasir sembarang di kepalanya. Saya tarik sudah <em>jagongi</em> (panggil). Katanya lemas, tidak ada yang luka sehat semuanya,\" ujar dia.</p>\r\n\r\n<p>\"Yang rusak itu ruang tidur sampa dapur itu rusak parah,\" sambung Hadi.</p>\r\n\r\n<p>Staf BPBD Kudus, Johan, mengatakan ada delapan titik <a href=\"https://www.detik.com/tag/longsor\">longsor</a> di Desa Menawan. Longsor terjadi pada pukul 03.00 WIB. Longsor terjadi karena curah hujan lebat di wilayah Desa Menawan.</p>\r\n\r\n<p>\"Delapan titik longsor, rumahnya dua. Jalan enam titik yang dua titik rumah. Kerugian Rp 15 juta per rumah. Korban jiwa tidak. Hanya luka ringan anaknya pak Hadi,\" ujar dia ditemui di lokasi pagi ini.</p>\r\n\r\n<p>Informasi dihimpun longsor juga terjadi di Desa Rahtawu Kecamatan Gebog. Longsor menutup jalan desa. Tidak ada korban jiwa dalam kejadian tersebut.</p>', 'longsor-terjang-kudus-2-rumah-rusak-6-titik-jalan-sempat-tertutup', '1615869134.jpeg', 14, 234701890, '2021-03-09 15:15:09', '2021-03-09 07:15:09'),
(8, 1, 'Pusat Pasar Kliwon', 'Lingkungan', 'Dawe', 'Kebakaran di Pasar Kliwon Kudus, Pedagang Rugi Setengah Miliar', '<p><strong>Kudus</strong> - <a href=\"https://www.detik.com/tag/pasar-kliwon-kudus\">Kebakaran di Pasar Kliwon Kudus</a> kemarin diduga terjadi karena korsleting listrik. Akibat dari kejadian tersebut diperkirakan kerugian pedagang mencapai Rp 500 juta.</p>\r\n\r\n<p></p>\r\n\r\n<p>Dari pantauan di lokasi, hari ini, pasca kejadian kebakaran kios yang berada di lantai satu itu terlihat tertutup. Tampak di lokasi kejadian dikelilingi garis polisi.</p>\r\n\r\n<p>Terlihat aktivitas para pedagang pasca kebakaran berjualan seperti biasa tapi lebih sepi dari biasanya. Koordinator Pasar Kliwon Sugito mengatakan ada satu kios di Pasar Kliwon yang terbakar. Diperkirakan kerugian akibat kejadian tersebut mencapai Rp 500 juta.</p>\r\n\r\n<p>\"Kerugian tadi pagi saya telepon pemiliknya antara Rp 300 juta sampai Rp 500 juta. Isinya pakaian anak-anak atau dewasa ada semua,\" kata Sugito ditemui di lokasi, Rabu (17/2/2021).</p>\r\n\r\n<p>Sugito menuturkan satu kios yang terbakar milik Siti Aminah yang berada di blok 1A lantai 1 <a href=\"https://www.detik.com/tag/pasar-kliwon-kudus\">Pasar Kliwon Kudus</a>. Menurutnya kios itu bukan gudang, melainkan tempat berjualan pakaian.</p>\r\n\r\n<p>\"Itu kios Blok A lantai 1 milik Hj Siti Aminah. Jual beli pakaian, karena barangnya terlalu banyak dagangan. Setiap hari dibuka hanya satu meter. Soalnya yang jaga hanya orang satu,\" jelas dia.</p>\r\n\r\n<p>\"Dari saksi kejadian itu terjadi kurang lebih jam 16.00 WIB, itu kejadiannya kios sudah dikunci tapi tahu-tahunya ada asap dari bawah keluar. Terus geger pedagang, ternyata tidak kelihatan api, tapi asap sangat tebal. Jadi ini memang sudah tutup,\" sambung Sugito.</p>\r\n\r\n<p>Sugito menuturkan kejadian tersebut sempat membuat panik para pedagang. Banyak pedagang yang mengeluarkan barang dagangan, karena takut kobaran api menjalar ke kios lain.</p>', 'kebakaran-di-pasar-kliwon-kudus-pedagang-rugi-setengah-miliar', '1615878788.jpeg', 1, 90000, '2021-03-16 14:13:08', '2021-03-16 07:13:08'),
(9, 1, 'Kepala wilayah setempat', 'Bencana Alam', 'Jati', 'Banjir di Kudus, 73 Jiwa Masih Bertahan di Pengungsian', '<p><strong>Kudus</strong> - <a href=\"https://www.detik.com/tag/banjir-di-kudus\">Banjir di Kabupaten Kudus</a>, Jawa Tengah, belum sepenuhnya surut. Hingga Selasa (23/2) malam ada 73 jiwa yang masih bertahan di posko pengungsian.</p>\r\n\r\n<p>\"Total pengungsian di Kudus masih ada 28 KK 73 jiwa. Ini berada di Payaman (Kecamatan Mejobo) ada 8 jiwa 3 KK. Kelenteng dan Gereja Tanjung Karang (Kecamatan Jati) masih ada 65 jiwa 25 KK,\" kata Kepala BPBD Kudus, Budi Waluyo, dalam keterangan tertulis kepada wartawan, Selasa (23/2/2021).</p>\r\n\r\n<p>\"Pengungsi yang masih bertahan memiliki rumah dengan fondasi yang lebih rendah dari pada jalan desa,\" sambung dia.</p>\r\n\r\n<p>Budi menjelaskan sejumlah daerah yang sebelumnya terdampak banjir kini sudah mulai surut. Seperti Kecamatan Jati tinggal dua desa yang masih terendam banjir dengan ketinggian 10 sentimeter sampai 20 sentimeter di jalanan desa.</p>\r\n\r\n<p>\"Di Kecamatan Jati air masih menggenangi di rumah warga dengan fondasi rumah paling rendah di Jati Wetan dan Tanjung Karang. Banjir masih menggenangi jalan desa ketinggian 5 sentimeter sampai 10 sentimeter,\" ucapnya.</p>\r\n\r\n<p>Lalu di Kecamatan Undaan empat desa yang masih terdampak yakni Ngemplak, Karangrowo, Wates, dan Undaan Lor. Ketinggian air di permukiman 10 sentimeter sampai 20 sentimeter di lokasi terdalam. Sedangkan untuk intensitas air menurun.</p>\r\n\r\n<p>\"Di Kecamatan Mejobo ada tiga desa yang masih terdampak banjir, Kirig, Payaman, dan Gulang. Ketinggian air di permukiman 10 sentimeter sampai 30 sentimeter di lokasi terdalam. Intensitas air menurun,\" ucapnya.</p>', 'banjir-di-kudus-73-jiwa-masih-bertahan-di-pengungsian', '1616043045.jpeg', NULL, 0, '2021-03-18 11:50:46', '2021-03-18 04:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$wbDpyIAxYN00diCZIG2nse5ZTNe.Hkv6nDiaJ7Bw2zpMMlfc//wRi', NULL, '2021-03-03 14:06:33', '2021-03-03 14:06:33');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
