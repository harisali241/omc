-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 12:43 PM
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
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `heading`, `area`, `created_at`, `updated_at`) VALUES
(1, 'About O.M.C', '<h1 style="color: #ff0000;"><span style="color: #333333;"><strong>about omc:</strong></span></h1>\r\n<p><span style="color: #333333;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I\'m new with Laravel and I have a problem which I don\'t understand. I have а log form in my project and my method is POST. When I try a request the result is: \'The page has expired due to inactivity. Please refresh and try again.\' ,but if I change the method to GET, it works fine. Can someone tell me why is that and how to fix it, because of course i need post method.</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h1 style="color: #ff0000;"><span style="color: #333333;"><strong>omc:</strong></span></h1>\r\n<p><span style="color: #333333;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I\'m new with Laravel and I have a problem which I don\'t understand. I have а log form in my project and my method is POST. When I try a request the result is: \'The page has expired due to inactivity. Please refresh and try again.\' ,but if I change the method to GET, it works fine. Can someone tell me why is that and how to fix it, because of course i need post method.</strong></span></p>', NULL, '2017-11-06 03:43:29');

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
(1, 1, '3327c2.jpg', 'first text', 'any text here', 1, NULL, '2017-11-06 01:56:18'),
(2, 2, 'c3.jpg', NULL, NULL, 0, NULL, '2017-11-02 05:54:46'),
(3, 3, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:26'),
(4, 4, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:37'),
(5, 5, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:46'),
(6, 6, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:54'),
(7, 7, 'logo.png', NULL, NULL, 0, NULL, '2017-11-02 06:30:58'),
(8, 8, '33053714c3.jpg', 'Second label', 'any text here', 1, NULL, '2017-11-06 01:56:40'),
(9, 9, '41831018c1.jpg', 'third label', 'any text here', 1, NULL, '2017-11-06 01:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `heading`, `area`, `created_at`, `updated_at`) VALUES
(1, 'CONTACT US:', '<table style="height: 304px; width: 1217px;">\r\n<tbody>\r\n<tr>\r\n<td style="width: 364px;">https://www.google.com/search?q=images&amp;client=firefox-b&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=0ahUKEwis2Nzvz6nXAhUItY8KHdMbAUwQ_AUICigB&amp;biw=1280&amp;bih=851#imgrc=XItppwMvBMYzxM:</td>\r\n<td style="width: 10px;">&nbsp;</td>\r\n<td style="width: 817px;">\r\n<h1 style="text-align: center; color: #ff0000;"><img src="data:image/jpeg;base64,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" alt="" width="239" height="159" /></h1>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><br /></p>', NULL, '2017-11-06 04:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textarea` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`id`, `heading`, `textarea`, `image_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Image', 'any text here', 'g7.jpg', 1, '2017-11-04 08:48:43', '2017-11-04 08:48:43'),
(2, 'Image2', 'return view(\'pages.home.homeViewImages\')->with(\'m', '2971g8.jpg', 1, '2017-11-04 08:51:46', '2017-11-06 02:46:45'),
(3, 'Image3', 't return', '40234340g1.jpg', 1, '2017-11-04 08:53:29', '2017-11-06 02:46:56');

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
(1, 'Any Heading HERE', 'inverse', 'What is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lo', 'Any Heading', 'warning', 'Any para', 'Heading', 'teal', 'any para here', NULL, '2017-11-06 02:12:01');

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
(7, 'Add Images', 'home/images', 4, 2, NULL, 'home.images', 1, 0, 4, NULL, NULL),
(8, 'view Images', 'home/viewImages', 4, 3, NULL, 'home.viewImages', 1, 0, 5, NULL, NULL),
(9, 'About us', 'about/create', NULL, 0, 'mdi mdi-book-open', 'about.create', 1, 0, 6, NULL, NULL),
(10, 'Contact us', 'contact/create', NULL, 0, 'mdi mdi-contact-mail', 'contact.create', 1, 0, 15, NULL, NULL);

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
(5, '2017_11_03_081557_create_home_texts_table', 4),
(6, '2017_11_04_131758_create_home_images_table', 5),
(7, '2017_11_06_073501_create_aboutuses_table', 6),
(8, '2017_11_06_091027_create_contacts_table', 7);

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
(1, 'admin', 'harisali241@gmail.com', '$2y$10$smXR2zdSkCJS0hYrrrx0beTlBNf.m9/syER7ODI6.zKwzjVXxmrLO', '7kHP14uszVcNWlP0zlk83aJoHyK3kujM7QiN2HBfTfIO2iPXnD3OhrvB1Bq2', '2017-11-01 14:25:36', '2017-11-01 14:25:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
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
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_texts`
--
ALTER TABLE `home_texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
