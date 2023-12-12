-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_deal`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_brand`
--

CREATE TABLE `m_brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(128) NOT NULL,
  `brand_photo` varchar(256) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_brand`
--

INSERT INTO `m_brand` (`id`, `brand_name`, `brand_photo`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 'Apple', '/Storage/brand/apple.png', 0, '2023-08-04', NULL),
(3, 'Lenovo', '/Storage/brand/lenovo.png', 0, '2023-08-04', NULL),
(4, 'Acer', '/Storage/brand/acer.png', 0, '2023-08-04', NULL),
(5, 'Toshiba', '/Storage/brand/toshiba.png', 0, '2023-08-04', NULL),
(8, 'Vivo', '/Storage/brand/vivo.png', 0, '2023-08-04', NULL),
(10, 'Xiaomi', '/Storage/brand/xiaomi.png', 0, '2023-08-04', NULL),
(19, 'sony', '/Storage/products/download (1).png', 0, '0000-00-00', NULL),
(21, 'Realme', '/Storage/products/Reaalme-1024x427.jpg', 0, '0000-00-00', NULL),
(22, 'LG', '/Storage/products/640px-LG_symbol.svg.png', 0, '0000-00-00', NULL),
(24, 'Panasonic', '/Storage/products/Panasonic-logo.png', 0, '0000-00-00', NULL),
(25, 'Dell', '/Storage/products/Dell_logo_2016.svg.png', 0, '0000-00-00', NULL),
(26, 'Oppo', '/Storage/products/oppo.jpg', 0, '0000-00-00', NULL),
(27, 'Huawei', '/Storage/products/Huawei_Standard_logo.svg.png', 0, '0000-00-00', NULL),
(28, 'EPSON', '/Storage/products/Epson-Logo.png', 0, '0000-00-00', NULL),
(29, 'Canon', '/Storage/products/canon.png', 0, '0000-00-00', NULL),
(30, 'TSC', '/Storage/products/TSC_LOGO.png', 0, '0000-00-00', NULL),
(31, 'Chrome', '/Storage/products/Create Chrome Text Effect In Photoshop.jpg', 0, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_category`
--

CREATE TABLE `m_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(128) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_category`
--

INSERT INTO `m_category` (`id`, `cat_name`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 'Moible', 0, '2015-11-20', NULL),
(2, 'Tablet', 0, '2023-08-16', NULL),
(3, 'Computer', 0, '2023-08-09', NULL),
(7, 'TV', 0, '2023-08-04', NULL),
(10, 'Printer', 0, '2023-11-08', NULL),
(11, 'Smart Watch', 0, '2023-11-08', NULL),
(12, 'Speaker', 0, '2023-11-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_customers`
--

CREATE TABLE `m_customers` (
  `id` int(11) NOT NULL,
  `c_name` varchar(128) DEFAULT NULL,
  `c_email` varchar(128) NOT NULL,
  `c_password` varchar(256) NOT NULL,
  `c_address` varchar(128) DEFAULT NULL,
  `c_township` int(11) NOT NULL,
  `c_region` int(11) NOT NULL,
  `c_phone` varchar(14) DEFAULT NULL,
  `c_profile` varchar(256) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `verify` tinyint(4) NOT NULL DEFAULT 0,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_customers`
--

INSERT INTO `m_customers` (`id`, `c_name`, `c_email`, `c_password`, `c_address`, `c_township`, `c_region`, `c_phone`, `c_profile`, `code`, `verify`, `del_flg`, `create_date`, `update_date`) VALUES
(38, 'Yin Kyae Wai', 'yinkyae3299@gmail.com', '$2y$10$D0M9/s/He/268kqMJmGSR.nm/UbZ31rHQasOS/SrHTPhzeaDvdK2W', 'No.10,Kayay Street, Pataut Quater', 5, 3, '09947342189', NULL, 'CSUICaH49t94KJtbmijlpg6ZN69cAVtTk0VLBKHnfkbnXFTGO07gaWWFS5cgndMhyrVx20zsylc7IHGBixYs85qSopUha03y8gmLB94uHVN0nonEve0QgYh2r2OJt0c0', 1, 0, '2023-08-14', '0000-00-00'),
(41, 'SuuYiMinn', 'suuyiminn@gmail.com', '$2y$10$Lh6JcVUAcJ4WadWEJxqcmeBZgQ7lRZPHV/KFS0ZCCv4QX2sVpN//C', 'Manawhari road', 1, 1, '09758895513', NULL, '02EtcTfAZuyf2VXbZ9ZzxDDsEU86UKsjsnveRdqr8UjUCfkoRt0YfNcv5YoTpnpdKEyEUKzwrRdR1pW6lb3IAH9EnLXLkaagYn01SsGhRdmymwxBmQt2YtSINNdSBw0k', 1, 0, '2023-11-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `m_hero`
--

CREATE TABLE `m_hero` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_merchants`
--

CREATE TABLE `m_merchants` (
  `id` int(11) NOT NULL,
  `me_name` varchar(128) NOT NULL,
  `me_email` varchar(128) NOT NULL,
  `me_password` varchar(256) NOT NULL,
  `me_address` varchar(128) NOT NULL,
  `me_township` int(11) NOT NULL,
  `me_region` int(11) NOT NULL,
  `me_phone` varchar(14) NOT NULL,
  `me_profile` varchar(256) NOT NULL,
  `me_shop_name` varchar(128) NOT NULL,
  `me_payment_acc` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_merchants`
--

INSERT INTO `m_merchants` (`id`, `me_name`, `me_email`, `me_password`, `me_address`, `me_township`, `me_region`, `me_phone`, `me_profile`, `me_shop_name`, `me_payment_acc`, `del_flg`) VALUES
(1, 'Go_Deal', 'g3phpproject03@gmail.com', '$2y$10$ux0PZb.PdPZbtFptiDwzA.EeNzCRxmjFHW2E40JhQGb2uXhrYciH2', 'No.10, Kayay Road, Aungmyittar Quater', 390, 13, '09944138580', '/Storage/products/logo.png', 'Go_Deal', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_pay_acc`
--

CREATE TABLE `m_pay_acc` (
  `id` int(11) NOT NULL,
  `pay_type` varchar(128) NOT NULL,
  `pay_number` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_pay_acc`
--

INSERT INTO `m_pay_acc` (`id`, `pay_type`, `pay_number`, `del_flg`) VALUES
(1, 'KBZ', 128965342, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_products`
--

CREATE TABLE `m_products` (
  `id` int(11) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_title` varchar(128) NOT NULL,
  `p_buy_price` int(11) NOT NULL,
  `p_sell_price` int(11) NOT NULL,
  `p_stock` int(11) NOT NULL DEFAULT 0,
  `p_des` varchar(2048) DEFAULT NULL,
  `p_detail` longtext DEFAULT NULL,
  `p_discount` int(11) DEFAULT NULL,
  `p_brand` int(11) NOT NULL,
  `p_photo_1` varchar(256) NOT NULL,
  `p_photo_2` varchar(256) DEFAULT NULL,
  `p_photo_3` varchar(256) DEFAULT NULL,
  `p_photo_4` varchar(256) DEFAULT NULL,
  `product_rating` int(11) DEFAULT NULL,
  `p_sub_category` int(11) DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_products`
--

INSERT INTO `m_products` (`id`, `p_category`, `p_title`, `p_buy_price`, `p_sell_price`, `p_stock`, `p_des`, `p_detail`, `p_discount`, `p_brand`, `p_photo_1`, `p_photo_2`, `p_photo_3`, `p_photo_4`, `product_rating`, `p_sub_category`, `del_flg`, `create_date`, `update_date`) VALUES
(2, 1, 'Iphone(13 PR0 MAX)', 3900000, 4000000, -4, '256GB Space Black, Esim', 'The iPhone 14 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks', 2, 1, '/Storage/products/product2.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', 5, 3, 0, '2023-08-04', NULL),
(3, 1, 'IPhone (12 pro MAX)', 3000000, 3050000, -2, '256GB Space Black, Esim', '\r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks', 4, 1, '/Storage/products/p3.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', 5, 3, 0, '2023-08-04', NULL),
(4, 1, 'Iphone(13 PR0 MAX)', 3900000, 4000000, -1, '256GB Space Black, Esim', 'The iPhone 14 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks', 2, 1, '/Storage/products/p4.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', 5, 3, 0, '2023-08-04', NULL),
(5, 1, 'IPhone (12 pro MAX)', 2900000, 3050000, 4, '256GB Space Black, Esim', '\r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks', 4, 1, '/Storage/products/p6.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', 3, 3, 0, '2023-08-04', NULL),
(6, 1, 'IPhone (13 pro MAX)', 2500000, 2800000, 4, '256GB Space Black, Esim', '\r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks', 4, 1, '/Storage/products/p4.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-04', NULL),
(7, 1, 'IPhone (11 pro MAX)', 4200000, 4250000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (11 pro MAX).webp', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(8, 1, 'IPhone (11 mini MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (11 mini MAX).webp', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(9, 1, 'IPhone (8 mini MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (8 mini MAX).jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(10, 1, 'IPhone (11 hex MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (11 hex MAX).jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(11, 1, 'IPhone (11 dual MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (11 pro MAX).webp', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(12, 1, 'IPhone (11 pro MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/download.jpg', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(13, 1, 'IPhone (11 dina MAX)', 3000000, 3050000, 4, '                        256GB Space Black, Esim                    ', '                        \r\nIphone(12 PR0 MAX)\r\nThe iPhone 12 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks                    ', 4, 1, '/Storage/products/IPhone (11 mini MAX).webp', '/Storage/products/', '/Storage/products/', '/Storage/products/', NULL, 3, 0, '2023-08-23', NULL),
(24, 3, 'Acer Swift 1', 159000, 1591000, 5, '                        14\" FHD IPS Display,\r\n                                                                         ', '                                                Processor: Intel® Pentium® Silver N6000 Processor,\r\nGraphics: Intel® UHD Graphics,\r\nMemory: 8GB DDR4 Memory,\r\nStorage: 256GB PCIe NVMe SSD,\r\nConnectivity: USB 3.0,Type C, HDMI, MicroSD Card , Reader, WLAN 802.11ac +,\r\nBluetooth,\r\nBattery: 48 Wh Li-ion battery,\r\nWeight: 1.16KG\r\nWarranty: 1 Year                                                                                                             ', 2, 4, '/Storage/products/Acer Swift 1 ( SF114 - Pentium ).webp', '/Storage/products/Acer Swift 1 ( SF114 - Pentium )2.webp', '/Storage/products/Acer Swift 1 ( SF114 - Pentium )1.webp', '/Storage/products/', NULL, 26, 0, '2023-08-23', NULL),
(25, 7, 'BRAVIA XR 85', 400000, 450000, 5, 'Mini LED TV                                                    ', 'Intelligent TV processing technology with Cognitive Processor XR that delivers natural and realistic picture quality.                                                        ', 2, 19, '/Storage/products/Sony Tv.png', '/Storage/products/', '/Storage/products/Sony Tv1.png', '/Storage/products/', NULL, 40, 0, '2023-08-23', NULL),
(26, 1, 'Realme C51', 440000, 449900, 9, '128GB, 6.74 inches                                                                                                                    ', '                                                (Nano-SIM, dual stand-by),\r\nFingerprint (side-mounted), accelerometer, proximity, compass,\r\nLi-Po 5000 mAh, 33W wired,\r\n50 MP, f/1.8, 27mm (wide), 1/2.76\", 0.64µm, PDAF                                                                                         ', 3, 21, '/Storage/products/yjtjntr5j_1696140762402.png', '/Storage/products/8okul6_1696140762402.png', '/Storage/products/jrtjrj4ej_1696140762402.png', '/Storage/products/', NULL, 12, 0, '2023-11-05', NULL),
(27, 1, 'Realme 11 Pro Plus', 1500000, 1599900, 5, '512GB 12GB RAM                ', 'Android 13, Realme UI 4.0,\r\nOcta-core (2x2.6 GHz Cortex-A78 & 6x2.0 GHz Cortex-A55)', 2, 21, '/Storage/products/h46j_1693649055267.png', '/Storage/products/thjyjyk_1693649055268.png', '/Storage/products/Untitled_design_-_2023-09-16T172220.118_1694861627322.png', '/Storage/products/Untitled_design_-_2023-09-16T172309.135_1694861627322.png', NULL, 12, 0, '2023-11-05', NULL),
(28, 1, 'Realme C55 ', 620000, 629900, 20, '    8GB ,256GB (Gold)                ', '                6.72 inches, 109.0 cm2 (~86.7% screen-to-body ratio), Android 13, Realme UI 4.0    ', 3, 21, '/Storage/products/13_1694863002504.png', '/Storage/products/11_1694863002505.png', '/Storage/products/0089_1679540354332.png', '/Storage/products/12_1694863002505.png', NULL, 12, 0, '2023-11-05', NULL),
(29, 2, 'iPad Pro 12.9-inch', 4300000, 4350000, 10, '128GB 5G (MP1X3ZP/A)Gray                 ', '2048 x 2732 pixels, 4:3 ratio (~265 ppi density),\r\niPadOS 16.1, upgradable to iPadOS 16.5                    ', 3, 1, '/Storage/products/trjeje4j_1687689452087.png', '/Storage/products/th4ej_1694941638526.png', '/Storage/products/th4rj4ej4_1694941638525.png', '/Storage/products/', NULL, 17, 0, '2023-11-06', NULL),
(30, 2, 'iPad 9th Gen ', 1600000, 1610000, 10, '64GB,4G,Space Gray           ', '1620 x 2160 pixels, 4:3 ratio (~265 ppi density),\r\n8MP, f/2.4, 31mm (standard), 1.12µm, AF                 ', 1, 1, '/Storage/products/jh4j4kj_1683622879605.png', '/Storage/products/Untitled_design_-_2023-09-16T180714.466_1694864258604.png', '/Storage/products/Untitled_design_-_2023-09-16T180902.715_1694864349187.png', '/Storage/products/', NULL, 17, 0, '2023-11-06', NULL),
(31, 10, 'Epson L-6290 Printer(NW)', 1200000, 1210000, 10, 'Print Resolution 4800 x 1200                    ', '  50000 pages, 200dpi; 12 sec /27 sec                  ', 2, 28, '/Storage/products/rhehh_1694844674972.png', '/Storage/products/tytkj_1694844590332.png', '/Storage/products/thjrj4_1694844590332.png', '/Storage/products/', NULL, 43, 0, '2023-11-08', NULL),
(32, 10, 'Epson L-8050 A4 Printer(NW)', 1100000, 1130000, 10, '     5.760 x 1.440 DPI               ', '           8 pages/min Monochrome, 8 pages/min Colour, 55.1 x 45.7 x 24.2 cm         ', 2, 28, '/Storage/products/8529_1690093017339.png', '/Storage/products/Untitled_design_(82)_1690093017339.png', '/Storage/products/Untitled_design_(81)_1690093017339.png', '/Storage/products/', NULL, 43, 0, '2023-11-08', NULL),
(33, 10, 'EcoTank L18050 Ink Tank Printer', 1000000, 1800000, 10, '2,100 pages (colour)                    ', 'Up to 80 sheets of A3 Plain Paper (80g/m2),\r\nUp to 100 sheets of A3 Plain Paper                    ', 1, 28, '/Storage/products/jyt5j_1694844927039.png', '/Storage/products/hthrjhj_1694844927040.png', '/Storage/products/rhhe_1694844927039.png', '/Storage/products/', NULL, 43, 0, '2023-11-08', NULL),
(34, 10, 'G-3010 3 in 1 inkjet Printer', 500000, 540000, 10, '1.5, 3.5 ms/line (300 dpi)                    ', '4800 (horizontal)*1 x 1200 (vertical) dpi,\r\n	7000 pages                    ', 2, 29, '/Storage/products/2_1597327825203_1680066358472.png', '/Storage/products/015_1597139202725_1636019244782_1680066358471.png', '/Storage/products/3_1597327825203_1680066358472.png', '/Storage/products/', NULL, 43, 0, '2023-11-08', NULL),
(35, 10, 'MF-264DW II Laser Printer', 1200000, 1209000, 10, '1,200 × 1,200 dpi (equivalent)', '5-line Monochrome LCD Display,\r\n2.6 seconds or less                    ', 1, 29, '/Storage/products/01_1695622004904.png', '/Storage/products/03_1695622004905.png', '/Storage/products/02_1695622004905.png', '/Storage/products/', NULL, 44, 0, '2023-11-08', NULL),
(36, 10, 'LBP-6030 Wifi Printer (No Warranty)', 350000, 355000, 9, '600 x 600dpi                    ', '150 sheets (based on 80g/m2),\r\nA4, B5, A5, Legal*1, Letter                    ', 0, 29, '/Storage/products/06_1597138245467_1665822884549_1677319848887.png', '/Storage/products/4_1593505480805_1677319848888.png', '/Storage/products/1_1593505480805_1677319848887.png', '/Storage/products/1_1593505480805_1677319848887.png', NULL, 43, 0, '2023-11-08', NULL),
(37, 10, 'TSC TE344 Barcode Printer', 780000, 786000, 9, ' 127 mm 5”/Second                   ', '       105.6mm (4.16”) x 1016mm (40”)             ', 0, 30, '/Storage/products/Untitled_design_(55)_1658835861584.png', '/Storage/products/11_(11)_1665827132896.png', '/Storage/products/Untitled_design_(54)_1658835861583.png', '/Storage/products/', NULL, 45, 0, '2023-11-08', NULL),
(38, 10, 'TTP-244 Pro Barcode Printer', 490000, 495000, 10, '8 dots/mm (203 DPI)                    ', '4MB Flash Rom, 8MB SDRAM, RS-232, Parallel, USB 2.0, W 232mm x D 288 mm x H 156 mm', 0, 30, '/Storage/products/img13_1593577464267.png', '/Storage/products/img12-removebg-preview (1)_1593577464266.png', '/Storage/products/3_1591880881273.png', '/Storage/products/4_1591880881274.png', NULL, 45, 0, '2023-11-08', NULL),
(39, 11, 'GT4 46mm White Watch', 630000, 639000, 10, '1.43-inches                    ', '    	Up to 14/7 days, 5 ATM-50 m Swim                ', 1, 27, '/Storage/products/326_1698636453301.png', '/Storage/products/Untitled_design_-_2023-10-30T095205.070_1698636453301.png', '/Storage/products/Untitled_design_-_2023-10-30T095439.254_1698636453301.png', '/Storage/products/', NULL, 46, 0, '2023-11-08', NULL),
(40, 12, 'CS2188BFU 2.1 Speaker', 20000, 23000, 10, '  2.1 Channel                  ', '  Bluetooth , USB , SD Card , LED , FM,\r\n	80W (60W+2x10W)                  ', 0, 31, '/Storage/products/Untitled_design_-_2022-03-08T151655.567_1646730857476.png', '/Storage/products/Untitled_design_-_2023-09-19T184435.421_1695125983294.png', '/Storage/products/Untitled_design_-_2023-09-19T184242.301_1695125983294.png', '/Storage/products/', NULL, 48, 0, '2023-11-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_regions`
--

CREATE TABLE `m_regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_regions`
--

INSERT INTO `m_regions` (`id`, `name`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Kachin State', 0, NULL, NULL),
(2, 'Kayah State', 0, NULL, NULL),
(3, 'Kayin State', 0, NULL, NULL),
(4, 'Chin State', 0, NULL, NULL),
(5, 'Sagaing Region', 0, NULL, NULL),
(6, 'Tanintharyi Region', 0, NULL, NULL),
(7, 'Bago Region', 0, NULL, NULL),
(8, 'Mon State', 0, NULL, NULL),
(9, 'Magway Region', 0, NULL, NULL),
(10, 'Mandalay Region', 0, NULL, NULL),
(11, 'Shan State', 0, NULL, NULL),
(12, 'Yangon Region', 0, NULL, NULL),
(13, 'Rakhine State', 0, NULL, NULL),
(14, 'Ayeyarwady Region', 0, NULL, NULL),
(15, 'Naypyidaw Union Territory', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_sub_category`
--

CREATE TABLE `m_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(128) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_sub_category`
--

INSERT INTO `m_sub_category` (`id`, `category_id`, `sub_category_name`, `del_flg`, `create_date`, `update_date`) VALUES
(3, 1, 'Apple', 0, '2023-08-04', NULL),
(4, 1, 'Huawei', 0, '2023-08-04', NULL),
(5, 1, 'Samsaung', 0, '2023-08-04', NULL),
(6, 1, 'Xiaomi', 0, '2023-08-04', NULL),
(8, 1, 'Oppo', 0, '2023-08-04', NULL),
(9, 1, 'OnePlus', 0, '2023-08-04', NULL),
(10, 1, 'Vivo', 0, '2023-08-04', NULL),
(11, 1, 'Honor', 0, '2023-08-04', NULL),
(12, 1, 'Realme', 0, '2023-08-04', NULL),
(13, 1, 'Techno', 0, '2023-08-04', NULL),
(14, 1, 'Itel', 0, '2023-08-04', NULL),
(15, 1, 'Infinix', 0, '2023-08-04', NULL),
(16, 1, 'Nokia', 0, '2023-08-04', NULL),
(17, 2, 'Apple', 0, '2023-08-04', NULL),
(18, 2, 'Samsaung', 0, '2023-08-04', NULL),
(19, 2, 'Huawei', 0, '2023-08-04', NULL),
(20, 2, 'Honor', 0, '2023-08-04', NULL),
(21, 2, 'Xiaomi', 0, '2023-08-04', NULL),
(22, 2, 'Drawing tablet', 0, '2023-08-04', NULL),
(23, 2, 'Nokia', 0, '2023-08-04', NULL),
(24, 3, 'Apple', 0, '2023-08-04', NULL),
(25, 3, 'Dell', 0, '2023-08-04', NULL),
(26, 3, 'Acer', 0, '2023-08-04', NULL),
(27, 3, 'MSI', 0, '2023-08-04', NULL),
(28, 3, 'Lenovo', 0, '2023-08-04', NULL),
(29, 3, 'Asus', 0, '2023-08-04', NULL),
(30, 3, 'Jumper', 0, '2023-08-04', NULL),
(31, 3, 'Hp', 0, '2023-08-04', NULL),
(40, 7, 'Sony', 0, '0000-00-00', NULL),
(41, 7, 'Panasonic', 0, '0000-00-00', NULL),
(42, 7, 'Philips', 0, '0000-00-00', NULL),
(43, 10, 'Color Printer', 0, '2023-11-08', NULL),
(44, 10, 'Laser Printer', 0, '2023-11-08', NULL),
(45, 10, 'Barcode', 0, '2023-11-08', NULL),
(46, 11, 'Huawei', 0, '2023-11-08', NULL),
(47, 11, 'Xiaomi', 0, '2023-11-08', NULL),
(48, 12, 'Audio Speaker', 0, '2023-11-08', NULL),
(49, 12, 'Bluetooth Speaker', 0, '2023-11-08', NULL),
(50, 12, 'Sound Bar', 0, '2023-11-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_townships`
--

CREATE TABLE `m_townships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_townships`
--

INSERT INTO `m_townships` (`id`, `region_id`, `name`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bhamo', 0, NULL, NULL),
(2, 1, 'Dotphoneyan', 0, NULL, NULL),
(3, 1, 'Lwegel', 0, NULL, NULL),
(4, 1, 'Mansi', 0, NULL, NULL),
(5, 1, 'Momauk', 0, NULL, NULL),
(6, 1, 'Myohla', 0, NULL, NULL),
(7, 1, 'Shwegu', 0, NULL, NULL),
(8, 1, 'Hopin', 0, NULL, NULL),
(9, 1, 'Hpakant', 0, NULL, NULL),
(10, 1, 'Kamine', 0, NULL, NULL),
(11, 1, 'Mogaung', 0, NULL, NULL),
(12, 1, 'Mohnyin', 0, NULL, NULL),
(13, 1, 'Chipwi', 0, NULL, NULL),
(14, 1, 'Hsadone', 0, NULL, NULL),
(15, 1, 'Hsawlaw', 0, NULL, NULL),
(16, 1, 'Hsinbo', 0, NULL, NULL),
(17, 1, 'Injangyang', 0, NULL, NULL),
(18, 1, 'Kanpaikti', 0, NULL, NULL),
(19, 1, 'Myitkyina', 0, NULL, NULL),
(20, 1, 'Panwa', 0, NULL, NULL),
(21, 1, 'Shinbwayyan', 0, NULL, NULL),
(22, 1, 'Tanai', 0, NULL, NULL),
(23, 1, 'Waingmaw', 0, NULL, NULL),
(24, 1, 'Kawnglanghpu', 0, NULL, NULL),
(25, 1, 'Machanbaw', 0, NULL, NULL),
(26, 1, 'Nogmung', 0, NULL, NULL),
(27, 1, 'Pannandin', 0, NULL, NULL),
(28, 1, 'Putao', 0, NULL, NULL),
(29, 1, 'Sumprabum', 0, NULL, NULL),
(30, 2, 'Bawlakhe', 0, NULL, NULL),
(31, 2, 'Hpasawng', 0, NULL, NULL),
(32, 2, 'Mese', 0, NULL, NULL),
(33, 2, 'Ywathit', 0, NULL, NULL),
(34, 2, 'Demoso', 0, NULL, NULL),
(35, 2, 'Hpruso', 0, NULL, NULL),
(36, 2, 'Loikaw', 0, NULL, NULL),
(37, 2, 'Shadaw', 0, NULL, NULL),
(38, 3, 'Bawgali', 0, NULL, NULL),
(39, 3, 'Hlaignbwe', 0, NULL, NULL),
(40, 3, 'Hpa-an', 0, NULL, NULL),
(41, 3, 'Leiktho', 0, NULL, NULL),
(42, 3, 'Paingkyon', 0, NULL, NULL),
(43, 3, 'Shan Ywathit', 0, NULL, NULL),
(44, 3, 'Thandaunggyi', 0, NULL, NULL),
(45, 3, 'Hpapun', 0, NULL, NULL),
(46, 3, 'Kamamaung', 0, NULL, NULL),
(47, 3, 'Kawkareik', 0, NULL, NULL),
(48, 3, 'Kyaidon', 0, NULL, NULL),
(49, 3, 'Kyain Seikgyi', 0, NULL, NULL),
(50, 3, 'Payarthonezu', 0, NULL, NULL),
(51, 3, 'Myawaddy', 0, NULL, NULL),
(52, 3, 'Sugali', 0, NULL, NULL),
(53, 3, 'Wawlaymyaing', 0, NULL, NULL),
(54, 4, 'Cikha', 0, NULL, NULL),
(55, 4, 'Falam', 0, NULL, NULL),
(56, 4, 'Rikhuadal', 0, NULL, NULL),
(57, 4, 'Tiddim', 0, NULL, NULL),
(58, 4, 'Ton Zang', 0, NULL, NULL),
(59, 4, 'Hakha', 0, NULL, NULL),
(60, 4, 'Htantlang', 0, NULL, NULL),
(61, 4, 'Kanpetle', 0, NULL, NULL),
(62, 4, 'Matupi', 0, NULL, NULL),
(63, 4, 'Mindat', 0, NULL, NULL),
(64, 4, 'Paletwa', 0, NULL, NULL),
(65, 4, 'Reazu', 0, NULL, NULL),
(66, 4, 'Sami', 0, NULL, NULL),
(67, 5, 'Donhee', 0, NULL, NULL),
(68, 5, 'Hkamti', 0, NULL, NULL),
(69, 5, 'Homalin', 0, NULL, NULL),
(70, 5, 'Htanparkway', 0, NULL, NULL),
(71, 5, 'Lahe', 0, NULL, NULL),
(72, 5, 'Leshi Township (Lay)', 0, NULL, NULL),
(73, 5, 'Mobaingluk', 0, NULL, NULL),
(74, 5, 'Nanyun', 0, NULL, NULL),
(75, 5, 'Pansaung', 0, NULL, NULL),
(76, 5, 'Sonemara', 0, NULL, NULL),
(77, 5, 'Kanbalu', 0, NULL, NULL),
(78, 5, 'Kyunhla', 0, NULL, NULL),
(79, 5, 'Taze', 0, NULL, NULL),
(80, 5, 'Ye-U', 0, NULL, NULL),
(81, 5, 'Kale', 0, NULL, NULL),
(82, 5, 'Kalewa', 0, NULL, NULL),
(83, 5, 'Mingin', 0, NULL, NULL),
(84, 5, 'Banmauk', 0, NULL, NULL),
(85, 5, 'Indaw', 0, NULL, NULL),
(86, 5, 'Katha', 0, NULL, NULL),
(87, 5, 'Kawlin', 0, NULL, NULL),
(88, 5, 'Pinlebu', 0, NULL, NULL),
(89, 5, 'Tigyaing', 0, NULL, NULL),
(90, 5, 'Wuntho', 0, NULL, NULL),
(91, 5, 'Mawlaik', 0, NULL, NULL),
(92, 5, 'Paungbyin', 0, NULL, NULL),
(93, 5, 'Ayadaw', 0, NULL, NULL),
(94, 5, 'Budalin', 0, NULL, NULL),
(95, 5, 'Chaung-U', 0, NULL, NULL),
(96, 5, 'Monywa', 0, NULL, NULL),
(97, 5, 'Myaung', 0, NULL, NULL),
(98, 5, 'Myinmu', 0, NULL, NULL),
(99, 5, 'Sagaing', 0, NULL, NULL),
(100, 5, 'Khin-U', 0, NULL, NULL),
(101, 5, 'Kyaukmyaung', 0, NULL, NULL),
(102, 5, 'Shwebo', 0, NULL, NULL),
(103, 5, 'Tabayin', 0, NULL, NULL),
(104, 5, 'Wetlet', 0, NULL, NULL),
(105, 5, 'Khampat', 0, NULL, NULL),
(106, 5, 'Myothit', 0, NULL, NULL),
(107, 5, 'Tamu', 0, NULL, NULL),
(108, 5, 'Kani', 0, NULL, NULL),
(109, 5, 'Pale', 0, NULL, NULL),
(110, 5, 'Salingyi', 0, NULL, NULL),
(111, 5, 'Yinmabin', 0, NULL, NULL),
(112, 6, 'Dawei', 0, NULL, NULL),
(113, 6, 'Kaleinaung', 0, NULL, NULL),
(114, 6, 'Launglon', 0, NULL, NULL),
(115, 6, 'Myitta', 0, NULL, NULL),
(116, 6, 'Thayetchaung', 0, NULL, NULL),
(117, 6, 'Yebyu', 0, NULL, NULL),
(118, 6, 'Bokpyin', 0, NULL, NULL),
(119, 6, 'Karathuri', 0, NULL, NULL),
(120, 6, 'Kawthoung', 0, NULL, NULL),
(121, 6, 'Khamaukgyi', 0, NULL, NULL),
(122, 6, 'Pyigyimandaing', 0, NULL, NULL),
(123, 6, 'Kyunsu', 0, NULL, NULL),
(124, 6, 'Myeik', 0, NULL, NULL),
(125, 6, 'Palauk', 0, NULL, NULL),
(126, 6, 'Palaw', 0, NULL, NULL),
(127, 6, 'Tanintharyi', 0, NULL, NULL),
(128, 7, 'Aungmyin', 0, NULL, NULL),
(129, 7, 'Bago', 0, NULL, NULL),
(130, 7, 'Daik-U', 0, NULL, NULL),
(131, 7, 'Hpayargyi', 0, NULL, NULL),
(132, 7, 'Intagaw', 0, NULL, NULL),
(133, 7, 'Kawa', 0, NULL, NULL),
(134, 7, 'Kyauktaga', 0, NULL, NULL),
(135, 7, 'Madauk', 0, NULL, NULL),
(136, 7, 'Nyaunglebin', 0, NULL, NULL),
(137, 7, 'Peinzalot', 0, NULL, NULL),
(138, 7, 'Penwegon', 0, NULL, NULL),
(139, 7, 'Pyuntaza', 0, NULL, NULL),
(140, 7, 'Shwegyin', 0, NULL, NULL),
(141, 7, 'Thanatpin', 0, NULL, NULL),
(142, 7, 'Waw', 0, NULL, NULL),
(143, 7, 'Kanyutkwin', 0, NULL, NULL),
(144, 7, 'Kaytumadi', 0, NULL, NULL),
(145, 7, 'Kyaukkyi', 0, NULL, NULL),
(146, 7, 'Kywebwe', 0, NULL, NULL),
(147, 7, 'Mone', 0, NULL, NULL),
(148, 7, 'Myohla', 0, NULL, NULL),
(149, 7, 'Natthangwin', 0, NULL, NULL),
(150, 7, 'Nyaungbinthar', 0, NULL, NULL),
(151, 7, 'Oktwin', 0, NULL, NULL),
(152, 7, 'Pyu', 0, NULL, NULL),
(153, 7, 'Swa', 0, NULL, NULL),
(154, 7, 'Tantabin', 0, NULL, NULL),
(155, 7, 'Taungoo', 0, NULL, NULL),
(156, 7, 'Thagara', 0, NULL, NULL),
(157, 7, 'Yaeni', 0, NULL, NULL),
(158, 7, 'Yedashe', 0, NULL, NULL),
(159, 7, 'Innma', 0, NULL, NULL),
(160, 7, 'Okshipin', 0, NULL, NULL),
(161, 7, 'Padaung', 0, NULL, NULL),
(162, 7, 'Padigone', 0, NULL, NULL),
(163, 7, 'Paukkaung', 0, NULL, NULL),
(164, 7, 'Paungdale', 0, NULL, NULL),
(165, 7, 'Paungde', 0, NULL, NULL),
(166, 7, 'Pyay', 0, NULL, NULL),
(167, 7, 'Shwedaung', 0, NULL, NULL),
(168, 7, 'Sinmeswe', 0, NULL, NULL),
(169, 7, 'Thegon', 0, NULL, NULL),
(170, 7, 'Gyobingauk', 0, NULL, NULL),
(171, 7, 'Letpadan', 0, NULL, NULL),
(172, 7, 'Minhla', 0, NULL, NULL),
(173, 7, 'Monyo', 0, NULL, NULL),
(174, 7, 'Nattalin', 0, NULL, NULL),
(175, 7, 'Okpho', 0, NULL, NULL),
(176, 7, 'Ooethegone', 0, NULL, NULL),
(177, 7, 'Sitkwin', 0, NULL, NULL),
(178, 7, 'Tapun', 0, NULL, NULL),
(179, 7, 'Tharrawaddy', 0, NULL, NULL),
(180, 7, 'Thonze', 0, NULL, NULL),
(181, 7, 'Zigon', 0, NULL, NULL),
(182, 8, 'Chaungzon', 0, NULL, NULL),
(183, 8, 'Khawzar', 0, NULL, NULL),
(184, 8, 'Kyaikkhami', 0, NULL, NULL),
(185, 8, 'Kyaikmaraw', 0, NULL, NULL),
(186, 8, 'Lamine', 0, NULL, NULL),
(187, 8, 'Mawlamyine', 0, NULL, NULL),
(188, 8, 'Mudon', 0, NULL, NULL),
(189, 8, 'Thanbyuzayat', 0, NULL, NULL),
(190, 8, 'Ye', 0, NULL, NULL),
(191, 8, 'Bilin', 0, NULL, NULL),
(192, 8, 'Kyaikto', 0, NULL, NULL),
(193, 8, 'Mottama', 0, NULL, NULL),
(194, 8, 'Paung', 0, NULL, NULL),
(195, 8, 'Suvannawadi', 0, NULL, NULL),
(196, 8, 'Thaton', 0, NULL, NULL),
(197, 8, 'Zingyeik', 0, NULL, NULL),
(198, 9, 'Gangaw', 0, NULL, NULL),
(199, 9, 'Kyaukhtu', 0, NULL, NULL),
(200, 9, 'Saw', 0, NULL, NULL),
(201, 9, 'Tilin', 0, NULL, NULL),
(202, 9, 'Chauck', 0, NULL, NULL),
(203, 9, 'Magway', 0, NULL, NULL),
(204, 9, 'Myothit', 0, NULL, NULL),
(205, 9, 'Natmauk', 0, NULL, NULL),
(206, 9, 'Taungdwingyi', 0, NULL, NULL),
(207, 9, 'Yenangyaung', 0, NULL, NULL),
(208, 9, 'Minbu', 0, NULL, NULL),
(209, 9, 'Ngape', 0, NULL, NULL),
(210, 9, 'Pwintbyu', 0, NULL, NULL),
(211, 9, 'Salin', 0, NULL, NULL),
(212, 9, 'Sidoktaya', 0, NULL, NULL),
(213, 9, 'Myaing', 0, NULL, NULL),
(214, 9, 'Pakokku', 0, NULL, NULL),
(215, 9, 'Pauk', 0, NULL, NULL),
(216, 9, 'Seikphyu', 0, NULL, NULL),
(217, 9, 'Yesagyo', 0, NULL, NULL),
(218, 9, 'Aunglan', 0, NULL, NULL),
(219, 9, 'Kamma', 0, NULL, NULL),
(220, 9, 'Mindon', 0, NULL, NULL),
(221, 9, 'Minhla', 0, NULL, NULL),
(222, 9, 'Sinbaungwe', 0, NULL, NULL),
(223, 9, 'Thayet', 0, NULL, NULL),
(224, 10, 'Kyaukse', 0, NULL, NULL),
(225, 10, 'Myittha', 0, NULL, NULL),
(226, 10, 'Sintgaing', 0, NULL, NULL),
(227, 10, 'Tada-U', 0, NULL, NULL),
(228, 10, 'Amarapura', 0, NULL, NULL),
(229, 10, 'Aungmyethazan', 0, NULL, NULL),
(230, 10, 'Chanayethazan', 0, NULL, NULL),
(231, 10, 'Chanmyathazi', 0, NULL, NULL),
(232, 10, 'Mahaaungmye', 0, NULL, NULL),
(233, 10, 'Patheingyi', 0, NULL, NULL),
(234, 10, 'Pyigyidagun', 0, NULL, NULL),
(235, 10, 'Mahlaing', 0, NULL, NULL),
(236, 10, 'Meiktila', 0, NULL, NULL),
(237, 10, 'Thazi', 0, NULL, NULL),
(238, 10, 'Wundwin', 0, NULL, NULL),
(239, 10, 'Myingyan', 0, NULL, NULL),
(240, 10, 'Natogyi', 0, NULL, NULL),
(241, 10, 'Nganzun', 0, NULL, NULL),
(242, 10, 'Thaungtha', 0, NULL, NULL),
(243, 10, 'Kyaukpadaung', 0, NULL, NULL),
(244, 10, 'Ngathayauk', 0, NULL, NULL),
(245, 10, 'Nyaung-U', 0, NULL, NULL),
(246, 10, 'Madaya', 0, NULL, NULL),
(247, 10, 'Mogok', 0, NULL, NULL),
(248, 10, 'Pyinoolwin', 0, NULL, NULL),
(249, 10, 'Singu', 0, NULL, NULL),
(250, 10, 'Tagaung', 0, NULL, NULL),
(251, 10, 'Thabeikkyin', 0, NULL, NULL),
(252, 10, 'Pyawbwe', 0, NULL, NULL),
(253, 10, 'Yamethin', 0, NULL, NULL),
(254, 11, 'Kengtung', 0, NULL, NULL),
(255, 11, 'Mine Pauk', 0, NULL, NULL),
(256, 11, 'Minelar', 0, NULL, NULL),
(257, 11, 'Mong Khet', 0, NULL, NULL),
(258, 11, 'Mong La', 0, NULL, NULL),
(259, 11, 'Mong Yang', 0, NULL, NULL),
(260, 11, 'Mineyu', 0, NULL, NULL),
(261, 11, 'Mong Hpayak', 0, NULL, NULL),
(262, 11, 'Mong Yawng', 0, NULL, NULL),
(263, 11, 'Minekoke', 0, NULL, NULL),
(264, 11, 'Monehta', 0, NULL, NULL),
(265, 11, 'Mong Hsat', 0, NULL, NULL),
(266, 11, 'Mong Ping', 0, NULL, NULL),
(267, 11, 'Mong Tong', 0, NULL, NULL),
(268, 11, 'Ponparkyin', 0, NULL, NULL),
(269, 11, 'Tontar', 0, NULL, NULL),
(270, 11, 'Kyaing Lap', 0, NULL, NULL),
(271, 11, 'Tachileik', 0, NULL, NULL),
(272, 11, 'Talay', 0, NULL, NULL),
(273, 11, 'Kunlong', 0, NULL, NULL),
(274, 11, 'Hsipaw', 0, NULL, NULL),
(275, 11, 'Kyaukme', 0, NULL, NULL),
(276, 11, 'Mantong', 0, NULL, NULL),
(277, 11, 'Minelon', 0, NULL, NULL),
(278, 11, 'Minengaw', 0, NULL, NULL),
(279, 11, 'Namhsan', 0, NULL, NULL),
(280, 11, 'Namtu', 0, NULL, NULL),
(281, 11, 'Nawnghkio', 0, NULL, NULL),
(282, 11, 'Hsenwi', 0, NULL, NULL),
(283, 11, 'Lashio', 0, NULL, NULL),
(284, 11, 'Mongyai', 0, NULL, NULL),
(285, 11, 'Tangyan', 0, NULL, NULL),
(286, 11, 'Chinshwehaw', 0, NULL, NULL),
(287, 11, 'Konkyan', 0, NULL, NULL),
(288, 11, 'Laukkaing', 0, NULL, NULL),
(289, 11, 'Mawhtike', 0, NULL, NULL),
(290, 11, 'Kutkai', 0, NULL, NULL),
(291, 11, 'Manhero', 0, NULL, NULL),
(292, 11, 'Monekoe', 0, NULL, NULL),
(293, 11, 'Mu Se', 0, NULL, NULL),
(294, 11, 'Namhkam', 0, NULL, NULL),
(295, 11, 'Pansai', 0, NULL, NULL),
(296, 11, 'Tamoenye', 0, NULL, NULL),
(297, 11, 'Hopang', 0, NULL, NULL),
(298, 11, 'Mongmao', 0, NULL, NULL),
(299, 11, 'Namtit', 0, NULL, NULL),
(300, 11, 'Pangwaun', 0, NULL, NULL),
(301, 11, 'Panlong', 0, NULL, NULL),
(302, 11, 'Man Kan', 0, NULL, NULL),
(303, 11, 'Matman', 0, NULL, NULL),
(304, 11, 'Namphan', 0, NULL, NULL),
(305, 11, 'Pangsang Township (Pan', 0, NULL, NULL),
(306, 11, 'Mabein', 0, NULL, NULL),
(307, 11, 'Mongmit', 0, NULL, NULL),
(308, 11, 'Homane', 0, NULL, NULL),
(309, 11, 'Kengtaung', 0, NULL, NULL),
(310, 11, 'Langkho', 0, NULL, NULL),
(311, 11, 'Mawkmai', 0, NULL, NULL),
(312, 11, 'Mong Nai', 0, NULL, NULL),
(313, 11, 'Mong Pan', 0, NULL, NULL),
(314, 11, 'Karli', 0, NULL, NULL),
(315, 11, 'Kholan', 0, NULL, NULL),
(316, 11, 'Kunhing', 0, NULL, NULL),
(317, 11, 'Kyethi', 0, NULL, NULL),
(318, 11, 'Lai-Hka', 0, NULL, NULL),
(319, 11, 'Loilen', 0, NULL, NULL),
(320, 11, 'Minenaung', 0, NULL, NULL),
(321, 11, 'Minesan', 0, NULL, NULL),
(322, 11, 'Mong Hsu', 0, NULL, NULL),
(323, 11, 'Mong Kung', 0, NULL, NULL),
(324, 11, 'Nansang', 0, NULL, NULL),
(325, 11, 'Panglong', 0, NULL, NULL),
(326, 11, 'Hopong', 0, NULL, NULL),
(327, 11, 'Hsi Hseng', 0, NULL, NULL),
(328, 11, 'Indaw', 0, NULL, NULL),
(329, 11, 'Kalaw', 0, NULL, NULL),
(330, 11, 'Kyauktalongyi', 0, NULL, NULL),
(331, 11, 'Lawksawk', 0, NULL, NULL),
(332, 11, 'Naungtayar', 0, NULL, NULL),
(333, 11, 'Nyaungshwe', 0, NULL, NULL),
(334, 11, 'Pekon', 0, NULL, NULL),
(335, 11, 'Pingdaya', 0, NULL, NULL),
(336, 11, 'Pinlaung', 0, NULL, NULL),
(337, 11, 'Taunggyi', 0, NULL, NULL),
(338, 11, 'Ywangan', 0, NULL, NULL),
(339, 12, 'Botataung', 0, NULL, NULL),
(340, 12, 'City', 0, NULL, NULL),
(341, 12, 'Dagon Seikkan', 0, NULL, NULL),
(342, 12, 'Dawbon', 0, NULL, NULL),
(343, 12, 'East Dagon', 0, NULL, NULL),
(344, 12, 'Mingala Taungnyunt', 0, NULL, NULL),
(345, 12, 'North Dagon', 0, NULL, NULL),
(346, 12, 'North Okkalapa', 0, NULL, NULL),
(347, 12, 'Pazundaung', 0, NULL, NULL),
(348, 12, 'South Dagon', 0, NULL, NULL),
(349, 12, 'South Okkalapa', 0, NULL, NULL),
(350, 12, 'Tamwe', 0, NULL, NULL),
(351, 12, 'Thaketa', 0, NULL, NULL),
(352, 12, 'Thingangyun', 0, NULL, NULL),
(353, 12, 'Yankin', 0, NULL, NULL),
(354, 12, 'City', 0, NULL, NULL),
(355, 12, 'Hlaingthaya', 0, NULL, NULL),
(356, 12, 'Hlegu', 0, NULL, NULL),
(357, 12, 'Hmawbi', 0, NULL, NULL),
(358, 12, 'Htantabin', 0, NULL, NULL),
(359, 12, 'Insein', 0, NULL, NULL),
(360, 12, 'Mingaladon', 0, NULL, NULL),
(361, 12, 'Rural', 0, NULL, NULL),
(362, 12, 'Shwepyitha', 0, NULL, NULL),
(363, 12, 'Taikkyi', 0, NULL, NULL),
(364, 12, 'City', 0, NULL, NULL),
(365, 12, 'Cocokyun', 0, NULL, NULL),
(366, 12, 'Dala', 0, NULL, NULL),
(367, 12, 'Kawhmu', 0, NULL, NULL),
(368, 12, 'Kayan', 0, NULL, NULL),
(369, 12, 'Kungyangon', 0, NULL, NULL),
(370, 12, 'Rural', 0, NULL, NULL),
(371, 12, 'Seikkyi Kanaungto', 0, NULL, NULL),
(372, 12, 'Tada', 0, NULL, NULL),
(373, 12, 'Thanlyin', 0, NULL, NULL),
(374, 12, 'Thongwa', 0, NULL, NULL),
(375, 12, 'Twante', 0, NULL, NULL),
(376, 12, 'Ahlon', 0, NULL, NULL),
(377, 12, 'Bahan', 0, NULL, NULL),
(378, 12, 'City', 0, NULL, NULL),
(379, 12, 'Dagon', 0, NULL, NULL),
(380, 12, 'Hlaing', 0, NULL, NULL),
(381, 12, 'Kamayut', 0, NULL, NULL),
(382, 12, 'Kyauktada', 0, NULL, NULL),
(383, 12, 'Kyimyindaing', 0, NULL, NULL),
(384, 12, 'Lanmadaw', 0, NULL, NULL),
(385, 12, 'Latha', 0, NULL, NULL),
(386, 12, 'Mayangon', 0, NULL, NULL),
(387, 12, 'Pabedan', 0, NULL, NULL),
(388, 12, 'Sanchaung', 0, NULL, NULL),
(389, 12, 'Seikkan', 0, NULL, NULL),
(390, 13, 'Ann', 0, NULL, NULL),
(391, 13, 'Kyaukpyu', 0, NULL, NULL),
(392, 13, 'Manaung', 0, NULL, NULL),
(393, 13, 'Ramree', 0, NULL, NULL),
(394, 13, 'Buthidaung', 0, NULL, NULL),
(395, 13, 'Maungdaw', 0, NULL, NULL),
(396, 13, 'Taungpyoletwe', 0, NULL, NULL),
(397, 13, 'Pauktaw', 0, NULL, NULL),
(398, 13, 'Ponnagyun', 0, NULL, NULL),
(399, 13, 'Rathedaung', 0, NULL, NULL),
(400, 13, 'Sittwe', 0, NULL, NULL),
(401, 13, 'Gaw', 0, NULL, NULL),
(402, 13, 'Kyeintali', 0, NULL, NULL),
(403, 13, 'Maei', 0, NULL, NULL),
(404, 13, 'Thandwe', 0, NULL, NULL),
(405, 13, 'Toungup', 0, NULL, NULL),
(406, 13, 'Kyauktaw', 0, NULL, NULL),
(407, 13, 'Minbya', 0, NULL, NULL),
(408, 13, 'Mrauk-U', 0, NULL, NULL),
(409, 13, 'Myebon', 0, NULL, NULL),
(410, 14, 'Hinthada', 0, NULL, NULL),
(411, 14, 'Ingapu', 0, NULL, NULL),
(412, 14, 'Kyangin', 0, NULL, NULL),
(413, 14, 'Lemyethna', 0, NULL, NULL),
(414, 14, 'Myanaung', 0, NULL, NULL),
(415, 14, 'Zalun', 0, NULL, NULL),
(416, 14, 'Labutta', 0, NULL, NULL),
(417, 14, 'Mawlamyinegyun', 0, NULL, NULL),
(418, 14, 'Pyinsalu', 0, NULL, NULL),
(419, 14, 'Danuphyu', 0, NULL, NULL),
(420, 14, 'Ma-ubin', 0, NULL, NULL),
(421, 14, 'Nyaungdon', 0, NULL, NULL),
(422, 14, 'Pantanaw', 0, NULL, NULL),
(423, 14, 'Einme', 0, NULL, NULL),
(424, 14, 'Myaungmya', 0, NULL, NULL),
(425, 14, 'Wakema', 0, NULL, NULL),
(426, 14, 'Hainggyikyun', 0, NULL, NULL),
(427, 14, 'Kangyidaunk', 0, NULL, NULL),
(428, 14, 'Kyaunggon', 0, NULL, NULL),
(429, 14, 'Kyonpyaw', 0, NULL, NULL),
(430, 14, 'Ngapudaw', 0, NULL, NULL),
(431, 14, 'Ngathaingchaung', 0, NULL, NULL),
(432, 14, 'Ngayokaung', 0, NULL, NULL),
(433, 14, 'Ngwehsaung', 0, NULL, NULL),
(434, 14, 'Pathein', 0, NULL, NULL),
(435, 14, 'Shwethaungyan', 0, NULL, NULL),
(436, 14, 'Thabaung', 0, NULL, NULL),
(437, 14, 'Yekyi', 0, NULL, NULL),
(438, 14, 'Ahmar', 0, NULL, NULL),
(439, 14, 'Bogale', 0, NULL, NULL),
(440, 14, 'Dedaye', 0, NULL, NULL),
(441, 14, 'Kyaiklat', 0, NULL, NULL),
(442, 14, 'Pyapon', 0, NULL, NULL),
(443, 15, 'Dekkhinathiri', 0, NULL, NULL),
(444, 15, 'Lewe', 0, NULL, NULL),
(445, 15, 'Pyinmana', 0, NULL, NULL),
(446, 15, 'Zabuthiri', 0, NULL, NULL),
(447, 15, 'Ottarathiri', 0, NULL, NULL),
(448, 15, 'Pobbathiri', 0, NULL, NULL),
(449, 15, 'Tatkon', 0, NULL, NULL),
(450, 15, 'Zeyarthiri', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t-message`
--

CREATE TABLE `t-message` (
  `id` int(11) NOT NULL,
  `sender_type` int(11) NOT NULL,
  `receiver_type` int(11) NOT NULL,
  `mes_content` varchar(2048) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_cart`
--

INSERT INTO `t_cart` (`id`, `customer_id`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 39, 0, '2023-08-18', '0000-00-00'),
(2, 39, 0, '0000-00-00', '0000-00-00'),
(3, 41, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_cart_detail`
--

CREATE TABLE `t_cart_detail` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_cart_detail`
--

INSERT INTO `t_cart_detail` (`id`, `cart_id`, `product_id`, `del_flg`, `create_date`, `update_date`) VALUES
(8, 1, 26, 0, '0000-00-00', '0000-00-00'),
(9, 1, 2, 0, '0000-00-00', '0000-00-00'),
(10, 1, 3, 0, '0000-00-00', '0000-00-00'),
(11, 3, 3, 0, '0000-00-00', '0000-00-00'),
(12, 3, 4, 0, '0000-00-00', '0000-00-00'),
(13, 3, 26, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `township` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `payment` varchar(128) NOT NULL DEFAULT '0',
  `payment_no` varchar(14) NOT NULL,
  `order_done` int(11) NOT NULL DEFAULT 0,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `order_receive_date` date NOT NULL,
  `invoice_date` date NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id`, `customer_id`, `total_amt`, `address`, `township`, `region`, `payment`, `payment_no`, `order_done`, `del_flg`, `order_receive_date`, `invoice_date`, `create_date`, `update_date`) VALUES
(3, 39, 4042250, 'No.11, Aungyadanar Street,  Sanpya Quater', 450, 1, 'Cash On Delivery', '0', 1, 0, '2023-01-18', '2023-08-22', '2023-08-18', NULL),
(5, 39, 11092250, 'No.11, Aungyadanar Street,  Sanpya Quater', 450, 1, 'KBZ', '09785342678', 1, 0, '2023-02-18', '2023-08-22', '2023-08-18', NULL),
(6, 39, 11092250, 'No.11, Aungyadanar Street,  Sanpya Quater', 450, 1, 'KBZ', '09786432123', 1, 0, '2023-03-18', '2023-08-22', '2023-08-18', NULL),
(9, 39, 19210700, '', 6, 10, 'kbzpay', '09987567342', 1, 0, '2023-08-23', '2023-08-23', '0000-00-00', NULL),
(13, 39, 443500, '', 6, 10, 'cod', '', 1, 0, '2023-08-23', '2023-08-23', '0000-00-00', NULL),
(14, 41, 438903, '', 1, 1, 'cod', '', 1, 0, '2023-11-06', '2023-11-06', '0000-00-00', NULL),
(15, 41, 613503, '', 1, 1, 'cod', '', 0, 0, '2023-11-06', '0000-00-00', '0000-00-00', NULL),
(16, 41, 357500, '', 1, 1, 'cod', '', 1, 0, '2023-11-08', '2023-11-08', '0000-00-00', NULL),
(17, 41, 788500, '', 1, 1, 'cod', '', 1, 0, '2023-11-08', '2023-11-08', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_order_detail`
--

CREATE TABLE `t_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_order_detail`
--

INSERT INTO `t_order_detail` (`id`, `order_id`, `product_id`, `qty`, `amt`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 3, 1, 1, 4040000, 0, '2023-08-18', NULL),
(2, 3, 24, 1, 4040000, 0, '2023-08-18', NULL),
(3, 5, 1, 1, 4040000, 0, '2023-08-18', NULL),
(4, 5, 3, 1, 3050000, 0, '2023-08-18', NULL),
(5, 5, 4, 1, 4000000, 0, '2023-08-18', NULL),
(6, 6, 1, 1, 4040000, 0, '2023-08-18', NULL),
(7, 6, 3, 1, 3050000, 0, '2023-08-18', NULL),
(8, 6, 4, 1, 4000000, 0, '2023-08-18', NULL),
(9, 9, 1, 1, 3999600, 0, '0000-00-00', NULL),
(10, 9, 1, 1, 3999600, 0, '0000-00-00', NULL),
(11, 9, 3, 1, 2928000, 0, '0000-00-00', NULL),
(12, 9, 4, 1, 3920000, 0, '0000-00-00', NULL),
(13, 9, 25, 1, 441000, 0, '0000-00-00', NULL),
(14, 9, 2, 1, 3920000, 0, '0000-00-00', NULL),
(15, 13, 25, 1, 441000, 0, '0000-00-00', NULL),
(16, 14, 26, 1, 436403, 0, '0000-00-00', NULL),
(17, 15, 28, 1, 611003, 0, '0000-00-00', NULL),
(18, 16, 36, 1, 355000, 0, '0000-00-00', NULL),
(19, 17, 37, 1, 786000, 0, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_product_rating_details`
--

CREATE TABLE `t_product_rating_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating_no` int(11) NOT NULL,
  `product_review` varchar(2048) DEFAULT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_product_rating_details`
--

INSERT INTO `t_product_rating_details` (`id`, `product_id`, `customer_id`, `rating_no`, `product_review`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 1, 0, 4, 'this is a fav product ', 0, '2023-08-05', '0000-00-00'),
(2, 1, 38, 4, 'this is a fav product ', 0, '2023-08-05', '0000-00-00'),
(3, 1, 38, 3, 'this is a fantasitc phone', 0, '2023-08-05', '0000-00-00'),
(4, 1, 38, 3, 'this is a not a good product ', 0, '2023-08-05', '0000-00-00'),
(5, 5, 38, 4, 'I do not like this one', 0, '2023-08-05', '0000-00-00'),
(6, 5, 38, 4, 'This is not my type', 0, '2023-08-05', '0000-00-00'),
(7, 1, 38, 4, 'it is complicated to use ', 0, '2023-08-05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlist`
--

CREATE TABLE `t_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_wishlist`
--

INSERT INTO `t_wishlist` (`id`, `customer_id`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 39, 0, '0000-00-00', '0000-00-00'),
(2, 41, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlist_detail`
--

CREATE TABLE `t_wishlist_detail` (
  `id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_wishlist_detail`
--

INSERT INTO `t_wishlist_detail` (`id`, `wishlist_id`, `product_id`, `del_flg`, `create_date`, `update_date`) VALUES
(1, 1, 2, 0, '0000-00-00', '0000-00-00'),
(2, 2, 4, 0, '0000-00-00', '0000-00-00'),
(3, 2, 3, 0, '0000-00-00', '0000-00-00'),
(4, 2, 2, 0, '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_brand`
--
ALTER TABLE `m_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_category`
--
ALTER TABLE `m_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customers`
--
ALTER TABLE `m_customers`
  ADD PRIMARY KEY (`id`,`c_email`);

--
-- Indexes for table `m_hero`
--
ALTER TABLE `m_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_merchants`
--
ALTER TABLE `m_merchants`
  ADD PRIMARY KEY (`id`,`me_email`);

--
-- Indexes for table `m_pay_acc`
--
ALTER TABLE `m_pay_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_products`
--
ALTER TABLE `m_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_regions`
--
ALTER TABLE `m_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_sub_category`
--
ALTER TABLE `m_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_townships`
--
ALTER TABLE `m_townships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_townships_region_id_foreign` (`region_id`);

--
-- Indexes for table `t-message`
--
ALTER TABLE `t-message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_cart_detail`
--
ALTER TABLE `t_cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_order_detail`
--
ALTER TABLE `t_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product_rating_details`
--
ALTER TABLE `t_product_rating_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_wishlist`
--
ALTER TABLE `t_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_wishlist_detail`
--
ALTER TABLE `t_wishlist_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_brand`
--
ALTER TABLE `m_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `m_category`
--
ALTER TABLE `m_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_customers`
--
ALTER TABLE `m_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `m_hero`
--
ALTER TABLE `m_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_merchants`
--
ALTER TABLE `m_merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_pay_acc`
--
ALTER TABLE `m_pay_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_products`
--
ALTER TABLE `m_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `m_regions`
--
ALTER TABLE `m_regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_sub_category`
--
ALTER TABLE `m_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `m_townships`
--
ALTER TABLE `m_townships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `t-message`
--
ALTER TABLE `t-message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cart_detail`
--
ALTER TABLE `t_cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_order_detail`
--
ALTER TABLE `t_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_product_rating_details`
--
ALTER TABLE `t_product_rating_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_wishlist`
--
ALTER TABLE `t_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_wishlist_detail`
--
ALTER TABLE `t_wishlist_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_townships`
--
ALTER TABLE `m_townships`
  ADD CONSTRAINT `m_townships_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `m_regions` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
