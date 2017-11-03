-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2017 at 12:14 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omc`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) NOT NULL,
  `carousel_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel_text` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `sort_order`, `carousel_image`, `carousel_label`, `carousel_text`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'c3.jpg', 'first text', 'any text here', 1, NULL, '2017-11-02 06:57:35'),
(2, 2, 'c3.jpg', NULL, NULL, 0, NULL, '2017-11-02 05:54:46'),
(3, 3, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:26'),
(4, 4, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:37'),
(5, 5, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:46'),
(6, 6, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:54'),
(7, 7, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:58'),
(8, 8, 'logo.png', 'Second label', 'any text here', 1, NULL, '2017-11-02 06:39:42'),
(9, 9, 'c3.jpg', 'third label', 'any text here', 1, NULL, '2017-11-02 06:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `home_texts`
--

CREATE TABLE `home_texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_texts`
--

INSERT INTO `home_texts` (`id`, `heading1`, `color1`, `text1`, `heading2`, `color2`, `text2`, `heading3`, `color3`, `text3`, `created_at`, `updated_at`) VALUES
(1, 'demo 1', 'orange', 'First', 'Demo 2', 'warning', 'second', 'Demo 3', 'inverse', 'third', NULL, '2017-11-03 06:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `hidden` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_slug`, `parent_menu_id`, `order`, `icon`, `menu_route`, `active`, `hidden`, `sort_order`, `created_at`, `updated_at`) VALUES
(4, 'Home', '', NULL, 0, 'mdi mdi-home-variant', NULL, 1, 0, 2, NULL, NULL),
(5, 'Carousel', 'carousel/create', NULL, 0, 'mdi mdi-animation', 'carousel.create', 1, 0, 1, NULL, NULL),
(6, 'Heading and text', 'home/text', 4, 1, NULL, 'home.text', 1, 0, 3, NULL, NULL),
(7, 'Images', 'home/images', 4, 2, NULL, 'home.images', 1, 0, 4, NULL, NULL);

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
(3, '2017_11_01_170713_create_menus_table', 2),
(4, '2017_11_01_183645_create_carousels_table', 3),
(5, '2017_11_03_081557_create_home_texts_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'harisali241@gmail.com', '$2y$10$smXR2zdSkCJS0hYrrrx0beTlBNf.m9/syER7ODI6.zKwzjVXxmrLO', 'hjZidoZb9wFiTitRNFMFPlEXin36IheQBCNJCP8RxnNzXWATOrDzNGMbsPxW', '2017-11-01 14:25:36', '2017-11-01 14:25:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_texts`
--
ALTER TABLE `home_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `home_texts`
--
ALTER TABLE `home_texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
