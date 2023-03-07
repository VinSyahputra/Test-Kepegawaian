-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 06:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_pegawais`
--

CREATE TABLE `jabatan_pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan_pegawais`
--

INSERT INTO `jabatan_pegawais` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'HRD', '2023-03-06 22:16:33', '2023-03-06 22:16:33'),
(2, 'Manager', '2023-03-06 22:16:33', '2023-03-06 22:16:33'),
(3, 'CTO', '2023-03-06 22:16:33', '2023-03-06 22:16:33'),
(4, 'Staff', '2023-03-06 22:16:33', '2023-03-06 22:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `kontraks`
--

CREATE TABLE `kontraks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kontrak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontraks`
--

INSERT INTO `kontraks` (`id`, `jenis_kontrak`, `created_at`, `updated_at`) VALUES
(1, 'Magang', '2023-03-06 22:16:33', '2023-03-06 22:16:33'),
(2, 'Karyawan', '2023-03-06 22:16:33', '2023-03-06 22:16:33'),
(3, 'Purna', '2023-03-06 22:16:33', '2023-03-06 22:16:33');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_07_015200_create_pegawais_table', 1),
(3, '2023_03_07_015302_create_jabatan_pegawais_table', 1),
(4, '2023_03_07_015323_create_kontraks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pegawais_id` bigint(20) UNSIGNED NOT NULL,
  `kontraks_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama`, `username`, `password`, `jabatan_pegawais_id`, `kontraks_id`, `created_at`, `updated_at`) VALUES
('98a0d9ff-5944-40ee-a119-cededf85443e', 'Prof. Ariel Miller', 'Dr. Mekhi Yundt', '$2y$10$N0CYHsH5CI9rkSst14NAT.uTYc7b7B68FEg8TvHvSLOQw/ZG0Tite', 1, 2, '2023-03-06 22:16:35', '2023-03-06 22:16:35'),
('98a0da00-18e7-4620-9b51-53a8a61c09b5', 'Mrs. Penelope Aufderhar I', 'Sandrine Schuppe', '$2y$10$bV9GJAwKsnO9pRKE6L5s3.arsapMjeG21udwFrNyEyn8fyStd4RWq', 3, 3, '2023-03-06 22:16:36', '2023-03-06 22:16:36'),
('98a0da00-237b-4528-87da-9a342999a440', 'Hunter Mitchell', 'Doug Veum', '$2y$10$GETRbAGm1TXpyT78YI4p9.8u5zBhVWJFWkPO/PmyaiM5wXfMl3b1O', 2, 3, '2023-03-06 22:16:36', '2023-03-06 22:16:36'),
('98a0da00-c5be-4d34-8121-c4812c1204ef', 'Rubie Hills', 'Payton Bashirian IV', '$2y$10$lY4RCRU1sr7HdlF8/ElRMefHCKiDPMY30hwoEBECc5K0GLWRrydJ6', 3, 3, '2023-03-06 22:16:36', '2023-03-06 22:16:36'),
('98a0da01-b19f-4791-a216-283508888945', 'Eulalia Rogahn', 'Devante Friesen', '$2y$10$UtRfNo51M5mgpYyc8qORmu26OyNlAzO6Cszsl0VDDVpI6sp5ibs.C', 1, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da01-c513-457c-818d-d19b62b0033d', 'Dr. Rowland Rodriguez DDS', 'Santino Lowe I', '$2y$10$otU/..M9irWh3gYc7As6e.5MQ3OkAEk0xp5QEmxdUZCJ4yTb9VH86', 1, 1, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da01-d025-42bc-ab0d-84a630e0707b', 'Aliyah Hudson III', 'Mr. Brown Lesch', '$2y$10$2qHZ246NStaD8QyCMBn/V..otwzKoD321Ydx.4hXalD7NfqTTodQq', 4, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da01-df7f-4a9a-9cf4-4ce0b3a618d5', 'Reed Lynch', 'Darrell Monahan', '$2y$10$h7zKN.nfqHFL4fkJfULN7ugYC0IG6gYt5AgxoARkFIGEjOsMcedau', 2, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da01-eec7-4326-a0d4-5d57fd9a1bae', 'Kaylah Kuhlman', 'Araceli O\'Hara', '$2y$10$YkRIwTgnfK0UG1UL/dp4ouwU4.lppPh3i.HwD7Hie76ydApVAkLu2', 3, 3, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da01-fddd-45d8-b22c-94bc5b23b11e', 'Wilfred Rohan', 'Ms. Opal Dach', '$2y$10$wNJ1vup/yc.lJwAUPj8izexdOjaUlb7s.OsiUtbl4GDmpXbDJLWRK', 3, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-3fca-49da-a5f6-79d84de1940a', 'Einar Pollich', 'Prof. Coleman Koepp PhD', '$2y$10$dWiDrqRtxwXfYNYrLW9kmeA7w27mLKAhpAWiHG6/dCzWivJT8QEUy', 2, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-5384-478f-986b-3f22faa28fc0', 'Madison Grimes', 'Retha Bednar', '$2y$10$VzeLBnWZsHahMpMLnvOsn.B8JIT47y4m/cERNJlPNF68kieYWhUq.', 3, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-62a4-4e2a-af41-ce4859f1f50f', 'Mr. Guiseppe O\'Keefe PhD', 'Charlotte Shields', '$2y$10$UjbFquJibM5p2wQVENPERe/ifa2uUFf0A09BkpWd0eqY21tgYkoWi', 1, 1, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-721d-45f2-a646-ed55f2e3057b', 'Mr. Colby Grady DDS', 'Francesca Little', '$2y$10$RFRE/SK3lAMSVofqpthQRuB3R4zIh03dp8Jqw3yg83v94k.xBHi5S', 3, 3, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-7d01-4e6a-a223-b7e32458d69a', 'Maia Wintheiser', 'Douglas Wunsch', '$2y$10$MYcSlvwRjPwN4fs8AzH79u.IEUjp1qccCz7DF0NewqdHrlMMwuI6e', 1, 3, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-8caa-45be-8f7c-085ff570420c', 'Mr. Jo Monahan', 'Abigail Armstrong', '$2y$10$pOHtdxGiROyaz3LYLjNLpet5ss1TH0mtZu6HkXsWkqBLPorVdV.OK', 4, 2, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-9fe9-46a7-8307-b88baaba12cc', 'Jan Cartwright DDS', 'Dr. Glenna Mann IV', '$2y$10$mspxtA9.EVVR4sCc0Ya3T.Sf6eJ6J2Hbj4HGPvuMHJvhM7K3KYmgS', 4, 3, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-af35-43c5-aec9-2da8c9303b94', 'Tyrese Gibson', 'Mr. Darrick Wisoky', '$2y$10$0q07xQbUCRKtR/Gi1l1yFOq1EA55T.AqObgRjldkTp3.NptWwq8gO', 2, 1, '2023-03-06 22:16:37', '2023-03-06 22:16:37'),
('98a0da02-be4f-446e-9b61-62be5f2ac050', 'Mireya Morissette DVM', 'Tremayne Johnston', '$2y$10$VT7/J7JsTzpPIAerEthkTOMf6w41m1puSm0wXAMOcEM9oAWFpGMAq', 1, 2, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da02-cdd0-4f1d-94ac-daf1610d8281', 'Brandyn Wiza', 'Christop Volkman', '$2y$10$NUvyHeudVDAcaMpOoSaQbuMqhdLh7Er42Cw/iqt8Y8YE5bHwn7fIu', 3, 2, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da02-e145-4c9c-b488-f1dbaf10c19c', 'Monserrate Walsh', 'Annamarie Nienow DDS', '$2y$10$Ai4pgjJFPTCtLeLxRvSjiu1biVQUYgPb8pHUi4DxCHlZ/pB6U7Pza', 3, 1, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da02-ec59-47b6-a1d8-ff503f75f081', 'Mr. Benton Gibson', 'Annette Runolfsdottir', '$2y$10$Anol8apGy1AV6RYYloj0oufnaNpw/B3BVAtkHsJdKLgKlBwO1o/C2', 2, 3, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da02-fb73-43f9-bfb4-e540ce2a19a7', 'Clemmie Altenwerth', 'Flo Berge MD', '$2y$10$VufATwxMT1qYe0he/ARaJ.vS..j9qxbI4mDXQTlRHc0Po2ySiQkmi', 2, 3, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-0f35-4d23-bdd8-c1d78c9fe324', 'Alison Marquardt', 'Prof. Missouri Considine', '$2y$10$uDGUOL/vkSLpZCJFc/kcdumtBm7cD0WTYZ6syF3qwxHGsDLURKsDy', 4, 1, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-1a08-4bdb-8c13-e9a85bc68462', 'Mayra Abbott PhD', 'Jackeline Frami', '$2y$10$0Vo/3hfbfX7ge/7T4.ARSOlOB1KJykTU39c33aLEWIEaTPMDsS.l.', 3, 2, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-2977-4a30-aa66-0f5747737732', 'Rowan Hirthe', 'Prof. Lafayette Crist PhD', '$2y$10$TbffO5wf3vTduY.g3soeZeEnI/nkQMLBDlf.3BPwQDaL1A46vxBzi', 2, 3, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-38f4-485d-bf92-588ee942c259', 'Prof. Kelsie Flatley', 'Jeanie Schaden II', '$2y$10$6Dt6zP5FBX8WlmzP294XYejPEKjLK3PnVHZNYQnwQrx/2mWqwGf0y', 3, 3, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-5781-44a5-b9aa-e7637d014890', 'Luis Metz', 'Jarret Cassin', '$2y$10$N4.6peX97mLgiAJU5avyDOD879yfo9D3jaE35FrfHL7m1BkOdAS3a', 1, 1, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-66e9-4abb-ba84-94ba070f8ea0', 'Wyman Nikolaus Jr.', 'Bridget Wolff', '$2y$10$QICxX7Ovmmcbt1EJgVWtreB5ueQ60Z37vFY8ngLrbArvbmTqiUVFy', 2, 1, '2023-03-06 22:16:38', '2023-03-06 22:16:38'),
('98a0da03-7a95-405a-aba5-5d1b650f6558', 'Alva Rice', 'Ms. Maya Padberg', '$2y$10$pERWha3McnmAyq7CXlhTMu4ShsyUqtMxKvdswjwE5sHnfFanaVylG', 2, 1, '2023-03-06 22:16:38', '2023-03-06 22:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan_pegawais`
--
ALTER TABLE `jabatan_pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontraks`
--
ALTER TABLE `kontraks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan_pegawais`
--
ALTER TABLE `jabatan_pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontraks`
--
ALTER TABLE `kontraks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
