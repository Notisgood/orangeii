-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 01:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huahinfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_role`
--

CREATE TABLE `access_role` (
  `access_uid` int(11) NOT NULL,
  `roles_id_no` int(11) NOT NULL,
  `access_menu1` char(5) DEFAULT NULL COMMENT 'การจัดการ',
  `access_menu2` char(5) DEFAULT NULL COMMENT 'จัดการสินค้า',
  `access_menu3` char(5) DEFAULT NULL COMMENT 'แสดงทำรายการ',
  `access_menu4` char(5) DEFAULT NULL COMMENT 'จัดการหมวดหมู่',
  `access_menu5` char(5) DEFAULT NULL COMMENT 'ออกรายงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_role`
--

INSERT INTO `access_role` (`access_uid`, `roles_id_no`, `access_menu1`, `access_menu2`, `access_menu3`, `access_menu4`, `access_menu5`) VALUES
(1, 1, 'Y', 'Y', 'Y', 'Y', 'Y'),
(9, 3, 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `uid` int(11) NOT NULL,
  `lot_month` int(11) NOT NULL,
  `lot_day` int(11) NOT NULL,
  `lot_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lot`
--

INSERT INTO `lot` (`uid`, `lot_month`, `lot_day`, `lot_code`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, 4, 4),
(5, 1, 5, 5),
(6, 1, 6, 6),
(7, 1, 7, 7),
(8, 1, 8, 8),
(9, 1, 9, 9),
(10, 1, 10, 10),
(11, 1, 11, 11),
(12, 1, 12, 12),
(13, 1, 13, 13),
(14, 1, 14, 14),
(15, 1, 15, 15),
(16, 1, 16, 16),
(17, 1, 17, 17),
(18, 1, 18, 18),
(19, 1, 19, 19),
(20, 1, 20, 20),
(21, 1, 21, 21),
(22, 1, 22, 22),
(23, 1, 23, 23),
(24, 1, 24, 24),
(25, 1, 25, 25),
(26, 1, 26, 26),
(27, 1, 27, 27),
(28, 1, 28, 28),
(29, 1, 29, 29),
(30, 1, 30, 30),
(31, 1, 31, 31),
(32, 2, 1, 32),
(33, 2, 2, 33),
(34, 2, 3, 34),
(35, 2, 4, 35),
(36, 2, 5, 36),
(37, 2, 6, 37),
(38, 2, 7, 38),
(39, 2, 8, 39),
(40, 2, 9, 40),
(41, 2, 10, 41),
(42, 2, 11, 42),
(43, 2, 12, 43),
(44, 2, 13, 44),
(45, 2, 14, 45),
(46, 2, 15, 46),
(47, 2, 16, 47),
(48, 2, 17, 48),
(49, 2, 18, 49),
(50, 2, 19, 50),
(51, 2, 20, 51),
(52, 2, 21, 52),
(53, 2, 22, 53),
(54, 2, 23, 54),
(55, 2, 24, 55),
(56, 2, 25, 56),
(57, 2, 26, 57),
(58, 2, 27, 58),
(59, 2, 28, 59),
(60, 2, 29, 60),
(61, 3, 1, 61),
(62, 3, 2, 62),
(63, 3, 3, 63),
(64, 3, 4, 64),
(65, 3, 5, 65),
(66, 3, 6, 66),
(67, 3, 7, 67),
(68, 3, 8, 68),
(69, 3, 9, 69),
(70, 3, 10, 70),
(71, 3, 11, 71),
(72, 3, 12, 72),
(73, 3, 13, 73),
(74, 3, 14, 74),
(75, 3, 15, 75),
(76, 3, 16, 76),
(77, 3, 17, 77),
(78, 3, 18, 78),
(79, 3, 19, 79),
(80, 3, 20, 80),
(81, 3, 21, 81),
(82, 3, 22, 82),
(83, 3, 23, 83),
(84, 3, 24, 84),
(85, 3, 25, 85),
(86, 3, 26, 86),
(87, 3, 27, 87),
(88, 3, 28, 88),
(89, 3, 29, 89),
(90, 3, 30, 90),
(91, 3, 31, 91),
(92, 4, 1, 92),
(93, 4, 2, 93),
(94, 4, 3, 94),
(95, 4, 4, 95),
(96, 4, 5, 96),
(97, 4, 6, 97),
(98, 4, 7, 98),
(99, 4, 8, 99),
(100, 4, 9, 100),
(101, 4, 10, 101),
(102, 4, 11, 102),
(103, 4, 12, 103),
(104, 4, 13, 104),
(105, 4, 14, 105),
(106, 4, 15, 106),
(107, 4, 16, 107),
(108, 4, 17, 108),
(109, 4, 18, 109),
(110, 4, 19, 110),
(111, 4, 20, 111),
(112, 4, 21, 112),
(113, 4, 22, 113),
(114, 4, 23, 114),
(115, 4, 24, 115),
(116, 4, 25, 116),
(117, 4, 26, 117),
(118, 4, 27, 118),
(119, 4, 28, 119),
(120, 4, 29, 120),
(121, 4, 30, 121),
(122, 5, 1, 122),
(123, 5, 2, 123),
(124, 5, 3, 124),
(125, 5, 4, 125),
(126, 5, 5, 126),
(127, 5, 6, 127),
(128, 5, 7, 128),
(129, 5, 8, 129),
(130, 5, 9, 130),
(131, 5, 10, 131),
(132, 5, 11, 132),
(133, 5, 12, 133),
(134, 5, 13, 134),
(135, 5, 14, 135),
(136, 5, 15, 136),
(137, 5, 16, 137),
(138, 5, 17, 138),
(139, 5, 18, 139),
(140, 5, 19, 140),
(141, 5, 20, 141),
(142, 5, 21, 142),
(143, 5, 22, 143),
(144, 5, 23, 144),
(145, 5, 24, 145),
(146, 5, 25, 146),
(147, 5, 26, 147),
(148, 5, 27, 148),
(149, 5, 28, 149),
(150, 5, 29, 150),
(151, 5, 30, 151),
(152, 5, 31, 152),
(153, 6, 1, 153),
(154, 6, 2, 154),
(155, 6, 3, 155),
(156, 6, 4, 156),
(157, 6, 5, 157),
(158, 6, 6, 158),
(159, 6, 7, 159),
(160, 6, 8, 160),
(161, 6, 9, 161),
(162, 6, 10, 162),
(163, 6, 11, 163),
(164, 6, 12, 164),
(165, 6, 13, 165),
(166, 6, 14, 166),
(167, 6, 15, 167),
(168, 6, 16, 168),
(169, 6, 17, 169),
(170, 6, 18, 170),
(171, 6, 19, 171),
(172, 6, 20, 172),
(173, 6, 21, 173),
(174, 6, 22, 174),
(175, 6, 23, 175),
(176, 6, 24, 176),
(177, 6, 25, 177),
(178, 6, 26, 178),
(179, 6, 27, 179),
(180, 6, 28, 180),
(181, 6, 29, 181),
(182, 6, 30, 182),
(183, 7, 1, 183),
(184, 7, 2, 184),
(185, 7, 3, 185),
(186, 7, 4, 186),
(187, 7, 5, 187),
(188, 7, 6, 188),
(189, 7, 7, 189),
(190, 7, 8, 190),
(191, 7, 9, 191),
(192, 7, 10, 192),
(193, 7, 11, 193),
(194, 7, 12, 194),
(195, 7, 13, 195),
(196, 7, 14, 196),
(197, 7, 15, 197),
(198, 7, 16, 198),
(199, 7, 17, 199),
(200, 7, 18, 200),
(201, 7, 19, 201),
(202, 7, 20, 202),
(203, 7, 21, 203),
(204, 7, 22, 204),
(205, 7, 23, 205),
(206, 7, 24, 206),
(207, 7, 25, 207),
(208, 7, 26, 208),
(209, 7, 27, 209),
(210, 7, 28, 210),
(211, 7, 29, 211),
(212, 7, 30, 212),
(213, 7, 31, 213),
(214, 8, 1, 214),
(215, 8, 2, 215),
(216, 8, 3, 216),
(217, 8, 4, 217),
(218, 8, 5, 218),
(219, 8, 6, 219),
(220, 8, 7, 220),
(221, 8, 8, 221),
(222, 8, 9, 222),
(223, 8, 10, 223),
(224, 8, 11, 224),
(225, 8, 12, 225),
(226, 8, 13, 226),
(227, 8, 14, 227),
(228, 8, 15, 228),
(229, 8, 16, 229),
(230, 8, 17, 230),
(231, 8, 18, 231),
(232, 8, 19, 232),
(233, 8, 20, 233),
(234, 8, 21, 234),
(235, 8, 22, 235),
(236, 8, 23, 236),
(237, 8, 24, 237),
(238, 8, 25, 238),
(239, 8, 26, 239),
(240, 8, 27, 240),
(241, 8, 28, 241),
(242, 8, 29, 242),
(243, 8, 30, 243),
(244, 8, 31, 244),
(245, 9, 1, 245),
(246, 9, 2, 246),
(247, 9, 3, 247),
(248, 9, 4, 248),
(249, 9, 5, 249),
(250, 9, 6, 250),
(251, 9, 7, 251),
(252, 9, 8, 252),
(253, 9, 9, 253),
(254, 9, 10, 254),
(255, 9, 11, 255),
(256, 9, 12, 256),
(257, 9, 13, 257),
(258, 9, 14, 258),
(259, 9, 15, 259),
(260, 9, 16, 260),
(261, 9, 17, 261),
(262, 9, 18, 262),
(263, 9, 19, 263),
(264, 9, 20, 264),
(265, 9, 21, 265),
(266, 9, 22, 266),
(267, 9, 23, 267),
(268, 9, 24, 268),
(269, 9, 25, 269),
(270, 9, 26, 270),
(271, 9, 27, 271),
(272, 9, 28, 272),
(273, 9, 29, 273),
(274, 9, 30, 274),
(275, 10, 1, 275),
(276, 10, 2, 276),
(277, 10, 3, 277),
(278, 10, 4, 278),
(279, 10, 5, 279),
(280, 10, 6, 280),
(281, 10, 7, 281),
(282, 10, 8, 282),
(283, 10, 9, 283),
(284, 10, 10, 284),
(285, 10, 11, 285),
(286, 10, 12, 286),
(287, 10, 13, 287),
(288, 10, 14, 288),
(289, 10, 15, 289),
(290, 10, 16, 290),
(291, 10, 17, 291),
(292, 10, 18, 292),
(293, 10, 19, 293),
(294, 10, 20, 294),
(295, 10, 21, 295),
(296, 10, 22, 296),
(297, 10, 23, 297),
(298, 10, 24, 298),
(299, 10, 25, 299),
(300, 10, 26, 300),
(301, 10, 27, 301),
(302, 10, 28, 302),
(303, 10, 29, 303),
(304, 10, 30, 304),
(305, 10, 31, 305),
(306, 11, 1, 306),
(307, 11, 2, 307),
(308, 11, 3, 308),
(309, 11, 4, 309),
(310, 11, 5, 310),
(311, 11, 6, 311),
(312, 11, 7, 312),
(313, 11, 8, 313),
(314, 11, 9, 314),
(315, 11, 10, 315),
(316, 11, 11, 316),
(317, 11, 12, 317),
(318, 11, 13, 318),
(319, 11, 14, 319),
(320, 11, 15, 320),
(321, 11, 16, 321),
(322, 11, 17, 322),
(323, 11, 18, 323),
(324, 11, 19, 324),
(325, 11, 20, 325),
(326, 11, 21, 326),
(327, 11, 22, 327),
(328, 11, 23, 328),
(329, 11, 24, 329),
(330, 11, 25, 330),
(331, 11, 26, 331),
(332, 11, 27, 332),
(333, 11, 28, 333),
(334, 11, 29, 334),
(335, 11, 30, 335),
(336, 12, 1, 336),
(337, 12, 2, 337),
(338, 12, 3, 338),
(339, 12, 4, 339),
(340, 12, 5, 340),
(341, 12, 6, 341),
(342, 12, 7, 342),
(343, 12, 8, 343),
(344, 12, 9, 344),
(345, 12, 10, 345),
(346, 12, 11, 346),
(347, 12, 12, 347),
(348, 12, 13, 348),
(349, 12, 14, 349),
(350, 12, 15, 350),
(351, 12, 16, 351),
(352, 12, 17, 352),
(353, 12, 18, 353),
(354, 12, 19, 354),
(355, 12, 20, 355),
(356, 12, 21, 356),
(357, 12, 22, 357),
(358, 12, 23, 358),
(359, 12, 24, 359),
(360, 12, 25, 360),
(361, 12, 26, 361),
(362, 12, 27, 362),
(363, 12, 28, 363),
(364, 12, 29, 364),
(365, 12, 30, 365),
(366, 12, 31, 366);

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `uid` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `product_barcode` char(15) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `product_unit` char(15) DEFAULT NULL,
  `product_group` char(15) NOT NULL,
  `product_amount` int(11) DEFAULT NULL,
  `product_min` int(11) DEFAULT NULL,
  `product_acc` char(15) DEFAULT NULL,
  `product_price` decimal(15,2) NOT NULL,
  `product_replace` varchar(255) DEFAULT NULL,
  `product_class_no` int(3) NOT NULL,
  `product_exp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`uid`, `product_barcode`, `product_detail`, `product_unit`, `product_group`, `product_amount`, `product_min`, `product_acc`, `product_price`, `product_replace`, `product_class_no`, `product_exp`) VALUES
(1, '40-BACO-0001', 'เบคอนสันนอกหมูลอกหนัง Lean Short Back Bacon', 'ย่อย', '1', 270, 50, 'ST02', '116.81', NULL, 3, NULL),
(2, '40-BACO-0002', 'เบคอนหน้ากว้างสติ๊กเกอร์เขียว\r\n', 'ย่อย', '1', 30, 50, 'ST02', '112.00', NULL, 3, NULL),
(3, '40-BACO-0003.1', 'เบคอนสไตล์อเมริกันสเต็กกี้ เกรด A 500 กรัม(ดิบ)', 'ย่อย', '2', 218, 50, 'ST02', '76.14', NULL, 3, NULL),
(6, '40-BACO-0005', 'เบคอนสันนอกหมูติดหนัง Wiltshire Bacon (ดิบ)\r\n', 'ย่อย', '2', 90, 50, 'ST02', '1212.00', NULL, 3, NULL),
(7, '40-BACO-0006', 'เบคอน US 4mm (9นิ้ว)', 'ย่อย', '2', 1291, 50, 'ST02', '1221.00', NULL, 3, NULL),
(10, '40-HAM-0007', 'สันนอกหมูรมควันพริกไทยดำ', 'ย่อย', '2', 50, 50, 'ST02', '12312.00', NULL, 1, NULL),
(12, '40-SAUS-0004', 'ไส่กรอกหมูชิพโพโลต้า 4 นิ้ว 1 กก. Chippolatas Sausag', 'ย่อย', '2', 51, 50, 'ST02', '211.00', NULL, 6, NULL),
(17, '40-CHIC-0031', 'น่องไก่ล้วน B [Drum] 2 กก./แพ็ค', 'ย่อย', '2', 213, 50, 'ST02', '12312.00', NULL, 4, NULL),
(18, '40-SAUS-1130', 'ไส้กรอกไก่หนังกรอบ 4 นิ้ว', 'ย่อย', '1', 820, 50, 'ST04', '1234.00', NULL, 6, NULL),
(21, '40-SAUS-0032', 'ไส้กรอกไก่ 6\" Chicken HotDog', 'ย่อย', '1', 100, 50, 'ST04', '89.00', NULL, 6, NULL),
(22, '20-2012-5006', 'ไส้หมู Hog Casing 28/30 AA', 'ย่อย', '2', 0, 50, 'ST03', '550.00', NULL, 2, NULL),
(23, '20-2012-5023', 'ออริกาโน OREGANO GROUND 100 G.', 'ย่อย', '1', 0, 50, 'ST03', '430.00', NULL, 4, NULL),
(24, '20-2012-5024', 'ลูกจันทร์ NUTMEG GRATED 1000 G.', 'ย่อย', '1', 0, 50, 'ST03', '820.00', NULL, 2, NULL),
(26, '40-HAM -1003', 'ฮีสเตอร์แฮม Easter Ham', 'ย่อย', '1', 100, 50, 'ST04', '179.78', NULL, 1, 7),
(27, '40-SAUS-0006', 'ไส้กรอกหมูคัมเบอร์แลนด์แฟตบอย 4 นิ้ว 1 กก.', 'ย่อย', '1', 100, 50, 'ST02', '166.71', NULL, 6, NULL),
(28, '40-SAUS-0044', 'ไส้กรอกหมูสไปร์ซี่', 'ย่อย', '1', 100, 50, 'ST04', '139.00', NULL, 6, NULL),
(29, '40-SAUS-0047', 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 'ย่อย', '1', 190, 50, 'ST04', '139.00', NULL, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_class`
--

CREATE TABLE `product_class` (
  `class_uid` int(11) NOT NULL,
  `product_class_code` char(255) NOT NULL,
  `product_class_detail` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_class`
--

INSERT INTO `product_class` (`class_uid`, `product_class_code`, `product_class_detail`) VALUES
(1, 'HAM', 'แฮม'),
(2, 'PORK', 'หมู'),
(3, 'BACO', 'เบคอน'),
(4, 'CHICK', 'ไก่'),
(5, 'DUCK', 'เป็ด'),
(6, 'SAUS', 'ไส้กรอก');

-- --------------------------------------------------------

--
-- Table structure for table `product_log`
--

CREATE TABLE `product_log` (
  `product_log_id` int(11) NOT NULL,
  `product_uid` char(15) DEFAULT NULL,
  `product_status_id` int(11) DEFAULT NULL,
  `product_detail` varchar(255) DEFAULT NULL,
  `product_log_amount` int(15) DEFAULT NULL,
  `product_log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_log_exp` date DEFAULT NULL,
  `product_log_by` varchar(250) DEFAULT NULL,
  `product_log_detail` varchar(255) DEFAULT NULL,
  `lot_barcode` char(50) DEFAULT NULL COMMENT 'barcode+lot'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_log`
--

INSERT INTO `product_log` (`product_log_id`, `product_uid`, `product_status_id`, `product_detail`, `product_log_amount`, `product_log_date`, `product_log_exp`, `product_log_by`, `product_log_detail`, `lot_barcode`) VALUES
(167, '7', 2, 'เบคอน US 4mm (9นิ้ว)', 36, '2019-07-29 22:03:28', NULL, 'somsak', '21219B0006', ''),
(168, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 50, '2019-07-30 00:53:22', NULL, 'somsak', '21219H0007', ''),
(170, '18', 1, 'ไส้กรอกไก่หนังกรอบ 4 นิ้ว', 40, '2019-07-30 00:54:51', NULL, 'somsak', '21219S1130', ''),
(171, '18', 2, 'ไส้กรอกไก่หนังกรอบ 4 นิ้ว', 260, '2019-07-30 00:55:41', NULL, 'somsak', '21219S1130', ''),
(173, '18', 2, 'ไส้กรอกไก่หนังกรอบ 4 นิ้ว', 120, '2019-07-30 00:57:19', NULL, 'somsak', '21219S1130', ''),
(174, '7', 1, 'เบคอน US 4mm (9นิ้ว)', 50, '2019-07-31 00:41:49', NULL, 'somsak', '21319B0006', ''),
(175, '7', 1, 'เบคอน US 4mm (9นิ้ว)', 50, '2019-07-31 00:41:58', NULL, 'somsak', '21319B0006', ''),
(176, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 50, '2019-07-31 21:06:19', NULL, 'somsak', '21419H0007', ''),
(177, '1', 1, 'เบคอนสันนอกหมูลอกหนัง Lean Short Back Bacon', 250, '2019-07-31 21:07:03', NULL, 'somsak', '21419B0001', ''),
(178, '10', 2, 'สันนอกหมูรมควันพริกไทยดำ', 460, '2019-07-31 21:18:41', NULL, 'somsak', '21419H0007', ''),
(180, '10', 2, 'สันนอกหมูรมควันพริกไทยดำ', 50, '2019-07-31 23:55:53', NULL, 'somsak', '21419H0007', ''),
(181, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 30, '2019-08-05 19:48:58', NULL, 'somsak', '21919H0007', ''),
(184, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 60, '2019-08-05 19:49:15', NULL, 'somsak', '21919H0007', ''),
(185, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 40, '2019-08-05 19:49:22', NULL, 'somsak', '21919H0007', ''),
(186, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 90, '2019-08-05 19:49:30', NULL, 'somsak', '21919H0007', ''),
(187, '10', 1, 'สันนอกหมูรมควันพริกไทยดำ', 12, '2019-08-05 23:57:34', NULL, 'somsak', '21919H0007', '40-HAM-000721919H0007'),
(188, '7', 1, 'เบคอน US 4mm (9นิ้ว)', 123, '2019-08-07 03:03:57', NULL, 'somtum', '22019B0006', '40-BACO-000622019B0006'),
(189, '7', 1, 'เบคอน US 4mm (9นิ้ว)', 56, '2019-08-07 03:04:04', NULL, 'somtum', '22019B0006', '40-BACO-000622019B0006'),
(190, '7', 1, 'เบคอน US 4mm (9นิ้ว)', 12, '2019-08-07 03:04:10', NULL, 'somtum', '22019B0006', '40-BACO-000622019B0006'),
(191, '29', 1, 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 12, '2019-08-08 07:10:10', NULL, 'somsak', '22119S0047', '40-SAUS-004722119S0047'),
(192, '29', 1, 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 23, '2019-08-08 07:10:07', NULL, 'somsak', '22119S0047', '40-SAUS-004722119S0047'),
(193, '29', 1, 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 32, '2019-08-08 07:10:05', NULL, 'somsak', '22119S0047', '40-SAUS-004722119S0047'),
(195, '29', 1, 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 11, '2019-08-08 07:17:44', '2019-08-06', 'somsak', '22119S0047', '40-SAUS-004722119S0047'),
(196, '29', 1, 'ไส้กรอกคนักเวิร์ท 4.5 นิ้ว', 12, '2019-08-08 00:09:21', '2019-08-15', 'somsak', '22119S0047', '40-SAUS-004722119S0047');

--
-- Triggers `product_log`
--
DELIMITER $$
CREATE TRIGGER `update_stock` AFTER INSERT ON `product_log` FOR EACH ROW BEGIN

DECLARE productstatus INT(11) DEFAULT 0; 
SET productstatus = (SELECT product_log.product_status_id FROM product_log ORDER BY product_log.product_log_id DESC LIMIT 1);
IF (productstatus = 1) 
THEN
    UPDATE product
    SET  product.product_amount = (product.product_amount+NEW.product_log_amount)
    Where product.uid = NEW.product_uid;
    
ELSEIF(productstatus = 2) 
THEN
    UPDATE product
    SET  product.product_amount = (product.product_amount-NEW.product_log_amount)
    Where product.uid = NEW.product_uid;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `product_status_id` int(11) NOT NULL,
  `product_status_detail` varchar(255) NOT NULL,
  `product_status_code` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`product_status_id`, `product_status_detail`, `product_status_code`) VALUES
(1, 'นำสินค้าเข้า', 'IN'),
(2, 'นำสินค้าออก', 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `uid_product_type` int(11) NOT NULL,
  `product_code` char(15) NOT NULL,
  `product_multiply` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`uid_product_type`, `product_code`, `product_multiply`) VALUES
(1, 'กก.\r\n', '1'),
(2, 'แพ็ค\r\n', '1'),
(3, 'ชิ้น', '1'),
(4, 'ถัง', '1'),
(5, 'กล่อง', '1'),
(6, 'กระป๋อง', '1'),
(9, 'ใบ', '1'),
(11, 'แท่ง', '1'),
(23, 'นับ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_uid` int(11) NOT NULL COMMENT 'คีย์หลัก',
  `roles_id` int(11) NOT NULL,
  `roles_name` char(255) NOT NULL,
  `roles_des` char(255) NOT NULL COMMENT 'รายละเอียด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roles_uid`, `roles_id`, `roles_name`, `roles_des`) VALUES
(1, 1, 'staff', 'สตาฟ'),
(2, 2, 'product IN', 'คนนำสินค้าเข้า'),
(3, 3, 'product Out', 'คนนำสินค้าออก'),
(4, 4, 'product', 'สินค้าแปรรูป'),
(5, 5, 'raw material\r\n', 'วัตถุดิบ'),
(6, 6, 'Super Admin', 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL COMMENT 'ระดับการเข้าถึง',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_username` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_role`, `email`, `user_username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'somsak', 1, 'notnotnot@gmail.com', 'somsakza', '$2y$10$176o6K0aZsl2szy1Oqn3eeI.wxlIhY0zFPiulD3SDlyVjQCBdHs9m', 'B0Z2GL3he38dcsQ1118ZtcViGZhFsJ1ASrrqnaORcCCEc2UcRCLQHrbVU64m', '2019-07-29 21:19:11', '2019-07-29 21:19:11'),
(3, 'somtum', 6, 'somzap@gmail.com', 'somtum', '$2y$10$SLxdacBKmNiT2tVk1cS1x.1vViRyzcQ.gcDN2P/8D3piRruw9pd3m', 'bLlsEojKDKOVYz06GH4lten2ZlNeuZhKULysagojSOZKyGJXXs2Kj7xMvmQW', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_role`
--
ALTER TABLE `access_role`
  ADD PRIMARY KEY (`access_uid`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product_class`
--
ALTER TABLE `product_class`
  ADD PRIMARY KEY (`class_uid`);

--
-- Indexes for table `product_log`
--
ALTER TABLE `product_log`
  ADD PRIMARY KEY (`product_log_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`uid_product_type`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_uid`);

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
-- AUTO_INCREMENT for table `access_role`
--
ALTER TABLE `access_role`
  MODIFY `access_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lot`
--
ALTER TABLE `lot`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_class`
--
ALTER TABLE `product_class`
  MODIFY `class_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_log`
--
ALTER TABLE `product_log`
  MODIFY `product_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `uid_product_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'คีย์หลัก', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
