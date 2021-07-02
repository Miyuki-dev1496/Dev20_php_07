-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 7 月 02 日 23:31
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `HoteList`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `a_login`
--

CREATE TABLE `a_login` (
  `id` int(11) NOT NULL,
  `u_name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_bt` datetime DEFAULT NULL,
  `email` varchar(26) NOT NULL,
  `sex` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `life_flg` int(11) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `a_login`
--

INSERT INTO `a_login` (`id`, `u_name`, `u_id`, `u_pw`, `date_bt`, `email`, `sex`, `location`, `life_flg`, `indate`) VALUES
(1, 'nievehermoso', 'nieve', 'test', NULL, '', '', '', 1, '2015-06-24 00:00:00');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `a_login`
--
ALTER TABLE `a_login`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `a_login`
--
ALTER TABLE `a_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
