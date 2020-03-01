-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.10-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Дамп структуры для таблица test.categor
CREATE TABLE IF NOT EXISTS `categor` (
  `id_categ` int(11) NOT NULL AUTO_INCREMENT,
  `nazvanie` text NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_categ`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы test.categor: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `categor` DISABLE KEYS */;
INSERT INTO `categor` (`id_categ`, `nazvanie`) VALUES
	(1, 'фрукты'),
	(2, 'овощи'),
	(3, 'ягоды');
/*!40000 ALTER TABLE `categor` ENABLE KEYS */;

-- Дамп структуры для таблица test.product
CREATE TABLE IF NOT EXISTS `product` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `kategor` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `pictr` text DEFAULT NULL,
  `stat` text DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `FK_product_categor` (`kategor`),
  CONSTRAINT `FK_product_categor` FOREIGN KEY (`kategor`) REFERENCES `categor` (`id_categ`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы test.product: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id_prod`, `name`, `opis`, `kategor`, `text`, `pictr`, `stat`) VALUES
	(1, 'арбуз', 'вкусный, сладкий', 3, 'привезен из Абхазии\r\n', '..\\test\\img\\1-11.png', NULL),
	(2, 'помидор', 'обладает насыщеным вкусом томата', 2, 'выращен на территории Украины', NULL, NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
