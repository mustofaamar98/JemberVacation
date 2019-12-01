-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 00.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datahotel`
--

CREATE TABLE `datahotel` (
  `id_hotel` int(50) NOT NULL,
  `namahotel` varchar(50) NOT NULL,
  `alamathotel` varchar(225) NOT NULL,
  `deskripsihotel` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `daerah` int(10) UNSIGNED NOT NULL,
  `fotohotel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datahotel`
--

INSERT INTO `datahotel` (`id_hotel`, `namahotel`, `alamathotel`, `deskripsihotel`, `created_at`, `updated_at`, `daerah`, `fotohotel`, `id_wisata`, `harga`) VALUES
(34, 'Hotel Jaya Abadi', 'jln gunung argopuro gang bunga mawar no 5 blok c', 'Kamar Mandi dalam, free wifi', '2019-11-12 19:43:18', '2019-11-12 19:46:14', 22, '1573612998-Y905220004.jpg', 69, 150000),
(35, 'Hotel Los Angeles', 'jln gunung argopuro gang bunga mawar no 15 blok e', 'Home Stay', '2019-11-12 19:54:39', '2019-11-12 19:54:39', 22, '1573613679-167564169.jpg', 69, 20000),
(36, 'Hotel Gunawan', 'jln gunung argopuro gang bunga anggrek no 1 blok a', 'Free AC', '2019-11-12 19:56:42', '2019-11-12 19:56:42', 22, '1573613802-20160603-170530-largejpg.jpg', 69, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakuliner`
--

CREATE TABLE `datakuliner` (
  `id_kuliner` int(11) NOT NULL,
  `namakuliner` varchar(255) NOT NULL,
  `deskripsikuliner` varchar(255) NOT NULL,
  `hargakuliner` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fotokuliner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daerah` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakuliner`
--

INSERT INTO `datakuliner` (`id_kuliner`, `namakuliner`, `deskripsikuliner`, `hargakuliner`, `created_at`, `updated_at`, `fotokuliner`, `daerah`) VALUES
(21, 'Pecel Cihuy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 25000, '2019-10-29 17:10:48', '2019-10-29 20:59:36', '1572396249-nasi-pecel-50417934.jpg', 1),
(22, 'Ayam', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 35000, '2019-10-29 18:08:34', '2019-10-29 18:08:34', '1572397714-biriyani-chicken-cooked-1624487.jpg', 1),
(23, 'Campur', 'Nikmat Sekali', 55000, '2019-10-29 18:18:58', '2019-11-02 07:54:17', '1572706457-tebu1.jpg', 1),
(25, 'Rawon', 'aaa', 12, '2019-11-12 18:02:54', '2019-11-12 18:02:54', '1573606974-1573287234-WhatsApp Image 2019-10-31 at 11.05.51.jpeg', 1),
(26, 'Rawon', 'Daging Orang', 50000, '2019-11-12 19:51:28', '2019-11-12 19:51:28', '1573613488-nasi-rawon-50400044.jpg', 22),
(27, 'Pecel', 'Pecel spektakuler', 15000, '2019-11-12 19:58:16', '2019-11-12 19:58:16', '1573613896-download.jpg', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datawisata`
--

CREATE TABLE `datawisata` (
  `id_wisata` int(50) NOT NULL,
  `namawisata` varchar(30) NOT NULL,
  `deskripsijudul1` text NOT NULL,
  `fotowisata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `urlmap` text NOT NULL,
  `judultagline` varchar(225) NOT NULL,
  `deskripsitagline` text NOT NULL,
  `judul1` varchar(225) DEFAULT NULL,
  `judul2` varchar(225) NOT NULL,
  `deskripsijudul2` text NOT NULL,
  `urlvidio` varchar(225) DEFAULT NULL,
  `daerah` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datawisata`
--

INSERT INTO `datawisata` (`id_wisata`, `namawisata`, `deskripsijudul1`, `fotowisata`, `created_at`, `updated_at`, `urlmap`, `judultagline`, `deskripsitagline`, `judul1`, `judul2`, `deskripsijudul2`, `urlvidio`, `daerah`) VALUES
(68, 'Papuma', 'Keindahan Alam yang sangat mempesona', '1573610952-monggo-indonesia-one.jpg', '2019-11-12 19:09:12', '2019-11-12 19:13:26', 'https://www.google.com/maps/d/embed?mid=1LfAZwsjP1Zwv1Ue3dlu7gPFZWxc', 'Pantai Pasir Putih', 'sebuah pantai yang menjadi tempat wisata di Kabupaten Jember, provinsi Jawa Timur, Indonesia. Nama Papuma[1] sendiri sebenarnya adalah sebuah singkatan dari “Pasir Putih Malikan.', 'Apa yang bisa di dapatkan ?', 'Bagaimana Akses Menuju Pantai', 'Melewati Gunung', 'https://www.youtube.com/watch?v=6abxuIhlS_o', 5),
(69, 'Gunung Argopuro', 'View yang sangat mempesona', '1573612889-Danau-Probolinggo.jpg', '2019-11-12 19:41:29', '2019-11-12 19:41:29', 'https://www.google.com/maps/d/embed?mid=1SsP0mhDUJnuGt2W9E3e1BFe5J88', 'Gunung', 'Wisata Gunung Argopuro di probolinggo adalah salah satu tempat wisata yang berada di kabupaten probolinggo . provinsi jawa timur . negara indonesia . Wisata Gunung Argopuro di Jember adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.', 'Apa yang bisa di dapatkan ?', 'Bagaimana Akses Menuju Gunung', 'Harus jalan kaki sekitar 5 km', 'https://www.youtube.com/watch?v=y77VuvPqQCI', 22),
(70, 'PANTAI MALIKAN', 'sdfsdfsdf', '1573796079-dribbble.jpg', '2019-11-14 22:34:39', '2019-11-14 22:34:39', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.183483593207!2d113.70957261454375!3d-8.481532893901784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd421095f2df281%3A0x75cb6b0519dd982!2sPantai%20Bandealit!5e0!3m2!1sid!2sid!4v1570574550836!5m2!1sid!2sid', 'Simbat', 'sdfsdfsdf', 'sdfsdfsd', 'sdfsdfsdf', 'sdfsddfsdfs', 'https://www.youtube.com/watch?v=6abxuIhlS_o', 7),
(71, 'lkbhjvcgfxdsA', 'lkbhjvcgfxdsA', '1573796203-cv.jpg', '2019-11-14 22:36:43', '2019-11-14 22:36:43', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15890.11249790123!2d115.18513056356977!3d5.336026637763494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x322319fbfdd04f93%3A0x7759ee32819ddb25!2sLayang%20Layang%20Beach!5e0!3m2!1sid!2sid!4v1571301175774!5m2!1sid!2sid', 'lkbhjvcgfxdsA', 'lkbhjvcgfxdsA', 'lkbhjvcgfxdsA', 'lkbhjvcgfxdsA', 'lkbhjvcgfxdsA', 'https://www.youtube.com/watch?v=6abxuIhlS_o', 8),
(72, 'adasds', 'adasds', '1573797662-Artboard – 25.png', '2019-11-14 23:01:02', '2019-11-14 23:01:02', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.6457083077707!2d113.57911031478235!3d-8.436408993933238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd427f96abc1d45%3A0x349dbb12eb1ac295!2sPantai%20Payangan!5e0!3m2!1sid!2sid!4v1570584063994!5m2!1sid!2sid', 'adasds', 'adasds', 'adasds', 'adasds', 'adasds', 'https://www.youtube.com/watch?v=6abxuIhlS_o', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `district`
--

CREATE TABLE `district` (
  `id_district` int(10) NOT NULL,
  `nama_district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `district`
--

INSERT INTO `district` (`id_district`, `nama_district`) VALUES
(1, 'Mayang'),
(2, 'Wuluhan'),
(3, 'Puger'),
(4, 'Kalisat'),
(5, 'Jember'),
(6, 'Rambipuji'),
(7, 'Tanggul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id_daerah` int(20) UNSIGNED NOT NULL,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_district` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `districts`
--

INSERT INTO `districts` (`id_daerah`, `daerah`, `id_district`) VALUES
(1, ' Kencong', 3),
(2, ' Gumuk Mas', 3),
(3, ' Puger', 3),
(4, ' Wuluhan', 2),
(5, ' Ambulu', 2),
(6, ' Tempurejo', 1),
(7, ' Silo', 1),
(8, ' Mumbulsari', 1),
(9, ' Jenggawah', 6),
(10, ' Rambipuji', 6),
(11, ' Balung', 2),
(12, ' Umbulsari', 3),
(13, ' Sumber Baru', 7),
(14, ' Tanggul', 7),
(15, ' Bangsalsari', 7),
(16, ' Panti', 6),
(17, ' Arjasa', 5),
(18, ' Kalisat', 4),
(19, ' Ledokombo', 4),
(20, ' Sumberjambe', 4),
(21, ' Sukowono', 4),
(22, 'Batang', 1),
(23, 'Wirolegi', 5),
(24, 'Jember', 5),
(25, 'Mangli', 6),
(26, 'tes', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoprofil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `fotoprofil`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Amar', 'admin@gmail.com', NULL, '$2y$10$5VsAycWRwbMC0LvzRGohEObPfz/8Gn6ktxJupsHUWkSRKC85jEMGq', '1574570847-2869014.png', NULL, '2019-10-30 04:39:41', '2019-11-23 21:47:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datahotel`
--
ALTER TABLE `datahotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `daerah` (`daerah`);

--
-- Indeks untuk tabel `datakuliner`
--
ALTER TABLE `datakuliner`
  ADD PRIMARY KEY (`id_kuliner`),
  ADD KEY `daerah` (`daerah`);

--
-- Indeks untuk tabel `datawisata`
--
ALTER TABLE `datawisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `daerah` (`daerah`);

--
-- Indeks untuk tabel `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_district`);

--
-- Indeks untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id_daerah`),
  ADD KEY `district` (`id_district`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datahotel`
--
ALTER TABLE `datahotel`
  MODIFY `id_hotel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `datakuliner`
--
ALTER TABLE `datakuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `datawisata`
--
ALTER TABLE `datawisata`
  MODIFY `id_wisata` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `district`
--
ALTER TABLE `district`
  MODIFY `id_district` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `districts`
--
ALTER TABLE `districts`
  MODIFY `id_daerah` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datahotel`
--
ALTER TABLE `datahotel`
  ADD CONSTRAINT `datahotel_ibfk_1` FOREIGN KEY (`daerah`) REFERENCES `districts` (`id_daerah`),
  ADD CONSTRAINT `id_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `datawisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datakuliner`
--
ALTER TABLE `datakuliner`
  ADD CONSTRAINT `datakuliner_ibfk_1` FOREIGN KEY (`daerah`) REFERENCES `districts` (`id_daerah`);

--
-- Ketidakleluasaan untuk tabel `datawisata`
--
ALTER TABLE `datawisata`
  ADD CONSTRAINT `daerah` FOREIGN KEY (`daerah`) REFERENCES `districts` (`id_daerah`);

--
-- Ketidakleluasaan untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`id_district`) REFERENCES `district` (`id_district`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
