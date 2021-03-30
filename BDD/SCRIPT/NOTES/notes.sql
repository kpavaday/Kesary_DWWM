DROP DATABASE IF EXISTS notes;
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE DATABASE IF NOT EXISTS notes;

USE notes;

DROP TABLE IF EXISTS `avoir_note`;

CREATE TABLE IF NOT EXISTS `avoir_note` (	
  IdNote Int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,		
  `IdEleve` int(11) NOT NULL,			
  `IdMatiere` int(11) NOT NULL,			
  `Note` int(11) NOT NULL,						
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `eleves`;				
CREATE TABLE IF NOT EXISTS `eleves` (				
  `IdEleve` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,				
  `NomEleve` varchar(50) NOT NULL,							
) ENGINE=InnoDB AUTO_INCREMENT=4 ;

DROP TABLE IF EXISTS `matieres`;				
CREATE TABLE IF NOT EXISTS `matieres` (				
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,				
  `LibelleMatiere` varchar(50) NOT NULL,							
) ENGINE=InnoDB AUTO_INCREMENT=5 ;


ALTER TABLE `avoir_note`						
  ADD CONSTRAINT `FK_AVOIR_Note_eleves` FOREIGN KEY (`IdEleve`) REFERENCES `eleves` (`IdEleve`),						
  ADD CONSTRAINT `FK_AVoir_Note_Matieres` FOREIGN KEY (`IdMatiere`) REFERENCES `matieres` (`idMatiere`);						



