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

-- Structuur van  tabel bunnywiki_db.producten wordt geschreven
CREATE TABLE IF NOT EXISTS `producten` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `minimumbod` float unsigned NOT NULL,
  `einddatum` datetime NOT NULL,
  `status` int(10) unsigned DEFAULT 1,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel bunnywiki_db.producten: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `producten` DISABLE KEYS */;
INSERT INTO `producten` (`product_id`, `naam`, `beschrijving`, `minimumbod`, `einddatum`, `status`) VALUES
	(1, 'Konijnen keutel', 'Komt heel goed van pas voor insmeren', 649, '2021-01-30 14:30:00', 1),
	(2, 'Konijnen bal', 'om mee te voetballen', 5, '2020-12-19 12:00:00', 1),
	(5, 'Konijnen beker', 'Om bier uit te drinken', 3.5, '2020-12-18 17:00:00', 0),
	(6, 'Sjaal', 'Voor de kou, tijdens lockdown', 50.99, '2021-01-19 23:00:00', 0);
/*!40000 ALTER TABLE `producten` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
