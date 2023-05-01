-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2023. Ápr 30. 06:35
-- Kiszolgáló verziója: 5.7.36
-- PHP verzió: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `almaskosar_webshop_v2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `table_name` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `popular` tinyint(4) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

--
-- A tábla adatainak kiíratása `categories`
--

INSERT INTO `categories` (`id`, `name`, `table_name`, `description`, `status`, `popular`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mobiltelefonok', 'iphones', 'Apple okostelefonok iPhone 12-től a legújabbakig.', 0, 0, 'Iphone_14_pro_kat.png', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(2, 'Táblagépek', 'ipads', 'Apple tabletek - iPad, iPad Pro, iPad Mini - különböző színekben, méretben és tárhellyel.', 0, 0, 'iPad_pro_kat.png', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(3, 'Laptopok', 'macbooks', 'A MacBook Pro az Apple professzionális hordozható számítógépe. 2006-ban mutatta be az Apple, 2020-ig kizárólag Intel processzorral szerelték, 2020. novemberében az Apple saját processzorával mutatott be MacBook Pro-t.', 0, 0, 'MacBook_Pro_kat.png', '2023-04-30 04:34:30', '2023-04-30 04:34:30');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `connection` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `queue` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_hungarian_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_hungarian_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_18_130411_create_categories_table', 1),
(6, '2023_02_22_103829_create_carts_table', 1),
(7, '2023_02_23_183225_create_products_table', 1),
(8, '2023_03_07_080126_create_orders_table', 1),
(9, '2023_03_07_102226_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `customer_code` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `message` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_hungarian_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(4) NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `cpu` varchar(50) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `memory` int(11) DEFAULT NULL,
  `storage` int(11) NOT NULL,
  `cellular` tinyint(4) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_hungarian_ci,
  `popular` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `category_id`, `model`, `color`, `cpu`, `memory`, `storage`, `cellular`, `description`, `popular`, `status`, `price`, `sale_price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'iPhone 14 Pro Max', 'mélylila', NULL, NULL, 128, NULL, NULL, 0, 1, 629990, NULL, 5, 'iPhone14proMaxMelylila.jpg', NULL, NULL),
(2, 1, 'iPhone 14 Pro Max', 'mélylila', NULL, NULL, 256, NULL, NULL, 1, 1, 689990, NULL, 0, 'iPhone14proMaxMelylila.jpg', NULL, NULL),
(3, 1, 'iPhone 14 Pro Max', 'mélylila', NULL, NULL, 512, NULL, NULL, 0, 1, 809990, NULL, 3, 'iPhone14proMaxMelylila.jpg', NULL, NULL),
(4, 1, 'iPhone 14 Pro Max', 'arany', NULL, NULL, 128, NULL, NULL, 0, 1, 629990, NULL, 0, 'iPhone14proMaxArany.jpg', NULL, NULL),
(5, 1, 'iPhone 14 Pro Max', 'arany', NULL, NULL, 256, NULL, NULL, 0, 1, 689990, NULL, 3, 'iPhone14proMaxArany.jpg', NULL, NULL),
(6, 1, 'iPhone 14 Pro Max', 'arany', NULL, NULL, 512, NULL, NULL, 0, 1, 809990, NULL, 3, 'iPhone14proMaxArany.jpg', NULL, NULL),
(7, 1, 'iPhone 14 Pro Max', 'arany', NULL, NULL, 1, NULL, NULL, 0, 1, 929990, NULL, 3, 'iPhone14proMaxArany.jpg', NULL, NULL),
(8, 1, 'iPhone 14 Pro Max', 'ezüst', NULL, NULL, 128, NULL, NULL, 1, 1, 629990, NULL, 0, 'iPhone14proMaxEzust.jpg', NULL, NULL),
(9, 1, 'iPhone 14 Pro Max', 'ezüst', NULL, NULL, 256, NULL, NULL, 0, 1, 689990, NULL, 0, 'iPhone14proMaxEzust.jpg', NULL, NULL),
(10, 1, 'iPhone 14 Pro', 'mélylila', NULL, NULL, 128, NULL, NULL, 0, 1, 569990, NULL, 0, 'iPhone14proMelylila.jpg', NULL, NULL),
(11, 1, 'iPhone 14 Pro', 'mélylila', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14proMelylila.jpg', NULL, NULL),
(12, 1, 'iPhone 14 Pro', 'mélylila', NULL, NULL, 512, NULL, NULL, 1, 1, 749990, NULL, 2, 'iPhone14proMelylila.jpg', NULL, NULL),
(13, 1, 'iPhone 14 Pro', 'mélylila', NULL, NULL, 1, NULL, NULL, 0, 1, 869990, NULL, 2, 'iPhone14proMelylila.jpg', NULL, NULL),
(14, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 128, NULL, NULL, 1, 1, 569990, NULL, 2, 'iPhone14proArany.jpg', NULL, NULL),
(15, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14proArany.jpg', NULL, NULL),
(16, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14proArany.jpg', NULL, NULL),
(17, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14proArany.jpg', NULL, NULL),
(18, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 512, NULL, NULL, 0, 1, 749990, NULL, 0, 'iPhone14proArany.jpg', NULL, NULL),
(19, 1, 'iPhone 14 Pro', 'arany', NULL, NULL, 1, NULL, NULL, 0, 1, 869990, NULL, 3, 'iPhone14proArany.jpg', NULL, NULL),
(20, 1, 'iPhone 14 Pro', 'ezüst', NULL, NULL, 128, NULL, NULL, 0, 1, 569990, NULL, 0, 'iPhone14proEzust.jpg', NULL, NULL),
(21, 1, 'iPhone 14 Pro', 'ezüst', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 4, 'iPhone14proEzust.jpg', NULL, NULL),
(22, 1, 'iPhone 14 Pro', 'ezüst', NULL, NULL, 512, NULL, NULL, 1, 1, 749990, NULL, 2, 'iPhone14proEzust.jpg', NULL, NULL),
(23, 1, 'iPhone 14 Pro', 'ezüst', NULL, NULL, 1, NULL, NULL, 0, 1, 869990, NULL, 4, 'iPhone14proEzust.jpg', NULL, NULL),
(24, 1, 'iPhone 14 Pro', 'asztrofekete', NULL, NULL, 128, NULL, NULL, 1, 1, 569990, NULL, 8, 'iPhone14proAsztrofekete.jpg', NULL, NULL),
(25, 1, 'iPhone 14 Pro', 'asztrofekete', NULL, NULL, 256, NULL, NULL, 0, 1, 629990, NULL, 8, 'iPhone14proAsztrofekete.jpg', NULL, NULL),
(26, 1, 'iPhone 14 Pro', 'asztrofekete', NULL, NULL, 512, NULL, NULL, 0, 1, 749990, NULL, 8, 'iPhone14proAsztrofekete.jpg', NULL, NULL),
(27, 1, 'iPhone 14 Pro', 'asztrofekete', NULL, NULL, 1, NULL, NULL, 0, 1, 869990, NULL, 0, 'iPhone14proAsztrofekete.jpg', NULL, NULL),
(28, 1, 'iPhone 14 Plus', 'kék', NULL, NULL, 128, NULL, NULL, 0, 1, 499990, NULL, 3, 'iPhone14PlusKek.jpg', NULL, NULL),
(29, 1, 'iPhone 14 Plus', 'kék', NULL, NULL, 256, NULL, NULL, 1, 1, 559990, NULL, 3, 'iPhone14PlusKek.jpg', NULL, NULL),
(30, 1, 'iPhone 14 Plus', 'kék', NULL, NULL, 512, NULL, NULL, 0, 1, 679990, NULL, 1, 'iPhone14PlusKek.jpg', NULL, NULL),
(31, 1, 'iPhone 14 Plus', 'lila', NULL, NULL, 128, NULL, NULL, 1, 1, 499990, NULL, 1, 'iPhone14PlusLila.jpg', NULL, NULL),
(32, 1, 'iPhone 14 Plus', 'lila', NULL, NULL, 256, NULL, NULL, 1, 1, 559990, NULL, 2, 'iPhone14PlusLila.jpg', NULL, NULL),
(33, 1, 'iPhone 14 Plus', 'lila', NULL, NULL, 512, NULL, NULL, 1, 1, 679990, NULL, 2, 'iPhone14PlusLila.jpg', NULL, NULL),
(34, 1, 'iPhone 14 Plus', 'éjfekete', NULL, NULL, 128, NULL, NULL, 0, 1, 499990, NULL, 5, 'iPhone14PlusEjfekete.jpg', NULL, NULL),
(35, 1, 'iPhone 14 Plus', 'éjfekete', NULL, NULL, 256, NULL, NULL, 0, 1, 559990, NULL, 3, 'iPhone14PlusEjfekete.jpg', NULL, NULL),
(36, 1, 'iPhone 14 Plus', 'éjfekete', NULL, NULL, 512, NULL, NULL, 1, 1, 679990, NULL, 3, 'iPhone14PlusEjfekete.jpg', NULL, NULL),
(37, 1, 'iPhone 14 Plus', 'csillagfény', NULL, NULL, 128, NULL, NULL, 0, 1, 499990, NULL, 3, 'iPhone14PlusCsillagfeny.jpg', NULL, NULL),
(38, 1, 'iPhone 14 Plus', 'csillagfény', NULL, NULL, 256, NULL, NULL, 1, 1, 559990, NULL, 3, 'iPhone14PlusCsillagfeny.jpg', NULL, NULL),
(39, 1, 'iPhone 14 Plus', 'csillagfény', NULL, NULL, 512, NULL, NULL, 0, 1, 679990, NULL, 3, 'iPhone14PlusCsillagfeny.jpg', NULL, NULL),
(40, 1, 'iPhone 14 Plus', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 0, 1, 499990, NULL, 6, 'iPhone14PlusProductRed.jpg', NULL, NULL),
(41, 1, 'iPhone 14 Plus', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 1, 1, 559990, NULL, 4, 'iPhone14PlusProductRed.jpg', NULL, NULL),
(42, 1, 'iPhone 14 Plus', '(PRODUCT)RED', NULL, NULL, 512, NULL, NULL, 0, 1, 679990, NULL, 2, 'iPhone14PlusProductRed.jpg', NULL, NULL),
(43, 1, 'iPhone 14', 'kék', NULL, NULL, 128, NULL, NULL, 0, 1, 449990, NULL, 3, 'iPhone14PlusKek.jpg', NULL, NULL),
(44, 1, 'iPhone 14', 'kék', NULL, NULL, 256, NULL, NULL, 1, 1, 509990, NULL, 1, 'iPhone14PlusKek.jpg', NULL, NULL),
(45, 1, 'iPhone 14', 'kék', NULL, NULL, 512, NULL, NULL, 0, 1, 629990, NULL, 1, 'iPhone14PlusKek.jpg', NULL, NULL),
(46, 1, 'iPhone 14', 'lila', NULL, NULL, 128, NULL, NULL, 1, 1, 449990, NULL, 4, 'iPhone14PlusKek.jpg', NULL, NULL),
(47, 1, 'iPhone 14', 'lila', NULL, NULL, 256, NULL, NULL, 1, 1, 509990, NULL, 2, 'iPhone14PlusKek.jpg', NULL, NULL),
(48, 1, 'iPhone 14', 'lila', NULL, NULL, 512, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14PlusKek.jpg', NULL, NULL),
(49, 1, 'iPhone 14', 'éjfekete', NULL, NULL, 128, NULL, NULL, 0, 1, 449990, NULL, 6, 'iPhone14Ejfekete.jpg', NULL, NULL),
(50, 1, 'iPhone 14', 'éjfekete', NULL, NULL, 256, NULL, NULL, 0, 1, 509990, NULL, 5, 'iPhone14Ejfekete.jpg', NULL, NULL),
(51, 1, 'iPhone 14', 'éjfekete', NULL, NULL, 512, NULL, NULL, 1, 1, 629990, NULL, 3, 'iPhone14Ejfekete.jpg', NULL, NULL),
(52, 1, 'iPhone 14', 'csillagfény', NULL, NULL, 128, NULL, NULL, 0, 1, 449990, NULL, 5, 'iPhone14Csillagfeny.jpg', NULL, NULL),
(53, 1, 'iPhone 14', 'csillagfény', NULL, NULL, 256, NULL, NULL, 1, 1, 509990, NULL, 3, 'iPhone14Csillagfeny.jpg', NULL, NULL),
(54, 1, 'iPhone 14', 'csillagfény', NULL, NULL, 512, NULL, NULL, 0, 1, 629990, NULL, 2, 'iPhone14Csillagfeny.jpg', NULL, NULL),
(55, 1, 'iPhone 14', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 0, 1, 449990, NULL, 4, 'iPhone14ProductRed.jpg', NULL, NULL),
(56, 1, 'iPhone 14', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 1, 1, 509990, NULL, 3, 'iPhone14ProductRed.jpg', NULL, NULL),
(57, 1, 'iPhone 14', '(PRODUCT)RED', NULL, NULL, 512, NULL, NULL, 0, 1, 629990, NULL, 3, 'iPhone14ProductRed.jpg', NULL, NULL),
(58, 1, 'iPhone 13', 'rózsaszín', NULL, NULL, 128, NULL, NULL, 1, 1, 389000, NULL, 2, 'iphone13Rozsaszin.jpg', NULL, NULL),
(59, 1, 'iPhone 13', 'rózsaszín', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 1, 'iphone13Rozsaszin.jpg', NULL, NULL),
(60, 1, 'iPhone 13', 'rózsaszín', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 1, 'iphone13Rozsaszin.jpg', NULL, NULL),
(61, 1, 'iPhone 13', 'kék', NULL, NULL, 128, NULL, NULL, 0, 1, 389000, NULL, 1, 'iphone13Kek.jpg', NULL, NULL),
(62, 1, 'iPhone 13', 'kék', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 0, 'iphone13Kek.jpg', NULL, NULL),
(63, 1, 'iPhone 13', 'kék', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 0, 'iphone13Kek.jpg', NULL, NULL),
(64, 1, 'iPhone 13', 'éjfekete', NULL, NULL, 128, NULL, NULL, 0, 1, 389000, NULL, 3, 'iPhone13Ejfekete.jpg', NULL, NULL),
(65, 1, 'iPhone 13', 'éjfekete', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 1, 'iPhone13Ejfekete.jpg', NULL, NULL),
(66, 1, 'iPhone 13', 'éjfekete', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 0, 'iPhone13Ejfekete.jpg', NULL, NULL),
(67, 1, 'iPhone 13', 'csillagfény', NULL, NULL, 128, NULL, NULL, 0, 1, 389000, NULL, 2, 'iphone13Csillagfeny.jpg', NULL, NULL),
(68, 1, 'iPhone 13', 'csillagfény', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 1, 'iphone13Csillagfeny.jpg', NULL, NULL),
(69, 1, 'iPhone 13', 'csillagfény', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 0, 'iphone13Csillagfeny.jpg', NULL, NULL),
(70, 1, 'iPhone 13', 'zöld', NULL, NULL, 128, NULL, NULL, 0, 1, 389000, NULL, 2, 'iPhone12Zold.jpg', NULL, NULL),
(71, 1, 'iPhone 13', 'zöld', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 1, 'iPhone12Zold.jpg', NULL, NULL),
(72, 1, 'iPhone 13', 'zöld', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 0, 'iPhone12Zold.jpg', NULL, NULL),
(73, 1, 'iPhone 13', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 1, 1, 389000, NULL, 2, 'iPhone12ProductRed.jpg', NULL, NULL),
(74, 1, 'iPhone 13', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 0, 1, 449000, NULL, 0, 'iPhone12ProductRed.jpg', NULL, NULL),
(75, 1, 'iPhone 13', '(PRODUCT)RED', NULL, NULL, 512, NULL, NULL, 0, 1, 569000, NULL, 0, 'iPhone12ProductRed.jpg', NULL, NULL),
(76, 1, 'iPhone 13 mini', 'rózsaszín', NULL, NULL, 128, NULL, NULL, 1, 1, 339000, NULL, 2, 'iphone13MiniRozsaszin.jpg', NULL, NULL),
(77, 1, 'iPhone 13 mini', 'rózsaszín', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 1, 'iphone13MiniRozsaszin.jpg', NULL, NULL),
(78, 1, 'iPhone 13 mini', 'rózsaszín', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 0, 'iphone13MiniRozsaszin.jpg', NULL, NULL),
(79, 1, 'iPhone 13 mini', 'kék', NULL, NULL, 128, NULL, NULL, 0, 1, 339000, NULL, 2, 'iphone13MiniKek.jpg', NULL, NULL),
(80, 1, 'iPhone 13 mini', 'kék', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 1, 'iphone13MiniKek.jpg', NULL, NULL),
(81, 1, 'iPhone 13 mini', 'kék', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 0, 'iphone13MiniKek.jpg', NULL, NULL),
(82, 1, 'iPhone 13 mini', 'éjfekete', NULL, NULL, 128, NULL, NULL, 1, 1, 339000, NULL, 4, 'iPhone13MiniEjfekete.jpg', NULL, NULL),
(83, 1, 'iPhone 13 mini', 'éjfekete', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 2, 'iPhone13MiniEjfekete.jpg', NULL, NULL),
(84, 1, 'iPhone 13 mini', 'éjfekete', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 2, 'iPhone13MiniEjfekete.jpg', NULL, NULL),
(85, 1, 'iPhone 13 mini', 'csillagfény', NULL, NULL, 128, NULL, NULL, 1, 1, 339000, NULL, 3, 'iphone13MiniCsillagfeny.jpg', NULL, NULL),
(86, 1, 'iPhone 13 mini', 'csillagfény', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 1, 'iphone13MiniCsillagfeny.jpg', NULL, NULL),
(87, 1, 'iPhone 13 mini', 'csillagfény', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 0, 'iphone13MiniCsillagfeny.jpg', NULL, NULL),
(88, 1, 'iPhone 13 mini', 'zöld', NULL, NULL, 128, NULL, NULL, 0, 1, 339000, NULL, 1, 'iphone13MiniZold.jpg', NULL, NULL),
(89, 1, 'iPhone 13 mini', 'zöld', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 0, 'iphone13MiniZold.jpg', NULL, NULL),
(90, 1, 'iPhone 13 mini', 'zöld', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 0, 'iphone13MiniZold.jpg', NULL, NULL),
(91, 1, 'iPhone 13 mini', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 1, 1, 339000, NULL, 1, 'iPhone13MiniProductRed.jpg', NULL, NULL),
(92, 1, 'iPhone 13 mini', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 0, 1, 399000, NULL, 1, 'iPhone13MiniProductRed.jpg', NULL, NULL),
(93, 1, 'iPhone 13 mini', '(PRODUCT)RED', NULL, NULL, 512, NULL, NULL, 0, 1, 519000, NULL, 0, 'iPhone13MiniProductRed.jpg', NULL, NULL),
(94, 1, 'iPhone SE', 'éjfekete', NULL, NULL, 64, NULL, NULL, 1, 1, 239990, NULL, 1, 'iPhoneSEejfekete.jpg', NULL, NULL),
(95, 1, 'iPhone SE', 'éjfekete', NULL, NULL, 128, NULL, NULL, 0, 1, 269990, NULL, 1, 'iPhoneSEejfekete.jpg', NULL, NULL),
(96, 1, 'iPhone SE', 'éjfekete', NULL, NULL, 256, NULL, NULL, 0, 1, 329990, NULL, 0, 'iPhoneSEejfekete.jpg', NULL, NULL),
(97, 1, 'iPhone SE', 'csillagfény', NULL, NULL, 64, NULL, NULL, 0, 1, 239990, NULL, 1, 'iPhoneSEcsillagfeny.jpg', NULL, NULL),
(98, 1, 'iPhone SE', 'csillagfény', NULL, NULL, 128, NULL, NULL, 0, 1, 269990, NULL, 0, 'iPhoneSEcsillagfeny.jpg', NULL, NULL),
(99, 1, 'iPhone SE', 'csillagfény', NULL, NULL, 256, NULL, NULL, 0, 1, 329990, NULL, 0, 'iPhoneSEcsillagfeny.jpg', NULL, NULL),
(100, 1, 'iPhone SE', '(PRODUCT)RED', NULL, NULL, 64, NULL, NULL, 1, 1, 239990, NULL, 0, 'iPhoneSEproductRed.jpg', NULL, NULL),
(101, 1, 'iPhone SE', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 0, 1, 269990, NULL, 1, 'iPhoneSEproductRed.jpg', NULL, NULL),
(102, 1, 'iPhone SE', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 0, 1, 329990, NULL, 1, 'iPhoneSEproductRed.jpg', NULL, NULL),
(103, 1, 'iPhone 12', 'kék', NULL, NULL, 64, NULL, NULL, 1, 1, 339990, NULL, 0, 'iPhone12Kek.jpg', NULL, NULL),
(104, 1, 'iPhone 12', 'kék', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12Kek.jpg', NULL, NULL),
(105, 1, 'iPhone 12', 'kék', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 0, 'iPhone12Kek.jpg', NULL, NULL),
(106, 1, 'iPhone 12', 'lila', NULL, NULL, 64, NULL, NULL, 0, 1, 339990, NULL, 0, 'iPhone12Lila.jpg', NULL, NULL),
(107, 1, 'iPhone 12', 'lila', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12Lila.jpg', NULL, NULL),
(108, 1, 'iPhone 12', 'lila', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 0, 'iPhone12Lila.jpg', NULL, NULL),
(109, 1, 'iPhone 12', 'zöld', NULL, NULL, 64, NULL, NULL, 1, 1, 339990, NULL, 0, 'iPhone12Zold.jpg', NULL, NULL),
(110, 1, 'iPhone 12', 'zöld', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12Zold.jpg', NULL, NULL),
(111, 1, 'iPhone 12', 'zöld', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 0, 'iPhone12Zold.jpg', NULL, NULL),
(112, 1, 'iPhone 12', 'fehér', NULL, NULL, 64, NULL, NULL, 1, 1, 339990, NULL, 1, 'iPhone12Feher.jpg', NULL, NULL),
(113, 1, 'iPhone 12', 'fehér', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12Feher.jpg', NULL, NULL),
(114, 1, 'iPhone 12', 'fehér', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 1, 'iPhone12Feher.jpg', NULL, NULL),
(115, 1, 'iPhone 12', 'fekete', NULL, NULL, 64, NULL, NULL, 1, 1, 339990, NULL, 1, 'iPhone12Fekete.jpg', NULL, NULL),
(116, 1, 'iPhone 12', 'fekete', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12Fekete.jpg', NULL, NULL),
(117, 1, 'iPhone 12', 'fekete', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 1, 'iPhone12Fekete.jpg', NULL, NULL),
(118, 1, 'iPhone 12', '(PRODUCT)RED', NULL, NULL, 64, NULL, NULL, 1, 1, 339990, NULL, 1, 'iPhone12ProductRed.jpg', NULL, NULL),
(119, 1, 'iPhone 12', '(PRODUCT)RED', NULL, NULL, 128, NULL, NULL, 0, 1, 369990, NULL, 1, 'iPhone12ProductRed.jpg', NULL, NULL),
(120, 1, 'iPhone 12', '(PRODUCT)RED', NULL, NULL, 256, NULL, NULL, 0, 1, 429990, NULL, 1, 'iPhone12ProductRed.jpg', NULL, NULL),
(121, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 128, 0, NULL, 0, 1, 469990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(122, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 128, 0, NULL, 0, 1, 469990, NULL, 6, 'iPadPro11Ezust.jpg', NULL, NULL),
(123, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 256, 1, NULL, 1, 1, 529990, NULL, 0, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(124, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 256, 0, NULL, 0, 1, 529990, NULL, 4, 'iPadPro11Ezust.jpg', NULL, NULL),
(125, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 512, 0, NULL, 0, 1, 649990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(126, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 512, 1, NULL, 0, 1, 649990, NULL, 0, 'iPadPro11Ezust.jpg', NULL, NULL),
(127, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 1, 0, NULL, 0, 1, 889990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(128, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 1, 0, NULL, 1, 1, 889990, NULL, 0, 'iPadPro11Ezust.jpg', NULL, NULL),
(129, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 2, 0, NULL, 0, 1, 1129990, NULL, 3, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(130, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 2, 0, NULL, 0, 1, 1129990, NULL, 6, 'iPadPro11Ezust.jpg', NULL, NULL),
(131, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 128, 1, NULL, 0, 1, 469990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(132, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 128, 1, NULL, 1, 1, 469990, NULL, 4, 'iPadPro11Ezust.jpg', NULL, NULL),
(133, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 256, 1, NULL, 0, 1, 529990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(134, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 256, 1, NULL, 0, 1, 529990, NULL, 4, 'iPadPro11Ezust.jpg', NULL, NULL),
(135, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 512, 0, NULL, 0, 1, 649990, NULL, 4, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(136, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 512, 1, NULL, 0, 1, 649990, NULL, 5, 'iPadPro11Ezust.jpg', NULL, NULL),
(137, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 1, 1, NULL, 0, 1, 889990, NULL, 5, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(138, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 1, 1, NULL, 0, 1, 889990, NULL, 6, 'iPadPro11Ezust.jpg', NULL, NULL),
(139, 2, 'iPad Pro 11', 'asztroszürke', NULL, NULL, 2, 1, NULL, 0, 1, 1129990, NULL, 6, 'iPadPro11Asztroszurke.jpg', NULL, NULL),
(140, 2, 'iPad Pro 11', 'ezüst', NULL, NULL, 2, 1, NULL, 0, 1, 1129990, NULL, 3, 'iPadPro11Ezust.jpg', NULL, NULL),
(141, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 128, 0, NULL, 1, 1, 469990, NULL, 0, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(142, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 128, 0, NULL, 0, 1, 469990, NULL, 6, 'iPadPro129Ezust.jpg', NULL, NULL),
(143, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 256, 0, NULL, 0, 1, 529990, NULL, 6, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(144, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 256, 0, NULL, 1, 1, 529990, NULL, 4, 'iPadPro129Ezust.jpg', NULL, NULL),
(145, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 512, 0, NULL, 0, 1, 649990, NULL, 5, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(146, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 512, 0, NULL, 0, 1, 649990, NULL, 6, 'iPadPro129Ezust.jpg', NULL, NULL),
(147, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 1, 0, NULL, 0, 1, 889990, NULL, 6, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(148, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 1, 0, NULL, 0, 1, 889990, NULL, 3, 'iPadPro129Ezust.jpg', NULL, NULL),
(149, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 2, 0, NULL, 0, 1, 11299990, NULL, 2, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(150, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 2, 0, NULL, 1, 1, 11299990, NULL, 4, 'iPadPro129Ezust.jpg', NULL, NULL),
(151, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 128, 1, NULL, 0, 1, 469990, NULL, 5, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(152, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 128, 1, NULL, 0, 1, 469990, NULL, 2, 'iPadPro129Ezust.jpg', NULL, NULL),
(153, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 256, 1, NULL, 0, 1, 529990, NULL, 5, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(154, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 256, 1, NULL, 0, 1, 529990, NULL, 3, 'iPadPro129Ezust.jpg', NULL, NULL),
(155, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 512, 0, NULL, 0, 1, 649990, NULL, 1, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(156, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 512, 1, NULL, 0, 1, 649990, NULL, 6, 'iPadPro129Ezust.jpg', NULL, NULL),
(157, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 1, 1, NULL, 0, 1, 889990, NULL, 2, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(158, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 1, 1, NULL, 0, 1, 889990, NULL, 6, 'iPadPro129Ezust.jpg', NULL, NULL),
(159, 2, 'iPad Pro 12.9', 'asztroszürke', NULL, NULL, 2, 1, NULL, 0, 1, 1129990, NULL, 5, 'iPadPro129Asztroszurke.jpg', NULL, NULL),
(160, 2, 'iPad Pro 12.9', 'ezüst', NULL, NULL, 2, 1, NULL, 0, 1, 1129990, NULL, 6, 'iPadPro129Ezust.jpg', NULL, NULL),
(161, 2, 'iPad Air', 'asztroszürke', NULL, NULL, 64, 0, NULL, 0, 1, 344990, NULL, 4, 'iPadAirAsztroszurke.jpg', NULL, NULL),
(162, 2, 'iPad Air', 'asztroszürke', NULL, NULL, 64, 1, NULL, 0, 1, 344990, NULL, 6, 'iPadAirAsztroszurke.jpg', NULL, NULL),
(163, 2, 'iPad Air', 'asztroszürke', NULL, NULL, 256, 0, NULL, 0, 1, 434990, NULL, 3, 'iPadAirAsztroszurke.jpg', NULL, NULL),
(164, 2, 'iPad Air', 'asztroszürke', NULL, NULL, 256, 1, NULL, 0, 1, 434990, NULL, 6, 'iPadAirAsztroszurke.jpg', NULL, NULL),
(165, 2, 'iPad Air', 'kék', NULL, NULL, 64, 0, NULL, 1, 1, 344990, NULL, 1, 'iPadAirKek.jpg', NULL, NULL),
(166, 2, 'iPad Air', 'kék', NULL, NULL, 64, 1, NULL, 0, 1, 344990, NULL, 6, 'iPadAirKek.jpg', NULL, NULL),
(167, 2, 'iPad Air', 'kék', NULL, NULL, 256, 0, NULL, 0, 1, 434990, NULL, 4, 'iPadAirKek.jpg', NULL, NULL),
(168, 2, 'iPad Air', 'kék', NULL, NULL, 256, 1, NULL, 0, 1, 434990, NULL, 6, 'iPadAirKek.jpg', NULL, NULL),
(169, 2, 'iPad Air', 'rózsaszín', NULL, NULL, 64, 0, NULL, 0, 1, 344990, NULL, 1, 'iPadAirRozsaszin.jpg', NULL, NULL),
(170, 2, 'iPad Air', 'rózsaszín', NULL, NULL, 64, 1, NULL, 0, 1, 344990, NULL, 6, 'iPadAirRozsaszin.jpg', NULL, NULL),
(171, 2, 'iPad Air', 'rózsaszín', NULL, NULL, 256, 0, NULL, 0, 1, 434990, NULL, 4, 'iPadAirRozsaszin.jpg', NULL, NULL),
(172, 2, 'iPad Air', 'rózsaszín', NULL, NULL, 256, 1, NULL, 1, 1, 434990, NULL, 6, 'iPadAirRozsaszin.jpg', NULL, NULL),
(173, 2, 'iPad Air', 'lila', NULL, NULL, 64, 0, NULL, 0, 1, 344990, NULL, 1, 'iPadAirLila.jpg', NULL, NULL),
(174, 2, 'iPad Air', 'lila', NULL, NULL, 64, 1, NULL, 0, 1, 344990, NULL, 6, 'iPadAirLila.jpg', NULL, NULL),
(175, 2, 'iPad Air', 'lila', NULL, NULL, 256, 0, NULL, 0, 1, 434990, NULL, 4, 'iPadAirLila.jpg', NULL, NULL),
(176, 2, 'iPad Air', 'lila', NULL, NULL, 256, 1, NULL, 1, 1, 434990, NULL, 6, 'iPadAirLila.jpg', NULL, NULL),
(177, 2, 'iPad Air', 'csillagfeny', NULL, NULL, 64, 0, NULL, 0, 1, 344990, NULL, 1, 'iPadAirCsillagfeny.jpg', NULL, NULL),
(178, 2, 'iPad Air', 'csillagfeny', NULL, NULL, 64, 1, NULL, 0, 1, 344990, NULL, 6, 'iPadAirCsillagfeny.jpg', NULL, NULL),
(179, 2, 'iPad Air', 'csillagfeny', NULL, NULL, 256, 0, NULL, 1, 1, 434990, NULL, 4, 'iPadAirCsillagfeny.jpg', NULL, NULL),
(180, 2, 'iPad Air', 'csillagfeny', NULL, NULL, 256, 1, NULL, 0, 1, 434990, NULL, 6, 'iPadAirCsillagfeny.jpg', NULL, NULL),
(181, 3, 'MacBook Pro 16', 'asztroszürke', 'M2 Max', 32, 1, NULL, NULL, 0, 1, 1749990, NULL, 1, 'macbookPro16asztroszurke.jpg', NULL, NULL),
(182, 3, 'MacBook Pro 16', 'ezust', 'M2 Max', 32, 1, NULL, NULL, 1, 1, 1749990, NULL, 1, 'macbookPro16ezust.jpg', NULL, NULL),
(183, 3, 'MacBook Pro 16', 'asztroszürke', 'M2 Pro', 16, 1, NULL, NULL, 0, 1, 1349990, NULL, 0, 'macbookPro16asztroszurke.jpg', NULL, NULL),
(184, 3, 'MacBook Pro 16', 'ezust', 'M2 Pro', 16, 1, NULL, NULL, 0, 1, 1349990, NULL, 1, 'macbookPro16ezust.jpg', NULL, NULL),
(185, 3, 'MacBook Pro 16', 'asztroszürke', 'M2 Pro', 16, 512, NULL, NULL, 0, 1, 1249990, NULL, 1, 'macbookPro16asztroszurke.jpg', NULL, NULL),
(186, 3, 'MacBook Pro 16', 'ezust', 'M2 Pro', 16, 512, NULL, NULL, 0, 1, 1249990, NULL, 2, 'macbookPro16ezust.jpg', NULL, NULL),
(187, 3, 'MacBook Pro 14', 'asztroszürke', 'M2 Max', 32, 1, NULL, NULL, 0, 1, 1349990, NULL, 1, 'macbookPro14asztroszurke.jpg', NULL, NULL),
(188, 3, 'MacBook Pro 14', 'ezust', 'M2 Max', 32, 1, NULL, NULL, 0, 1, 1349990, NULL, 1, 'macbookPro14ezust.jpg', NULL, NULL),
(189, 3, 'MacBook Pro 14', 'asztroszürke', 'M2 Pro', 16, 1, NULL, NULL, 0, 1, 1249990, NULL, 1, 'macbookPro14asztroszurke.jpg', NULL, NULL),
(190, 3, 'MacBook Pro 14', 'ezust', 'M2 Pro', 16, 1, NULL, NULL, 0, 1, 1249990, NULL, 1, 'macbookPro14ezust.jpg', NULL, NULL),
(191, 3, 'MacBook Pro 14', 'asztroszürke', 'M2 Pro', 16, 512, NULL, NULL, 0, 1, 999990, NULL, 1, 'macbookPro14asztroszurke.jpg', NULL, NULL),
(192, 3, 'MacBook Pro 14', 'ezust', 'M2 Pro', 16, 512, NULL, NULL, 0, 1, 999990, NULL, 1, 'macbookPro14ezust.jpg', NULL, NULL),
(193, 3, 'MacBook Pro 13', 'asztroszürke', 'M2', 8, 512, NULL, NULL, 0, 1, 749990, NULL, 1, 'macbookPro13asztroszurke.jpg', NULL, NULL),
(194, 3, 'MacBook Pro 13', 'ezust', 'M2', 8, 512, NULL, NULL, 0, 1, 749990, NULL, 1, 'macbookPro13ezust.jpg', NULL, NULL),
(195, 3, 'MacBook Pro 13', 'asztroszürke', 'M2', 8, 256, NULL, NULL, 1, 1, 649990, NULL, 1, 'macbookPro13asztroszurke.jpg', NULL, NULL),
(196, 3, 'MacBook Pro 13', 'ezust', 'M2', 8, 256, NULL, NULL, 0, 1, 649990, NULL, 1, 'macbookPro13ezust.jpg', NULL, NULL),
(197, 3, 'MacBook Air', 'éjfekete', 'M2', 8, 512, NULL, NULL, 1, 1, 749990, NULL, 1, 'macbookAirejfekete.jpg', NULL, NULL),
(198, 3, 'MacBook Air', 'csillagfény', 'M2', 8, 512, NULL, NULL, 1, 1, 749990, NULL, 1, 'macbookAir13csillagfeny.jpg', NULL, NULL),
(199, 3, 'MacBook Air', 'asztroszürke', 'M2', 8, 512, NULL, NULL, 0, 1, 749990, NULL, 1, 'macbookAirasztroszurke.jpg', NULL, NULL),
(200, 3, 'MacBook Air', 'ezust', 'M2', 8, 512, NULL, NULL, 1, 1, 749990, NULL, 1, 'macbookAir13ezust.jpg', NULL, NULL),
(201, 3, 'MacBook Air', 'asztroszürke', 'M1', 8, 256, NULL, NULL, 0, 1, 499990, NULL, 1, 'macbookAirasztroszurke.jpg', NULL, NULL),
(202, 3, 'MacBook Air', 'arany', 'M1', 8, 256, NULL, NULL, 1, 1, 499990, NULL, 1, 'macbookAirArany.jpg', NULL, NULL),
(203, 3, 'MacBook Air', 'ezust', 'M1', 8, 256, NULL, NULL, 1, 1, 499990, NULL, 1, 'macbookAir13ezust.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `customer_code` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT '0',
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci ROW_FORMAT=DYNAMIC;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `last_name`, `first_name`, `postal_code`, `city`, `address`, `phone_number`, `customer_code`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pásztor Szandra', 'pasztorszandra430@gmail.com', '2023-04-30 04:34:28', '$2y$10$lJPZMDWuBgsGJ1ROIWQNhuHkK8JU1/cTT2/wls2W3D9VlMh272Ism', 'Pásztor', 'Szandra', 2045, 'Békéscsaba', 'Sándor út 5. 84. ajtó', '06-91-789-1449', '430', 0, 'mfxaXBWfFe', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(2, 'Fekete Mátyás', 'feketematyas860@gmail.com', '2023-04-30 04:34:28', '$2y$10$97wbItMypWJOkbuVcTyEVuAYV1gGgOoRx6UHmNtXnUkkyrbd.k8Y2', 'Fekete', 'Mátyás', 2045, 'Tatabánya', 'Boróka utca 12. 26. emelet', '+36883288196', '860', 0, '8w2P0q1HeY', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(3, 'Bodnár Olívia', 'bodnarolivia872@gmail.com', '2023-04-30 04:34:28', '$2y$10$dnBz01pXYjoh/kfGw0HO2O5e0ma8.l3mGHjmUB92kuBKmocvfIpAe', 'Bodnár', 'Olívia', 1156, 'Kecskemét', 'Mátyás forduló 99. 58. emelet', '06-80-151-2880', '872', 0, 'MiIbWaz3wI', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(4, 'Szilágyi Barnabás', 'szilagyibarnabas729@gmail.com', '2023-04-30 04:34:28', '$2y$10$8OmW5MX/.2C.U7xjVZ8.NOZ1aAyfN/LdVff.R4pCxvdQu4yxAXwTa', 'Szilágyi', 'Barnabás', 2045, 'Barcs', 'Végh liget 92. 69. emelet', '+36395852569', '729', 0, 'Bm1jE0jxZp', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(5, 'Tamás Gabriella', 'tamasgabriella226@gmail.com', '2023-04-30 04:34:29', '$2y$10$MnYauFoxGdriDqkE3fb4CedV6tHrLabG.cIFwbWsNVOET73WCWlqq', 'Tamás', 'Gabriella', 1156, 'Pécsvárad', 'Barna köz 12.', '06-41-214-6298', '226', 0, 'aqR99nwtLW', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(6, 'Szalai Albert', 'szalaialbert173@gmail.com', '2023-04-30 04:34:29', '$2y$10$0.P1Uipkbi9fnYn5nCDBBuaSUpiJtWNhTVTMG8A6gUnB5awdzy5d6', 'Szalai', 'Albert', 1541, 'Budapest', 'János rakpart 971.', '+36(43)562-582', '173', 0, 'pEv5s5SLcW', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(7, 'Tamás Gábor', 'tamasgabor419@gmail.com', '2023-04-30 04:34:29', '$2y$10$cuE5uP1EprOqoeaa3z6AH.d5ds5qdKWpK6Ib3LHhW0cnS3FH.QosW', 'Tamás', 'Gábor', 1541, 'Kaposvár', 'Borbély dűlőút 9. 60. ajtó', '+36-22-375-1671', '419', 0, 'A2x88trXjH', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(8, 'Török Flóra', 'torokflóra338@gmail.com', '2023-04-30 04:34:29', '$2y$10$mwYxPpueWpfI7AJmFephae6GM0Sx2.PzJ7aVbDR3frtEwYiVCUPoq', 'Török', 'Flóra', 1541, 'Budapest', 'Pataki fasor 443. 93. emelet', '06(46)195-893', '338', 0, 'IC53VtLJMd', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(9, 'Boros Evelin', 'borosevelin117@gmail.com', '2023-04-30 04:34:29', '$2y$10$T5Tz4lTbk2Jmlt39RAXrd.bKYUaxp0YONGuj/IaSCkOlGl07eLDNy', 'Boros', 'Evelin', 2045, 'Budapest', 'Antal sugárút 39. 63. emelet', '06(17)926-062', '117', 0, 'Z6okLdpvB9', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(10, 'Bakos Beatrix', 'bakosbeatrix827@gmail.com', '2023-04-30 04:34:29', '$2y$10$.6AZuhed0D06Tfze64kbSePzoCKVr44heaxEW0nXrUJVBA0.UGxYO', 'Bakos', 'Beatrix', 1156, 'Szigetvár', 'Szonja sétány 80.', '+36(09)976-057', '827', 0, 'xUG9c6piAa', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(11, 'Fodor Milla', 'fodormilla945@gmail.com', '2023-04-30 04:34:29', '$2y$10$L78UT4xGrutESNsagAc2oeUe.jlcG6PfkTv7dtoOiSRUAIHzFIpDa', 'Fodor', 'Milla', 2045, 'Pécs', 'Zoltán ösvény 6.', '+36-76-135-3579', '945', 0, 'WlxbPlHHqX', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(12, 'Pataki Andrea', 'patakiandrea257@gmail.com', '2023-04-30 04:34:29', '$2y$10$m4Wxxym42kUIKsvoMxWsde0ANKYFfcXF3z1/J4hpNg/kRsB5J.fdq', 'Pataki', 'Andrea', 1156, 'Budapest', 'Vincze utca 45. 44. ajtó', '+36912745964', '257', 0, '0saNF2J0oz', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(13, 'Vass Albert', 'vassalbert441@gmail.com', '2023-04-30 04:34:29', '$2y$10$aYGj3kFAsGfEg1MsBRZbDuJoeK/oohv9fhkQBe2HiWMA/LXRVpLSC', 'Vass', 'Albert', 1541, 'Budapest', 'Németh fasor 41.', '06-68-123-0079', '441', 0, 'avmOfFiDlw', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(14, 'Virág Fanni', 'viragfanni349@gmail.com', '2023-04-30 04:34:29', '$2y$10$e10hMdc3WKwtohWlfwZTEOSJt9i2zy.7smLwxYeSAPBdRbP/WpPyO', 'Virág', 'Fanni', 1156, 'Debrecen', 'Pál útja 3. 21. ajtó', '06(97)768-580', '349', 0, 'yK3S0WDT1r', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(15, 'Balla Gabriella', 'ballagabriella723@gmail.com', '2023-04-30 04:34:29', '$2y$10$55FAQvMs0SKdcIbsm/LcaeP7OwHnc1DqHe8aU5ziuXh.e/iSCpuYm', 'Balla', 'Gabriella', 1541, 'Vásárosnamény', 'Kelemen utca 1.', '+36(59)978-822', '723', 0, 'fvkMVgtw4g', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(16, 'Hegedüs Benedek', 'hegedusbenedek522@gmail.com', '2023-04-30 04:34:29', '$2y$10$CZKGxaGM7LB9TBgYHHMBHe59un259w0waDzbsojBIj9SKBfD4pUGu', 'Hegedüs', 'Benedek', 1541, 'Budapest', 'Antal híd 97. 38. emelet', '+36-56-409-9655', '522', 0, 'OgBIJVEGZh', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(17, 'Fekete Fanni', 'feketefanni910@gmail.com', '2023-04-30 04:34:29', '$2y$10$1PxvDaNwTju2UCqnqv8vkePr60BME5UJXlJyvYJkleorlle2ZJGJK', 'Fekete', 'Fanni', 2045, 'Budapest', 'Csenge liget 5. 67. emelet', '+36-73-195-6564', '910', 0, 'R1xTKEL7CA', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(18, 'Végh Balázs', 'veghbalazs285@gmail.com', '2023-04-30 04:34:29', '$2y$10$jOitom/a5YSohnsK05IMA.ID9NnqmbkS3Jwygx0MWpTp.OL/VPfYm', 'Végh', 'Balázs', 2045, 'Kalocsa', 'Erzsébet határút 24. 29. emelet', '+36-52-364-6522', '285', 0, 'jprL4ejd1d', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(19, 'Soós Imre', 'soósimre580@gmail.com', '2023-04-30 04:34:29', '$2y$10$rTbLQiQx7OIJ4Ib6VhVvkO61TA3EAY13T5RlksUTCfaIBsj97vDKC', 'Soós', 'Imre', 1541, 'Budapest', 'Szekeres köz 9.', '06-68-810-7445', '580', 0, 'HAwDj2T8P1', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(20, 'Dobos Hunor', 'doboshunor665@gmail.com', '2023-04-30 04:34:29', '$2y$10$9S3bEO9x6ZIWpSQDKYklV.0WZEzV7q92mWQl3/TIjY7ceG/.34o6S', 'Dobos', 'Hunor', 1156, 'Budapest', 'Patrik orom 34. 29. emelet', '06(70)212-015', '665', 0, 'qAERItSQD5', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(21, 'Dudás Dalma', 'dudasdalma698@gmail.com', '2023-04-30 04:34:29', '$2y$10$y/JDXk6LV3ENS8L2Y7jVMeMzf9bBqVJruOok6CZr1KiugPpAwf2rS', 'Dudás', 'Dalma', 2045, 'Budapest', 'Géza határút 5. 70. emelet', '+36(64)642-052', '698', 0, 'OoHSGwbAhi', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(22, 'Bálint Rudolf', 'balintrudolf796@gmail.com', '2023-04-30 04:34:29', '$2y$10$dnq6ErwrNHwJ04VdJfERDuJgFfC17jsfb33kZ6JejW/MQvWEJsakC', 'Bálint', 'Rudolf', 2045, 'Eger', 'Balázs ösvény 60. 45. emelet', '+36707767397', '796', 0, '9wk7QwO3pm', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(23, 'Dudás Barnabás', 'dudasbarnabas261@gmail.com', '2023-04-30 04:34:29', '$2y$10$0C9E/v2owIOpl2yN2Y3H9.PTdGU8oYbAh/gUOZBN0Jb/7iiyW3O96', 'Dudás', 'Barnabás', 1156, 'Tiszafüred', 'Bodnár dűlősor 4.', '06-96-085-4721', '261', 0, '1PPu2ZoaXd', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(24, 'Nagy László', 'nagylaszló717@gmail.com', '2023-04-30 04:34:29', '$2y$10$WWsMBudHLAA5t2TSABAagOTbvp6sOJ5ReuMmpiVfqxVQYXgrPEk8m', 'Nagy', 'László', 2045, 'Nyíregyháza', 'Zétény útja 45. 37. ajtó', '+36-91-811-6106', '717', 0, 'OVz1LabPX6', '2023-04-30 04:34:30', '2023-04-30 04:34:30'),
(25, 'Végh Bettina', 'veghbettina891@gmail.com', '2023-04-30 04:34:29', '$2y$10$U5K1AbjVjCWHO0NxCBzUGOfg1W6FzkUaoINgBDCxuJyfLDVcGp/hq', 'Végh', 'Bettina', 2045, 'Sopron', 'Balázs dűlősor 2. 82. emelet', '+36889217221', '891', 0, 'nGukjs7QRf', '2023-04-30 04:34:30', '2023-04-30 04:34:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
