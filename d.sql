-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.25 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных diplom
CREATE DATABASE IF NOT EXISTS `diplom` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `diplom`;


-- Дамп структуры для таблица diplom.tbl_account
CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `territory_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom.tbl_account: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_account` DISABLE KEYS */;
INSERT INTO `tbl_account` (`id`, `name`, `phone`, `address`, `territory_id`) VALUES
	(3, 'Стройтехносервис', '4957807473', '460051 Оренбургская обл. г. Оренбург пр-кт. Гагарина 43', 1),
	(4, 'Региональное проектное бюро', '3532373378', '460021 Оренбургская обл. г. Оренбург ул. 60 лет Октября 17', 1),
	(5, 'ОренМит', '3532769082', '460001 Оренбургская обл. г. Оренбург ул. Потехина 27', 1),
	(6, 'Гамма-8', '3532753995', '460001 Оренбургская обл. г. Оренбург ул. Потехина 2', 1),
	(7, 'Оренбургский ремонтно-механический завод', '3532525309', '460028 Оренбургская обл. г. Оренбург ул. Шоссейная 24', 2),
	(8, 'Барион', '3532460234', '460048 Оренбургская обл. г. Оренбург ул. Транспортная 8 ', 2),
	(9, 'Волга-Кредит', '3532647364', '460038 Оренбургская обл. г. Оренбург пр-кт. Дзержинского 4 ', 2),
	(10, 'Татаринова Ляна Анатольевна', '3532312928', 'Оренбургская обл. г. Оренбург ул. Чкалова 35', 3),
	(11, 'Банмиллер Е.Ю.', '3532305191', '460005 Оренбургская обл. г. Оренбург ул. Абдрашитова 173', 3),
	(12, 'Щербин А.П.', '', '460009 Оренбургская обл. г. Оренбург ул. Столпянского 36', 3),
	(13, 'Новый ракурс', '3532370871', '460009 Оренбургская обл. г. Оренбург ул. Инструментальная 5 ', 4),
	(14, 'Ассортимент', '3532573995', '460004 Оренбургская обл. г. Оренбург ул. Юркина 9А', 4),
	(15, 'Омфала', '3532452030', 'Оренбургская обл. г. Оренбург пер. Станочный 11', 4);
/*!40000 ALTER TABLE `tbl_account` ENABLE KEYS */;


-- Дамп структуры для таблица diplom.tbl_calcroute
CREATE TABLE IF NOT EXISTS `tbl_calcroute` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(500) NOT NULL,
  `end` varchar(500) NOT NULL,
  `len` float NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom.tbl_calcroute: ~15 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_calcroute` DISABLE KEYS */;
INSERT INTO `tbl_calcroute` (`num`, `start`, `end`, `len`) VALUES
	(240, 'Оренбург 60 Лет октября 2Г', 'Оренбург Победы 3а', 4461.76),
	(241, 'Оренбург Победы 3а', 'Оренбург 60 Лет октября 2Г', 4372.63),
	(242, 'Оренбург 60 Лет октября 2Г', 'Оренбург Майский 1А', 530.38),
	(243, 'Оренбург Победы 3а', 'Оренбург Аксакова 8', 817.03),
	(244, 'Оренбург Победы 3а', 'Оренбург Терешковой 2А', 356.57),
	(245, 'Оренбург 60 Лет октября 2Г', 'Оренбург Дзержинского 10', 10897.2),
	(246, 'Оренбург 60 Лет октября 2Г', 'Оренбург Терешковой 2А', 4447.39),
	(247, 'Оренбург Аксакова 8', 'Оренбург Победы 3а', 817.03),
	(248, 'Оренбург Терешковой 2А', 'Оренбург 60 Лет октября 2Г', 4688.42),
	(249, 'Оренбург Аксакова 8', 'Оренбург 60 Лет октября 2Г', 3781.89),
	(250, 'Оренбург Терешковой 2А', 'Оренбург Дзержинского 10', 7035.12),
	(251, 'Оренбург Аксакова 8', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 9024.69),
	(252, 'Оренбург 60 Лет октября 2Г', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 4697.04),
	(253, 'Оренбург Аксакова 8', 'Оренбург Дзержинского 10', 7468.12),
	(254, 'Оренбург Победы 3а', 'Оренбург Дзержинского 10', 7391.69),
	(255, 'Оренбург Аксакова 8', 'Оренбург Терешковой 2А', 1173.6),
	(256, 'Оренбург Победы 3а', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 1496.99),
	(257, 'Оренбург Аксакова 8', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 1601.84),
	(258, 'Оренбург Терешковой 2А', 'Оренбург Аксакова 8', 1132.81),
	(259, 'Оренбург Победы 3а', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 8807.39),
	(260, 'Оренбург Терешковой 2А', 'Оренбург Победы 3а', 965.29),
	(261, 'Оренбург Аксакова 8', 'Оренбург Майский 1А', 3372.39),
	(262, 'Оренбург Дзержинского 10', 'Оренбург 60 Лет октября 2Г', 11284.9),
	(263, 'Оренбург Дзержинского 10', 'Оренбург Победы 3а', 7561.73),
	(264, 'Оренбург Терешковой 2А', 'Оренбург Майский 1А', 4278.91),
	(265, 'Оренбург Терешковой 2А', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 2462.27),
	(266, 'Оренбург Дзержинского 10', 'Оренбург Аксакова 8', 7729.25),
	(267, 'Оренбург Майский 1А', 'Оренбург 60 Лет октября 2Г', 530.38),
	(268, 'Оренбург Майский 1А', 'Оренбург Победы 3а', 4512.52),
	(269, 'Оренбург Терешковой 2А', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 9349.13),
	(270, 'Оренбург 60 Лет октября 2Г', 'Оренбург Аксакова 8', 3655.38),
	(271, 'Оренбург Дзержинского 10', 'Оренбург Терешковой 2А', 7918.31),
	(272, 'Оренбург Дзержинского 10', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 8599.32),
	(273, 'Оренбург Дзержинского 10', 'Оренбург Майский 1А', 8640.03),
	(274, 'Оренбург Дзержинского 10', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 2539.88),
	(275, 'Оренбург Майский 1А', 'Оренбург Терешковой 2А', 4498.15),
	(276, 'Оренбург Майский 1А', 'Оренбург Дзержинского 10', 10948),
	(277, 'Оренбург Майский 1А', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 4747.8),
	(278, 'Оренбург Майский 1А', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 9282.54),
	(279, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург 60 Лет октября 2Г', 4383.95),
	(280, 'Оренбург Победы 3а', 'Оренбург Майский 1А', 3963.13),
	(281, 'Оренбург Майский 1А', 'Оренбург Аксакова 8', 3706.14),
	(282, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург Победы 3а', 1386.4),
	(283, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург Терешковой 2А', 1372.03),
	(284, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург Майский 1А', 4015.97),
	(285, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург Аксакова 8', 8965.48),
	(286, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург 60 Лет октября 2Г', 9138.6),
	(287, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург Аксакова 8', 1683.11),
	(288, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 10721.2),
	(289, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург Дзержинского 10', 2532.86),
	(290, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург Терешковой 2А', 9154.54),
	(291, '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 'Оренбург Дзержинского 10', 8407.15),
	(292, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', '460000 Оренбургская обл. г. Оренбург ул. 9 Января 51', 10295),
	(293, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург Победы 3а', 8797.96),
	(294, '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 'Оренбург Майский 1А', 8876.98),
	(295, 'Оренбург 60 Лет октября 2Г', '460047 Оренбургская обл. г. Оренбург ул. Салмышская 16', 9526.15);
/*!40000 ALTER TABLE `tbl_calcroute` ENABLE KEYS */;


-- Дамп структуры для таблица diplom.tbl_invoice
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom.tbl_invoice: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
INSERT INTO `tbl_invoice` (`id`, `account_id`, `invoice_date`, `amount`) VALUES
	(3, 5, '2013-12-31', 345.6),
	(4, 6, '2013-12-31', 245.5),
	(5, 7, '2013-12-31', 587.4);
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;


-- Дамп структуры для таблица diplom.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы diplom.tbl_users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `login`, `pwd`, `name`, `active`) VALUES
	(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Мещеринов Иван', 1);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
