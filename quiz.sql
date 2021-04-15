-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 15. 13:23
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `quiz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kontinensek`
--

CREATE TABLE `kontinensek` (
  `id` int(11) NOT NULL,
  `nev` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kontinensek`
--

INSERT INTO `kontinensek` (`id`, `nev`, `foto`) VALUES
(1, 'Europe', 'img/europe.jpg'),
(2, 'North America', 'img/namerica.jpg'),
(3, 'South America', 'img/samerica.jpg'),
(4, 'Africa', 'img/africa.jpg'),
(5, 'Asia', 'img/asia.jpg'),
(6, 'Oceania', 'img/oceania.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orszagok`
--

CREATE TABLE `orszagok` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `kontinens_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `orszagok`
--

INSERT INTO `orszagok` (`id`, `nev`, `kontinens_id`) VALUES
(1, 'Albania', 1),
(3, 'Hungary', 1),
(4, 'Turkey', 1),
(5, 'Mexico', 2),
(6, 'Panama', 2),
(7, 'Austria', 1),
(8, 'Belarus', 1),
(9, 'Belgium', 1),
(10, 'Bosnia and Herzegovina', 1),
(11, 'Bulgaria', 1),
(12, 'Croatia', 1),
(13, 'Czech Republic', 1),
(14, 'Denmark', 1),
(15, 'Finland', 1),
(16, 'France', 1),
(17, 'Great Britain', 1),
(18, 'Germany', 1),
(19, 'Greece', 1),
(20, 'Iceland', 1),
(21, 'Italy', 1),
(22, 'Lithuania', 1),
(23, 'Malta', 1),
(24, 'Poland', 1),
(25, 'Portugal', 1),
(26, 'Serbia', 1),
(27, 'Spain', 1),
(28, 'Sweden', 1),
(29, 'Bahamas', 2),
(30, 'Barbados', 2),
(31, 'Belize', 2),
(32, 'Canada', 2),
(33, 'Cuba', 2),
(34, 'Dominican Republic', 2),
(35, 'Haiti', 2),
(36, 'Honduras', 2),
(37, 'Jamaica', 2),
(38, 'El Salvador', 2),
(39, 'USA', 2),
(40, 'Costa Rica', 2),
(41, 'Guatemala', 2),
(42, 'Bolivia', 3),
(43, 'Brasil', 3),
(44, 'Chile', 3),
(45, 'Colombia', 3),
(46, 'Ecuador', 3),
(47, 'Paraguay', 3),
(48, 'Peru', 3),
(49, 'Uruguay', 3),
(50, 'Algeria', 4),
(51, 'Angola', 4),
(52, 'Botswana', 4),
(53, 'Burundi', 4),
(54, 'Cameroun', 4),
(55, 'Cape Verde', 4),
(56, 'Chad', 4),
(57, 'Democratic Republic of the Congo', 4),
(58, ' Ivory Coast', 4),
(59, 'Egypt', 4),
(60, 'Ethiopia', 4),
(61, 'Ghana', 4),
(62, 'Guinea', 4),
(63, 'Kenya', 4),
(64, 'Lybia', 4),
(65, 'Madagascar', 4),
(66, 'Morocco', 4),
(67, 'Nigeria', 4),
(68, 'South Africa', 4),
(69, 'Seychelles', 4),
(70, 'South Sudan', 4),
(71, 'Sudan', 4),
(72, 'Tunis', 4),
(73, 'Afghanistan', 5),
(74, 'Bangladesh', 5),
(75, 'China', 5),
(76, 'Georgia', 5),
(77, 'India', 5),
(78, 'Indonesia', 5),
(79, 'Iran', 5),
(80, 'Iraq', 5),
(81, 'Israel', 5),
(82, 'Japan', 5),
(83, 'Kazakhstan', 5),
(84, 'Laos', 5),
(85, 'Malaysia', 5),
(86, 'Maldives', 5),
(87, 'Mongolia', 5),
(88, 'North Korea', 5),
(89, 'Pakistan', 5),
(90, 'Philippines', 5),
(91, 'Qatar', 5),
(92, 'Saudi Arabia', 5),
(93, 'Singapore', 5),
(94, 'South Korea', 5),
(95, 'Thailand', 5),
(96, 'United Arab Emirates', 5),
(97, 'Uzbekistan', 5),
(98, 'Vietnam', 5),
(99, 'Australia', 6),
(100, 'Cook-Islands', 6),
(101, 'Fiji', 6),
(102, 'Marshall Islands', 6),
(103, 'Micronesia', 6),
(104, 'New Zealand', 6),
(105, 'Papua New Guinea', 6),
(106, 'Solomon Islands', 6),
(107, 'Tonga', 6),
(108, 'Argentina', 3),
(109, 'Venezuela', 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rekord`
--

CREATE TABLE `rekord` (
  `kontinens_id` int(11) NOT NULL,
  `rossz` int(2) NOT NULL,
  `jatekosnev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `rekord`
--

INSERT INTO `rekord` (`kontinens_id`, `rossz`, `jatekosnev`) VALUES
(1, 1, 'Feri'),
(2, 0, 'karcsi'),
(5, 0, 'Fecó'),
(6, 0, 'Zsolt'),
(3, 0, 'Zsolti');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reszletek`
--

CREATE TABLE `reszletek` (
  `id` int(11) NOT NULL,
  `id_kontinensek` int(11) NOT NULL,
  `foto` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `orszag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `reszletek`
--

INSERT INTO `reszletek` (`id`, `id_kontinensek`, `foto`, `orszag_id`) VALUES
(1, 1, 'img/Europe/albania.png', 1),
(2, 1, 'img/Europe/austria.png', 7),
(3, 1, 'img/Europe/belarus.png', 8),
(4, 1, 'img/Europe/belgium.png', 9),
(5, 1, 'img/Europe/bosnia.png', 10),
(6, 1, 'img/Europe/bulgaria.png', 11),
(7, 1, 'img/Europe/croatia.png', 12),
(8, 1, 'img/Europe/cz.png', 13),
(9, 1, 'img/Europe/denmark.png', 14),
(10, 1, 'img/Europe/finland.png', 15),
(11, 1, 'img/Europe/francia.png', 16),
(12, 1, 'img/Europe/gb.png', 17),
(13, 1, 'img/Europe/germany.png', 18),
(14, 1, 'img/Europe/greece.png', 19),
(15, 1, 'img/Europe/hungary.png', 3),
(16, 1, 'img/Europe/iceland.png', 20),
(17, 1, 'img/Europe/italy.png', 21),
(18, 1, 'img/Europe/litvania.png', 22),
(19, 1, 'img/Europe/malta.png', 23),
(20, 1, 'img/Europe/poland.png', 24),
(21, 1, 'img/Europe/portugal.png', 25),
(22, 1, 'img/Europe/serbia.png', 26),
(23, 1, 'img/Europe/spain.png', 27),
(24, 1, 'img/Europe/sweden.png', 28),
(25, 1, 'img/Europe/turkey.png', 4),
(26, 2, 'img/North_America/bahamas.png', 29),
(27, 2, 'img/North_America/barbados.png', 30),
(28, 2, 'img/North_America/belize.png', 31),
(29, 2, 'img/North_America/canada.png', 32),
(31, 2, 'img/North_America/cuba.png', 33),
(32, 2, 'img/North_America/dominika.png', 34),
(34, 2, 'img/North_America/haiti.png', 35),
(35, 2, 'img/North_America/honduras.png', 36),
(36, 2, 'img/North_America/jamaica.png', 37),
(37, 2, 'img/North_America/mexico.png', 5),
(38, 2, 'img/North_America/panama.png', 6),
(39, 2, 'img/North_America/salvador.png', 38),
(40, 2, 'img/North_America/usa.png', 39),
(46, 3, 'img/South_America/bolivia.png', 42),
(48, 3, 'img/South_America/brasil.png', 43),
(49, 3, 'img/South_America/chile.png', 44),
(50, 3, 'img/South_America/columbia.png', 45),
(51, 3, 'img/South_America/ecuador.png', 46),
(52, 3, 'img/South_America/paraguay.png', 47),
(53, 3, 'img/South_America/peru.png', 48),
(54, 3, 'img/South_America/uruguay.png', 49),
(56, 4, 'img/Africa/algeria.png', 50),
(57, 4, 'img/Africa/angola.png', 51),
(58, 4, 'img/Africa/botswana.png', 52),
(59, 4, 'img/Africa/burundi.png', 53),
(60, 4, 'img/Africa/cameroun.png', 54),
(61, 4, 'img/Africa/capeverde.png', 55),
(62, 4, 'img/Africa/chad.png', 56),
(63, 4, 'img/Africa/congodem.png', 57),
(64, 4, 'img/Africa/coteivore.png', 58),
(65, 4, 'img/Africa/egypt.png', 59),
(66, 4, 'img/Africa/ethiopia.png', 60),
(67, 4, 'img/Africa/ghana.png', 61),
(68, 4, 'img/Africa/guinea.png', 62),
(69, 4, 'img/Africa/kenya.png', 63),
(70, 4, 'img/Africa/lybia.png', 64),
(71, 4, 'img/Africa/madagascar.png', 65),
(72, 4, 'img/Africa/morocco.png', 66),
(73, 4, 'img/Africa/nigeria.png', 67),
(74, 4, 'img/Africa/safrica.png', 68),
(75, 4, 'img/Africa/seychelle.png', 69),
(76, 4, 'img/Africa/ssudan.png', 70),
(77, 4, 'img/Africa/sudan.png', 71),
(78, 4, 'img/Africa/tunis.png', 72),
(79, 5, 'img/Asia/afg.png', 73),
(80, 5, 'img/Asia/bangladesh.png', 74),
(81, 5, 'img/Asia/china.png', 75),
(82, 5, 'img/Asia/georgia.png', 76),
(83, 5, 'img/Asia/india.png', 77),
(84, 5, 'img/Asia/indonesia.png', 78),
(85, 5, 'img/Asia/iran.png', 79),
(86, 5, 'img/Asia/iraq.png', 80),
(87, 5, 'img/Asia/israel.png', 81),
(88, 5, 'img/Asia/japan.png', 82),
(89, 5, 'img/Asia/kazah.png', 83),
(90, 5, 'img/Asia/laos.png', 84),
(91, 5, 'img/Asia/malaysia.png', 85),
(92, 5, 'img/Asia/maldives.png', 86),
(93, 5, 'img/Asia/mongolia.png', 87),
(94, 5, 'img/Asia/nkorea.png', 88),
(95, 5, 'img/Asia/pakistan.png', 89),
(96, 5, 'img/Asia/philippines.png', 90),
(97, 5, 'img/Asia/qatar.png', 91),
(98, 5, 'img/Asia/saudiarabia.png', 92),
(99, 5, 'img/Asia/singapore.png', 93),
(100, 5, 'img/Asia/skorea.png', 94),
(101, 5, 'img/Asia/thailand.png', 95),
(102, 5, 'img/Asia/uae.png', 96),
(103, 5, 'img/Asia/uzbek.png', 97),
(104, 5, 'img/Asia/vietnam.png', 98),
(105, 6, 'img/Oceania/australia.png', 99),
(106, 6, 'img/Oceania/cook.png', 100),
(107, 6, 'img/Oceania/fiji.png', 101),
(108, 6, 'img/Oceania/marshall.png', 102),
(109, 6, 'img/Oceania/micronesia.png', 103),
(110, 6, 'img/Oceania/newzealand.png', 104),
(111, 6, 'img/Oceania/papua.png', 105),
(112, 6, 'img/Oceania/solomon.png', 106),
(113, 6, 'img/Oceania/tonga.png', 107),
(114, 2, 'img/North_America/corica.png', 40),
(115, 2, 'img/North_America/gua.png', 41),
(116, 3, 'img/South_America/arg.png', 108),
(117, 3, 'img/South_America/ven.png', 109);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenetek`
--

CREATE TABLE `uzenetek` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `uzenet` varchar(356) COLLATE utf8_hungarian_ci NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `uzenetek`
--

INSERT INTO `uzenetek` (`id`, `email`, `uzenet`, `nev`) VALUES
(1, 'antzsooldalteszt01@gmail.com', 'teszt', 'Gyula'),
(2, 'antzsooldalteszt01@gmail.com', 'jfjkngfjknjn', 'Ferenc'),
(4, 'antzsooldalteszt01@gmail.com', 'uzenet', 'Zsolt');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kontinensek`
--
ALTER TABLE `kontinensek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orszagok`
--
ALTER TABLE `orszagok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontinens_id` (`kontinens_id`);

--
-- A tábla indexei `reszletek`
--
ALTER TABLE `reszletek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kontinensek` (`id_kontinensek`),
  ADD KEY `orszag_id` (`orszag_id`);

--
-- A tábla indexei `uzenetek`
--
ALTER TABLE `uzenetek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kontinensek`
--
ALTER TABLE `kontinensek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `orszagok`
--
ALTER TABLE `orszagok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT a táblához `reszletek`
--
ALTER TABLE `reszletek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT a táblához `uzenetek`
--
ALTER TABLE `uzenetek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `orszagok`
--
ALTER TABLE `orszagok`
  ADD CONSTRAINT `orszagok_ibfk_1` FOREIGN KEY (`kontinens_id`) REFERENCES `kontinensek` (`id`);

--
-- Megkötések a táblához `reszletek`
--
ALTER TABLE `reszletek`
  ADD CONSTRAINT `reszletek_ibfk_1` FOREIGN KEY (`id_kontinensek`) REFERENCES `kontinensek` (`id`),
  ADD CONSTRAINT `reszletek_ibfk_2` FOREIGN KEY (`orszag_id`) REFERENCES `orszagok` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
