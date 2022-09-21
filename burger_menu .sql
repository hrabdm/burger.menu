-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2022 г., 17:18
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burger_menu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userphone` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numberofguests` int(2) NOT NULL,
  `bookdate` date NOT NULL,
  `bookcreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `username`, `userphone`, `email`, `numberofguests`, `bookdate`, `bookcreated`, `status`) VALUES
(1, '6465', '444666446464', 'test@nam.e66', 5, '2022-09-22', '2022-09-17 21:18:27', 'new'),
(2, 'trtrt', '666666', 'test@nam.e8', 2, '2022-09-22', '2022-09-21 18:08:38', 'new');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` varchar(10) NOT NULL,
  `total` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(4,0) NOT NULL,
  `preview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `category`, `foodname`, `description`, `price`, `preview`) VALUES
(1, 'burger', 'Delicious Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15', 'assets/images/f2.png'),
(2, 'burger', 'Tasty Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '12', 'assets/images/f7.png'),
(3, 'burger', 'Tasty Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '14', 'assets/images/f8.png'),
(4, 'pizza', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '20', 'assets/images/f1.png'),
(5, 'pizza', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '17', 'assets/images/f3.png'),
(6, 'pizza', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15', 'assets/images/f6.png'),
(7, 'pasta', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '18', 'assets/images/f4.png'),
(8, 'pasta', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '10', 'assets/images/f4.png'),
(9, 'fries', 'French Fries', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '10', 'assets/images/f5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userphone` varchar(25) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `userphone`, `created`, `status`) VALUES
(8, 'mariyatkach2002@gmail.com', 'Valera', '$2y$10$a4wgVSSkGZsQ5TK2gTvBqO0aoP.q1ZyTpSlvo81uA/bqyMTK1utIS', '', '2022-09-17 10:36:14', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
