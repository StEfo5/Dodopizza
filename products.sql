-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2020 г., 11:58
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dodopizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(355) NOT NULL,
  `description` varchar(355) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(355) NOT NULL,
  `category` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `category`) VALUES
(1, 'Пицца из половинок', 'Соберите свою пиццу 35 см с двумя разными вкусами', 630, 'img/polovinki.jpeg', 'pizza'),
(2, 'Цезарь', 'Свежие листья салата айсберг в конверте, цыплёнок, томаты черри, сыры чеддер и пармезан, моцарелла, сливочный соус, соус цезарь', 545, 'img/cezar.jpeg', 'pizza'),
(3, 'Песто', 'Соус песто, сливочный соус, цыплёнок, кубики брынзы, томаты черри, моцарелла', 545, 'img/pesto.jpeg', 'pizza'),
(4, 'Coca-cola Orange', '0,5 л', 115, 'img/c-c_o.jpeg', 'beverage'),
(5, 'Молочный коктейль с печеньем Орео', 'Напиток из молока и мороженого с добавлением дробленого печенья «Орео»', 190, 'img/m_k_o.jpeg', 'dessert'),
(6, 'Классический молочный коктейль', 'Напиток из молока и мороженого', 185, 'img/classic_msh.jpeg', 'dessert'),
(7, 'Клубничный молочный коктейль', 'Напиток из молока и мороженого с клубничным сиропом', 185, 'img/strawberry_msh.jpeg', 'dessert'),
(8, 'Малиновый молочный коктейль', 'Освежающий напиток с малиновым пюре, молоком и мороженым', 185, 'img/raspberry_msh.jpeg', 'dessert'),
(9, 'Coca-cola Zero', '0,5 л', 115, 'img/c-c_z.jpeg', 'beverage'),
(10, 'Coca-cola', '0,5 л', 115, 'img/c-c.jpg', 'beverage'),
(11, 'Coca-cola Vanilla', '0,5 л', 115, 'img/c-c_v.jpeg', 'beverage');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
