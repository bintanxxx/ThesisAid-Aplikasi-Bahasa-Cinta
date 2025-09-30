-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2025 pada 06.04
-- Versi server: 10.6.21-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_aid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `love_language_id` bigint(20) UNSIGNED NOT NULL,
  `cf_final` decimal(5,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `user_id`, `love_language_id`, `cf_final`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '0.9400', '2025-09-27 06:30:49', '2025-09-27 06:30:49'),
(2, 2, 4, '0.9400', '2025-09-27 06:32:05', '2025-09-27 06:32:05'),
(3, 2, 4, '0.8000', '2025-09-27 06:32:28', '2025-09-27 06:32:28'),
(4, 2, 4, '0.8000', '2025-09-27 06:35:27', '2025-09-27 06:35:27'),
(5, 2, 4, '0.8000', '2025-09-27 06:36:35', '2025-09-27 06:36:35'),
(6, 2, 4, '0.8000', '2025-09-27 06:36:55', '2025-09-27 06:36:55'),
(7, 2, 4, '0.7000', '2025-09-27 06:37:21', '2025-09-27 06:37:21'),
(8, 2, 4, '0.9600', '2025-09-27 06:37:35', '2025-09-27 06:37:35'),
(9, 2, 2, '0.9800', '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(10, 2, 4, '0.9700', '2025-09-29 02:21:02', '2025-09-29 02:21:02'),
(11, 2, 4, '0.9760', '2025-09-29 02:21:17', '2025-09-29 02:21:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis_details`
--

CREATE TABLE `diagnosis_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diagnosis_id` bigint(20) UNSIGNED NOT NULL,
  `symptom_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnosis_details`
--

INSERT INTO `diagnosis_details` (`id`, `diagnosis_id`, `symptom_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-09-27 06:30:49', '2025-09-27 06:30:49'),
(2, 1, 2, '2025-09-27 06:30:49', '2025-09-27 06:30:49'),
(3, 2, 1, '2025-09-27 06:32:05', '2025-09-27 06:32:05'),
(4, 2, 2, '2025-09-27 06:32:05', '2025-09-27 06:32:05'),
(5, 3, 1, '2025-09-27 06:32:28', '2025-09-27 06:32:28'),
(6, 4, 1, '2025-09-27 06:35:27', '2025-09-27 06:35:27'),
(7, 5, 1, '2025-09-27 06:36:35', '2025-09-27 06:36:35'),
(8, 6, 1, '2025-09-27 06:36:55', '2025-09-27 06:36:55'),
(9, 7, 2, '2025-09-27 06:37:21', '2025-09-27 06:37:21'),
(10, 8, 1, '2025-09-27 06:37:35', '2025-09-27 06:37:35'),
(11, 8, 3, '2025-09-27 06:37:35', '2025-09-27 06:37:35'),
(12, 8, 5, '2025-09-27 06:37:35', '2025-09-27 06:37:35'),
(13, 8, 7, '2025-09-27 06:37:35', '2025-09-27 06:37:35'),
(14, 9, 1, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(15, 9, 2, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(16, 9, 3, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(17, 9, 4, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(18, 9, 5, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(19, 9, 8, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(20, 9, 9, '2025-09-27 06:37:55', '2025-09-27 06:37:55'),
(21, 10, 1, '2025-09-29 02:21:02', '2025-09-29 02:21:02'),
(22, 10, 2, '2025-09-29 02:21:02', '2025-09-29 02:21:02'),
(23, 10, 4, '2025-09-29 02:21:02', '2025-09-29 02:21:02'),
(24, 10, 5, '2025-09-29 02:21:02', '2025-09-29 02:21:02'),
(25, 11, 1, '2025-09-29 02:21:17', '2025-09-29 02:21:17'),
(26, 11, 2, '2025-09-29 02:21:17', '2025-09-29 02:21:17'),
(27, 11, 6, '2025-09-29 02:21:17', '2025-09-29 02:21:17'),
(28, 11, 7, '2025-09-29 02:21:17', '2025-09-29 02:21:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `love_languages`
--

CREATE TABLE `love_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `love_languages`
--

INSERT INTO `love_languages` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Words of Affirmation', '...', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(2, 'Acts of Service', '...', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(3, 'Receiving Gifts', '...', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(4, 'Quality Time', '...', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(5, 'Physical Touch', '...', '2025-09-23 21:09:00', '2025-09-23 21:09:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_09_24_031657_add_role_to_users_table', 1),
(6, '2025_09_24_034702_create_symptoms_table', 1),
(7, '2025_09_24_034707_create_love_languages_table', 1),
(8, '2025_09_24_034711_create_rules_table', 1),
(9, '2025_09_24_034716_create_diagnoses_table', 1),
(10, '2025_09_24_034720_create_diagnosis_details_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `symptom_id` bigint(20) UNSIGNED NOT NULL,
  `love_language_id` bigint(20) UNSIGNED NOT NULL,
  `cf_expert` decimal(3,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rules`
--

INSERT INTO `rules` (`id`, `symptom_id`, `love_language_id`, `cf_expert`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '0.80', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(2, 2, 4, '0.70', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(3, 1, 1, '0.60', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(4, 3, 2, '0.80', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(5, 4, 2, '0.90', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(6, 6, 1, '0.70', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(7, 5, 4, '0.50', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(8, 7, 4, '0.60', '2025-09-23 21:09:00', '2025-09-23 21:09:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `symptoms`
--

CREATE TABLE `symptoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `symptoms`
--

INSERT INTO `symptoms` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'G01', 'Merasa cemas, khawatir, atau tegang berlebihan.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(2, 'G02', 'Sulit mengendalikan rasa khawatir.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(3, 'G03', 'Merasa sedih, hampa, atau putus asa hampir setiap hari.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(4, 'G04', 'Kehilangan minat atau kesenangan dalam melakukan aktivitas.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(5, 'G05', 'Sulit tidur, tidur tidak nyenyak, atau justru tidur berlebihan.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(6, 'G06', 'Merasa lelah atau tidak punya energi hampir setiap hari.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(7, 'G07', 'Sulit berkonsentrasi saat kuliah atau mengerjakan tugas.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(8, 'G08', 'Nafsu makan berubah drastis (berkurang atau bertambah).', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(9, 'G09', 'Mudah tersinggung atau marah.', '2025-09-23 21:09:00', '2025-09-23 21:09:00'),
(10, 'G10', 'Merasa tidak berharga atau bersalah secara berlebihan.', '2025-09-23 21:09:00', '2025-09-23 21:09:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@thesisaid.com', NULL, '$2y$10$qJgL6/JMPC7qSN5p97GVqud4o7608GS4dWxJzLmne.ZREUH.LiKiK', 'admin', NULL, '2025-09-25 08:38:11', '2025-09-25 08:38:11'),
(2, 'user', 'user@thesisaid.com', NULL, '$2y$10$zJEf5wpLHKzUfzW8IdITVOobIEAb/0kf4fSp5yZWE8PYZCw3zpI6y', 'user', NULL, '2025-09-25 08:56:58', '2025-09-25 08:56:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnoses_user_id_foreign` (`user_id`),
  ADD KEY `diagnoses_love_language_id_foreign` (`love_language_id`);

--
-- Indeks untuk tabel `diagnosis_details`
--
ALTER TABLE `diagnosis_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosis_details_diagnosis_id_foreign` (`diagnosis_id`),
  ADD KEY `diagnosis_details_symptom_id_foreign` (`symptom_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `love_languages`
--
ALTER TABLE `love_languages`
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
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_symptom_id_foreign` (`symptom_id`),
  ADD KEY `rules_love_language_id_foreign` (`love_language_id`);

--
-- Indeks untuk tabel `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `symptoms_code_unique` (`code`);

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
-- AUTO_INCREMENT untuk tabel `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `diagnosis_details`
--
ALTER TABLE `diagnosis_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `love_languages`
--
ALTER TABLE `love_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD CONSTRAINT `diagnoses_love_language_id_foreign` FOREIGN KEY (`love_language_id`) REFERENCES `love_languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `diagnoses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `diagnosis_details`
--
ALTER TABLE `diagnosis_details`
  ADD CONSTRAINT `diagnosis_details_diagnosis_id_foreign` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnoses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `diagnosis_details_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_love_language_id_foreign` FOREIGN KEY (`love_language_id`) REFERENCES `love_languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rules_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
