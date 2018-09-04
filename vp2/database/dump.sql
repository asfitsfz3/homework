-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2018 г., 01:27
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vp2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`image_id`, `user_id`, `path`) VALUES
(39, 370188, 'DkdzljNX4AAbJUF.jpg.jpg'),
(40, 370188, 'DkdzljOW0AA5pgH.jpg.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `description`, `age`, `avatar`) VALUES
(370088, 'B)/5', '', NULL, 273, NULL),
(370089, ':*021', '', NULL, 249, NULL),
(370090, '01=B', '', NULL, 24, NULL),
(370091, ')?', '', NULL, 178, NULL),
(370092, 'BB@@&gt;', '', NULL, 34, NULL),
(370093, '==5,+', '', NULL, 80, NULL),
(370094, '7+3', '', NULL, 30, NULL),
(370095, 'D1', '', NULL, 149, NULL),
(370096, '1+@C', '', NULL, 63, NULL),
(370097, '8-&lt;D', '', NULL, 231, NULL),
(370098, '391,-', '', NULL, 286, NULL),
(370099, '1@A', '', NULL, 9, NULL),
(370100, '4@=', '', NULL, 119, NULL),
(370101, '&gt;4,/', '', NULL, 30, NULL),
(370102, '5A:,5', '', NULL, 65, NULL),
(370103, '&lt;7A7C.', '', NULL, 66, NULL),
(370104, '@3', '', NULL, 129, NULL),
(370105, '9*@-', '', NULL, 205, NULL),
(370106, '6B-*+', '', NULL, 33, NULL),
(370107, '+/88', '', NULL, 214, NULL),
(370108, 'C-9', '', NULL, 220, NULL),
(370109, '5+', '', NULL, 96, NULL),
(370110, 'DD', '', NULL, 176, NULL),
(370111, 'A+3&gt;', '', NULL, 120, NULL),
(370112, '+3)2', '', NULL, 40, NULL),
(370113, 'C.&gt;5', '', NULL, 124, NULL),
(370114, '?2*2&lt;/', '', NULL, 2, NULL),
(370115, 'CC', '', NULL, 82, NULL),
(370116, '--C', '', NULL, 270, NULL),
(370117, 'C;D', '', NULL, 216, NULL),
(370118, '1-D*', '', NULL, 13, NULL),
(370119, '=DD', '', NULL, 166, NULL),
(370120, '&gt;D/(1/', '', NULL, 47, NULL),
(370121, '3&gt;;6B', '', NULL, 175, NULL),
(370122, '4@&lt;', '', NULL, 222, NULL),
(370123, 'C@*', '', NULL, 243, NULL),
(370124, '2&lt;*', '', NULL, 140, NULL),
(370125, ':1&gt;', '', NULL, 257, NULL),
(370126, ')&lt;A9', '', NULL, 194, NULL),
(370127, ':C6', '', NULL, 76, NULL),
(370128, '+1&gt;', '', NULL, 123, NULL),
(370129, '7(16', '', NULL, 91, NULL),
(370130, '-/0', '', NULL, 212, NULL),
(370131, '8)', '', NULL, 64, NULL),
(370132, '+@?', '', NULL, 222, NULL),
(370133, ')D-,1', '', NULL, 156, NULL),
(370134, '66', '', NULL, 201, NULL),
(370135, 'A,@2', '', NULL, 34, NULL),
(370136, '37,&lt;', '', NULL, 264, NULL),
(370137, '2;9', '', NULL, 148, NULL),
(370138, '7D', '', NULL, 53, NULL),
(370139, '-?', '', NULL, 142, NULL),
(370140, '@,3+,', '', NULL, 132, NULL),
(370141, 'C533', '', NULL, 254, NULL),
(370142, '.A26+', '', NULL, 202, NULL),
(370143, 'B?', '', NULL, 259, NULL),
(370144, ';5', '', NULL, 93, NULL),
(370145, '*2', '', NULL, 107, NULL),
(370146, 'D&lt;=', '', NULL, 136, NULL),
(370147, ',)&gt;+', '', NULL, 241, NULL),
(370148, 'A)&lt;2', '', NULL, 151, NULL),
(370149, '@0D', '', NULL, 219, NULL),
(370150, '?1A1', '', NULL, 82, NULL),
(370151, '-6=5', '', NULL, 4, NULL),
(370152, '5/A', '', NULL, 56, NULL),
(370153, 'B5+-', '', NULL, 290, NULL),
(370154, 'D@', '', NULL, 211, NULL),
(370155, '(=D', '', NULL, 147, NULL),
(370156, 'B.)', '', NULL, 124, NULL),
(370157, '2=D11', '', NULL, 106, NULL),
(370158, '.&lt;&gt;&gt;:7', '', NULL, 160, NULL),
(370159, '+38', '', NULL, 66, NULL),
(370160, '173*', '', NULL, 53, NULL),
(370161, '=?+', '', NULL, 163, NULL),
(370162, ':*A@', '', NULL, 166, NULL),
(370163, '249', '', NULL, 23, NULL),
(370164, '17;;,', '', NULL, 260, NULL),
(370165, '9:?/', '', NULL, 47, NULL),
(370166, '(()1', '', NULL, 193, NULL),
(370167, '6A1', '', NULL, 261, NULL),
(370168, '7&lt;87', '', NULL, 44, NULL),
(370169, 'B&gt;', '', NULL, 266, NULL),
(370170, 'C@', '', NULL, 142, NULL),
(370171, '))', '', NULL, 19, NULL),
(370172, 'AC', '', NULL, 175, NULL),
(370173, ')2;', '', NULL, 188, NULL),
(370174, ':?A', '', NULL, 78, NULL),
(370175, '/,D', '', NULL, 217, NULL),
(370176, '5C5*3', '', NULL, 191, NULL),
(370177, '3-8D2', '', NULL, 187, NULL),
(370178, '7*', '', NULL, 20, NULL),
(370179, 'B-3', '', NULL, 183, NULL),
(370180, '?7(', '', NULL, 141, NULL),
(370181, '.,C', '', NULL, 91, NULL),
(370182, '2-0(A', '', NULL, 149, NULL),
(370183, '5@', '', NULL, 220, NULL),
(370184, '(.@', '', NULL, 110, NULL),
(370185, '&gt;C', '', NULL, 188, NULL),
(370186, '3(.)', '', NULL, 84, NULL),
(370187, 'D@840@', '', NULL, 194, NULL),
(370188, 'рейму', '123', 'хакурейская жрица', 20, 'DkdzljOW0AA5pgH.jpg.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `users` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370189;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
