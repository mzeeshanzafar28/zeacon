-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 07:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeacongz_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accno`
--

CREATE TABLE `accno` (
  `id` int(11) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `acct_no` int(11) DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `expire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `bname` varchar(40) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
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
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `wallet` varchar(500) DEFAULT NULL,
  `api` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coin`
--

INSERT INTO `coin` (`sn`, `name`, `status`, `wallet`, `api`) VALUES
(1, 'Crypto', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 90),
(2, 'Online Gateway(Paystack)', 1, '0xb24a0640bfa150d55253b05425abb5b0f6e0b0e2', 80),
(3, 'Perfect Money', 1, 'TChiQYmNQ4K6cQMLUhr4qx74aqz4y5TZAF', 518),
(4, 'Payee', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 2321),
(9, 'Bank Deposit', 1, '0', 560);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `n_rate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`n_rate`) VALUES
('590');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `sn` int(11) NOT NULL,
  `uID` int(11) DEFAULT NULL,
  `cur` varchar(20) DEFAULT NULL,
  `wallet` varchar(400) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `bname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `accno` varchar(100) DEFAULT NULL,
  `benename` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `dID` int(11) NOT NULL,
  `dName` varchar(70) DEFAULT NULL,
  `dActName` varchar(70) DEFAULT NULL,
  `dBank` int(10) DEFAULT NULL,
  `dActNumber` varchar(25) DEFAULT NULL,
  `dBtcAdd` varchar(100) DEFAULT NULL,
  `dPhone` varchar(25) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`dID`, `dName`, `dActName`, `dBank`, `dActNumber`, `dBtcAdd`, `dPhone`, `status`, `date`) VALUES
(1, 'test', 'test', 6, '999', NULL, '', 1, '2019-07-12 09:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `d_method`
--

CREATE TABLE `d_method` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `d_method`
--

INSERT INTO `d_method` (`id`, `name`, `status`, `adate`) VALUES
(1, 'Paystack', 1, '2022-06-24 14:55:15'),
(2, 'e-Naira', 1, '2022-06-24 14:55:15'),
(3, 'Crypto', 1, '2022-06-24 14:56:21'),
(4, 'Perfectmoney', 0, '2022-06-24 14:56:21'),
(5, 'Payeer', 0, '2022-06-24 14:56:21'),
(6, 'Bank Deposit', 1, '2022-06-24 14:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `wallet` varchar(500) DEFAULT NULL,
  `api` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`sn`, `name`, `status`, `wallet`, `api`) VALUES
(1, 'Withdrawal', 1, '1Kvr5N2NMzEHuee8hV1bANZY23duJYJsrx', 250),
(2, 'Internal Transfer', 1, '0xb24a0640bfa150d55253b05425abb5b0f6e0b0e2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `holding`
--

CREATE TABLE `holding` (
  `sn` int(11) NOT NULL,
  `title` int(200) DEFAULT NULL,
  `acc_no` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT current_timestamp(),
  `acc_name` varchar(200) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `cby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sn` int(11) NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `st_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

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

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `bcode` varchar(200) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `acct_no` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `paswd` varchar(50) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `role` int(11) DEFAULT 1,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `ASTS` int(3) DEFAULT 0,
  `code` varchar(100) DEFAULT NULL,
  `bid` varchar(100) DEFAULT NULL,
  `enaira` varchar(100) DEFAULT NULL,
  `btc` varchar(100) DEFAULT NULL,
  `vpin` int(11) DEFAULT 0,
  `postcode` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `doctype` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `uID` int(11) DEFAULT NULL,
  `nar` varchar(1000) DEFAULT NULL,
  `cr` double DEFAULT NULL,
  `dr` double DEFAULT NULL,
  `url` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `adate` datetime NOT NULL DEFAULT current_timestamp(),
  `type` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `txnID` varchar(500) DEFAULT NULL,
  `rand` int(11) DEFAULT NULL,
  `to_currency` varchar(50) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invID` int(11) DEFAULT NULL,
  `draw` int(11) DEFAULT NULL,
  `to_u` int(11) DEFAULT NULL,
  `from_u` int(11) DEFAULT NULL,
  `accno` varchar(200) DEFAULT NULL,
  `gtype` int(11) DEFAULT 2,
  `qr` varchar(200) DEFAULT NULL,
  `dtype` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `uID`, `nar`, `cr`, `dr`, `url`, `status`, `adate`, `type`, `address`, `txnID`, `rand`, `to_currency`, `amount`, `updated_at`, `invID`, `draw`, `to_u`, `from_u`, `accno`, `gtype`, `qr`, `dtype`) VALUES
(3577, 2, 'eNaira Deposit to [@zeacon.01] ', 1000, NULL, NULL, 0, '2022-03-17 14:05:43', 1, '@zeacon.01', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3578, 1, 'Paystack deposit', 1000, NULL, NULL, 1, '2022-03-23 09:42:24', 1, NULL, '9q5a12jhyd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3579, 1, 'Paystack deposit', 899, NULL, NULL, 0, '2022-03-23 13:17:48', 1, NULL, 'lr7l1cwcvx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3580, 1, 'Crypto deposit', 700, NULL, NULL, 0, '2022-03-23 13:18:19', 1, 'TKpnzuRuC4QmcSfV5NDH971T4bEK3Gf7dP', '5954238511', NULL, 'usdttrc20', '699.614745', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3581, 2, 'Paystack deposit', 17.857142857143, NULL, NULL, 1, '2022-03-26 09:50:49', 1, NULL, 'nasonqmxjn', NULL, NULL, '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3582, 2, 'Crypto deposit', 10000, NULL, NULL, 0, '2022-03-26 09:53:27', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3583, 3, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 1, '2022-04-01 07:11:55', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3584, 3, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 0, '2022-04-04 07:21:09', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3585, 1, 'eNaira Deposit to [@zeacon.01] ', 67.796610169492, NULL, NULL, 0, '2022-04-10 08:29:27', 1, '@zeacon.01', NULL, NULL, '2', '40000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3586, 3, 'Paystack deposit', 0.016949152542373, NULL, NULL, 1, '2022-04-15 06:11:22', 1, NULL, 'ovstuxdgu4', NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3587, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-15 08:11:04', 1, 'TG5KXy4f23jebJxax6rbFTSPJgxc1SWijp', '6151084864', NULL, 'usdttrc20', '10.001839', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3588, 3, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 0, '2022-04-15 08:21:12', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3589, 3, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 0, '2022-04-15 08:24:39', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3590, 3, 'Crypto deposit', 1000, NULL, NULL, 0, '2022-04-15 08:26:11', 1, 'TUaMAJqYrVDAXVeLiaEHyBZJd5btdbaDGF', '5041115572', NULL, 'usdttrc20', '999.399039', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3591, 4, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-23 05:08:31', 1, '3DAeTdmL9gb17qEynZPvVQsBwDqwaQFvAH', '6410221148', NULL, 'btc', '0.00252581', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3592, 4, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-23 05:10:52', 1, '3K5ikiUPTQnm2yHcnyTLm55Q2hpzSCNcR2', '4410264039', NULL, 'btc', '0.00252683', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3667, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-24 12:56:22', 1, NULL, 'c3hbmnwb2e', NULL, NULL, '6000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3668, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-24 12:57:46', 1, NULL, 'zubsc1i9zn', NULL, NULL, '6000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3669, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-04-24 13:02:37', 3, '6', NULL, 8406328, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3670, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-25 04:55:03', 1, 'TXWmhwxn6qZQqQyyZPm5bZthFKHVYHZpHe', '6052600535', NULL, 'usdttrc20', '10.010064', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3671, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-25 04:55:36', 1, 'TNDfv22ybJQ2Crqg1BivEKJpoqfH5Qzz1x', '4545866550', NULL, 'usdttrc20', '10.010064', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3672, 3, 'Paystack deposit', 10.169491525424, NULL, NULL, 1, '2022-04-25 04:56:16', 1, NULL, 'flo2m4vipl', NULL, NULL, '6000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3673, 3, 'Internal Transfer', NULL, 100, NULL, 1, '2022-04-25 07:29:44', 9, 'Z13795925', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 2, NULL, NULL),
(3674, 5, 'Internal Transfer', 100, NULL, NULL, 1, '2022-04-25 07:29:44', 10, 'Z13795925', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 2, NULL, NULL),
(3675, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-26 06:30:03', 1, 'THcWg9nd9W9xNohvTxHoUDBkPmS46tdW6P', '6260199836', NULL, 'usdttrc20', '9.999181', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3676, 3, 'Crypto deposit', 10, NULL, NULL, 0, '2022-04-26 06:38:40', 1, 'TCG9rnnh8pZZKTFpgeWPKYgAYfqkXQ46RT', '6106010018', NULL, 'usdttrc20', '10.001937', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3677, 3, 'Crypto deposit', 30, NULL, NULL, 0, '2022-04-26 06:39:35', 1, 'TBvnaw7U3vRjGJ2knygG56zYL4fzjxi8Tx', '5722039513', NULL, 'usdttrc20', '29.994424', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3678, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-04-26 06:42:54', 3, '6', NULL, 986339, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3679, 3, 'Crypto deposit', 100, NULL, NULL, 2, '2022-04-26 10:32:18', 1, '3AzCHvkrMrNoFneD4oXATXWQXGApPvmAnC', '5923613154', NULL, 'btc', '0.00252358', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3680, 1, 'Withdrawal', NULL, 70, NULL, 1, '2022-05-04 13:11:34', 3, '5', NULL, 2503134, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3681, 1, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-14 08:36:26', 1, 'TMRUKhiMvYeZLBsdFCYg9m3k33tDHvMCYy', '4773256083', NULL, 'usdttrc20', '100.223096', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3682, 1, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-14 08:37:41', 1, 'TF9FVMz4J3Goxw3amJAahD3DWo8rk1Xg3W', '4579425129', NULL, 'usdttrc20', '10.027623', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3683, 1, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 2, '2022-05-14 08:37:58', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3684, 1, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-14 08:54:42', 3, '5', NULL, 3043984, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3685, 2, 'Paystack deposit', 1.6949152542373, NULL, NULL, 2, '2022-05-14 13:59:03', 1, NULL, '8cdjzc8fwd', NULL, NULL, '1000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3686, 2, 'Crypto deposit', 100, NULL, NULL, 2, '2022-05-14 13:59:52', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3687, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-17 05:17:26', 3, '6', NULL, 4865355, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3688, 3, 'Paystack deposit', 0.016949152542373, NULL, NULL, 1, '2022-05-17 05:19:05', 1, NULL, 'q2pyj63714', NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3689, 5, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-18 06:58:34', 1, 'TJauPD56L1cLGmzMxs5LmXmGBsmZR4qcJh', '4532762567', NULL, 'usdttrc20', '100.19622', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3690, 5, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-18 07:00:15', 1, 'TMpFHJKMAFwc8MLY9dTd5FusnexG3jSEa9', '5584791022', NULL, 'usdttrc20', '10.019897', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3691, 5, 'eNaira Deposit to [@zeacon.01] ', 169.49152542373, NULL, NULL, 2, '2022-05-18 07:16:04', 1, '@zeacon.01', NULL, NULL, '2', '100000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3692, 5, 'Paystack deposit', 16.949152542373, NULL, NULL, 1, '2022-05-18 07:17:24', 1, NULL, 'g21bgxko2e', NULL, NULL, '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1),
(3693, 2, 'Crypto deposit', 100, NULL, NULL, 0, '2022-05-18 10:09:01', 1, '3N75yka4pCL14EyrzuuA8i5uXbv8acbuf5', '5991853051', NULL, 'btc', '0.00340588', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3694, 2, 'eNaira Deposit to [@zeacon.01] ', 16.949152542373, NULL, NULL, 2, '2022-05-18 10:29:59', 1, '@zeacon.01', NULL, NULL, '2', '10000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3695, 3, 'Crypto deposit', 10, NULL, NULL, 2, '2022-05-21 02:21:24', 1, 'TJ6Az73AoTaUnYAHcCEMS9SuXQdLjvvCMT', '4500610905', NULL, 'usdttrc20', '10.014786', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3696, 5, 'Internal Transfer', NULL, 50, NULL, 1, '2022-05-21 03:30:59', 9, 'Z97039603', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 2, NULL, NULL),
(3697, 3, 'Internal Transfer', 50, NULL, NULL, 1, '2022-05-21 03:30:59', 10, 'Z97039603', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, 2, NULL, NULL),
(3698, 3, 'Withdrawal', NULL, 10, NULL, 1, '2022-05-21 05:04:07', 3, '6', NULL, 4051131, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 2, NULL, NULL),
(3699, 1, 'Bank Deposit', 84.745762711864, NULL, NULL, 2, '2022-06-24 13:16:28', 1, '1', NULL, NULL, '6', '50000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 2),
(3700, 1, 'Bank Deposit', 101.69491525424, NULL, NULL, 2, '2022-06-24 13:18:52', 1, '1', NULL, NULL, '1', '60000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3701, 2, 'Crypto deposit', 100, NULL, NULL, 0, '2022-06-27 05:35:05', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3702, 1, 'Bank Deposit', 84.745762711864, NULL, NULL, 2, '2022-06-27 06:23:22', 1, '1', NULL, NULL, '1', '50000', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 6),
(3703, 4, 'Crypto deposit', 20, NULL, NULL, 0, '2022-09-21 03:55:18', 1, 'TFfMJ73qFPiBah4upry6SnanZ2Rz7DQMU3', '5729598437', NULL, 'usdttrc20', '19.97', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3),
(3704, 4, 'Paystack deposit', 0.16949152542373, NULL, NULL, 1, '2022-09-25 17:50:12', 1, NULL, 'yyrds1p5i4', NULL, NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`dID`);

--
-- Indexes for table `d_method`
--
ALTER TABLE `d_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `holding`
--
ALTER TABLE `holding`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `status_code` (`status_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `dID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `d_method`
--
ALTER TABLE `d_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `holding`
--
ALTER TABLE `holding`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3705;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
