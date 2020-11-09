-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2020 г., 13:44
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eden`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `tema`) VALUES
(1, 'jyt u6r yfyffuyf yufyuf uyffuy', 'Mekemtas Daulet Askaruli', 'dmekemtas@mail.ru', '3rfrfrfrf3jytjyt utuyuyutufyuyf'),
(2, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Mekemtas Daulet Askaruli', 'dmekemtas@mail.ru', 'vvvvvvvvvvv'),
(3, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Mekemtas Daulet Askaruli', 'dmekemtas@mail.ru', 'vvvvvvvvvvv'),
(4, 'sssssssssssssssssssssssssssssssssssssssss', 'Mekemtas Daulet Askaruli', 'dmekemtas@mail.ru', '3rfrfrfrf3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
