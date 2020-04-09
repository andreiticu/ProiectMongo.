-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 09, 2020 la 08:53 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `images`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `images`
--

CREATE TABLE `images` (
  `id` int(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `images`
--

INSERT INTO `images` (`id`, `title`, `image`) VALUES
(3, 'Crema de zahar ars', 'images/im8.jpg'),
(4, 'Avocado', './images/im9.jpg'),
(8, 'Vafe si trandafiri', './images/im7.jpg'),
(10, 'Pui umplut', './images/PuiUmplut.jpg');

--
-- Declanșatori `images`
--
DELIMITER $$
CREATE TRIGGER `after_delete` AFTER DELETE ON `images` FOR EACH ROW BEGIN
                INSERT INTO images_updated(title,status,edtime)VALUES(OLD.title,'DELETED',NOW());
                END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_edit` AFTER UPDATE ON `images` FOR EACH ROW BEGIN
                INSERT INTO images_updated(title,status,edtime)VALUES(New.title,'UPDATED',NOW());
                END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert` BEFORE INSERT ON `images` FOR EACH ROW BEGIN
INSERT INTO images_updated(title,status,edtime)VALUES(NEW.title,'INSERTED',NOW());
 END
$$
DELIMITER ;

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `images`
--
ALTER TABLE `images`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
