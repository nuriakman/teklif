-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `is_adlari`;
CREATE TABLE `is_adlari` (
  `is_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`is_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `is_adlari` (`is_id`, `is_adi`) VALUES
(1,	'Banyo Tadilatı'),
(2,	'Daire Boyama');

DROP TABLE IF EXISTS `sorular`;
CREATE TABLE `sorular` (
  `soru_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_id` int(11) NOT NULL,
  `soru_adi` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `soru_turu` int(11) NOT NULL,
  `soru_metni` text COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`soru_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

INSERT INTO `sorular` (`soru_id`, `is_id`, `soru_adi`, `soru_turu`, `soru_metni`) VALUES
(1,	1,	'Banyo kaç metrekare',	1,	'5\r\n10\r\n15\r\n20\r\n25\r\n30'),
(2,	1,	'Hangi tadilatlar yapılacak',	2,	'Küvet\r\nDuşakabin\r\nDuvarlara Fayans\r\nYerlere Fayans'),
(3,	1,	'Adınız, email adresiniz, telefonunuz',	3,	'Adınız\r\nePosta Adresiniz\r\nTelefonunuz'),
(4,	1,	'Notlar / Açıklamalar',	4,	'Notlar / Açıklamalar'),
(5,	2,	'Duvarlar kaç metrekare?',	1,	'5\r\n10\r\n15\r\n20\r\n25\r\n30'),
(6,	2,	'İlave İşler?',	2,	'Duvar çatlakları onarımı\r\nElektrik tesisatı çekilmesi\r\nDuvar kağıtlarının sökülmesi'),
(7,	2,	'Mevcut durum',	2,	'Duvarlar yağlı boya\r\nDuvarlar plastik boya\r\nKaba inşaatı bitmiş daire'),
(8,	2,	'Notlar / Açıklamalar',	4,	'Notlar / Açıklamalar');

DROP TABLE IF EXISTS `soru_tipleri`;
CREATE TABLE `soru_tipleri` (
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_adi` varchar(200) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

INSERT INTO `soru_tipleri` (`tip_id`, `tip_adi`) VALUES
(1,	'Radio'),
(2,	'Checkbox'),
(3,	'Input'),
(4,	'textarea');

-- 2019-03-11 08:42:39
