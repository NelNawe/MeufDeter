SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  
  `Nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Adresse_mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Activité` varchar(50) CHARACTER SET utf8 NOT NULL,
 
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO `contact` (`Nom`, `Adresse_mail`, `Message`, `Activité`) VALUES
('yaya' 'yaounde.c@yahoo.com',  'cikgiugiu', 'azerty');
COMMIT;