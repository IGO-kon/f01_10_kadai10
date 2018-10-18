-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 10 朁E18 日 13:12
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f01_db10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_jk_table`
--

CREATE TABLE IF NOT EXISTS `gs_jk_table` (
  `choice` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `enemy` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_jk_table`
--

INSERT INTO `gs_jk_table` (`choice`, `enemy`, `result`) VALUES
('ぐー', '( ᐛ', ''),
('ちょき', 'ちょき', ''),
('( ᐛ', 'ぐー', ''),
('ぐー', 'ちょき', 'win'),
('ちょき', '( ᐛ', 'win');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
