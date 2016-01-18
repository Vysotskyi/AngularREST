-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 18 2016 г., 05:01
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1
-- Версия PHP: 5.6.12-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorted` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `name`, `sorted`, `ord`) VALUES
(50, 'Work', 1, 1),
(51, 'Shoping must be', 1, 0),
(52, 'Test project', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `father` int(11) DEFAULT NULL,
  `ord` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `title`, `date`, `status`, `father`, `ord`, `project_id`) VALUES
(13, 'sdfsdf', '2016-01-08 00:00:00', 1, NULL, 1, 8),
(14, 'asdsad', '2016-01-28 23:00:00', 2, 0, 4, 8),
(15, 'sdfdf', '2016-01-09 00:00:00', 1, NULL, 2, 8),
(20, 'stas', '2016-01-22 23:00:00', 2, 0, 0, 46),
(21, 'asdas1', '2016-01-22 23:00:00', 1, 0, 0, 47),
(22, 'test', '2016-01-29 23:00:00', 3, 0, 1, 48),
(23, 'asdsa', '2016-01-27 23:00:00', 2, 0, 0, 48),
(24, 'Daily meetilk', '2016-01-17 23:00:00', 1, 0, 1, 50),
(25, 'Coding', '2016-01-17 23:00:00', 2, 0, 2, 50),
(26, 'Bugs', '2016-01-17 23:00:00', 3, 0, 3, 50),
(27, 'Test', '2016-01-18 23:00:00', 3, 0, 0, 50),
(28, 'By car', '2016-05-30 23:00:00', 1, 0, 0, 51);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
