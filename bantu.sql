-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 05:39 PM
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
(1, 1, 'vani2018rplrus2@gmail.com', '085123456789', 'Vani Aviana', 'BRI', 500000, 'Belum diterima', NULL, NULL);

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
(1, 'yazid.alkhafid@gmail.com', '098765432134', 'Yazid', '2021-03-07', 'gebog', '1615175228.jpeg', NULL, NULL);

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
(1, 1, 'Posko Pengungsian', 'Bencana Alam', 'Jati', 'Banjir di Kudus, 73 Jiwa Masih Bertahan di Pengungsian', '<p><strong>Kudus</strong>&nbsp;-&nbsp;<a href=\"https://www.detik.com/tag/banjir-di-kudus\">Banjir di Kabupaten Kudus</a>, Jawa Tengah, belum sepenuhnya surut. Hingga Selasa (23/2) malam ada 73 jiwa yang masih bertahan di posko pengungsian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Total pengungsian di Kudus masih ada 28 KK 73 jiwa. Ini berada di Payaman (Kecamatan Mejobo) ada 8 jiwa 3 KK. Kelenteng dan Gereja Tanjung Karang (Kecamatan Jati) masih ada 65 jiwa 25 KK,&quot; kata Kepala BPBD Kudus, Budi Waluyo, dalam keterangan tertulis kepada wartawan, Selasa (23/2/2021).</p>\r\n\r\n<p>&quot;Pengungsi yang masih bertahan memiliki rumah dengan fondasi yang lebih rendah dari pada jalan desa,&quot; sambung dia.</p>\r\n\r\n<p>Budi menjelaskan sejumlah daerah yang sebelumnya terdampak banjir kini sudah mulai surut. Seperti Kecamatan Jati tinggal dua desa yang masih terendam banjir dengan ketinggian 10 sentimeter sampai 20 sentimeter di jalanan desa.</p>\r\n\r\n<p>&quot;Di Kecamatan Jati air masih menggenangi di rumah warga dengan fondasi rumah paling rendah di Jati Wetan dan Tanjung Karang. Banjir masih menggenangi jalan desa ketinggian 5 sentimeter sampai 10 sentimeter,&quot; ucapnya.</p>\r\n\r\n<p>Lalu di Kecamatan Undaan empat desa yang masih terdampak yakni Ngemplak, Karangrowo, Wates, dan Undaan Lor. Ketinggian air di permukiman 10 sentimeter sampai 20 sentimeter di lokasi terdalam. Sedangkan untuk intensitas air menurun.</p>\r\n\r\n<p>&quot;Di Kecamatan Mejobo ada tiga desa yang masih terdampak banjir, Kirig, Payaman, dan Gulang. Ketinggian air di permukiman 10 sentimeter sampai 30 sentimeter di lokasi terdalam. Intensitas air menurun,&quot; ucapnya.</p>', 'banjir-di-kudus-73-jiwa-masih-bertahan-di-pengungsian', '1615271973.jpeg', 1, 500000, '2021-03-09 14:39:34', '2021-03-09 06:39:34'),
(2, 1, 'Kepala Desa', 'Bencana Alam', 'Jati', 'Kondisi Terkini Banjir Hitam-Berbau Busuk di Kudus Setelah Sepekan', '<p><strong>Kudus</strong>&nbsp;-&nbsp;</p>\r\n\r\n<p>Genangan&nbsp;<a href=\"https://www.detik.com/tag/banjir-berwarna-hitam\">banjir berwarna hitam</a>&nbsp;dan berbau busuk di Desa Jati Wetan, Kecamatan Jati, Kabupaten&nbsp;<a href=\"https://www.detik.com/tag/kudus\">Kudus</a>, Jawa Tengah sudah berlangsung hampir sepekan lamanya. Seperti apa kondisi terkininya?</p>\r\n\r\n<p>Dari pantauan di lokasi, genangan banjir berwarna hitam dan berbau masih tampak di Dukuh Tanggulangin Desa Jati Wetan, pukul 12.30 WIB siang ini. Ketinggian air antara 80 cm sampai 1,5 meter.</p>\r\n\r\n<p>Tampak aktivitas warga menggunakan perahu dari ban truk. Terlihat juga warga menggunakan perahu untuk aktivitas di permukiman yang tergenang banjir.</p>\r\n\r\n<p>&quot;Hari ini air tambah naik, kalau di rumah saya sampai 80 cm. Tapi yang rendah (permukiman) sampai ada yang 1,5 meter,&quot; kata Mukhlis ditemui&nbsp;<strong>detikcom</strong>&nbsp;di lokasi, Senin (8/2/2021).</p>\r\n\r\n<p>Mukhlis mengatakan genangan banjir ini sudah terjadi sejak satu pekan lalu. Namun sekitar Selasa (2/2) lalu air mulai berwarna hitam dan berbau. Dia mengatakan karena air terus bertambah, sehingga warna hitam dan berbau mulai berkurang.</p>\r\n\r\n<p>&quot;Terendam Sabtu lalu, satu mingguan. Airnya hitam sekitar Selasa kemarin. Cuman ketambahan&nbsp;<em>banyu</em>&nbsp;(air) terus mulai luntur,&quot; ucapnya.</p>\r\n\r\n<p>Mukhlis mengaku sudah mengalami gatal-gatal. Bahkan istrinya juga mengeluh kakinya gatal-gatal karena kondisi air&nbsp;<a href=\"https://www.detik.com/tag/banjir\">banjir</a>&nbsp;yang keruh berwarna hitam.</p>\r\n\r\n<p>&quot;Bau hitam, kakiku,&nbsp;<em>sikil</em>&nbsp;(kaki) istri saya gatal,&quot; ungkapnya.</p>\r\n\r\n<p>&quot;Harapannya pertama limbah dihilangkan pokoknya.&nbsp;<em>Sampun</em>&nbsp;(sudah) terjadi (tercemar) musim hujan berikutnya tidak ada limbah. Limbah susah, aktivitas lumpuh total,&quot; sambung dia.</p>\r\n\r\n<p>Hal senada disampaikan warga Dukuh Tanggulangin lain Lia. Menurutnya air sudah tidak berwarna hitam dan berbau busuk. Menurutnya kondisi air&nbsp;<a href=\"https://www.detik.com/tag/banjir-berwarna-hitam\">berwarna hitam di Kudus</a>&nbsp;sejak Selasa kemarin.</p>\r\n\r\n<p>&quot;Tidak terlalu (berwarna hitam dan berbau busuk). Kemarin hitam keruh banget. Airnya cenderung naik, sehingga warna hitam mulai berkurang,&quot; ujar dia.</p>\r\n\r\n<p><em>Dari mana asal warna hitam dan bau busuk saat banjir di Kudus?</em></p>\r\n\r\n<p>Diwawancara terpisah, Babinkamtibmas Desa Jati Wetan, Aiptu Susanto, mengatakan untuk genangan banjir berwarna hitam sudah mulai berkurang. Bau busuk yang menyengat pun sudah tidak ada lagi.</p>\r\n\r\n<p>&quot;Sudah terbuang (sudah berkurang banjir berwarna hitam). Kemarin Dinas LH (sudah melakukan penelitian), lalu puskesmas, rumah sakit tentang pengobatan,&quot; ujar Santo ditemui di lokasi siang ini.</p>\r\n\r\n<p>Menurutnya dari dinas terkait sudah melakukan uji sampel. Namun kata dia hasilnya belum diketahui terkait sebab banjir berwarna hitam dari limbah perusahaan mana.</p>\r\n\r\n<p>&quot;Kelanjutan LH menunggu hasil lab dari LH Kudus. Hasil minimal 5 hari. Dari penelitian air sini (belum ada hasilnya). Belum terbukti mana perusahaan yang tercemari. Tentang sebab asal usul limbah tersebut,&quot; ucapnya Santo.</p>\r\n\r\n<p>&quot;Alhamdulillah pembuangan air, pemdes relawan pemerintah diadakan penyedotan ditampung di tangki menyedot air. Disedot melalui tangki tersebut,&quot; sambungnya.</p>\r\n\r\n<p>Kepala Desa Jati Wetan, Suyitno, menambahkan banjir di Desa Jati Wetan telah dipompa. Dia mengatakan saat ini terkendala pintu pembuangan air ke Sungai Wulan yang tidak layak. Suyitno berharap kepada dinas terkait untuk penambahan pintu pembuangan air ke Sungai Wulan.</p>\r\n\r\n<p>&quot;Ini pintu seharusnya dilebarkan, kondisi pintu sudah tidak layak. Banyak yang&nbsp;<em>morat-maret</em>. Saya minta BBWS penampung air. Jika perlu penambahan pintu air lagi. Penampungan air minim sekali. Karena penampungan seperti itu, kalau banjir susah surut,&quot; tambah Suyitno ditemui di lokasi siang ini.</p>', 'kondisi-terkini-banjir-hitam-berbau-busuk-di-kudus-setelah-sepekan', '1615273562.jpeg', NULL, 0, '2021-03-09 15:06:02', '2021-03-09 07:06:02'),
(3, 1, 'Kepala Desa', 'Bencana Alam', 'Dawe', 'Longsor Terjang Kudus, 2 Rumah Rusak-6 Titik Jalan Sempat Tertutup', '<p><strong>Kudus</strong>&nbsp;- Hujan deras sejak tadi malam menyebabkan&nbsp;<a href=\"https://www.detik.com/tag/longsor\">longsor</a>&nbsp;di Desa Menawan, Kecamatan Gebog, Kabupaten&nbsp;<a href=\"https://www.detik.com/tag/kudus\">Kudus</a>, Jawa Tengah. Dua rumah warga mengalami rusak dan enam titik jalan desa tertutup longsor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pantauan di lokasi rumah pertama milik Budi Santoso di RT 1 RW 6. Rumah miliknya mengalami kerusakan pada ruang tamu dan teras rumah. Longsoran tanah berasal dari tebing ketinggian 50 meter.</p>\r\n\r\n<p>&quot;Rusak teras ruang tamu. Kejadian 3.00 WIB dini hari tadi. Ini kita mulai melakukan bersih-bersih sisa longsor. Tidak ada korban jiwa,&quot; kata Budi ditemui di lokasi, Rabu (24/2/2021).</p>\r\n\r\n<p>Sedangkan satu rumah lainnya milik Hadi Sampurna. Hadi menceritakan&nbsp;<a href=\"https://www.detik.com/tag/longsor\">longsor</a>&nbsp;terjadi pada pukul 3.00 WIB dini hari tadi. Pada saat kejadian terdapat suara runtuhan dan secara cepat dinding rumah miliknya tertimpa longsor.</p>\r\n\r\n<p>&quot;Hujan deras, terus ada batu turun dor gitu. Habis itu ada suara&nbsp;<em>reg</em>, saya lompat, ke tempat anak-anak kecil. Sudah tertimbun batu yang turun sudah di atas anak saya. Anak saya kecil tertimbun runtuhan bata-bata longsor,&quot; terang Hadi ditemui di lokasi pagi ini.</p>\r\n\r\n<p>Hadi mengungkap anaknya sempat tertimbun tanah longsor. Setelah dievakuasi, anaknya tak mengalami luka.</p>\r\n\r\n<p>&quot;Hati saya gimana, mati apa gimana.&nbsp;<em>Guh-guh</em>, itu sudah ada pasir sembarang di kepalanya. Saya tarik sudah&nbsp;<em>jagongi</em>&nbsp;(panggil). Katanya lemas, tidak ada yang luka sehat semuanya,&quot; ujar dia.</p>\r\n\r\n<p>&quot;Yang rusak itu ruang tidur sampa dapur itu rusak parah,&quot; sambung Hadi.</p>\r\n\r\n<p>Staf BPBD Kudus, Johan, mengatakan ada delapan titik&nbsp;<a href=\"https://www.detik.com/tag/longsor\">longsor</a>&nbsp;di Desa Menawan. Longsor terjadi pada pukul 03.00 WIB. Longsor terjadi karena curah hujan lebat di wilayah Desa Menawan.</p>\r\n\r\n<p>&quot;Delapan titik longsor, rumahnya dua. Jalan enam titik yang dua titik rumah. Kerugian Rp 15 juta per rumah. Korban jiwa tidak. Hanya luka ringan anaknya pak Hadi,&quot; ujar dia ditemui di lokasi pagi ini.</p>\r\n\r\n<p>Informasi dihimpun longsor juga terjadi di Desa Rahtawu Kecamatan Gebog. Longsor menutup jalan desa. Tidak ada korban jiwa dalam kejadian tersebut.</p>', 'longsor-terjang-kudus-2-rumah-rusak-6-titik-jalan-sempat-tertutup', '1615274109.jpeg', NULL, 0, '2021-03-09 15:15:09', '2021-03-09 07:15:09'),
(4, 1, 'Kepala Desa', 'Bencana Alam', 'Dawe', 'Longsor Terjang Kudus, 2 Orang Pekerja Tewas Tertimbun', '<p><strong>Kudus</strong>&nbsp;- Tanah longsor menerjang Desa Soco, Kecamatan Dawe, Kabupaten&nbsp;<a href=\"https://www.detik.com/tag/kudus\">Kudus</a>, Jawa Tengah pagi tadi. Dua orang tewas tertimbun material&nbsp;<a href=\"https://www.detik.com/tag/tanah-longsor\">longsor</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Yang kerja empat orang. Dua orang lari dan dua orang tertimbun meninggal dunia,&quot; kata Kades Soco Lilik Ekowati kepada&nbsp;<strong>detikcom&nbsp;</strong>di lokasi kejadian, Senin (12/10/2020).</p>\r\n\r\n<p>Pantauan&nbsp;<strong>detikcom</strong>&nbsp;di lokasi kejadian sekitar pukul 11.50 WIB, cuaca tampak cerah. Banyak warga ramai-ramai datang untuk melihat proses evakuasi.</p>\r\n\r\n<p>Selain itu, tampak ada keluarga yang menangis histeris saat dua jenazah korban dievakuasi. Polisi juga telah memasang garis polisi agar warga tak mendekat ke lokasi kejadian.</p>\r\n\r\n<p>Lilik menceritakan peristiwa tersebut terjadi pada sekitar pukul 09.30 WIB pagi tadi. Dia belum mengetahui identitas kedua pekerja yang tewas.</p>\r\n\r\n<p>Para pekerja tersebut, kata Lilik, sedang membangun talud pada tebing setinggi belasan meter itu.</p>\r\n\r\n<p>Diwawancara terpisah, Kapolsek Dawe Iptu Deni Dwi Noviandi mengaku masih menyelidiki dan fokus pada evakuasi korban.</p>\r\n\r\n<p>&quot;Baru kita cek dan evakuasi,&quot; kata Deni.&nbsp;<strong>(sip/mbr)</strong></p>', 'longsor-terjang-kudus-2-orang-pekerja-tewas-tertimbun', '1615274393.jpeg', NULL, 0, '2021-03-09 15:19:53', '2021-03-09 07:19:53');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
