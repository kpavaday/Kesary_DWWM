USE notes;

INSERT INTO `eleves` (`IdEleve`, `NomEleve`) VALUES(1, 'toto');					
INSERT INTO `eleves` (`IdEleve`, `NomEleve`) VALUES(2, 'titi');					
INSERT INTO `eleves` (`IdEleve`, `NomEleve`) VALUES(3, 'tata');					
INSERT INTO `matieres` (`idMatiere`, `LibelleMatiere`) VALUES(1, 'math');					
INSERT INTO `matieres` (`idMatiere`, `LibelleMatiere`) VALUES(2, 'francais');					
INSERT INTO `matieres` (`idMatiere`, `LibelleMatiere`) VALUES(3, 'geo');					
INSERT INTO `avoir_note` (`IdEleve`, `IdMatiere`, `Note`) VALUES(1, 1, 12);					
INSERT INTO `avoir_note` (`IdEleve`, `IdMatiere`, `Note`) VALUES(1, 2, 14);					
INSERT INTO `avoir_note` (`IdEleve`, `IdMatiere`, `Note`) VALUES(2, 2, 13);					
INSERT INTO `avoir_note` (`IdEleve`, `IdMatiere`, `Note`) VALUES(1, 3, 11);					
