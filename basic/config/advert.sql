-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 16 2015 г., 16:52
-- Версия сервера: 5.6.25
-- Версия PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `advert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `advert`
--

INSERT INTO `advert` (`id`, `user_id`, `region_id`, `city_id`, `category_id`, `subcategory_id`, `title`, `text`, `price`, `created_at`, `updated_at`, `views`) VALUES
(1, 1, 1, 1, 1, 1, 'title', 'text', '11.00', 1444729054, 1444939579, 3),
(3, 1, 3, 11, 4, 13, 'title 2', 'text here', '125.42', 1444730201, 1444939966, 1),
(5, 3, 1, 5, 4, 14, 'title', 'text', '145.26', 1444770764, 1444770764, 1),
(6, 3, 1, 2, 2, 8, 'dfhsdf', 'dsfh dfh  dfh fhshfdhsh', '15.36', 1444771827, 1444771827, 0),
(7, 3, 3, 10, 1, 3, 'picture', 'picture', '10.29', 1444820866, 1444820866, 0),
(8, 3, 1, 1, 3, 9, 'picture', 'picture', '10.29', 1444820910, 1444820910, 0),
(9, 3, 1, 4, 1, 2, 'picture', 'picture', '45.26', 1444820970, 1444820970, 0),
(10, 3, 2, 7, 4, 14, 'picture', 'picture', '15.48', 1444821066, 1444821066, 0),
(11, 3, 2, 7, 2, 6, 'picture', 'picture', '18.56', 1444821822, 1444821822, 0),
(12, 3, 2, 7, 2, 6, 'picture', 'picture', '18.56', 1444821847, 1444821847, 0),
(13, 3, 2, 7, 2, 6, 'picture', 'picture', '18.56', 1444821868, 1444821868, 0),
(14, 3, 2, 7, 2, 6, 'picture', 'picture', '18.56', 1444822020, 1444822020, 0),
(15, 3, 2, 7, 2, 6, 'picture', 'picture', '18.56', 1444822058, 1444822058, 0),
(16, 3, 2, 9, 1, 3, 'hsdhs', 'shsfdjhjgfjn', '16.43', 1444828196, 1444828196, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `advert_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bookmark`
--

INSERT INTO `bookmark` (`id`, `user_id`, `advert_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'category_1'),
(2, 'category_2'),
(3, 'category_3'),
(4, 'category_4');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `region_id`, `name`) VALUES
(1, 1, '1_city_1'),
(2, 1, '1_city_2'),
(3, 1, '1_city_3'),
(4, 1, '1_city_4'),
(5, 1, '1_city_5'),
(6, 2, '2_city_1'),
(7, 2, '2_city_2'),
(8, 2, '2_city_3'),
(9, 2, '2_city_4'),
(10, 3, '3_city_1'),
(11, 3, '3_city_2'),
(12, 3, '3_city_3');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1444668746),
('m151012_162829_user', 1444668749),
('m151012_163112_region', 1444668749),
('m151012_163244_city', 1444668750),
('m151012_163409_category', 1444668750),
('m151012_163509_subcategory', 1444668751),
('m151012_163717_advert', 1444668755),
('m151012_164408_bookmark', 1444668756),
('m151014_001004_views', 1444781577);

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `name`) VALUES
(1, 'region_1'),
(2, 'region_2'),
(3, 'region_3');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `name`) VALUES
(1, 1, '1_subcategory_1'),
(2, 1, '1_subcategory_2'),
(3, 1, '1_subcategory_3'),
(4, 1, '1_subcategory_4'),
(5, 2, '2_subcategory_1'),
(6, 2, '2_subcategory_2'),
(7, 2, '2_subcategory_3'),
(8, 2, '2_subcategory_4'),
(9, 3, '3_subcategory_1'),
(10, 3, '3_subcategory_2'),
(11, 3, '3_subcategory_3'),
(12, 3, '3_subcategory_4'),
(13, 4, '4_subcategory_1'),
(14, 4, '4_subcategory_2');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `password`, `email`, `skype`, `phone`, `auth_key`, `password_reset_token`) VALUES
(1, 'Anastasia', 'Iskimzhi', '$2y$13$xtjObhJw1iYcrvA2cBjp7uy8p824j/IiK4HN0DXTN2BK41eXVggEm', 'my@mail.com', 'hellish_angel', '+380501112233', 'YRmL7Y_AoDmXxtZw-Yfs8zoFYIhycwOp', 's8KCRcNWYFZ2zwkeSkeBZxjARcAVhkiv_1444684248'),
(3, 'Ivan', 'Ivanov', '$2y$13$HgIVuRZIrsD/2u9nDdOxdeMfYYcLV4q6WGBV7XZvDv22dc9jSfaJO', 'email@email.com', '', '', 'r5WRtqJyTBHxK_TomijmOSEgdRmHwJdn', 'cn01u8Jxtq4uaWZ6DjYQXgEzH3XQ_ef1_1444770591'),
(4, 'Vasya', 'Pupkin', '$2y$13$bH0Kk9k4nS/Pz2hD5PhGruOBEOXZnjhVogzBq1ZB3OD..B5tq8e1K', 'vasya@email.com', '', '', 'v-gZC6_yi371VzyXwFvJ2ybliNYFadAE', 'jxKvGKXTQnoAzoyLJJmp40iAVBWjN6mZ_1444899287');

-- --------------------------------------------------------

--
-- Структура таблицы `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `user_id` int(11) DEFAULT NULL,
  `advert_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `views`
--

INSERT INTO `views` (`user_id`, `advert_id`) VALUES
(3, 1),
(3, 3),
(3, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advert_user` (`user_id`),
  ADD KEY `advert_region` (`region_id`),
  ADD KEY `advert_city` (`city_id`),
  ADD KEY `advert_category` (`category_id`),
  ADD KEY `advert_subcategory` (`subcategory_id`);

--
-- Индексы таблицы `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookmark_user` (`user_id`),
  ADD KEY `bookmark_advert` (`advert_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_city` (`region_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_subcategory` (`category_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `views`
--
ALTER TABLE `views`
  ADD KEY `views_user` (`user_id`),
  ADD KEY `views_advert` (`advert_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `advert_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advert_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advert_region` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advert_subcategory` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advert_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_advert` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookmark_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `region_city` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `category_subcategory` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_advert` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `views_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
