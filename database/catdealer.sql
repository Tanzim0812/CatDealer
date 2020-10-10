-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 06:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catdealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_status`, `created_at`, `updated_at`) VALUES
(5, 'Shoe', 'shoe', 1, '2020-09-11 00:04:50', '2020-09-11 00:04:50'),
(6, 'Shirts', 'shirts', 1, '2020-09-11 06:48:17', '2020-09-11 06:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newpro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customize_pro-name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `chat_id`, `user_id`, `user_name`, `pro_name`, `newpro_name`, `customize_pro-name`, `target_price`, `qty`, `message`, `image`, `seen`, `created_at`, `updated_at`) VALUES
(30, 31, 9, 'Nazrul', 'Shirt', NULL, NULL, '400', '45', '\r\n\r\nParagraph Writing: Take a wild guess as to what will you say to describe a paragraph? From whatever you may know so far, many students describe paragraphs as what consists the story, or a set of sentences that are grouped together to form a paragraph or a set of sentences that cover half a page of your story, and so on.\r\n\r\nAlthough these ideas may look true in many instances, they don’t really define what the idea behind a paragraph is. This is one of those subtle things in English writing that never really gets explained on priority making it one of those commonly used things that are barely understood. Which is why this read is going to be great.\r\n', NULL, 0, '2020-10-03 05:22:52', '2020-10-03 05:22:52'),
(31, 31, 10, 'admin', NULL, NULL, NULL, NULL, NULL, '<p>Paragraph Writing: Take a wild guess as to what will you say to describe a paragraph? From whatever you may know so far, many students describe paragraphs as what consists the <a href=\"https://www.toppr.com/guides/english/writing/story/\">story</a>, or a set of <a href=\"https://www.toppr.com/guides/english/sentences/\" target=\"_blank\">sentences</a> that are grouped together to form a paragraph or a set of sentences that cover half a page of your story, and so on.</p>\r\n\r\n<p>Although these ideas may look true in many instances, they don&rsquo;t really define what the idea behind a paragraph is. This is one of those subtle things in <a href=\"https://www.toppr.com/guides/english/writing/\" target=\"_blank\">English writing</a> that never really gets explained on priority making it one of those commonly used things that are barely understood. Which is why this read is going to be great.</p>', NULL, 0, '2020-10-03 05:25:54', '2020-10-03 05:25:54'),
(32, 32, 9, 'Nazrul', 'Shirt', 'Blue shirt', NULL, '1560', '450', '<p>Paragraph Writing: Take a wild guess as to what will you say to \r\ndescribe a paragraph? From whatever you may know so far, many students \r\ndescribe paragraphs as what consists the <a href=\"https://www.toppr.com/guides/english/writing/story/\">story</a>, or a set of <a href=\"https://www.toppr.com/guides/english/sentences/\" target=\"_blank\" rel=\"noopener\">sentences</a> that are grouped together to form a paragraph or a set of sentences that cover half a page of your story, and so on.</p>\r\n<p>Although these ideas may look true in many instances, they don’t \r\nreally define what the idea behind a paragraph is. This is one of those \r\nsubtle things in <a href=\"https://www.toppr.com/guides/english/writing/\" target=\"_blank\" rel=\"noopener\">English writing</a>\r\n that never really gets explained on priority making it one of those \r\ncommonly used things that are barely understood. Which is why this read \r\nis going to be great.</p><p><br><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span></p>', '1601770349.jpg', 0, '2020-10-03 18:12:29', '2020-10-03 18:12:29');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_10_133408_create_categories_table', 2),
(5, '2020_09_10_163839_create_subcategories_table', 3),
(14, '2020_09_11_112014_create_products_table', 4),
(15, '2020_09_13_112502_create_userchats_table', 4),
(16, '2020_09_16_154749_create_messages_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_price` int(11) NOT NULL,
  `offer_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `hscode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `title`, `details`, `previous_price`, `offer_price`, `qty`, `image`, `status`, `hscode`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 'New model Boot', 'new model shoe', 2000, 1500, 7, '1600688512.jpg', 1, '58396411', '2020-09-21 05:41:52', '2020-09-30 00:34:15'),
(2, 6, 7, 'Full shirt for men', 'shirt for men is here..grab the offer', 1600, 1328, 5, '1600693766.jpg', 1, '84360511', '2020-09-21 07:09:26', '2020-09-30 00:34:36'),
(3, 6, 7, 'Shirt', '.....aa5', 500, 400, 2, '1600707104.jpg', 1, '51748291', '2020-09-21 10:51:44', '2020-09-30 01:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `cat_id`, `subcat_name`, `subcat_slug`, `subcat_status`, `created_at`, `updated_at`) VALUES
(5, 5, 'Apex Shoe', 'apex-shoe', 1, '2020-09-11 00:07:26', '2020-09-11 00:07:26'),
(6, 5, 'Bata Shoe', 'bata-shoe', 1, '2020-09-11 00:07:37', '2020-09-11 00:07:37'),
(7, 6, 'Full Sleeve shirt', 'full-sleeve-shirt', 1, '2020-09-11 06:48:34', '2020-09-11 06:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `userchats`
--

CREATE TABLE `userchats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 2,
  `pro_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customize` tinyint(4) DEFAULT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userchats`
--

INSERT INTO `userchats` (`id`, `user_id`, `admin_id`, `pro_id`, `customize`, `seen`, `created_at`, `updated_at`) VALUES
(31, 9, 2, 3, NULL, 0, '2020-10-03 05:22:09', '2020-10-03 05:22:09'),
(32, 9, 2, NULL, 1, 0, '2020-10-03 18:11:31', '2020-10-03 18:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 2 COMMENT '2=user/1=admin',
  `issueofreg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL DEFAULT 50,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `phone`, `role`, `issueofreg`, `email`, `email_verified_at`, `password`, `points`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Nazrul', '14587566.JPG', NULL, 2, 'Have_Company', 'nazrul@gmail.com', NULL, '$2y$10$q3wZ2DJKeIUpYRoM.Q3jaeAdBsmXTt6.RbdHerG7ql7kbarOQ9Sdy', 50, NULL, '2020-09-16 10:43:52', '2020-10-03 18:09:39'),
(10, 'admin', '145678953.JPG', NULL, 1, 'help Cat users', 'admin@gmail.com', NULL, '$2y$10$o7mRUPMVA9O3BzwqdAfyHerLw2GMyOLx2fYQPVIujTH2cjb8a7x.m', 50, NULL, '2020-09-16 10:58:55', '2020-10-03 06:04:25'),
(13, 'nazmul', '1601400233.PNG', NULL, 2, 'Have_Company', 'nazmul@gmail.com', NULL, '$2y$10$ghyBpxsRAhC88sjEkbbySeBSewaLPZuMtfD/.xLOFLFDTAoytHf82', 50, NULL, '2020-09-29 11:23:53', '2020-10-03 18:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_chat_id_foreign` (`chat_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcat_id_foreign` (`subcat_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userchats`
--
ALTER TABLE `userchats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userchats_user_id_foreign` (`user_id`),
  ADD KEY `userchats_pro_id_foreign` (`pro_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userchats`
--
ALTER TABLE `userchats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `userchats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userchats`
--
ALTER TABLE `userchats`
  ADD CONSTRAINT `userchats_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userchats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
