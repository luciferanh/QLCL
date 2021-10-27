-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 02:38 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlcl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bo_phans`
--

CREATE TABLE `bo_phans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bo_phans`
--

INSERT INTO `bo_phans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tai Chinh', NULL, NULL),
(2, 'Nhan Su', NULL, NULL),
(3, 'Ke Toan', NULL, NULL),
(4, 'Cong Nghe', NULL, NULL),
(5, 'NongNghiep', '2021-10-26 00:40:33', '2021-10-26 00:40:33'),
(6, 'Machine Learning', '2021-10-26 00:40:47', '2021-10-26 00:40:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuan_nang_suats`
--

CREATE TABLE `chuan_nang_suats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nangsuat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuan_nang_suats`
--

INSERT INTO `chuan_nang_suats` (`id`, `thang`, `nangsuat`, `created_at`, `updated_at`) VALUES
(1, '1', 70, NULL, NULL),
(2, '2', 71, NULL, NULL),
(3, '3', 72, NULL, NULL),
(4, '4', 73, NULL, NULL),
(5, '5', 74, NULL, NULL),
(6, '6', 75, NULL, NULL),
(7, '7', 76, NULL, NULL),
(8, '8', 77, NULL, NULL),
(9, '9', 78, NULL, NULL),
(10, '10', 79, NULL, NULL),
(11, '11', 80, NULL, NULL),
(12, '12', 81, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_05_050433_create_nhanviens_table', 1),
(6, '2021_10_12_023120_create_projects_table', 1),
(7, '2021_10_12_023151_create_bo_phans_table', 1),
(8, '2021_10_13_005958_create_sessions_table', 1),
(9, '2021_10_15_071106_create_chuan_nang_suats_table', 1),
(10, '2021_10_15_071746_add_description_to_chuan_nang_suats', 1),
(11, '2021_10_15_074917_add_description_to_projects', 1),
(12, '2021_10_15_093702_create_nhan_vien_pro_jects_table', 1),
(13, '2021_10_15_094223_add_description_to_nhan_vien_pro_jects', 1),
(14, '2021_10_21_103241_ngaycong', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngaycongs`
--

CREATE TABLE `ngaycongs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nam` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `ngay` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ngaycongs`
--

INSERT INTO `ngaycongs` (`id`, `nam`, `thang`, `ngay`, `created_at`, `updated_at`) VALUES
(1, 2021, 1, 20, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(2, 2021, 2, 21, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(3, 2021, 3, 22, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(4, 2021, 4, 23, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(5, 2021, 5, 24, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(6, 2021, 6, 25, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(7, 2021, 7, 19, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(8, 2021, 8, 18, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(9, 2021, 9, 20, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(10, 2021, 10, 22, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(11, 2021, 11, 21, '2021-10-24 19:39:24', '2021-10-24 19:39:24'),
(12, 2021, 12, 23, '2021-10-24 19:39:24', '2021-10-24 19:39:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanviens`
--

CREATE TABLE `nhanviens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` timestamp NULL DEFAULT NULL,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien_pro_jects`
--

CREATE TABLE `nhan_vien_pro_jects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nv_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `nang_suat` int(11) DEFAULT NULL,
  `is_quanly` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien_pro_jects`
--

INSERT INTO `nhan_vien_pro_jects` (`id`, `nv_id`, `project_id`, `nang_suat`, `is_quanly`, `created_at`, `updated_at`) VALUES
(1, 11, 2, 0, 0, '2021-10-22 21:01:00', '2021-10-22 21:01:00'),
(2, 10, 2, 0, 0, '2021-10-22 21:01:00', '2021-10-22 21:01:00'),
(3, 9, 2, 30, 1, '2021-10-22 21:01:00', '2021-10-24 19:31:50'),
(4, 8, 2, 40, 0, '2021-10-22 21:01:00', '2021-10-24 19:40:20'),
(5, 6, 2, 20, 0, '2021-10-22 21:01:00', '2021-10-24 19:40:51'),
(10, 4, 1, 0, 0, '2021-10-22 21:01:44', '2021-10-22 21:01:44'),
(11, 3, 1, 0, 1, '2021-10-22 21:01:44', '2021-10-22 21:01:44'),
(12, 6, 1, 80, 0, '2021-10-22 21:01:44', '2021-10-24 19:40:42'),
(13, 8, 1, 60, 0, '2021-10-22 21:01:44', '2021-10-24 19:40:14'),
(14, 9, 1, 40, 0, '2021-10-22 21:01:44', '2021-10-26 01:14:46'),
(15, 9, 4, 30, 0, '2021-10-26 01:11:35', '2021-10-26 01:14:40'),
(16, 8, 4, 0, 0, '2021-10-26 01:11:35', '2021-10-26 01:11:35'),
(17, 7, 4, 0, 0, '2021-10-26 01:11:35', '2021-10-26 01:11:35'),
(18, 5, 4, 0, 0, '2021-10-26 01:11:35', '2021-10-26 01:11:35'),
(19, 4, 4, 0, 0, '2021-10-26 01:11:35', '2021-10-26 01:11:35'),
(20, 3, 4, 0, 1, '2021-10-26 01:11:35', '2021-10-26 01:11:35'),
(21, 2, 4, 0, 0, '2021-10-26 01:11:35', '2021-10-26 01:11:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_end` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bophan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `content`, `date_start`, `date_end`, `created_at`, `updated_at`, `bophan_id`) VALUES
(1, 'BuonBan', 'BuonBan', 'BuonBan', '2020-12-31 17:00:00', '2021-11-30 17:00:00', '2021-10-22 21:00:05', '2021-10-22 21:00:05', 1),
(2, 'VanChuyen', 'VanChuyen', 'VanChuyen', '2020-12-31 17:00:00', '2021-11-30 17:00:00', '2021-10-22 21:00:33', '2021-10-22 21:00:33', 2),
(3, 'Hạt Giống', 'Hạt Giống', 'Hạt Giống', '2021-04-21 17:00:00', '2022-10-22 17:00:00', '2021-10-26 00:41:45', '2021-10-26 00:41:45', 5),
(4, 'Phan Bon', 'Phan Bon', 'Phan Bon', '2021-04-21 17:00:00', '2022-10-22 17:00:00', '2021-10-26 01:11:04', '2021-10-26 01:11:04', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `password`, `sdt`, `date_start`, `chuc_vu`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'admin@localhost.com', '$2y$10$nr4A87iBbeAEVBCDAKRzfOuG9Ng.X2/CYd0RxUNI0ooPGpceVi1he', 'None', '2000-12-31 17:00:00', 'None', NULL, NULL, NULL, NULL),
(2, 'Anh', '2', 'anh@localhost.com', '$2y$10$T4hzca9gAnuAXyHWU6IgsOhtaElCqPotdD1BrlWNqqnW/yQP4uNTi', '0123456789', '2021-04-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(3, 'Thao', '2', 'thao@localhost.com', '$2y$10$6r1gCN3FcUHUyoVusY8/VeumRrX8UbB4pB6IyMLRWXA4g4aHFcd52', '0123456789', '2021-05-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(4, 'Khue', '2', 'khue@localhost.com', '$2y$10$RaTrWyMpK5IUQmbGq.aX2ODnGRyroZPPPbpBQU2Ty2Zky.W4zlFK2', '0123456789', '2021-02-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(5, 'phuong', '2', 'phuong@localhost.com', '$2y$10$cq.kTZjw6HetL0XZW6uHuO6s6KAaz.smEo22BRy8wy2zfY9esLWo.', '0123456789', '2021-07-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(6, 'nguyen', '2', 'nguyen@localhost.com', '$2y$10$IiPlKOZSAUy/B/jHhR.a2u.MotCzP5kXD0PWj7xTspLDOJbjMT9ZW', '0123456789', '2021-11-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(7, 'tran', '2', 'tran@localhost.com', '$2y$10$GYNvkHongjeDq.1GXVmWa.LhOSaRv02fOLzBmnA.r6bu9T.H80CAm', '0123456789', '2021-05-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(8, 'hoang', '2', 'hoang@localhost.com', '$2y$10$Q7EACKGM6WQbz2cB0jE5V.FfOmHwK3YwN2LA/Ieiy8xZk8ZIvhzwG', '0123456789', '2021-03-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(9, 'viet', '2', 'viet@localhost.com', '$2y$10$04tc5lX95Gzhlb6S5/PHzO7JAN8WUqdc0THhUAX5BXahBHCzS4blG', '0123456789', '2021-08-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(10, 'nhat', '2', 'nhat@localhost.com', '$2y$10$RYzHhVF9MiQJCqCYiqrSWeKp1F08d7OiB34GykhK70PaSkHRJprZK', '0123456789', '2021-12-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(11, 'meo', '2', 'meo@localhost.com', '$2y$10$0Ns/vJXzv4RVciOY1/sldu7ioMirktxdVdX2jaaANCFE1wkW1BwEK', '0123456789', '2021-06-22 17:00:00', 'member', NULL, NULL, NULL, NULL),
(13, 'CanSa', '2', 'CanSa@localhost.com', '$2y$10$qUgR2VteSyzwMPig4t35FecP1Dpap53gQitmy2lIhM8klHO3dxxOC', '0832012355', '2021-10-25 17:00:00', 'member', NULL, NULL, '2021-10-26 02:11:17', '2021-10-26 02:11:17'),
(14, 'aaa', '2', 'aaa@localhost.com', '$2y$10$EjNXZ9g.G2t86Lw2KlLH0.eoStR9e5WW7Lh4M2bKUj5Ia/s77ekUe', '123456', '2021-10-25 17:00:00', 'member', NULL, NULL, '2021-10-26 03:07:20', '2021-10-26 03:07:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bo_phans`
--
ALTER TABLE `bo_phans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuan_nang_suats`
--
ALTER TABLE `chuan_nang_suats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngaycongs`
--
ALTER TABLE `ngaycongs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nhanviens_email_unique` (`email`);

--
-- Chỉ mục cho bảng `nhan_vien_pro_jects`
--
ALTER TABLE `nhan_vien_pro_jects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bo_phans`
--
ALTER TABLE `bo_phans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chuan_nang_suats`
--
ALTER TABLE `chuan_nang_suats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ngaycongs`
--
ALTER TABLE `ngaycongs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhan_vien_pro_jects`
--
ALTER TABLE `nhan_vien_pro_jects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
