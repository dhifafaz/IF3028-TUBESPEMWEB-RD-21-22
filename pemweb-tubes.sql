-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 11.26
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb-tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonim` tinyint(4) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `laporan_type_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporans`
--

INSERT INTO `laporans` (`id`, `title`, `description`, `lampiran`, `anonim`, `tgl_kejadian`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `category_id`, `laporan_type_id`, `status_id`) VALUES
(1, 'Papan tulis rusak', 'Pada hari minggu saya melakukan kegiatan belajar bersama teman teman di kampus dan saat kami memasuki ruangan ternyata papan tulis sudah terbelah menjadi dua entah siap yang melakukan saya tidak peduli yang saya ingin laporkan ialah papan tulis yang terbelah menjadi yang mungkin saja di tinju oleh salam dari binjai atau teman teman dari padepokan merpati putih atau para suhu tekondo yang sedang latihan menggunakan papan tersebut. Intinya mah papan  nya rusak makasih :)', 'Umur kamu berapa nich (1).jpg', 0, '2021-12-10', '2021-12-10 02:53:45', '2021-12-10 02:53:45', NULL, 1, 1303, 1401, 1201),
(2, 'Lab Komputer Berdebu', 'Selama pandemi melanda kami melakukan kegiatan praktikum secara online. Dengan menggunakan google meet kami melakukan kegiatan belajar yang sangat melelahkan. Namun akhirnya hari-hari yang ditunggu datang yaitu diadakannya praktikum offline di Lab komputer itera. Tetapi ada hal yang mengagetkan yaitu ruangan sangat berdebu ada banyak debu dan sarang laba-laba bahkan sarangheyo juga ada canda si :). Tapi intinya jadi kumuh dan penuh dengan debu sehingga tidak nyaman melakukan kegiatan belajar.', 'Background zoom 2.jpg', 0, '2021-12-10', '2021-12-10 03:10:32', '2021-12-10 03:10:32', NULL, 1, 1305, 1402, 1201),
(3, 'Parkir Sempit', 'Di awal tahun 2022 saya kembali menjalankan kegiatan kampus secara offline namun saya sangat kaget karena lahan parkir yang disediakan semakin sedikit sehingga banyak sekali mahasiswa yang tidak bisa memakirkan helicopternya sehingga mereka menggunakan jasa limusin online untuk mengantar jemput mereka karena lahan helicopter yang disediakan tidak cukup bagi mahasiswa dan dosen rich itera.', 'Background zoom 1.jpg', 0, '2022-01-10', '2021-12-10 03:13:33', '2021-12-10 03:13:33', NULL, 1, 1303, 1402, 1201),
(4, 'Kurangnya penerangan jalan di wilayah Kampus ITERA', 'Penerangan jalan merupakan hal yang cukup penting dikarekan akhir-akhir ini sangat banyak kegiatan di kampus sampai larut malam. Hal ini mengharuskan mahasiswa untuk stay di kampus sampai acara selesai. Tolong ditambahkan penerngan jangan sampai seperti mati lampu karya om nasar yang gelap banget :).', 'Background zoom 1.jpg', 0, '2021-12-25', '2021-12-10 03:16:02', '2021-12-10 03:16:02', NULL, 1, 1303, 1401, 1201),
(5, 'Signal wifi yang sedikit lambat', 'Signal internet di kampus ITERA cukup sulit jangkauannyaa. Sehingga hal itu menyebabkan mahasiswa untuk menggunakan wifi ITERA. Namun sangat disayangkan karena jangkauan wifi ITERA belom cukup luas, hal itu menyebabkan signal wifi cukup lambat ketika digunakan', '782538.jpg', 1, '2021-10-23', '2021-12-10 03:17:16', '2021-12-10 03:17:16', NULL, 1, 1302, 1402, 1201),
(6, 'Kesulitan perizinan saat ingin meminjam alat kampus', 'Perizinan di ITERA merupakan hal yang cukup sulit. Entah itu perizinan perkuliahan atupun perizinan ketika ingin meminjam peralatan dari kampus', 'png masjid.png', 1, '2021-12-18', '2021-12-10 03:18:15', '2021-12-10 03:18:15', NULL, 1, 1304, 1401, 1201),
(7, 'Keramah tamahan Tendik ITERA', 'Sikap sopan santun dan saling menghargai sangat di junjung di dunia pendidikan. Begitu jugaa di kampus ITERA. Namun ada beberapa tendik ITERA yang memiliki sifat yang kurang ramah. Hal ini menyebabkan mahasiswa agak sedikit segan untuk berinteraksi dengan merekaa', 'DSC_0631.JPG', 1, '2021-12-08', '2021-12-10 03:20:57', '2021-12-10 03:20:57', NULL, 1, 1301, 1401, 1201);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_11_24_000000_create_set_categories_table', 1),
(5, '2021_11_25_000000_create_set_libraries_table', 1),
(6, '2021_11_25_000001_create_users_table', 1),
(7, '2021_11_25_000010_create_laporans_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_categories`
--

CREATE TABLE `set_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `set_categories`
--

INSERT INTO `set_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Role User', '2020-12-18 10:00:00', NULL, NULL),
(11, 'Gender', '2020-12-18 10:00:00', NULL, NULL),
(12, 'Lapor Status', '2020-12-18 10:00:00', NULL, NULL),
(13, 'Kategori Laporan', '2020-12-18 10:00:00', NULL, NULL),
(14, 'Tipe Laporan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_libraries`
--

CREATE TABLE `set_libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `set_libraries`
--

INSERT INTO `set_libraries` (`id`, `category_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1001, 10, 'Administrator', '2020-12-18 10:00:00', NULL, NULL),
(1002, 10, 'User', '2020-12-18 10:00:00', NULL, NULL),
(1101, 11, 'Laki-Laki', '2020-12-18 10:00:00', NULL, NULL),
(1102, 11, 'Perempuan', '2020-12-18 10:00:00', NULL, NULL),
(1201, 12, 'Laporan Masuk', '2020-12-18 10:00:00', NULL, NULL),
(1202, 12, 'Laporan Terverifikasi', '2020-12-18 10:00:00', NULL, NULL),
(1203, 12, 'Laporan Selesai', '2020-12-18 10:00:00', NULL, NULL),
(1301, 13, 'Dosen', '2021-11-30 17:00:00', NULL, NULL),
(1302, 13, 'Mahasiswa', '2021-12-05 17:00:00', NULL, NULL),
(1303, 13, 'Fasilitas', '2021-12-05 17:00:00', NULL, NULL),
(1304, 13, 'Peminjaman alat', '2021-12-05 17:00:00', NULL, NULL),
(1305, 13, 'Laboratorium', '2021-11-30 17:00:00', NULL, NULL),
(1306, 13, 'Politisasi ASN', '2021-12-01 17:00:00', NULL, NULL),
(1401, 14, 'Laporan', '2020-12-18 10:00:00', NULL, NULL),
(1402, 14, 'Komentar', '2020-12-18 10:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `username`, `telp`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eliza Maharani Sutowo', 1002, 'elizamaharani0@gmail.com', 'Eliza Maharani', '088888888910', '$2y$10$468ckxm9sInvfywgKkkIKudgtTevnNGPqogrm2uGXK7pAgCtE1diu', NULL, '2021-12-10 02:48:33', '2021-12-10 02:48:33', NULL),
(2, 'Administrator', 1001, 'admin@admin.com', 'admin', '08123456789', '$2y$10$eHlSVf/aErzGCCzkWLPTDuBPD93Ytilr29EXNOyX1u5AkUV6KQXCy', NULL, '2020-12-18 10:00:00', NULL, NULL),
(3, 'User', 1002, 'user@user.com', 'user', '08123456789', '$2y$10$C8aO.4Eks4MVXzenOwZxM.XjaakvsOf9iPJkwNMG5WWwW4qws4BsS', NULL, '2020-12-18 10:00:00', NULL, NULL),
(4, 'Dhifaf Athiyah Zhabiyan', 1002, 'dhifaf.az@gmail.com', 'dhifafas', '081995506809', '$2y$10$RpxlKkjsgI6F5zBuEnChf.dFh0pMFJrRfta210AOWjWLudLAwcwpq', NULL, '2021-11-30 18:10:32', '2021-11-30 18:10:32', NULL),
(5, 'Oktaviani', 1002, 'okta@gmail.com', 'Oktiviani123', '088888882344', '$2y$10$x9KqvC4V3zczyS0qxyM5luTQhxHd5sdSswFiDL0yGYrjRdGS5Lr8i', NULL, '2021-12-10 03:25:15', '2021-12-10 03:25:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_user_id_foreign` (`user_id`),
  ADD KEY `laporans_laporan_type_id_foreign` (`laporan_type_id`),
  ADD KEY `laporans_category_id_foreign` (`category_id`),
  ADD KEY `laporans_status_id_foreign` (`status_id`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `set_categories`
--
ALTER TABLE `set_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `set_libraries`
--
ALTER TABLE `set_libraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_libraries_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `set_categories`
--
ALTER TABLE `set_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `set_libraries`
--
ALTER TABLE `set_libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1403;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporans_laporan_type_id_foreign` FOREIGN KEY (`laporan_type_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporans_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `set_libraries`
--
ALTER TABLE `set_libraries`
  ADD CONSTRAINT `set_libraries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `set_categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
