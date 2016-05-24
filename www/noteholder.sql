-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2016 г., 19:01
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `noteholder`
--

-- --------------------------------------------------------

--
-- Структура таблицы `folders`
--

CREATE TABLE IF NOT EXISTS `folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `folders`
--

INSERT INTO `folders` (`id`, `user_id`, `name`) VALUES
(52, 34, 'fld1'),
(53, 34, 'fld2');

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `folder_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `folder_id`, `folder_name`, `name`, `content`, `color`) VALUES
(34, 34, 52, 'fld1', 'note1', '1/10nya', ''),
(36, 34, 53, 'fld2', 'note2', 'arrrrr', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `name`) VALUES
(17, 'mrmiau', 'efe6398127928f1b2e9ef3207fb82663', 'mrmiau'),
(18, 'nyam', '04c33b9d29c9c1f31ad69cc590df3146', 'nyam'),
(19, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'f0a4058fd33489695d53df156b77c724', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(21, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'f0a4058fd33489695d53df156b77c724', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(22, 'email', '38d7355701b6f3760ee49852904319c1', 'email'),
(23, 'r', '4b43b0aee35624cd95b910189b3dc231', 'r'),
(24, 'fgh', 'b2f5ff47436671b6e533d8dc3614845d', 'fgh'),
(25, 're', '08a4415e9d594ff960030b921d42b91e', 're'),
(26, 'mrrr1', '9830e1f81f623b33106acc186b93374e', 'mrrr1'),
(27, '       &amp;nbsp', '16d147886c4c095da5c6d6c22e1aaa49', '       &amp;nbsp'),
(28, 'miourrrrr@dot.net', '44f437ced647ec3f40fa0841041871cd', 'miourrrrr@dot.net'),
(29, 'uiiii@dot.net', 'bf2bc2545a4a5f5683d9ef3ed0d977e0', 'uiiii@dot.net'),
(30, 'ksksks@dot.net', '628631f07321b22d8c176c200c855e1b', 'ksksks@dot.net'),
(31, 'kskksks@dot.net', '03c7c0ace395d80182db07ae2c30f034', 'kskksks@dot.net'),
(32, 'hhh@ukr.net', '6fbe74f2fb7f5ffb1675d122cb152032', 'hhh@ukr.net'),
(33, 'miau@ukr.net', 'accc9105df5383111407fd5b41255e23', 'miau@ukr.net'),
(34, 'test@test.net', '098f6bcd4621d373cade4e832627b4f6', 'test@test.net'),
(35, 'test@email.net', '098f6bcd4621d373cade4e832627b4f6', 'test@email.net'),
(36, 'temt@email.net', '47bce5c74f589f4867dbd57e9ca9f808', 'temt@email.net'),
(37, 'aaaa@aaaa.aaa', '4124bc0a9335c27f086f24ba207a4912', 'aaaa@aaaa.aaa'),
(38, 'yurku@hhhh.hhh', '5e36941b3d856737e81516acd45edc50', 'yurku@hhhh.hhh'),
(39, 'hhh@hhh.hhh', '5e36941b3d856737e81516acd45edc50', 'hhh@hhh.hhh'),
(40, 'dfg@fgh.hhh', '5e36941b3d856737e81516acd45edc50', 'dfg@fgh.hhh'),
(41, 'fff@fff.fff', '633de4b0c14ca52ea2432a3c8a5c4c31', 'fff@fff.fff'),
(42, 'email@email.net', '0c83f57c786a0b4a39efab23731c7ebc', 'email@email.net'),
(43, 'emai@emai.net', 'cdbb1f3e57684a0972808915e5a92487', 'emai@emai.net'),
(44, 'folderuser@user.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'folderuser@user.net'),
(45, 'test1@test.net', '098f6bcd4621d373cade4e832627b4f6', 'test1@test.net'),
(47, 'test2@test.net', '098f6bcd4621d373cade4e832627b4f6', 'test2@test.net'),
(48, 'foldertest@test.net', '098f6bcd4621d373cade4e832627b4f6', 'foldertest@test.net'),
(49, 'bbb@bbb.bbb', '21ad0bd836b90d08f4cf640b4c298e7c', 'bbb@bbb.bbb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
