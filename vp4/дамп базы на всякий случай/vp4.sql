-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2018 г., 17:59
-- Версия сервера: 5.7.20
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
-- База данных: `vp4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_email`
--

CREATE TABLE `admin_email` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin_email`
--

INSERT INTO `admin_email` (`id`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asfitsfz3@yandex.ru', NULL, NULL, '2018-09-17 09:19:14');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'action', 'asfasf', NULL, NULL, NULL),
(2, 'стратегии', '323', NULL, NULL, NULL),
(3, 'квесты', '111', NULL, NULL, NULL),
(6, 'метроидвании', '123', NULL, '2018-09-16 21:37:41', '2018-09-16 21:37:41'),
(8, 'платформеры', 'прыгать по платформам', NULL, '2018-09-16 21:51:46', '2018-09-17 11:55:26'),
(9, 'логические игры', '23424', NULL, '2018-09-17 07:33:29', '2018-09-17 11:54:59'),
(10, 'гонки', 'гонки', NULL, '2018-09-17 07:44:30', '2018-09-17 07:44:30'),
(11, 'rpg', 'ролевые игры', NULL, '2018-09-17 08:56:53', '2018-09-17 08:56:53');

-- --------------------------------------------------------

--
-- Структура таблицы `good`
--

CREATE TABLE `good` (
  `good_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`good_id`, `name`, `category_id`, `price`, `photo_id`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'wolfenstain 2d', '1', 200, 'game-7.jpg', 'sdfsdfsfddsfsdfsdf', NULL, NULL, NULL),
(3, 'кирандия 1', '3', 120, 'game-1.jpg', 'аываываываываыа', NULL, NULL, NULL),
(5, 'сталин против марсиан', '2', 80, 'game-6.jpg', 'сталин расстреливает марсиан', NULL, NULL, NULL),
(6, 'марио', '8', 100, 'game-4.jpg', 'марио все еще давит грибы', NULL, '2018-09-17 08:25:36', '2018-09-17 08:35:36'),
(7, 'the legend of zelda', '11', 3000, 'game-7.jpg', 'легенда о зельде', NULL, '2018-09-17 08:36:36', '2018-09-17 09:16:37'),
(8, 'покемоны', '11', 2300, 'game-1.jpg', 'карманные монстры', NULL, '2018-09-17 11:36:15', '2018-09-17 11:36:15'),
(9, 'кинг колосус', '11', 1500, 'game-4.jpg', 'ыаыфафыа', NULL, '2018-09-17 11:37:12', '2018-09-17 11:37:12'),
(11, 'соник', '8', 600, 'game-2.jpg', 'sonic', NULL, '2018-09-17 11:57:02', '2018-09-17 11:57:02');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2018_09_14_222412_create_posts_table', 1),
(56, '2018_09_14_225349_good', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `good_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`order_id`, `good_id`, `email`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '1', 'baka@g.ru', 'бака', NULL, '2018-09-16 11:37:23', '2018-09-16 11:37:23'),
(5, '1', 'baka@g.ru', 'бака22222', NULL, '2018-09-16 11:37:32', '2018-09-16 11:37:32'),
(6, '1', 'baka@g.ru', 'бака', NULL, '2018-09-16 15:11:37', '2018-09-16 15:11:37'),
(7, '5', 'baka@g.ru', 'бака', NULL, '2018-09-16 15:19:00', '2018-09-16 15:19:00'),
(8, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:26:17', '2018-09-16 16:26:17'),
(9, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:32:41', '2018-09-16 16:32:41'),
(10, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:33:26', '2018-09-16 16:33:26'),
(11, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:35:22', '2018-09-16 16:35:22'),
(12, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:36:31', '2018-09-16 16:36:31'),
(13, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:41:55', '2018-09-16 16:41:55'),
(14, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:42:19', '2018-09-16 16:42:19'),
(15, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:43:27', '2018-09-16 16:43:27'),
(16, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:44:13', '2018-09-16 16:44:13'),
(17, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:45:28', '2018-09-16 16:45:28'),
(18, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:48:49', '2018-09-16 16:48:49'),
(19, '2', 'sdf', 'sdfdf', NULL, '2018-09-16 16:49:03', '2018-09-16 16:49:03'),
(20, '3', 'baka@g.ru', 'бака', NULL, '2018-09-16 16:54:02', '2018-09-16 16:54:02'),
(21, '4', 'baka@gро.ru', 'бака9', NULL, '2018-09-16 16:55:54', '2018-09-16 16:55:54'),
(22, '2', 'baka@g.ru', 'рейму', NULL, '2018-09-16 20:07:51', '2018-09-16 20:07:51'),
(23, '4', 'remilia@gensokyo.ru', 'ремилия', NULL, '2018-09-16 21:54:15', '2018-09-16 21:54:15'),
(24, '5', 'baka@g.ru', 'baka', NULL, '2018-09-17 09:02:08', '2018-09-17 09:02:08'),
(25, '7', 'baka@g.ru', 'бака', NULL, '2018-09-17 09:17:20', '2018-09-17 09:17:20'),
(26, '2', 're@re.ru', 'reimu', NULL, '2018-09-17 09:20:22', '2018-09-17 09:20:22'),
(27, '5', 'baka@g.ru', 'бака', NULL, '2018-09-17 09:43:46', '2018-09-17 09:43:46'),
(28, '6', 'baka@g.ru', 'бака', NULL, '2018-09-17 11:15:18', '2018-09-17 11:15:18'),
(29, '3', 'baka@g.ru', 'бака', NULL, '2018-09-17 11:28:30', '2018-09-17 11:28:30'),
(30, '5', 're@re.ru', 'reimu', NULL, '2018-09-17 11:33:29', '2018-09-17 11:33:29'),
(31, '3', 'baka@g.ru', 'бака', NULL, '2018-09-17 11:34:41', '2018-09-17 11:34:41'),
(32, '9', 'baka@g.ru', 'бака', NULL, '2018-09-17 11:37:45', '2018-09-17 11:37:45'),
(33, '3', 'selica@sao.ru', 'селика', NULL, '2018-09-17 11:39:48', '2018-09-17 11:39:48'),
(34, '9', 'selica@sao.ru', 'селика', NULL, '2018-09-17 11:44:50', '2018-09-17 11:44:50'),
(35, '9', 'selica@sao.ru', 'селика', NULL, '2018-09-17 11:45:05', '2018-09-17 11:45:05'),
(36, '11', 'baka@g.ru', 'бака', NULL, '2018-09-17 11:57:37', '2018-09-17 11:57:37');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'бака', 'baka@g.ru', NULL, '$2y$10$TzTHudrGCQgIPR8JHBdNzeNkVd6SiH9BtKjEGQy4oOT/vHZNzUoau', '1', 'MTuO1pqUsk2TAVKewzhvCIostdSPWKtkfvJc8xxW1Ja7M9xTgXnNMzAj82p1', '2018-09-17 09:13:32', '2018-09-17 09:13:32'),
(2, 'reimu', 're@re.ru', NULL, '$2y$10$zTVjFrtQzwmeuCTGfZB5p.Mmg0aUHgNrYeOVJeXQ.Q4kb1taoe3BS', '0', 'jy259lgVcUqYlc0pbRAdVVRaAjWIB0LDGeRockn6mQN70Lz8stQflu4lIjpk', '2018-09-17 09:19:56', '2018-09-17 09:19:56'),
(3, 'селика', 'selica@sao.ru', NULL, '$2y$10$hWUD6X7/QxuPkgcDqJIu2OVVhQNHIh1sZc.TA86srXCpfRZzc5FTC', '0', '0Rl3VINdObNTP8LbpR2dov50Isk3jEg5C7ciy5hfhpVDpikHkkQVHbtw08jA', '2018-09-17 11:39:25', '2018-09-17 11:39:25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_email`
--
ALTER TABLE `admin_email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`good_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_email`
--
ALTER TABLE `admin_email`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `good`
--
ALTER TABLE `good`
  MODIFY `good_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
