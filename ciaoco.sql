-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?04 ??28 ??17:12
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `ciaoco`
--

-- --------------------------------------------------------

--
-- 資料表結構 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- 資料表的匯出資料 `note`
--

INSERT INTO `note` (`id`, `owner`, `name`, `content`) VALUES
(3, 2, 'sets', 'tstt'),
(4, 2, '測試', '你好'),
(5, 2, 'sefsfdfds', 'zzczxczx'),
(6, 2, 'testsdrtsddsfsdfsdfdsfdsfsdf', '幹'),
(7, 1, '1', 'testttt'),
(8, 2, 'zxcc', 'cccc'),
(9, 2, 'zxczx', 'zzzxc'),
(10, 2, 'zxc', 'zz'),
(11, 2, '12312313213', '1231231321312312313213123123132131231231321312312313213123123132131231231321312312313213123123132131231231321312312313213123123132131231231321312312313213123123132131231231321312312313213123123132131231231321312312313213123123132131231231321312312313213'),
(12, 2, 'sadasd', 'asdasd'),
(13, 2, 'zxc', 'zccc'),
(14, 2, 'z', 'z'),
(15, 2, 'zxc', 'cccccc'),
(16, 2, 'ccc', 'c'),
(17, 2, 'fsdfsdfsdfsdf', 'fffff');

-- --------------------------------------------------------

--
-- 資料表結構 `rainlendar`
--

CREATE TABLE IF NOT EXISTS `rainlendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `event` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 資料表的匯出資料 `rainlendar`
--

INSERT INTO `rainlendar` (`id`, `owner`, `date`, `event`) VALUES
(1, 2, '2015-04-14', '測試'),
(2, 2, '2015-04-28', '明天要上課'),
(3, 2, '2015-04-22', 'ji');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nickname`, `email`) VALUES
(2, 'test', '147538da338b770b61e592afc92b1ee6', 's', ''),
(3, 'hi', '49f68a5c8493ec2c0bf489821c21fc3b', '', ''),
(4, 'F74022167', '781e5e245d69b566979b86e28d23f2c7', '吳勃興', ''),
(5, 'test', '147538da338b770b61e592afc92b1ee6', 'tssttt', ''),
(6, 'test', '147538da338b770b61e592afc92b1ee6', '4werwerwer', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
