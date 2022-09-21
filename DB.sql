-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `profile_image`, `cv`, `details`, `created_at`, `updated_at`) VALUES
(1, 'profile_image.png', 'cv.pdf', '<div><strong>Hi! I am Ibone Adham. I\'m a professional Front-End-Developer.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, exercitationem, quasi! Iusto ducimus, rem, maxime sit expedita delectus labore recusandae eveniet, reiciendis repudiandae harum illo beatae maiores corrupti. Fugiat, iure?<br><br>//Skills// Html5, CSS3, JavaScript, jQuery, Bootstrap 4/5, PHP, MySQL, WordPress.<br>//Also// Business &amp; Visiting Card, Photo Editing<br><br>Thanks &amp; Regard\'s<br>(Ibone Adham)</div>', NULL, '2021-11-27 03:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `name`, `designation`, `description`, `button_text`, `back_image`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 'Hello', 'I\'m Ibone Adham', 'Exper In Web Designer', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Fuga Voluptatum Laudantium Dignissimos Neque Natus.', 'More About Me', 'back_image.png', 'main_image.png', NULL, '2021-11-25 02:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web application', NULL, '2021-11-26 03:51:27'),
(2, 'Graphic design', '2021-11-26 03:37:57', '2021-11-26 03:52:09'),
(5, 'Mobile app', '2021-11-26 03:52:24', '2021-11-26 03:52:24'),
(6, 'photo grapher', '2021-11-26 03:52:53', '2021-11-26 03:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `color_settings`
--

CREATE TABLE `color_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_settings`
--

INSERT INTO `color_settings` (`id`, `theme_color`, `header_color`, `created_at`, `updated_at`) VALUES
(1, '#ff4321', '#e9ecef', NULL, '2021-11-27 02:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `period`, `program`, `institute`, `details`, `created_at`, `updated_at`) VALUES
(1, '2020 - Running', 'Masters In Computer Science', 'Shahjalal University of Science and Technology, Sylhet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-26 00:40:52', '2021-11-26 00:48:09'),
(2, '2019 - 2020', 'Diploma of Computer', 'Bangladesh Computer Council, Sylhet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-26 00:43:40', '2021-11-26 00:44:31'),
(3, '2019 - 2021', 'International English Language Testing System', 'Running course', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-26 00:44:15', '2021-11-26 00:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `period`, `designation`, `organization`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Sep, 2020-Present', 'Full stack developer', 'Worked on fiverr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-25 06:40:55', '2021-11-25 07:05:30'),
(7, 'Sep, 2020-Present', 'Web Designer and Developer', 'Worked on upwork', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-25 07:01:13', '2021-11-26 00:12:49'),
(8, 'jun, 2021-Present', 'Web Designer', 'Worked on freelancer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, veniam, officia. Vitae, quisquam nihil, quo et eveniet adipisci optio suscipit.', '2021-11-25 07:01:50', '2021-11-25 07:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `expert_ins`
--

CREATE TABLE `expert_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_ins`
--

INSERT INTO `expert_ins` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Front end developer', '2021-11-25 03:11:17', '2021-11-25 03:56:34'),
(5, 'web designer', '2021-11-25 03:31:34', '2021-11-25 03:56:41'),
(6, 'graphic designer', '2021-11-25 03:31:58', '2021-11-25 03:31:58'),
(7, 'photographer', '2021-11-25 03:32:10', '2021-11-25 03:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@admin.com', 'Sint eum velit et', 'test', '2021-11-26 07:43:22', '2021-11-26 07:43:22'),
(3, 'test', 'test@gmail.com', 'test', 'test', '2021-11-26 07:56:01', '2021-11-26 07:56:01');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_24_143013_create_sessions_table', 1),
(7, '2021_11_25_074632_create_banners_table', 2),
(8, '2021_11_25_084529_create_expert_ins_table', 3),
(9, '2021_11_25_101510_create_abouts_table', 4),
(10, '2021_11_25_110703_create_skills_table', 5),
(11, '2021_11_25_115414_create_experiences_table', 6),
(12, '2021_11_26_061340_create_education_table', 7),
(13, '2021_11_26_065958_create_services_table', 8),
(14, '2021_11_26_085743_create_categories_table', 9),
(16, '2021_11_26_102157_create_portfolios_table', 10),
(17, '2021_11_26_124231_create_testimonials_table', 11),
(18, '2021_11_26_132237_create_messages_table', 12),
(19, '2021_11_27_061303_create_title_settings_table', 13),
(20, '2021_11_27_061512_create_settings_table', 13),
(21, '2021_11_27_080514_create_color_settings_table', 14),
(22, '2021_11_27_121841_add_profile_image_to_users_table', 15);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tools` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thum_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_id`, `title`, `details`, `date`, `client`, `tools`, `web_url`, `thum_image`, `preview_image`, `created_at`, `updated_at`) VALUES
(3, 2, 'Wedding Couple', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?', '2020-02-20', 'xyz', 'html, css, jquery', '#!', '3thum_image.png', '3preview_image.png', '2021-11-26 05:15:47', '2021-11-27 05:31:25'),
(5, 6, 'Photo Grapher', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?', '2021-11-26', 'xyz', 'html, css, bootstrap-4', '#!', '5thum_image.png', '5preview_image.png', '2021-11-26 06:18:27', '2021-11-27 05:31:41'),
(6, 1, 'fitness & gym', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?', '2021-11-26', 'xyz', 'html, css, bootstrap-4', '#!', '6thum_image.png', '6preview_image.png', '2021-11-26 06:20:45', '2021-11-27 05:31:57'),
(7, 5, 'mobile app', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa! Distinctio sunt exercitationem inventore dolore, culpa quos minus recusandae quaerat, fuga saepe tempore similique odit eligendi? Similique assumenda, cum consectetur?', '2021-11-26', 'xyz', 'html, css, bootstrap-4', '#!', '7thum_image.png', '7preview_image.png', '2021-11-26 06:22:15', '2021-11-27 05:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, '<i class=\"fa fa-mobile\"></i>', 'Resposive design', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:17:11', '2021-11-26 02:17:11'),
(4, '<i class=\"fa fa-laptop\"></i>', 'Web design', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:17:37', '2021-11-26 02:17:37'),
(5, '<i class=\"fa fa-code\"></i>', 'clean code', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:18:03', '2021-11-26 02:32:48'),
(6, '<i class=\"fa fa-search\"></i>', 'Web-Developed', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:19:25', '2021-11-26 02:19:25'),
(7, '<i class=\"fas fa-palette\"></i>', 'Graphic design', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:20:49', '2021-11-26 02:30:15'),
(8, '<i class=\"fa fa-bullhorn\"></i>', 'Gret Support', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quam accusantium inventore harum, deleniti iste! Suscipit deleniti accusamus placeat tempore illum, magni temporibus, tempora necessitatibus. Velit maiores fugiat odit asperiores quod.', '2021-11-26 02:21:18', '2021-11-26 02:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('75GeitLRS1SZm7XbQXLjs5WmgVINH4v5M4g8DDSg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InUwWG5hZ2RzQmlJUE1pTFowckdrd3FUVExlYmloaVFlS1p1OUR1QloiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRQNUh4bjBCRWZGcWI2TC9rMmN5LkJ1SFZFeU5UTmhNYUR3eHZwRERpM2VnS3F0OHNaQ3REeSI7fQ==', 1638019414);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `white_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dark_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gitgub_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `white_logo`, `dark_logo`, `favicon`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `gitgub_link`, `created_at`, `updated_at`) VALUES
(1, 'contact@soclose.co', '+33676675867', 'de l\'église, Rueil Malmaiso', '1white_logo.png', '1dark_logo.png', '1favicon.png', '#!', '#!', '#!', '#!', '#!', NULL, '2021-11-27 01:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Html', '90', '2021-11-25 05:35:15', '2021-11-25 06:55:59'),
(3, 'Css', '80', '2021-11-25 05:47:19', '2021-11-25 05:47:19'),
(4, 'Bootstrap', '80', '2021-11-25 05:47:35', '2021-11-25 06:56:13'),
(5, 'javaScript', '50', '2021-11-25 05:47:48', '2021-11-25 05:47:48'),
(6, 'jquery', '60', '2021-11-25 05:48:07', '2021-11-25 05:48:07'),
(7, 'Php', '40', '2021-11-25 05:48:41', '2021-11-25 05:48:41'),
(9, 'WordPress', '30', '2021-11-25 05:49:09', '2021-11-25 05:49:09'),
(10, 'MySQL', '100', '2021-11-25 05:53:26', '2021-11-25 05:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Soft-Company', '2.updatedpng', 'Perfect works, A pleasure to work with you bro.', '2021-11-26 07:01:47', '2021-11-26 07:06:03'),
(3, 'Jatrahul68', '3.updatedjpg', 'Really great work. I would highly recommend working with him to anyone. He took the time to make sure it was what I wanted.', '2021-11-26 07:01:58', '2021-11-26 07:15:46'),
(4, 'Tlawal', '4.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil consequuntur doloremque quibusdam, sunt aut possimus earum. Aliquam tenetur molestiae.', '2021-11-26 07:02:10', '2021-11-26 07:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `title_settings`
--

CREATE TABLE `title_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_settings`
--

INSERT INTO `title_settings` (`id`, `about_title`, `about_subtitle`, `service_title`, `service_subtitle`, `portfolio_title`, `portfolio_subtitle`, `testimonial_title`, `testimonial_subtitle`, `contact_title`, `contact_subtitle`, `created_at`, `updated_at`) VALUES
(1, 'main-info', 'ABOUT ME', 'services', 'WHAT I DO', 'portfolio', 'LATEST WORKS', 'Testimonial', 'CLIENT SPEAK', 'Contact', 'GET IN TOUCH', NULL, '2021-11-27 00:47:26');

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
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin admin', 'admin@admin.com', NULL, '$2y$10$P5Hxn0BEfFqb6L/k2cy.BuHVEyNTNhMaDwxvpDDi3egKqt8sZCtDy', '1.jpg', NULL, NULL, NULL, NULL, NULL, '2021-11-24 08:55:01', '2021-11-27 07:23:21'),
(3, 'Donovan Goff', 'xypufipuz@mailinator.com', NULL, '$2y$10$NS80W4z8BDfCTCASKSTid.jB28wbBHIcPFRt6A6gRPGkPBJ8liU1G', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-27 01:50:59', '2021-11-27 01:50:59'),
(4, 'Celeste Hess', 'pityw@mailinator.com', NULL, '$2y$10$lJ11f1s0fC4RxdcKoSfMBO2DyyxvrGVDrvlDJnVn6JYBJyyXjGYsS', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-27 01:51:57', '2021-11-27 01:51:57'),
(5, 'Troy Walter', 'fake@mailinator.com', NULL, '$2y$10$ZtDE34k8MLuII4etufcEQegtDgO8A1Mx0t1MiFcnqcRGSxcx5JmBq', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-27 01:52:21', '2021-11-27 01:52:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_settings`
--
ALTER TABLE `color_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_ins`
--
ALTER TABLE `expert_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_settings`
--
ALTER TABLE `title_settings`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `color_settings`
--
ALTER TABLE `color_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expert_ins`
--
ALTER TABLE `expert_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `title_settings`
--
ALTER TABLE `title_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
