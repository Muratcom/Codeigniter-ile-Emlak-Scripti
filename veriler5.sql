# Host: localhost  (Version: 5.5.5-10.1.9-MariaDB)
# Date: 2016-03-30 19:04:39
# Generator: MySQL-Front 5.3  (Build 5.20)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "dersler"
#

DROP TABLE IF EXISTS `dersler`;
CREATE TABLE `dersler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ogr_no` int(11) NOT NULL DEFAULT '0',
  `ders_adi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `vize` int(11) DEFAULT '0',
  `final` int(11) DEFAULT '0',
  `but` int(11) DEFAULT '0',
  `ort` float DEFAULT '0',
  `harf` varchar(2) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "dersler"
#


#
# Structure for table "ogrenciler"
#

DROP TABLE IF EXISTS `ogrenciler`;
CREATE TABLE `ogrenciler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numara` int(11) NOT NULL,
  `adsoy` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(6) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "ogrenciler"
#

INSERT INTO `ogrenciler` VALUES (2,1,'Bircan OSKK','Bay','bircan','123','admin'),(5,7890,'Hatice ÇELİK','Bayan','hatice','123','user'),(9,123,'Mehmet İBRAHİMBAŞ','Bay','mehmet','123','user'),(10,111,'AŞIR ATAKAN','Bay','asir','123','yonetici'),(11,4444,'Hatice ÇELİK','Bayan',NULL,NULL,NULL),(12,555,'Selcan AKÇAKAYA','Bayan',NULL,NULL,NULL),(13,66,'Uğur ŞİRİN','Bay',NULL,NULL,NULL),(14,777,'Nursin YILMAZ','Bayan',NULL,NULL,NULL),(15,567,'FERHAT ŞİRİN','Erkek',NULL,NULL,NULL),(16,546,'Uğur ŞİRİN','Bay',NULL,NULL,NULL),(18,123,'Mustafa ÖMÜRCAN','Bay',NULL,NULL,NULL),(19,567,'Özlem ALTUN','Bayan',NULL,NULL,NULL);
