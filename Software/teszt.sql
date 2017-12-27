-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `teszt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `szerzo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cim` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mufaj` text CHARACTER SET utf8,
  `leiras` text COLLATE utf8_hungarian_ci NOT NULL,
  `kep` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `books`
--

INSERT INTO `books` (`id`, `szerzo`, `cim`, `mufaj`, `leiras`, `kep`) VALUES
(1, 'A. A. Milne', 'Micimackó', 'Ifjúsági regény', 'Ez a nagyon népszerű könyv egy aranyos medvéről és a barátairól szól. A legtöbb gyerek szereti ezt a történetet.', 'public/pict/Micimacko.jpg'),
(2, 'Leslie L. Lawrence', 'Holdanyó fényes arca', 'Krimi', 'Ez egy jó krimi, melyből a keleti kultúráról is sokat tanulhatunk. Az író sikeres kelet kutató és egyetemi professzor.', 'public/pict/Holdanyo.jpg'),
(3, 'Fekete István', 'Vuk', 'Mese', 'Ez a mese egy kis rókáról szól, aki elveszíti családját, és bár nehezen indul az élete, mégis sikeres lesz.', 'public/pict/vuk.jpg'),
(4, 'Bartos Erika', 'Anna és Peti', 'Mese', '', 'public/pict/default.jpg'),
(5, 'Bosnyák Viktória', 'Mantyusok', 'Ifjúsági regény', 'Ez a történet egy manóról szól. Érdekes lényekről, sok fantáziával megírt könyv.', 'public/pict/mantyusok.jpg'),
(6, 'Karl May', 'Winnetou', 'Regény', '', 'public/pict/winnetou.jpg'),
(7, 'Fehér Tibor', 'Aranyváros hercege', 'Regény', '', 'public/pict/default.jpg'),
(8, 'Karl May', 'A sivatag haramiája', 'Regény', '', 'public/pict/sivatag.jpg'),
(9, 'Daniel Defoe', 'Robinson', 'Ifjúsági regény', '', 'public/pict/robinson.jpg'),
(10, 'Leslie L. Lawrence', 'Lebegők', 'Krimi', 'Ez egy jó krimi, melyből a keleti kultúráról is sokat tanulhatunk. Az író sikeres kelet kutató és egyetemi professzor.', 'public/pict/lebegok.jpg'),
(16, 'Alexandre Dumas', 'A vasálarcos', 'Regény', 'Aramis egy figyelemre méltó titok birtokába jut, és bátor tervet eszel ki, hogy a tettek mezejére lépjen.', 'public/pict/vasalarcos.jpg'),
(14, '11', '222', '3333', '44444', 'public/pict/default.jpg'),
(15, 'Szerző 1', 'Cím 1', 'Műfaj 1', '', 'public/pict/default.jpg'),
(28, 'Gárdonyi Géza', 'Egri csillagok', 'Regény', 'Az egri vár ostromának története.', 'public/pict/default.jpg'),
(27, 'Szer', '', 'Mese', '', 'public/pict/default.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `menupont` varchar(20) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`id`, `menupont`) VALUES
(1, 'Kezdőlap'),
(2, 'Könyvlista'),
(3, 'Listakezelés'),
(4, 'Impresszum'),
(5, 'Egyéb');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT a táblához `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
