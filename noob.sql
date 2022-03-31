-- phpMyAdmin SQL Dump
-- version 4.7.7
--
-- Время создания: Мар 31 2022 г., 03:06
-- Версия сервера: 5.7.20-log
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
-- База данных: `noob`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '#',
  `parent` tinyint(1) NOT NULL DEFAULT '0',
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `menu_id`, `name`, `link`, `parent`, `position`) VALUES
(1, 1, 'для Гостя', '#', 0, 0),
(2, 2, 'для Авторизованого Користувача', '#', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `key_field` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `section` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `name`, `key_field`, `value`, `section`) VALUES
(1, 'Назва сайта', 'name_site', 'Noob.Loc', 'general'),
(2, 'Описание', 'description', 'Щось дуже важливе', 'general'),
(3, 'Електрона адреса адміністратора', 'admin_email', 'sysmaaster@gmail.com', 'general'),
(4, 'Язик', 'language', 'ukrainian', 'general'),
(5, 'Активна Тема', 'active_theme', 'default', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(32) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_lastname` varchar(32) NOT NULL,
  `user_sex` enum('1','2') NOT NULL,
  `user_red_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `user_hid` varchar(64) NOT NULL,
  `user_group` enum('1','2','3','4','5') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_lastname`, `user_sex`, `user_red_date`, `user_hid`, `user_group`) VALUES
(1, 'sysmaaster@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'Олександр', 'Андрущишен', '1', '2022-03-30 21:34:16.408663', 'cd9660a81642d10fe3dd95bf94ddc818', '5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_field` (`key_field`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
