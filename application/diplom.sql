-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 08 2013 г., 15:17
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Ореана', '83532394567', 'Оренбург ул. Аксакова 8'),
(2, '"Рога и копыта" ООО', '3532784512', 'Оренбург проспект Победы 23');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_calcroute`
--

CREATE TABLE IF NOT EXISTS `tbl_calcroute` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(500) NOT NULL,
  `end` varchar(500) NOT NULL,
  `len` float NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `tbl_calcroute`
--

INSERT INTO `tbl_calcroute` (`num`, `start`, `end`, `len`) VALUES
(16, 'Оренбург Победы 3а', 'Оренбург Аксакова 8', 817.03),
(17, 'Оренбург 60 Лет октября 2Г', 'Оренбург Победы 3а', 4461.76),
(18, 'Оренбург 60 Лет октября 2Г', 'Оренбург Майский 1А', 530.38),
(19, 'Оренбург 60 Лет октября 2Г', 'Оренбург Терешковой 2А', 4447.39),
(20, 'Оренбург 60 Лет октября 2Г', 'Оренбург Аксакова 8', 3655.38),
(21, 'Оренбург Победы 3а', 'Оренбург Дзержинского 10', 7391.69),
(22, 'Оренбург 60 Лет октября 2Г', 'Оренбург Дзержинского 10', 10897.2),
(23, 'Оренбург Победы 3а', 'Оренбург Майский 1А', 3963.13),
(24, 'Оренбург Аксакова 8', 'Оренбург Терешковой 2А', 1173.6),
(25, 'Оренбург Победы 3а', 'Оренбург Терешковой 2А', 356.57),
(26, 'Оренбург Аксакова 8', 'Оренбург Майский 1А', 3372.39),
(27, 'Оренбург Терешковой 2А', 'Оренбург Дзержинского 10', 7035.12),
(28, 'Оренбург Терешковой 2А', 'Оренбург Майский 1А', 4278.91),
(29, 'Оренбург Дзержинского 10', 'Оренбург Майский 1А', 8640.03),
(30, 'Оренбург Аксакова 8', 'Оренбург Дзержинского 10', 7468.12);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_invoice`
--

CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `account_id`, `invoice_date`, `amount`) VALUES
(3, 1, '2013-12-31', 345.6),
(4, 2, '2013-12-31', 245.5);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `login`, `pwd`, `name`, `active`) VALUES
(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Мещеринов Иван', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
