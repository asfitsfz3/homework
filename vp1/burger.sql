-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 26 2018 г., 23:28
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
-- База данных: `burger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `part` int(11) DEFAULT NULL,
  `appt` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `payment` tinyint(1) DEFAULT NULL,
  `callback` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `street`, `home`, `part`, `appt`, `floor`, `comment`, `payment`, `callback`) VALUES
(1, 30, 'zabolotnaya', 1, 1, 1, 1, '123', 0, 1),
(2, 30, '2', 2, 2, 2, 2, '321', 1, 0),
(3, 31, 'adsdas', 2, 3, 1, 213, 'adsadasd', 0, 1),
(4, 32, '242', 2, 1, 0, 3, 'dfsdfsdfsdf', 0, 1),
(5, 32, '242', 2, 1, 0, 3, 'dfsdfsdfsdf222222222', 0, 1),
(6, 33, 'лунная', 321, 32, 1, 0, 'ллллллллллллллллг', 0, 0),
(7, 33, 'лунная', 321, 32, 1, 0, '00000000000000000', 1, 1),
(8, 33, 'лунная', 321, 32, 1, 0, '11111111111111111', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `phone_number`) VALUES
(30, 'marisa@gensokyo.ru', 'marisa', '+7 (999) 999 99 99'),
(31, 'reimu@gensokyo.ru', 'reimu', '+7 (333) 333 33 33'),
(32, 'yukari@gensokyo.ru', 'yukari', '+7 (254) 563 73 46'),
(33, 'reisen@moon.su', 'reisen', '+7 (777) 777 77 77');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
