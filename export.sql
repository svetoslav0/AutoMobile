-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for automobile
CREATE DATABASE IF NOT EXISTS `automobile` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `automobile`;

-- Dumping structure for table automobile.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table automobile.categories: ~10 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Ван'),
	(2, 'Джип'),
	(3, 'Кабрио'),
	(4, 'Комби'),
	(5, 'Купе'),
	(6, 'Миниван'),
	(7, 'Пикап'),
	(8, 'Седан'),
	(9, 'Стреч лимузина'),
	(10, 'Хечбек');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table automobile.colors
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.colors: ~41 rows (approximately)
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` (`id`, `color`) VALUES
	(1, 'Тъмно син'),
	(2, 'Банан'),
	(3, 'Беата'),
	(4, 'Бежов'),
	(5, 'Бордо'),
	(6, 'Бронз'),
	(7, 'Бял'),
	(8, 'Винен'),
	(9, 'Виолетов'),
	(10, 'Вишнев'),
	(11, 'Графит'),
	(12, 'Жълт'),
	(13, 'Зелен'),
	(14, 'Златист'),
	(15, 'Кафяв'),
	(16, 'Керемиден'),
	(17, 'Кремав'),
	(18, 'Лилав'),
	(19, 'Металик'),
	(20, 'Оранжев'),
	(21, 'Охра'),
	(22, 'Пепелив'),
	(23, 'Перла'),
	(24, 'Пясъчен'),
	(25, 'Резидав'),
	(26, 'Розов'),
	(27, 'Сахара'),
	(28, 'Светло сив'),
	(29, 'Светло син'),
	(30, 'Сив'),
	(31, 'Син'),
	(32, 'Слонова кост'),
	(33, 'Сребърен'),
	(34, 'Тъмнозелен'),
	(35, 'Тъмносив'),
	(36, 'Тъмносин металик'),
	(37, 'Тъмно червен'),
	(38, 'Тютюн'),
	(39, 'Хамелеон'),
	(40, 'Червен'),
	(41, 'Черен');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;

-- Dumping structure for table automobile.engines
CREATE TABLE IF NOT EXISTS `engines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.engines: ~4 rows (approximately)
/*!40000 ALTER TABLE `engines` DISABLE KEYS */;
INSERT INTO `engines` (`id`, `type`) VALUES
	(1, 'Бензинов'),
	(2, 'Дизелов'),
	(3, 'Електрически'),
	(4, 'Хибриден');
/*!40000 ALTER TABLE `engines` ENABLE KEYS */;

-- Dumping structure for table automobile.eurostandarts
CREATE TABLE IF NOT EXISTS `eurostandarts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.eurostandarts: ~6 rows (approximately)
/*!40000 ALTER TABLE `eurostandarts` DISABLE KEYS */;
INSERT INTO `eurostandarts` (`id`, `name`) VALUES
	(1, 'Евро 1'),
	(2, 'Евро 2'),
	(3, 'Евро 3'),
	(4, 'Евро 4'),
	(5, 'Евро 5'),
	(6, 'Евро 6');
/*!40000 ALTER TABLE `eurostandarts` ENABLE KEYS */;

-- Dumping structure for table automobile.extras
CREATE TABLE IF NOT EXISTS `extras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra` varchar(128) COLLATE utf8_bin NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.extras: ~0 rows (approximately)
/*!40000 ALTER TABLE `extras` DISABLE KEYS */;
INSERT INTO `extras` (`id`, `extra`, `type_id`) VALUES
	(1, 'GPS система за проследяване', 1),
	(2, 'Автоматичен контрол на стабилността', 1),
	(3, 'Адаптивни предни светлини', 1),
	(4, 'Антиблокираща система', 1),
	(5, 'Въздушни възглавници - Задни', 1),
	(6, 'Въздушни възглавници - Предни', 1),
	(7, 'Въздушни възглавници - Странични', 1),
	(8, 'Ел. разпределяне на спирачното усилие', 1),
	(9, 'Електронна програма за стабилизиране', 1),
	(10, 'Контрол на налягането на гумите', 1),
	(11, 'Парктроник', 1),
	(12, 'Система ISOFIX', 1),
	(13, 'Система за динамична устойчивост', 1),
	(14, 'Система за защита от пробуксуване', 1),
	(15, 'Система за изсушаване на накладките', 1),
	(16, 'Система за контрол на дистанцията', 1),
	(17, 'Auto Start Stop function', 2),
	(18, 'Bluetooth  handsfree система', 2),
	(19, 'DVD, TV', 2),
	(20, 'Steptronic, Tiptronic', 2),
	(21, 'USB, audiovideo, INAUX изводи', 2),
	(22, 'Адаптивно въздушно окачване', 2),
	(23, 'Безключово палене', 2),
	(24, 'Блокаж на диференциала', 2),
	(25, 'Бордкомпютър', 2),
	(26, 'Бързи  бавни скорости', 2),
	(27, 'Датчик за светлина', 2),
	(28, 'Ел. Огледала', 2),
	(29, 'Ел. Стъкла', 2),
	(30, 'Ел. регулиране на окачването', 2),
	(31, 'Ел. регулиране на седалките', 2),
	(32, 'Ел. усилвател на волана', 2),
	(33, 'Климатик', 2),
	(34, 'Климатроник', 2),
	(35, 'Мултифункционален волан', 2),
	(36, 'Навигация', 2),
	(37, 'Отопление на волана', 2),
	(38, 'Печка', 2),
	(39, 'Подгряване на предното стъкло', 2),
	(40, 'Подгряване на седалките', 2),
	(41, 'Регулиране на волана', 2),
	(42, 'Сензор за дъжд', 2),
	(43, 'Серво усилвател на волана', 2),
	(44, 'Система за измиване на фаровете', 2),
	(45, 'Система за контрол на скоростта (автопилот)', 2),
	(46, 'Стерео уредба', 2),
	(47, 'Филтър за твърди частици', 2),
	(48, 'Хладилна жабка', 2),
	(49, '2(3) Врати', 4),
	(50, '4(5) Врати', 4),
	(51, 'LED фарове', 4),
	(52, 'Ксенонови фарове', 4),
	(53, 'Лети джанти', 4),
	(54, 'Металик', 4),
	(55, 'Отопляеми чистачки', 4),
	(56, 'Панорамен люк', 4),
	(57, 'Рейлинг на покрива', 4),
	(58, 'Ролбари', 4),
	(59, 'Спойлери', 4),
	(60, 'Теглич', 4),
	(61, 'Халогенни фарове', 4),
	(62, 'Шибедах', 4),
	(63, 'Велурен салон', 3),
	(64, 'Десен волан', 3),
	(65, 'Кожен салон', 3),
	(66, 'OFFROAD пакет', 5),
	(67, 'Аларма', 5),
	(68, 'Брониран', 5),
	(69, 'Имобилайзер', 5),
	(70, 'Каско', 5),
	(71, 'Лебедка', 5),
	(72, 'Подсилени стъкла', 5),
	(73, 'Централно заключване', 5),
	(74, 'TAXI', 6),
	(75, 'За хора с увреждания', 6),
	(76, 'Катафалка', 6),
	(77, 'Линейка', 6),
	(78, 'Учебен', 6),
	(79, 'Хладилен', 6),
	(80, 'Хомологация N1', 6),
	(81, '4x4', 7),
	(82, '7 места', 7),
	(83, 'Buy back', 7),
	(84, 'Бартер', 7),
	(85, 'Газова уредба', 7),
	(86, 'Дълга база', 7),
	(87, 'КапариранПродаден', 7),
	(88, 'Катастрофирал', 7),
	(89, 'Къса база', 7),
	(90, 'Лизинг', 7),
	(91, 'Метанова уредба', 7),
	(92, 'На части', 7),
	(93, 'Напълно обслужен', 7),
	(94, 'Нов внос', 7),
	(95, 'С право на дан.к-т', 7),
	(96, 'С регистрация', 7),
	(97, 'Сервизна книжка', 7);
/*!40000 ALTER TABLE `extras` ENABLE KEYS */;

-- Dumping structure for table automobile.extra_types
CREATE TABLE IF NOT EXISTS `extra_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra_type` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.extra_types: ~7 rows (approximately)
/*!40000 ALTER TABLE `extra_types` DISABLE KEYS */;
INSERT INTO `extra_types` (`id`, `extra_type`) VALUES
	(1, 'Безопасност'),
	(2, 'Комфорт'),
	(3, 'Интериор'),
	(4, 'Екстериор'),
	(5, 'Защита'),
	(6, 'Специализирани'),
	(7, 'Други');
/*!40000 ALTER TABLE `extra_types` ENABLE KEYS */;

-- Dumping structure for table automobile.gears
CREATE TABLE IF NOT EXISTS `gears` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.gears: ~3 rows (approximately)
/*!40000 ALTER TABLE `gears` DISABLE KEYS */;
INSERT INTO `gears` (`id`, `type`) VALUES
	(1, 'Ръчна'),
	(2, 'Автоматична'),
	(3, 'Полуавтоматична');
/*!40000 ALTER TABLE `gears` ENABLE KEYS */;

-- Dumping structure for table automobile.towns
CREATE TABLE IF NOT EXISTS `towns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `town` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table automobile.towns: ~29 rows (approximately)
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
INSERT INTO `towns` (`id`, `town`) VALUES
	(1, 'Благоевград'),
	(2, 'Бургас'),
	(3, 'Варна'),
	(4, 'Велико Търново'),
	(5, 'Видин'),
	(6, 'Враца'),
	(7, 'Габрово'),
	(8, 'Добрич'),
	(9, 'Дупница'),
	(10, 'Кърджали'),
	(11, 'Кюстендил'),
	(12, 'Ловеч'),
	(13, 'Монтана'),
	(14, 'Пазарджик'),
	(15, 'Перник'),
	(16, 'Плевен'),
	(17, 'Пловдив'),
	(18, 'Разград'),
	(19, 'Русе'),
	(20, 'Силистра'),
	(21, 'Сливен'),
	(22, 'Смолян'),
	(23, 'София'),
	(24, 'Стара Загора'),
	(25, 'Търговище'),
	(26, 'Хасково'),
	(27, 'Шумен'),
	(28, 'Ямбол'),
	(29, 'Извън страната');
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;

-- Dumping structure for table automobile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table automobile.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`) VALUES
	(1, 'aladin', '$2y$10$5NkgeQdAHfrhySiF7Zt9deJDKvo4eaUPuexRw1UqDhFOiW8jKoE1y', 'aladin@aladin.bg', 'Geroge', 'Mitkov'),
	(10, 'user123', '$2y$10$xhp24Qt3nrvenu99WQoESufSsr0dHjU4g8yKzh5xF3W', 'user@abv.bg', '', ''),
	(15, 'admin', '$2y$10$u/GjzEYS8RJ/mYEZlMlIaOWFWdVWijbSeUjJVa7llCCrAsLsvaaVq', 'admin@admin.com', 'Admin', 'Admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
