DROP DATABASE IF EXISTS xxxxxxx;

CREATE DATABASE IF NOT EXISTS xxxxxxx;

USE xxxxxxx;



ALTER TABLE Formation
        ADD CONSTRAINT FK_Formation_Groupe
        FOREIGN KEY (idGroupe)
        REFERENCES Groupe(idGroupe);



#Remplissage BDD
#USE xxxxxxx;


--------CRÉATION PROCEDURE STOCKÉE--------
DELIMITER $$
CREATE  PROCEDURE `Maintenance`()
BEGIN
UPDATE etudiants SET `nomEtudiant` = UCASE(`nomEtudiant`) , prenomEtudiant=UCASE(prenomEtudiant);
update enseignants set nomEnseignant = UCASE(nomEnseignant), prenomEnseignant=UCASE(prenomEnseignant);
END$$
DELIMITER ;

------------------------------------------
