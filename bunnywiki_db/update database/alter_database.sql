
-- Gebruikers tabel
ALTER TABLE gebruikers
MODIFY voornaam varchar(30) NULL,
MODIFY achternaam varchar(50) NULL,
MODIFY woonplaats varchar(50) NULL,
MODIFY postcode varchar(11) NULL,
MODIFY email varchar(50) NOT NULL,
MODIFY wachtwoord varchar(128) NOT NULL,
MODIFY rol varchar(11) NOT NULL DEFAULT '1',
ADD UNIQUE (email),
DROP COLUMN telefoonnummer,
DROP COLUMN geboortedatum

-- Producten tabel
ALTER TABLE producten
ADD main_foto varchar(64),
ADD extra_fotos varchar(64),
MODIFY status int(11) unsigned NOT NULL DEFAULT '1',
DROP COLUMN einddatum

-- Producten archief
CREATE TABLE `producten_archief` (
	`product_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`naam` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`beschrijving` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`minimumbod` FLOAT NOT NULL,
	`status` INT(10) UNSIGNED NOT NULL DEFAULT '1',
    `main_foto` varchar(64),
    `extra_fotos` varchar(64),
	PRIMARY KEY (`product_id`) USING BTREE
)
