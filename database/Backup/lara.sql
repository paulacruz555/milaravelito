
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codEst` varchar(255) NOT NULL,
  `nomEst` varchar(255) NOT NULL,
  `apeEst` varchar(255) NOT NULL,
  `fnaEst` date NOT NULL,
  `turMat` int(11) NOT NULL,
  `semMat` int(11) NOT NULL,
  `estMat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `estudiantes` (`id`, `codEst`, `nomEst`, `apeEst`, `fnaEst`, `turnMat`, `semMat`, `estMat`, `created_at`, `updated_at`) VALUES
(2, 'CI20231123', 'Timona Rosa', 'Velasquez Zuñiga', '2014-12-19', 1, 6, 1, NULL, NULL),
(6, 'CI20231126', 'Pablo', 'Hualla Titto', '2013-01-01', 2, 4, 1, '2023-12-07 04:03:47', '2023-12-07 04:03:47');


CREATE TABLE `estudiante_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `praMod1` int(11) NOT NULL,
  `praMod2` int(11) NOT NULL,
  `praMod3` int(11) NOT NULL,
  `udMod1` int(11) NOT NULL,
  `udMod2` int(11) NOT NULL,
  `udMod3` int(11) NOT NULL,
  `certIdi` int(11) NOT NULL,
  `modTit` int(11) NOT NULL,
  `fecDet` date NOT NULL,
  `estDet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_11_22_235500_create_estudiantes_table', 1),
(12, '2023_12_05_225344_create_estudiante_detalles_table', 2),
(13, '2023_12_12_212203_create_seguimientos_table', 3);



CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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


CREATE TABLE `seguimientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idEst` int(11) NOT NULL,
  `traAct` int(11) NOT NULL,
  `ofiAct` int(11) NOT NULL,
  `satEst` int(11) NOT NULL,
  `fecSeg` date NOT NULL,
  `estSeg` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `seguimientos` (`id`, `idEst`, `traAct`, `ofiAct`, `satEst`, `fecSeg`, `estSeg`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 2, 1, '2023-11-22', 1, '2023-12-13 04:20:23', '2023-12-13 04:20:23'),
(2, 2, 0, 1, 2, '2003-03-12', 1, '2023-12-13 04:36:19', '2023-12-13 04:36:19'),
(3, 3, 0, 4, 3, '2014-05-12', 0, '2023-12-13 05:24:24', '2023-12-13 05:24:24'),
(4, 4, 0, 7, 2, '2003-12-15', 1, '2023-12-13 05:25:45', '2023-12-13 05:25:45');



CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `estudiante_detalles`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);


ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);


ALTER TABLE `seguimientos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `estudiante_detalles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `seguimientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

