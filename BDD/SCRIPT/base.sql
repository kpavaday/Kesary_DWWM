DROP DATABASE IF EXISTS xxxxxxx;

CREATE DATABASE IF NOT EXISTS xxxxxxx;

USE xxxxxxx;

ALTER TABLE Formation
        ADD CONSTRAINT FK_Formation_Groupe
        FOREIGN KEY (idGroupe)
        REFERENCES Groupe(idGroupe);

#Remplissage BDD
#USE xxxxxxx;