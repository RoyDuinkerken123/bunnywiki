-- --------------------------------------------------------
-- Host:                         -
-- Server versie:                10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Structuur van  tabel bunnywiki_db.gebruikers wordt geschreven
CREATE TABLE IF NOT EXISTS `gebruikers` (
  `gebruiker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `geboortedatum` date NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `postcode` varchar(11) NOT NULL,
  `telefoonnummer` varchar(20) DEFAULT '-',
  `email` varchar(50) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`gebruiker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel bunnywiki_db.gebruikers: ~5 rows (ongeveer)
/*!40000 ALTER TABLE `gebruikers` DISABLE KEYS */;
INSERT INTO `gebruikers` (`gebruiker_id`, `voornaam`, `achternaam`, `geboortedatum`, `woonplaats`, `postcode`, `telefoonnummer`, `email`, `wachtwoord`, `rol`) VALUES
	(1, 'Michael', 'Iwema', '2013-09-30', 'Bielen', '8811 AB', '-', 'mwaap@gmail.com', '12345', 1),
	(2, 'Roy', 'Duinkerken', '1844-02-29', 'Hoogeveen', '9191 AC', '112', 'info@royzonderbroek.nl', 'supergeil123', 1),
	(5, 'Mick', 'Stotijn', '1945-01-20', 'Hoogeveen', '9191 AG', '-', 'micko@gmail.nl', 'phpisbest123', 1),
	(6, 'Beheerder', 'Datbenik', '2020-04-15', 'Moederbord', '1101 AI', '0602200122', 'info@mailmijniet.nl', 'admin', 3),
	(7, 'Maryo', 'Verkoper', '1250-08-20', 'Hoogeveen', '9191 ABC', '-', 'info@gmail.nl', 'ikverkoop12345', 2);
/*!40000 ALTER TABLE `gebruikers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
