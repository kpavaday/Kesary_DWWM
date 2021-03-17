DROP DATABASE IF EXISTS mariage1;

CREATE DATABASE IF NOT EXISTS mariage1;

USE mariage1;

DROP TABLE IF EXISTS homme;

CREATE TABLE homme(
   idHomme int auto_increment NOT NULL, 
   nomHomme VARCHAR (50) NOT NULL,
   prenomHomme VARCHAR (50) NOT NULL,
        CONSTRAINT Homme_PK PRIMARY KEY (idHomme)
)ENGINE=INNODB;

CREATE TABLE femme(
    idFemme int auto_increment NOT NULL,
    nomFemme VARCHAR (50) NOT NULL,
    prenomFemme VARCHAR (50) NOT NULL,
    idHomme int NOT NULL,
        CONSTRAINT Femme_FK FOREIGN KEY (idHomme) REFERENCES Homme(idHomme)
)ENGINE=INNODB;