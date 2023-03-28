-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2023 at 02:51 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeaconsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `accno`
--

DROP TABLE IF EXISTS `accno`;
CREATE TABLE IF NOT EXISTS `accno` (
  `id` int DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `acct_no` int DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL,
  `expire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int NOT NULL,
  `bname` varchar(40) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bname`, `status`) VALUES
(1, 'Access Bank', 1),
(2, 'Citibank', 1),
(3, 'Polaris Bank', 1),
(4, 'Ecobank', 1),
(5, 'Enterprise Bank ', 1),
(6, 'Fidelity Bank', 1),
(7, 'FIRST BANK', 1),
(8, 'FCMB', 1),
(9, 'GTB', 1),
(10, 'Heritage Bank', 1),
(11, 'Key Stone Bank', 1),
(12, 'MainStreet Bank', 1),
(13, 'Ready Cash', 1),
(14, 'Stanbic IBTC', 1),
(15, 'Standard Chartered Bank', 1),
(16, 'Sterling Bank Plc', 1),
(17, 'SunTrust Bank Nigeria Limited', 1),
(18, 'Union Bank of Nigeria Plc', 1),
(19, 'UBA', 1),
(20, 'Unity  Bank ', 1),
(21, 'Wema Bank', 1),
(22, 'Zenith Bank ', 1),
(23, 'Kuda Micro Finance Bank', 1),
(24, 'Jaiz bank', 1),
(25, 'Povidus Bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

DROP TABLE IF EXISTS `coins`;
CREATE TABLE IF NOT EXISTS `coins` (
  `sn` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `wallet` varchar(500) DEFAULT NULL,
  `api` int DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`sn`, `name`, `status`, `wallet`, `api`, `updated_at`) VALUES
(1, 'Crypto', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 95, '2023-03-15 17:02:11'),
(2, 'Online Gateway(Paystack)', 1, '0xb24a0640bfa150d55253b05425abb5b0f6e0b0e2', 80, '0000-00-00 00:00:00'),
(3, 'Perfect Money', 1, 'TChiQYmNQ4K6cQMLUhr4qx74aqz4y5TZAF', 518, '0000-00-00 00:00:00'),
(4, 'Payee', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 2321, '0000-00-00 00:00:00'),
(9, 'Bank Deposit', 1, '0', 560, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
CREATE TABLE IF NOT EXISTS `configs` (
  `n_rate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`n_rate`, `updated_at`, `created_at`) VALUES
('595', '2023-03-15 17:02:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_deposits`
--

DROP TABLE IF EXISTS `crypto_deposits`;
CREATE TABLE IF NOT EXISTS `crypto_deposits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uID` bigint NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_deposits`
--

INSERT INTO `crypto_deposits` (`id`, `uID`, `payment_id`, `order_id`, `type`, `payment_amount`, `tax_amount`, `amount`, `coin`, `pay_amount`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, '5905816628', 'QKXJKELA', 'Crypto', '100', '4.773446', '95.226554', 'btc', '0.00363923', 'waiting', '2023-03-18 14:47:12', '2023-03-18 14:47:12'),
(5, 1, '5946464295', 'TBWP6TCC', 'Crypto', '100', '5.993153', '94.006847', 'btc', '0.00357369', 'waiting', '2023-03-20 10:42:10', '2023-03-20 10:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `sn` int NOT NULL AUTO_INCREMENT,
  `uID` int DEFAULT NULL,
  `cur` varchar(20) DEFAULT NULL,
  `wallet` varchar(400) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `bname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `accno` varchar(100) DEFAULT NULL,
  `benename` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

DROP TABLE IF EXISTS `distributors`;
CREATE TABLE IF NOT EXISTS `distributors` (
  `dID` int NOT NULL AUTO_INCREMENT,
  `dName` varchar(70) DEFAULT NULL,
  `dActName` varchar(70) DEFAULT NULL,
  `dBank` int DEFAULT NULL,
  `dActNumber` varchar(25) DEFAULT NULL,
  `dBtcAdd` varchar(100) DEFAULT NULL,
  `dPhone` varchar(25) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`dID`, `dName`, `dActName`, `dBank`, `dActNumber`, `dBtcAdd`, `dPhone`, `status`, `date`) VALUES
(1, 'test', 'test', 6, '999', NULL, '', 1, '2019-07-12 09:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `d_method`
--

DROP TABLE IF EXISTS `d_method`;
CREATE TABLE IF NOT EXISTS `d_method` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_method`
--

INSERT INTO `d_method` (`id`, `name`, `status`, `adate`) VALUES
(1, 'Paystack', 1, '2022-06-24 14:55:15'),
(2, 'e-Naira', 1, '2022-06-24 14:55:15'),
(3, 'Crypto', 1, '2022-06-24 14:56:21'),
(4, 'Perfectmoney', 1, '2022-06-24 14:56:21'),
(5, 'Payeer', 1, '2022-06-24 14:56:21'),
(6, 'Bank Deposit', 1, '2022-06-24 14:56:21'),
(7, 'Manual Deposit', 1, '2023-03-17 11:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `sn` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `wallet` varchar(500) DEFAULT NULL,
  `api` int DEFAULT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`sn`, `name`, `status`, `wallet`, `api`) VALUES
(1, 'Withdrawal', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 25),
(2, 'Internal Transfer', 1, '0xb24a0640bfa150d55253b05425abb5b0f6e0b0e2', 30);

-- --------------------------------------------------------

--
-- Table structure for table `holding`
--

DROP TABLE IF EXISTS `holding`;
CREATE TABLE IF NOT EXISTS `holding` (
  `sn` int NOT NULL AUTO_INCREMENT,
  `title` int DEFAULT NULL,
  `acc_no` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `acc_name` varchar(200) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `cby` int DEFAULT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manual_deposits`
--

DROP TABLE IF EXISTS `manual_deposits`;
CREATE TABLE IF NOT EXISTS `manual_deposits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uID` bigint NOT NULL,
  `amount` bigint NOT NULL,
  `proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` bigint NOT NULL,
  `status` int NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manual_deposits`
--

INSERT INTO `manual_deposits` (`id`, `uID`, `amount`, `proof`, `paid`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 10, 'ZeroBuilds__Final_Design_V1.png', 1, 1, '2023-03-17 14:56:39', '2023-03-17 14:57:09'),
(5, 1, 10, 'shahzaib_develop.png', 1, 1, '2023-03-20 10:35:30', '2023-03-20 10:38:06'),
(6, 1, 20, 'shahzaib_develop.png', 1, 1, '2023-03-20 10:39:15', '2023-03-20 10:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_151235_userbanks', 2),
(6, '2023_03_11_151522_create_user_banks_table', 3),
(7, '2023_02_09_151800_create_deposits_table', 4),
(8, '2023_02_09_152541_create_wallet_controllers_table', 4),
(9, '2023_03_17_110355_create_manual_deposits_table', 4),
(10, '2023_03_18_090945_create_crypto_deposits_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `sn` int NOT NULL AUTO_INCREMENT,
  `status_code` int DEFAULT NULL,
  `st_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `status_code` (`status_code`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`sn`, `status_code`, `st_name`) VALUES
(1, 0, 'Disabled'),
(2, 1, 'Active'),
(3, 2, 'Email Verification Required'),
(4, 3, 'Processed'),
(5, 4, 'blocked'),
(6, 5, 'Pending'),
(7, 6, 'Blocked'),
(8, 7, 'Blocked - Fake upload'),
(9, 8, 'Disabled'),
(11, 10, 'Awaiting Payment'),
(12, 11, 'Awaiting Confirmation'),
(13, 12, 'Confirmed'),
(14, 13, 'Disputed'),
(10, 9, 'Complete'),
(15, 14, ' Super Request'),
(16, 15, 'Awaiting Re-match'),
(17, 16, 'Queued for Matching'),
(18, 17, 'Pin not yet purchased');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enaira` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binary_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_status` int NOT NULL DEFAULT '1' COMMENT '0 = ban , 1=active',
  `account_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `email_verified_at`, `password`, `dob`, `zipcode`, `address`, `state`, `country`, `doc_type`, `document`, `enaira`, `binary_id`, `status`, `user_type`, `user_status`, `account_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo User', '', 'demo@user.com', '+1234433222', NULL, '$2y$10$WjKsvntDiMbmkUygFy8Ude1bDEgXyjNP7E./NvsJhArGtCyTlE0Ey', '2023-03-01', 66000, 'street 1', 'Punjab', 'Pakistan', 'Drivers Lincense', 'Shahzaib_Hassan_-_Internship.pdf', '2187318723723', '68712300', 1, '0', 1, 'personal', NULL, '2023-02-06 11:04:48', '2023-03-20 11:26:28'),
(2, 'Admin', '', 'admin@zeacon.com', '', NULL, '$2y$10$WjKsvntDiMbmkUygFy8Ude1bDEgXyjNP7E./NvsJhArGtCyTlE0Ey', '', 0, '', '', '', '', '', '', '', 0, '1', 1, NULL, NULL, NULL, '2023-03-14 17:34:46'),
(3, 'Test Client', '', 'test@client.com', '+1 (695) 775-5978', NULL, '$2y$10$KuQ/P1tRXTAU.Rlv9zIRMejn6TPhpKRynqvgqDVP/iODXUmHDt4rO', '', 0, '', '', '', '', '', '', '', 0, '0', 1, 'personal', NULL, '2023-02-10 09:48:34', '2023-02-10 09:48:34'),
(4, 'Shahzaib Hassan', '', 'hacker7867575@gmail.com', '+923217352887', NULL, '$2y$10$D2tmQvMxqTfbpMspi2jsJOFRK3HnDujMhi9L6.v.RTOAoIk/9VaJO', '', 0, '', '', '', '', '', '', '', 0, '0', 1, NULL, NULL, '2023-03-10 13:01:58', '2023-03-15 14:21:56'),
(10, 'Testing', 'shahzaib', 'shahzaibpay@gmail.com', '+923739849493', NULL, '$2y$10$IH5bdmUaPpmfnLoEEZbUtOErVO1y2kg/ohw1D6kAdFxIZnjOTMEWa', '2023-03-01', NULL, 'Street 1', 'Punjab', 'Pakistan', NULL, NULL, NULL, NULL, 0, '0', 1, 'personal', NULL, '2023-03-16 17:13:26', '2023-03-16 17:13:26'),
(13, 'Shahzaib', 'shahzaibhasssan', 'shahzaibhassanonline@gmail.com', '03217352887', NULL, '$2y$10$XiwcYcy2Iz2sC19Kd/eC/urdz3lZQ7Z6ii4plhqvP7Q6ChcP.2Es.', '2023-03-06', NULL, 'Street 1', 'Punjab', 'Pakistan', NULL, NULL, NULL, NULL, 0, '0', 1, 'personal', NULL, '2023-03-18 14:39:06', '2023-03-20 11:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_banks`
--

DROP TABLE IF EXISTS `user_banks`;
CREATE TABLE IF NOT EXISTS `user_banks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` bigint NOT NULL,
  `accountno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_banks`
--

INSERT INTO `user_banks` (`id`, `userid`, `accountno`, `bank`, `accountname`, `bankphone`, `created_at`, `updated_at`) VALUES
(7, 1, '74329447832', 'Heritage Bank', 'shahzaib', '+926374848483', '2023-03-11 17:35:14', '2023-03-11 17:35:14'),
(8, 1, '74329447832', 'MainStreet Bank', 'shahzaib', '+926374848483', '2023-03-13 17:11:26', '2023-03-13 17:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uID` int DEFAULT NULL,
  `nar` varchar(1000) DEFAULT NULL,
  `cr` double DEFAULT NULL,
  `dr` double DEFAULT NULL,
  `url` text,
  `status` int DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `txnID` varchar(500) DEFAULT NULL,
  `rand` int DEFAULT NULL,
  `to_currency` varchar(50) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `invID` int DEFAULT NULL,
  `draw` int DEFAULT NULL,
  `to_u` int DEFAULT NULL,
  `from_u` int DEFAULT NULL,
  `accno` varchar(200) DEFAULT NULL,
  `gtype` int DEFAULT '2',
  `qr` varchar(200) DEFAULT NULL,
  `dtype` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3744 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `uID`, `nar`, `cr`, `dr`, `url`, `status`, `adate`, `type`, `address`, `txnID`, `rand`, `to_currency`, `amount`, `updated_at`, `created_at`, `invID`, `draw`, `to_u`, `from_u`, `accno`, `gtype`, `qr`, `dtype`) VALUES
(3577, 2, 'eNaira Deposit to [@zeacon.01] ', 1000, NULL, NULL, 1, '2022-03-17 14:05:43', 1, '@zeacon.01', NULL, NULL, '2', NULL, '2023-03-15 14:18:02', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3578, 1, 'Paystack deposit', 1000, NULL, NULL, 1, '2022-03-23 09:42:24', 1, NULL, '9q5a12jhyd', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3579, 1, 'Paystack deposit', 899, NULL, NULL, 0, '2022-03-23 13:17:48', 1, NULL, 'lr7l1cwcvx', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3580, 1, 'Crypto deposit', 700, NULL, NULL, 0, '2022-03-23 13:18:19', 1, 'TKpnzuRuC4QmcSfV5NDH971T4bEK3Gf7dP', '5954238511', NULL, 'usdttrc20', '699.614745', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3581, 2, 'Paystack deposit', 17.857142857143, NULL, NULL, 1, '2022-03-26 09:50:49', 1, NULL, 'nasonqmxjn', NULL, NULL, '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3582, 2, 'Crypto deposit', 10000, NULL, NULL, 0, '2022-03-26 09:53:27', 1, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3583, 3, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 1, '2022-04-01 07:11:55', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3584, 3, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 0, '2022-04-04 07:21:09', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3585, 1, 'eNaira Deposit to [@zeacon.01] ', 67.796610169492, NULL, NULL, 0, '2022-04-10 08:29:27', 1, '@zeacon.01', NULL, NULL, '2', '40000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3586, 3, 'Paystack deposit', 0.016949152542373, NULL, NULL, 1, '2022-04-15 06:11:22', 1, NULL, 'ovstuxdgu4', NULL, NULL, '10', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3587, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-15 08:11:04', 1, 'TG5KXy4f23jebJxax6rbFTSPJgxc1SWijp', '6151084864', NULL, 'usdttrc20', '10.001839', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3588, 3, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 0, '2022-04-15 08:21:12', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3589, 3, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 0, '2022-04-15 08:24:39', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3590, 3, 'Crypto deposit', 1000, NULL, NULL, 0, '2022-04-15 08:26:11', 1, 'TUaMAJqYrVDAXVeLiaEHyBZJd5btdbaDGF', '5041115572', NULL, 'usdttrc20', '999.399039', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3591, 4, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-23 05:08:31', 1, '3DAeTdmL9gb17qEynZPvVQsBwDqwaQFvAH', '6410221148', NULL, 'btc', '0.00252581', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3592, 4, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-23 05:10:52', 1, '3K5ikiUPTQnm2yHcnyTLm55Q2hpzSCNcR2', '4410264039', NULL, 'btc', '0.00252683', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3667, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-24 12:56:22', 1, NULL, 'c3hbmnwb2e', NULL, NULL, '6000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3668, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-24 12:57:46', 1, NULL, 'zubsc1i9zn', NULL, NULL, '6000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3669, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-04-24 13:02:37', 3, '6', NULL, 8406328, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3670, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-25 04:55:03', 1, 'TXWmhwxn6qZQqQyyZPm5bZthFKHVYHZpHe', '6052600535', NULL, 'usdttrc20', '10.010064', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3671, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-25 04:55:36', 1, 'TNDfv22ybJQ2Crqg1BivEKJpoqfH5Qzz1x', '4545866550', NULL, 'usdttrc20', '10.010064', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3672, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-25 04:56:16', 1, NULL, 'flo2m4vipl', NULL, NULL, '6000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3673, 3, 'Internal Transfer', NULL, 100, NULL, 1, '2022-04-25 07:29:44', 9, 'Z13795925', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 5, NULL, NULL, 2, NULL, NULL),
(3674, 5, 'Internal Transfer', 100, NULL, NULL, 1, '2022-04-25 07:29:44', 10, 'Z13795925', NULL, NULL, NULL, '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, 3, NULL, 2, NULL, NULL),
(3675, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-26 06:30:03', 1, 'THcWg9nd9W9xNohvTxHoUDBkPmS46tdW6P', '6260199836', NULL, 'usdttrc20', '9.999181', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3676, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-26 06:38:40', 1, 'TCG9rnnh8pZZKTFpgeWPKYgAYfqkXQ46RT', '6106010018', NULL, 'usdttrc20', '10.001937', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3677, 3, 'Crypto deposit', 30, NULL, NULL, 0, '2022-04-26 06:39:35', 1, 'TBvnaw7U3vRjGJ2knygG56zYL4fzjxi8Tx', '5722039513', NULL, 'usdttrc20', '29.994424', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3678, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-04-26 06:42:54', 3, '6', NULL, 986339, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3679, 3, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-26 10:32:18', 1, '3AzCHvkrMrNoFneD4oXATXWQXGApPvmAnC', '5923613154', NULL, 'btc', '0.00252358', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3680, 1, 'Withdrawal', NULL, 70, NULL, 1, '2022-05-04 13:11:34', 3, '5', NULL, 2503134, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3681, 1, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-14 08:36:26', 1, 'TMRUKhiMvYeZLBsdFCYg9m3k33tDHvMCYy', '4773256083', NULL, 'usdttrc20', '100.223096', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3682, 1, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-14 08:37:41', 1, 'TF9FVMz4J3Goxw3amJAahD3DWo8rk1Xg3W', '4579425129', NULL, 'usdttrc20', '10.027623', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3683, 1, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 2, '2022-05-14 08:37:58', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3684, 1, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-14 08:54:42', 3, '5', NULL, 3043984, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3685, 2, 'Paystack deposit', 1.6949152542373, NULL, NULL, 2, '2022-05-14 13:59:03', 1, NULL, '8cdjzc8fwd', NULL, NULL, '1000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3686, 2, 'Crypto deposit', 100, NULL, NULL, 2, '2022-05-14 13:59:52', 1, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3687, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-17 05:17:26', 3, '6', NULL, 4865355, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3688, 3, 'Paystack deposit', 0.016949152542373, NULL, NULL, 1, '2022-05-17 05:19:05', 1, NULL, 'q2pyj63714', NULL, NULL, '10', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3689, 5, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-18 06:58:34', 1, 'TJauPD56L1cLGmzMxs5LmXmGBsmZR4qcJh', '4532762567', NULL, 'usdttrc20', '100.19622', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3690, 5, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-18 07:00:15', 1, 'TMpFHJKMAFwc8MLY9dTd5FusnexG3jSEa9', '5584791022', NULL, 'usdttrc20', '10.019897', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3691, 5, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 2, '2022-05-18 07:16:04', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3692, 5, 'Paystack deposit', 16.949152542373, NULL, NULL, 1, '2022-05-18 07:17:24', 1, NULL, 'g21bgxko2e', NULL, NULL, '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3693, 2, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-18 10:09:01', 1, '3N75yka4pCL14EyrzuuA8i5uXbv8acbuf5', '5991853051', NULL, 'btc', '0.00340588', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3694, 2, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 2, '2022-05-18 10:29:59', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3695, 3, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-21 02:21:24', 1, 'TJ6Az73AoTaUnYAHcCEMS9SuXQdLjvvCMT', '4500610905', NULL, 'usdttrc20', '10.014786', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3696, 5, 'Internal Transfer', NULL, 50, NULL, 1, '2022-05-21 03:30:59', 9, 'Z97039603', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, 3, NULL, NULL, 2, NULL, NULL),
(3697, 3, 'Internal Transfer', 50, NULL, NULL, 1, '2022-05-21 03:30:59', 10, 'Z97039603', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, 5, NULL, 2, NULL, NULL),
(3698, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-21 05:04:07', 3, '6', NULL, 4051131, NULL, NULL, '2023-03-15 17:03:18', '0000-00-00 00:00:00', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3699, 1, 'Bank Deposit', 84.745762711864, NULL, NULL, 2, '2022-06-24 13:16:28', 1, '1', NULL, NULL, '6', '50000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3700, 1, 'Bank Deposit', 101.69491525424, NULL, NULL, 2, '2022-06-24 13:18:52', 1, '1', NULL, NULL, '1', '60000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3701, 2, 'Crypto deposit', 100, NULL, NULL, 0, '2022-06-27 05:35:05', 1, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3702, 1, 'Bank Deposit', 84.745762711864, NULL, NULL, 2, '2022-06-27 06:23:22', 1, '1', NULL, NULL, '1', '50000', NULL, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3703, 4, 'Crypto deposit', 20, NULL, NULL, 0, '2022-09-21 03:55:18', 1, 'TFfMJ73qFPiBah4upry6SnanZ2Rz7DQMU3', '5729598437', NULL, 'usdttrc20', '19.97', '2023-03-15 14:00:40', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3704, 4, 'Paystack deposit', 0.16949152542373, NULL, NULL, 1, '2022-09-25 17:50:12', 1, NULL, 'yyrds1p5i4', NULL, NULL, '100', '2023-03-15 13:38:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3707, 1, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-13 14:42:42', 9, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-13 16:42:42', '2023-03-13 16:42:42', NULL, NULL, 4, NULL, NULL, 2, NULL, NULL),
(3708, 4, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-13 14:42:42', 10, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-13 16:42:42', '2023-03-13 16:42:42', NULL, NULL, NULL, 1, NULL, 2, NULL, NULL),
(3709, 1, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-13 15:12:14', 9, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-13 17:12:14', '2023-03-13 17:12:14', NULL, NULL, 4, NULL, NULL, 2, NULL, NULL),
(3710, 4, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-13 15:12:14', 10, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-13 17:12:14', '2023-03-13 17:12:14', NULL, NULL, NULL, 1, NULL, 2, NULL, NULL),
(3712, 1, 'testing', 10, NULL, NULL, 1, '2023-03-15 14:59:54', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-17 12:35:48', '2023-03-15 16:59:54', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(3729, 1, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-16 15:15:49', 9, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-16 17:15:49', '2023-03-16 17:15:49', NULL, NULL, 4, NULL, NULL, 2, NULL, NULL),
(3730, 4, 'Internal Transfer', 10, NULL, NULL, 1, '2023-03-16 15:15:49', 10, 'demo@user.com', NULL, NULL, NULL, NULL, '2023-03-16 17:15:49', '2023-03-16 17:15:49', NULL, NULL, NULL, 1, NULL, 2, NULL, NULL),
(3734, 1, 'Manual Deposit', 10, NULL, NULL, 1, '2023-03-17 12:57:09', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-17 14:57:09', '2023-03-17 14:57:09', NULL, NULL, NULL, NULL, NULL, 2, NULL, 7),
(3735, 1, 'Bank Deposit', 100, NULL, NULL, 1, '2023-03-20 19:51:07', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-20 10:06:32', '2023-03-20 09:51:07', NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3736, 1, 'Manual Deposit', 10, NULL, NULL, 1, '2023-03-20 20:38:06', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-20 10:38:06', '2023-03-20 10:38:06', NULL, NULL, NULL, NULL, NULL, 2, NULL, 7),
(3737, 1, 'Manual Deposit', 20, NULL, NULL, 1, '2023-03-20 20:39:34', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-20 10:39:34', '2023-03-20 10:39:34', NULL, NULL, NULL, NULL, NULL, 2, NULL, 7),
(3738, 1, 'Bank Deposit', 10, NULL, NULL, 1, '2023-03-20 20:40:36', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-20 10:43:26', '2023-03-20 10:40:36', NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3739, 1, 'Internal Transfer', NULL, 10, NULL, 1, '2023-03-20 21:03:46', 9, 'hacker7867575@gmail.com', NULL, NULL, NULL, NULL, '2023-03-20 11:03:46', '2023-03-20 11:03:46', NULL, NULL, 4, NULL, NULL, 2, NULL, NULL),
(3740, 4, 'Internal Transfer', 10, NULL, NULL, 1, '2023-03-20 21:03:46', 10, 'demo@user.com', NULL, NULL, NULL, NULL, '2023-03-20 11:03:46', '2023-03-20 11:03:46', NULL, NULL, NULL, 1, NULL, 2, NULL, NULL),
(3742, 1, 'Withdrawal', NULL, 125, NULL, 1, '2023-03-22 19:41:21', 3, '7', NULL, 490097, NULL, NULL, '2023-03-22 09:44:47', '2023-03-22 09:41:21', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3743, 1, 'Withdrawal', 12.5, 12.5, NULL, 0, '2023-03-22 19:45:59', 3, '8', NULL, 1151203, NULL, NULL, '2023-03-22 09:46:26', '2023-03-22 09:45:59', NULL, 2, NULL, NULL, NULL, 2, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
