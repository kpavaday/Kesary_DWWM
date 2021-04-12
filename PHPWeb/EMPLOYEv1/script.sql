DROP DATABASE IF EXISTS employe;

CREATE DATABASE IF NOT EXISTS employe;

USE employe;

CREATE TABLE Agence(
    idAgence Int NOT NULL Auto_increment PRIMARY KEY,
    nomAgence Varchar (200) NOT NULL,
    adresseAgence Varchar (200) NOT NULL,
    cpAgence Varchar (200) NOT NULL,
    villeAgence Varchar (200) NOT NULL,
    restauration Varchar (200) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Employe(
    idEmploye Int NOT NULL Auto_increment PRIMARY KEY,
    nomEmploye Varchar (200) NOT NULL,
    prenomEmploye Varchar (200) NOT NULL,
    dateEmbauche Date (20) NOT NULL,
    fonction Varchar (200) NOT NULL,
    salaire Float (20) NOT NULL,
    serviceEmploye Varchar (200) NOT NULL,
    nbreEnfants Int (10) NOT NULL,
    idAgence INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Enfant(
    idEnfant Int NOT NULL Auto_increment PRIMARY KEY,
    nomEnfant Varchar (200) NOT NULL,
    prenomEnfant Varchar (200) NOT NULL,
    ageEnfant Float (10) NOT NULL,
    idEmploye INT NOT NULL
) ENGINE = InnoDB;

ALTER TABLE Enfant
ADD
CONSTRAINT FK_enfant_employe FOREIGN KEY (idEmploye) REFERENCES Employe(idEmploye);

ALTER TABLE Employe
ADD
CONSTRAINT fk_employe_agence FOREIGN KEY (idAgence) REFERENCES Agence(idAgence);

