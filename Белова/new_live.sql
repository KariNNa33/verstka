-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2024 г., 08:27
-- Версия сервера: 8.2.0
-- Версия PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_live`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users_new_live`
--

DROP TABLE IF EXISTS `users_new_live`;
CREATE TABLE IF NOT EXISTS `users_new_live` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users_new_live`
--

INSERT INTO `users_new_live` (`id`, `email`, `name`, `surname`, `phone`, `pass`, `role`) VALUES
(1, 'admin@admin.ru', 'htrh', 'rthrth', '89516388345', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, '111@111.ru', '111', '111', '111111111', '698d51a19d8a121ce581499d7b701668', 0),
(3, '222@222.ru', '222', '222', '2222222', 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(4, '333@333.ru', '333', '333', '33333333333', '310dcbbf4cce62f762a2aaa148d556bd', 0),
(5, '444@444.ru', '444', '444', '44444444444', '550a141f12de6341fba65b0ad0433500', 0),
(6, '555@555.ru', '555', '555', '5555', '15de21c670ae7c3f6f3f1f37029303c9', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
