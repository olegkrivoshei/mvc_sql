-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2019 г., 18:43
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `root`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `country`) VALUES
(15, 'Albania'),
(16, 'Algeria'),
(17, 'Andorra'),
(18, 'Angola'),
(19, 'Antigua-and-Barbuda'),
(20, 'Argentina'),
(21, 'Armenia'),
(22, 'Australia'),
(23, 'Austria'),
(24, 'Azerbaijan'),
(25, 'The-Bahamas'),
(26, 'Bahrain'),
(27, 'Bangladesh'),
(28, 'Barbados'),
(29, 'Belarus'),
(30, 'Belgium'),
(31, 'Belize'),
(32, 'Benin'),
(33, 'Bhutan'),
(34, 'Bolivia'),
(35, 'Bosnia-and-Herzegovina'),
(36, 'Botswana'),
(37, 'Brazil'),
(38, 'Brunei'),
(39, 'Bulgaria'),
(40, 'Burkina-Faso'),
(41, 'Burundi'),
(42, 'Advertisement'),
(43, 'Cabo-Verde'),
(44, 'Cambodia'),
(45, 'Cameroon'),
(46, 'Canada'),
(47, 'Central-African-Republic'),
(48, 'Chad'),
(49, 'Chile'),
(50, 'China'),
(51, 'Colombia'),
(52, 'Comoros'),
(53, 'Congo,-Democratic-Republic-of-'),
(54, 'Congo,-Republic-of-the'),
(55, 'Costa-Rica'),
(56, 'C├┤te-dΓÇÖIvoire'),
(57, 'Croatia'),
(58, 'Cuba'),
(59, 'Cyprus'),
(60, 'Czech-Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican-Republic'),
(65, 'Advertisement'),
(66, 'East-Timor-(Timor-Leste)'),
(67, 'Ecuador'),
(68, 'Egypt'),
(69, 'El-Salvador'),
(70, 'Equatorial-Guinea'),
(71, 'Eritrea'),
(72, 'Estonia'),
(73, 'Eswatini'),
(74, 'Ethiopia'),
(75, 'Fiji'),
(76, 'Finland'),
(77, 'France'),
(78, 'Gabon'),
(79, 'The-Gambia'),
(80, 'Georgia'),
(81, 'Germany'),
(82, 'Ghana'),
(83, 'Greece'),
(84, 'Grenada'),
(85, 'Guatemala'),
(86, 'Guinea'),
(87, 'Guinea-Bissau'),
(88, 'Guyana'),
(89, 'Haiti'),
(90, 'Honduras'),
(91, 'Hungary'),
(92, 'Iceland'),
(93, 'India'),
(94, 'Indonesia'),
(95, 'Iran'),
(96, 'Iraq'),
(97, 'Ireland'),
(98, 'Israel'),
(99, 'Italy'),
(100, 'Jamaica'),
(101, 'Japan'),
(102, 'Jordan'),
(103, 'Kazakhstan'),
(104, 'Kenya'),
(105, 'Kiribati'),
(106, 'Korea,-North'),
(107, 'Korea,-South'),
(108, 'Kosovo'),
(109, 'Kuwait'),
(110, 'Kyrgyzstan'),
(111, 'Laos'),
(112, 'Latvia'),
(113, 'Lebanon'),
(114, 'Lesotho'),
(115, 'Liberia'),
(116, 'Libya'),
(117, 'Liechtenstein'),
(118, 'Lithuania'),
(119, 'Luxembourg'),
(120, 'Madagascar'),
(121, 'Malawi'),
(122, 'Malaysia'),
(123, 'Maldives'),
(124, 'Mali'),
(125, 'Malta'),
(126, 'Marshall-Islands'),
(127, 'Mauritania'),
(128, 'Mauritius'),
(129, 'Mexico'),
(130, 'Micronesia,-Federated-States-o'),
(131, 'Moldova'),
(132, 'Monaco'),
(133, 'Mongolia'),
(134, 'Montenegro'),
(135, 'Morocco'),
(136, 'Mozambique'),
(137, 'Myanmar-(Burma)'),
(138, 'Namibia'),
(139, 'Nauru'),
(140, 'Nepal'),
(141, 'Netherlands'),
(142, 'New-Zealand'),
(143, 'Nicaragua'),
(144, 'Niger'),
(145, 'Nigeria'),
(146, 'North-Macedonia'),
(147, 'Norway'),
(148, 'Oman'),
(149, 'Pakistan'),
(150, 'Palau'),
(151, 'Panama'),
(152, 'Papua-New-Guinea'),
(153, 'Paraguay'),
(154, 'Peru'),
(155, 'Philippines'),
(156, 'Poland'),
(157, 'Portugal'),
(158, 'Qatar'),
(159, 'Romania'),
(160, 'Russia'),
(161, 'Rwanda'),
(162, 'Saint-Kitts-and-Nevis'),
(163, 'Saint-Lucia'),
(164, 'Saint-Vincent-and-the-Grenadin'),
(165, 'Samoa'),
(166, 'San-Marino'),
(167, 'Sao-Tome-and-Principe'),
(168, 'Saudi-Arabia'),
(169, 'Senegal'),
(170, 'Serbia'),
(188, 'Taiwan'),
(189, 'Tajikistan'),
(190, 'Tanzania'),
(191, 'Thailand'),
(192, 'Togo'),
(193, 'Tonga'),
(194, 'Trinidad-and-Tobago'),
(195, 'Tunisia'),
(196, 'Turkey'),
(197, 'Turkmenistan'),
(198, 'Tuvalu'),
(199, 'Uganda'),
(200, 'Ukraine'),
(201, 'United-Arab-Emirates'),
(202, 'United-Kingdom'),
(203, 'United-States'),
(204, 'Uruguay'),
(205, 'Uzbekistan'),
(206, 'Vanuatu'),
(207, 'Vatican-City'),
(208, 'Venezuela'),
(209, 'Vietnam'),
(210, 'Yemen'),
(211, 'Zambia'),
(212, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `country_id`) VALUES
(117, 'oleg', 'Oleg.tm@yahoo.com', 33),
(118, 'pavel', 'pavel@yahoo.com', 200),
(120, 'privetiev', 'privet@mail.com', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
