-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2023 at 03:19 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterpiece`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CANVAS PAINTINGS', 'canvas-paintings', '2022-12-18 17:40:42', '2023-01-02 10:23:27'),
(2, 'MDF Wood Panels', 'mdf-wood-panels', '2022-12-18 18:06:18', '2022-12-18 18:06:18'),
(4, 'WATCHES', 'watches', '2022-12-18 18:07:08', '2022-12-18 18:07:08'),
(5, 'three-piece plate', 'three-piece-plate', '2022-12-18 18:07:27', '2022-12-18 18:07:27'),
(10, 'Large Murals	', 'large-murals', '2023-01-02 21:29:37', '2023-01-02 21:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` bigint NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `telephone`, `subject`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'emadhashash', 'emadhashash76@gmail.com', 785483954, NULL, 'assssssssss', '2022-12-21 04:09:28', '2022-12-21 04:09:28'),
(2, 'emadhashash', 'emadhashash76@gmail.com', 785483954, NULL, 'eeeeeeeeeeeeeeeeeeeeeeeeeeee', '2022-12-21 04:10:55', '2022-12-21 04:10:55'),
(3, 'emadhashash', 'emad3hashash76@gmail.com', 7854839543, NULL, '33333333wwwwwwwwwwwwwwwww', '2022-12-21 04:34:52', '2022-12-21 04:34:52'),
(4, 'emadhashash', 'emadhashash76@gmail.com', 785483954, NULL, 'asfcsa', '2022-12-21 07:43:29', '2022-12-21 07:43:29'),
(5, 'emadhashash', 'emadhashash76@gmail.com', 785483954, NULL, 'asdasoinolj', '2022-12-21 08:12:12', '2022-12-21 08:12:12'),
(6, 'emadhashash', 'emadhashash76@gmail.com', 785483954, NULL, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2022-12-31 09:23:35', '2022-12-31 09:23:35'),
(7, 'emadhashash', 'emadhashash76@gmail.com', 785483954, 'ddddddddddddd', 'eeeeeeeeeeeeeeeeeeeeee', '2022-12-31 09:38:53', '2022-12-31 09:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT '2022-12-23'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(7, 'Emad123', 'percent', '2.00', '3.00', '2022-12-30 08:41:30', '2022-12-30 08:46:43', '2023-01-05'),
(8, 'CR722', 'fixed', '35.00', '63.00', '2023-01-06 01:31:38', '2023-01-06 01:31:38', '2023-01-14'),
(9, 'Emad1234', 'fixed', '10.00', '12.00', '2023-01-16 09:27:32', '2023-01-16 09:27:32', '2023-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `coupons22`
--

CREATE TABLE `coupons22` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `top_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `top_title`, `title`, `sub_title`, `offer`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trade-in offer', 'permanent offers', 'On all products', 'Save more with coupons & up to 30% off', 'http://127.0.0.1:8000/shop', '1671640990.jpg', '1', '2022-12-21 13:09:33', '2022-12-21 14:18:41'),
(2, 'Trade-in offer', 'permanent offers', 'Great Collection', 'Save more with coupons & up to 20% off', 'http://127.0.0.1:8000/shop', '1671641041.jpg', '1', '2022-12-21 13:12:33', '2022-12-21 14:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_24_181923_create_categories_table', 1),
(7, '2022_12_18_195058_create_coupons_table', 1),
(8, '2022_12_19_061613_create_coupons_table', 2),
(9, '2022_12_19_130203_create_contacts_table', 3),
(10, '2022_12_21_084301_create_home_sliders_table', 4),
(11, '2022_12_23_181803_add_expiry_date_to_coupons_table', 5),
(12, '2022_12_23_190841_create_orders_table', 6),
(13, '2022_12_23_190901_create_order_items_table', 6),
(14, '2022_12_23_191006_create_shippings_table', 6),
(16, '2022_12_23_191057_create_transactions_table', 7),
(17, '2022_12_25_123018_add_delivered_canceled_date_to_orders_table', 8),
(20, '2022_12_25_222858_add_email_to_name_table', 11),
(26, '2022_12_25_180652_create_reviews_table', 12),
(28, '2022_12_27_103752_add_rstatus_to_order_items_table', 13),
(29, '2022_12_31_131849_create_settings_table', 14),
(30, '2022_12_31_150340_add_image_settings_logo_table', 15),
(31, '2023_01_01_112925_create_profiles_table', 16),
(32, '2023_01_02_123237_create_subcategories_table', 17),
(34, '2022_11_24_182032_create_products_table', 19),
(35, '2023_01_03_010622_add_subcategory_id_to_products_table', 20),
(36, '2023_01_07_190004_add_soft_delete_id_to_products_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
(30, 1, '65.00', '35.00', '0.00', '65.00', 'emad ', 'hashash', '0785483954', 'emadhashash76@gmail.com', '50', '321', 'Amman', 'as', 'Jordan', '11181', 'canceled', 1, '2023-01-06 01:32:32', '2023-01-06 01:36:00', NULL, '2023-01-06'),
(31, 2, '50.00', '0.00', '0.00', '50.00', 'emad', 'hashash', '0778084911', 'emadhashash75@gmail.com', '120355', '120355', 'zarqa', '12', 'Jordan', '1231233', 'delivered', 0, '2023-01-06 01:59:28', '2023-01-06 02:51:36', '2023-01-06', NULL),
(32, 2, '38.00', '10.00', '0.00', '38.00', 'Po', '12', '785483954', 'emadhashash75@gmail.com', '50', '12', 'Amman', 'ad', 'Jordan', '11181', 'ordered', 0, '2023-01-16 09:31:19', '2023-01-16 09:31:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`) VALUES
(31, 1, 30, '100.00', 1, '2023-01-06 01:32:32', '2023-01-06 01:32:32', 0),
(32, 1, 31, '50.00', 1, '2023-01-06 01:59:28', '2023-01-06 02:52:06', 1),
(33, 2, 32, '16.00', 3, '2023-01-16 09:31:19', '2023-01-16 09:31:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emadhashash76@gmail.com', '$2y$10$eN/kAFG4y0j5cD3wSJkNMOEvR/WRxPIfLeiDhludriUjU3q1PRrUK', '2022-12-27 09:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL DEFAULT '10',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcategory_id` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `subcategory_id`, `deleted_at`) VALUES
(1, 'Canvas Cristiano and Messi', 'canvas-cristiano-and-messi', 'Canvas Cristiano and Messi', '<h4>It is fixed to an inner wooden frame with a thickness of 18 mm.</h4>\n<p><strong>&nbsp;Fabric type: </strong>100% erasable cotton.</p>', '50.00', '100.00', 'CR7MS10', 'instock', '1', 1, '1672978344.jpg', NULL, 1, '2023-01-06 01:12:24', '2023-01-06 02:54:41', NULL, NULL),
(2, 'Islamic painting canvas', 'islamic-painting-canvas', 'Islamic painting canvas', 'Fixed with 18 mm thick inner wooden frame,Fabric type: 100% erasable cotton,Easy to install due to wall anchors and double face adhesive tape', '16.00', '20.00', 'allah-akbar1', 'instock', '1', 1, '1672982074.jpg', NULL, 1, '2023-01-06 02:14:34', '2023-01-06 02:14:34', NULL, NULL),
(3, 'Lord, explain my chest to me', 'lord-explain-my-chest-to-me', 'Canvas painting with the design of Lord explain my chest to me', 'Fixed with an internal wooden frame thickness of 18 mm,Fabric Type: 100% Wipeable Cotton', '15.00', '50.00', '125789', 'instock', '0', 1, '1672982353.jpg', NULL, 1, '2023-01-06 02:19:13', '2023-01-06 02:19:13', NULL, NULL),
(4, 'And the earth was illuminated by the light of its Lord', 'and-the-earth-was-illuminated-by-the-light-of-its-lord', 'Islamic Canvas Painting Design The earth shone with the light of its Lord', 'It is fixed to an internal wooden frame with a thickness of 18 mm. \nFabric type: 100% cotton, wipeable.', '15.00', '50.00', '14586', 'instock', '0', 2, '1672982786.jpg', NULL, 1, '2023-01-06 02:26:26', '2023-01-06 02:26:26', NULL, NULL),
(5, 'Rose design canvas', 'rose-design-canvas', 'Rose design canvas', 'Fixed with an internal wooden frame thickness of 18 mm.\nFabric type: 100% erasable cotton.', '10.00', '30.00', 'Rose1', 'instock', '1', 1, '1672982928.jpg', NULL, 1, '2023-01-06 02:28:48', '2023-01-06 02:28:48', NULL, NULL),
(6, 'Tree Canvas Painting', 'tree-canvas-painting', 'Tree Canvas Painting', '• Fixed with an internal wooden frame thickness of 18 mm.\n• Fabric type: 100% erasable cotton.', '5.00', '0.00', 'tree1', 'instock', '0', 1, '1672983135.jpg', NULL, 1, '2023-01-06 02:32:15', '2023-01-06 02:32:15', NULL, NULL),
(8, 'Girl wooden decorative plaque', 'girl-wooden-decorative-plaque', '<p class=\"title-detail\">Girl wooden decorative plaque.</p>', '<p><strong>MDF wood 3 mm thick using the latest wood carving equipment and machines.</strong></p>\n<h5>Easy to install due to wall anchors and double face adhesive tape.</h5>', '12.00', '0.00', 'Girlwooden1', 'instock', '1', 1, '1672984223.jpg', NULL, 2, '2023-01-06 02:50:23', '2023-01-06 02:50:23', NULL, NULL),
(9, 'Two piece wooden board', 'two-piece-wooden-board', '<p>Two piece wooden board.</p>', '<p><strong>MDF wood 3 mm thick using the latest wood carving equipment and machines..</strong></p>\n<p><strong>High quality German stickers that can be erased or washed.</strong></p>\n<p><strong>High color accuracy of up to 1720 dpi, showing the finest details.</strong></p>\n<p><strong>Easy to install due to wall anchors and double face adhesive tape..</strong></p>\n<p><strong>5 mm thick carton packaging to ensure a safe shipping process.</strong></p>\n<p><strong>size: 100 x 70 .</strong></p>', '20.00', '0.00', 'Two-piece-wooden1', 'instock', '1', 1, '1673081490.jpg', NULL, 2, '2023-01-07 05:51:30', '2023-01-07 05:51:30', NULL, NULL),
(10, 'Eight pieces of wood', 'eight-pieces-of-wood', '<p>Woodland eight-piece wood plaque</p>', '<p><strong>MDF wood 3 mm thick using the latest wood carving equipment and machines.</strong></p>\n<p><strong>High quality German stickers that can be erased or washed.</strong></p>\n<p><strong>High color accuracy of up to 1720 dpi, showing the finest details.</strong></p>\n<p><strong>Size : 120 x 80</strong></p>', '25.00', '0.00', 'Woodland1', 'instock', '1', 1, '1673081756.jpg', NULL, 2, '2023-01-07 05:55:56', '2023-01-07 05:55:56', NULL, NULL),
(11, 'World map canvas', 'world-map-canvas', '<p>World map canvas</p>', '<h5 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Installed with an internal wooden frame of 18 mm thickness.</span></strong></h5>\n<h5 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Fabric type: 100% erasable cotton.<br><br>High color accuracy of up to 1720 dpi, showing the finest details.<br><br>Easy to install due to wall anchors and double face adhesive tape.<br><br>5 mm thick carton packaging to ensure a safe shipping process.</span></strong></h5>\n<h5 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Size: 120X80</span></strong></h5>', '23.00', '0.00', 'world-map1', 'instock', '1', 1, '1673103049.jpg', NULL, 1, '2023-01-07 11:50:49', '2023-01-07 11:54:57', 1, NULL),
(12, 'Modern canvas', 'modern-canvas', '<p>Modern canvas</p>', '<h4 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Fixed with 18 mm thick inner wooden frame.</span></strong></h4>\n<h4 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Fabric Type: 100% Wipeable Cotton.</span></strong></h4>\n<h4 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">High color accuracy of up to 1720 dpi, showing the finest details.</span></strong></h4>\n<h4 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">Easy to install due to wall anchors and double face adhesive tape.</span></strong></h4>\n<h4 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">5 mm thick carton packaging to ensure a safe shipping process.</span></strong></h4>\n<h4 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">&nbsp;Size: 50X50 <br></span></strong></h4>', '5.00', '0.00', '123', 'instock', '0', 1, '1673103684.jpg', NULL, 1, '2023-01-07 12:01:24', '2023-01-07 12:01:24', 1, NULL),
(13, 'Butterflies design canvas', 'butterflies-design-canvas', '<p>Butterflies design canvas</p>', '<h4><span class=\"Y2IQFc\" lang=\"en\">Fixed with 18 mm thick inner wooden frame.</span></h4>\n<h4 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">Fabric type: 100% erasable cotton.<br><br>High color accuracy of up to 1720 dpi, showing the finest details.<br><br>Easy to install due to wall anchors and double face adhesive tape.<br><br>5 mm thick carton packaging to ensure a safe shipping process.<br><br>size: 60 x 90</span></h4>', '10.00', '0.00', '212', 'instock', '1', 1, '1673103932.jpg', NULL, 1, '2023-01-07 12:05:32', '2023-01-07 12:05:32', 1, NULL),
(14, 'Mickey Mouse Canvas', 'mickey-mouse-canvas', '<p>Mickey Mouse Canvas</p>', '<h4 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">Fixed with 18 mm thick inner wooden frame.<br><br>Fabric type: 100% erasable cotton.<br><br>High color accuracy of up to 1720 dpi, showing the finest details.<br><br>Easy to install due to wall anchors and double face adhesive tape.<br><br>5 mm thick carton packaging to ensure a safe shipping process.<br><br>size: 60 x 90</span></h4>', '10.00', '0.00', '320', 'instock', '0', 1, '1673105095.jpg', NULL, 1, '2023-01-07 12:08:16', '2023-01-07 12:24:55', 1, NULL),
(15, 'Name design canvas', 'name-design-canvas', '<p>A modern decorative canvas with Abdullah\'s design</p>', '<h4 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">Fixed with 18 mm thick inner wooden frame.<br><br>Fabric Type: 100% Wipeable Cotton.<br><br>High color accuracy of up to 1720 dpi, showing the finest details.<br><br>Easy to install due to wall anchors and double face adhesive tape.<br><br>5 mm thick carton packaging to ensure a safe shipping process.<br><br>Size: 100x60 cm<br></span></h4>', '10.00', '0.00', '1212', 'instock', '0', 1, '1673105020.jpg', NULL, 1, '2023-01-07 12:23:40', '2023-01-07 12:23:40', 1, NULL),
(16, 'Skeleton Canvas Painting', 'skeleton-canvas-painting', '<p>Modern canvas with a skeleton design</p>', '<h4 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">Fixed with 18 mm thick inner wooden frame.<br><br>Fabric Type: 100% Wipeable Cotton.<br><br>High color accuracy of up to 1720 dpi, showing the finest details.<br><br>Easy to install due to wall anchors and double face adhesive tape.<br><br>5 mm thick carton packaging to ensure a safe shipping process.<br><br>Size: 100x60 cm</span></h4>', '15.00', '0.00', '1569', 'instock', '0', 1, '1673105282.jpg', NULL, 1, '2023-01-07 12:28:02', '2023-01-07 16:05:32', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `mobile`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 2, '1672601430.jpg', '0778084911', '123', '1231', 'Amman', '22', 'Jordan', '11181', '2023-01-01 10:26:03', '2023-01-01 16:31:59'),
(2, 4, '1672621630.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-01 22:06:51', '2023-01-01 22:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `rating` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_item_id`, `created_at`, `updated_at`) VALUES
(8, 5, 'Very cool', 32, '2023-01-06 02:52:06', '2023-01-06 02:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `facebook`, `twiter`, `pinterest`, `instagram`, `youtube`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Tulkarm@gmail.com', '778084911', 'Amman / Jordan', '#', '#', '#', '#', '#', '2022-12-31 11:00:14', '2023-01-05 20:50:28', '1672962628.png');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(11, 30, 'Po', '12', '785483954', 'emadhashash76@gmail.com', '50', '13', 'Amman', 'ad', 'Jordan', '11181', '2023-01-06 01:32:32', '2023-01-06 01:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Modern(canvas)', 'moderncanvas', 1, '2023-01-02 09:51:33', '2023-01-03 00:11:00'),
(2, 'Islamic & decorations(canvas)', 'islamic-decorationscanvas', 1, '2023-01-02 09:53:03', '2023-01-03 00:11:14'),
(3, 'Expressions(canvas)', 'expressionscanvas', 1, '2023-01-02 09:53:38', '2023-01-03 00:11:27'),
(4, 'Modern(MDF)', 'modernmdf', 2, '2023-01-02 09:54:11', '2023-01-03 00:10:16'),
(5, 'Islamic & decorations(MDF)', 'islamic-decorationsmdf', 2, '2023-01-02 09:54:20', '2023-01-03 00:10:30'),
(6, 'Expressions(MDF)', 'expressionsmdf', 2, '2023-01-02 09:54:33', '2023-01-03 00:13:25'),
(7, 'Acrylic watches', 'acrylic-watches', 4, '2023-01-02 09:55:29', '2023-01-02 09:55:29'),
(8, 'wooden decorative clocks', 'wooden-decorative-clocks', 4, '2023-01-02 09:55:44', '2023-01-02 09:55:44'),
(9, 'Sticker Watches', 'sticker-watches', 4, '2023-01-02 09:55:55', '2023-01-02 09:55:55'),
(11, 'Movies and series ', 'movies-and-series', 1, '2023-01-03 00:12:18', '2023-01-03 00:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(16, 1, 30, 'cod', 'pending', '2023-01-06 01:32:32', '2023-01-06 01:32:32'),
(17, 2, 31, 'cod', 'pending', '2023-01-06 01:59:28', '2023-01-06 01:59:28'),
(18, 2, 32, 'cod', 'pending', '2023-01-16 09:31:19', '2023-01-16 09:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for Normal User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emadhashash', 'emadhashash76@gmail.com', NULL, '$2y$10$h2dt4YQeDRe/Hydovh5blOLjsZ38dz1dL3q1ysXW.ycAP/Bwd5rJq', 'ADM', NULL, '2022-12-18 17:38:02', '2022-12-18 17:38:02'),
(2, 'emad hashash75', 'emadhashash75@gmail.com', NULL, '$2y$10$WU8z.ZP3iucyuaC/hEco8u0aY21zZvLgUHePF/k7heDEUS/h6J0N.', 'USR', 'fGAeH472VvMNSdUamtFo36MrMHDjDtVZ6leJWTCR1O2i3F4Ety5fCCnEmu1e', '2022-12-19 04:38:57', '2023-01-01 21:55:42'),
(4, 'omaraaaa', 'omaraaaa@gmail.com', NULL, '$2y$10$zOQvkHU0HKu7bigG/s.KsO5Kndktwd3.MmFjB73c67nbh1h4xvugG', 'USR', NULL, '2022-12-25 11:48:24', '2022-12-25 11:48:24'),
(5, 'emadhashash101', 'emad.cuker@gmail.com', NULL, '$2y$10$vjup.YNcRlFES1wSVEmKTu86cAuWUVzS95mfRAWeNTE12u5XZN5na', 'USR', NULL, '2023-01-01 22:07:55', '2023-01-01 22:07:55'),
(6, 'emadhashash', 'om@gmail.com', NULL, '$2y$10$7Z8VUHTTWOM4QNQI9Dd41OWYezXSlCXvogpitNMBHRw9Jvrmgiry6', 'USR', NULL, '2023-01-01 22:37:58', '2023-01-01 22:37:58'),
(7, 'emadhashash111111111', 'emadhashash761@gmail.com', NULL, '$2y$10$Njba1FAu.j0HeNQmDbDSRO3xcNX0proIU/nMoR9bb25pqK.4t0kFG', 'USR', NULL, '2023-01-01 22:42:08', '2023-01-01 22:42:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `coupons22`
--
ALTER TABLE `coupons22`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupons22`
--
ALTER TABLE `coupons22`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
