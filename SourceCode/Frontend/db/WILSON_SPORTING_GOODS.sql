-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6257
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shop
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `shop`;

-- Dumping structure for table shop.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`UserId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- Dumping data for table shop.admin: ~1 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`UserId`, `UserName`, `Password`) VALUES
	(1, 'Aimer', '20eabe5d64b0e216796e834f52d61fd0b70332fc ');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table shop.image
CREATE TABLE IF NOT EXISTS `image` (
  `ImageId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `ImagePath` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ImageAlt` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ImageTitle` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Description` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`ImageId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- Dumping data for table shop.image: ~27 rows (approximately)
DELETE FROM `image`;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`ImageId`, `ProductId`, `ImagePath`, `ImageAlt`, `ImageTitle`, `Description`) VALUES
	(1, 13, 'imageshop/aokhoac.jpg', NULL, 'Áo khoác màu cam', NULL),
	(2, 13, 'imageshop/aokhoac1.jpg', NULL, 'Áo khoác màu xám', NULL),
	(3, 13, 'imageshop/aokhoac2.jpg', NULL, 'Áo khoác màu đen', NULL),
	(4, 1, 'imageshop/aothun.png', NULL, 'Áo thun màu trắng', NULL),
	(5, 1, 'imageshop/aothun1.jpg', NULL, 'Áo thun màu xanh', NULL),
	(6, 1, 'imageshop/aothun2.jpg', NULL, 'Áo thun màu cam', NULL),
	(7, 5, 'imageshop/bongchuyen.jpg', NULL, 'Bóng chuyền', NULL),
	(8, 4, 'imageshop/bongda.jpg', NULL, 'Bóng đá', NULL),
	(9, 6, 'imageshop/bongro.jpg', NULL, 'Bóng rổ', NULL),
	(10, 9, 'imageshop/doboi.jpg', NULL, 'Đồ Bơi', NULL),
	(11, 10, 'imageshop/kinhboi.jpg', NULL, 'Kính Bơi', NULL),
	(12, 11, 'imageshop/nonboi.jpg', NULL, 'Nón Bơi', NULL),
	(13, 12, 'imageshop/dongho.png ', NULL, 'Đồng Hồ thông minh android', NULL),
	(14, 12, 'imageshop/dongho1.jpg', NULL, 'Đồng Hồ thông minh Belle', NULL),
	(15, 12, 'imageshop/dongho2.jpg', NULL, 'Đồng Hồ thông minh Calo', NULL),
	(16, 7, 'imageshop/giay.png', NULL, 'Giày thể thao màu đen trắng', NULL),
	(17, 7, 'imageshop/giay1.jpg', NULL, 'Giày thể thao màu  trắng', NULL),
	(18, 7, 'imageshop/giay2.png', NULL, 'Giày thể thao màu đen ', NULL),
	(19, 8, 'imageshop/giaydabong.jpg', NULL, 'Giày đá bóng màu đen', NULL),
	(20, 8, 'imageshop/giaydabong1.jpg', NULL, 'Giày đá bóng màu cam', NULL),
	(21, 8, 'imageshop/giaydabong2.jpg', NULL, 'Giày đá bóng màu trắng', NULL),
	(22, 3, 'imageshop/quandai.jpg', NULL, 'Quần thể thao adidas', NULL),
	(23, 3, 'imageshop/quandai1.jpg', NULL, 'Quần thể thao adidas', NULL),
	(24, 3, 'imageshop/quandai2.jpg', NULL, 'Quần thể thao adidas', NULL),
	(25, 2, 'imageshop/quansort.jpg', NULL, 'Quần short màu đen', NULL),
	(26, 2, 'imageshop/quansort1.jpg', NULL, 'Quần short màu nâu', NULL),
	(27, 2, 'imageshop/quansort2.jpg', NULL, 'Quần short màu trắng', NULL);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;

-- Dumping structure for table shop.product
CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(244) COLLATE utf8_vietnamese_ci NOT NULL,
  `Image` varchar(244) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Price` double NOT NULL DEFAULT 0,
  `BrandId` int(11) NOT NULL,
  `Description` varchar(244) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TypeId` int(11) NOT NULL,
  `Gender` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `AddedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `DownloadWord` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  `DownloadPdf` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`ProductId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- Dumping data for table shop.product: ~13 rows (approximately)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`ProductId`, `ProductName`, `Image`, `Price`, `BrandId`, `Description`, `TypeId`, `Gender`, `AddedDate`, `DownloadWord`, `DownloadPdf`) VALUES
	(1, 'Áo thun', 'imageshop/aothun.png', 150000, 2, NULL, 1, 'Nam', '2021-05-10 23:00:47', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(2, 'Quần short', 'imageshop/quansort.jpg', 125000, 2, NULL, 2, 'Nam', '2021-05-10 23:04:48', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(3, 'Quần thể thao', 'imageshop/quandai.jpg', 110000, 2, NULL, 2, 'Nam', '2021-05-10 23:06:43', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(4, 'Bóng Đá', 'imageshop/bongda.jpg', 389000, 2, NULL, 4, 'Nam', '2021-05-10 23:08:44', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(5, 'Bóng Chuyền', 'imageshop/bongchuyen.jpg', 250000, 2, NULL, 4, 'Both', '2021-05-10 23:09:56', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(6, 'Bóng Rổ', 'imageshop/bongro.jpg', 300000, 2, NULL, 4, 'Nữ', '2021-05-11 10:40:23', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(7, 'Giày thể thao', 'imageshop/giay.png', 220000, 1, NULL, 3, 'Nam', '2021-05-11 10:42:24', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(8, 'Giày đá bóng', 'imageshop/giaydabong.jpg', 280000, 1, NULL, 3, 'Nam', '2021-05-11 10:43:54', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(9, 'Bộ Đồ Bơi', 'imageshop/doboi.jpg', 200000, 1, NULL, 5, 'Nam', '2021-05-11 10:45:11', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(10, 'Kính Bơi', 'imageshop/kinhboi.jpg', 75000, 1, NULL, 4, 'Nữ', '2021-05-11 10:47:29', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(11, 'Nón Bơi', 'imageshop/nonboi.jpg', 35000, 1, NULL, 4, 'Nam', '2021-05-11 10:48:43', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(12, 'Đồng hồ', 'imageshop/dongho.png ', 350000, 1, NULL, 4, 'Nữ', '2021-05-11 10:49:36', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'),
	(13, 'Áo khoác', 'imageshop/aokhoac.jpg', 120000, 1, NULL, 1, 'Nam', '2021-05-29 23:39:01', 'CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table shop.productbrand
CREATE TABLE IF NOT EXISTS `productbrand` (
  `BrandId` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '',
  `Description` varchar(244) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`BrandId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- Dumping data for table shop.productbrand: ~2 rows (approximately)
DELETE FROM `productbrand`;
/*!40000 ALTER TABLE `productbrand` DISABLE KEYS */;
INSERT INTO `productbrand` (`BrandId`, `BrandName`, `Description`) VALUES
	(1, 'Adidas', NULL),
	(2, 'Puma', NULL);
/*!40000 ALTER TABLE `productbrand` ENABLE KEYS */;

-- Dumping structure for table shop.type
CREATE TABLE IF NOT EXISTS `type` (
  `TypeId` int(11) NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`TypeId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- Dumping data for table shop.type: ~5 rows (approximately)
DELETE FROM `type`;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`TypeId`, `TypeName`) VALUES
	(1, 'Áo'),
	(2, 'Quần'),
	(3, 'Giày '),
	(4, 'Dụng cụ '),
	(5, 'Cả quần và áo ');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
