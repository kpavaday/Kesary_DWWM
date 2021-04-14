DROP DATABASE IF EXISTS region;

CREATE DATABASE IF NOT EXISTS region;

USE region;

CREATE TABLE Departements(
    idDepartement Int Auto_increment NOT NULL PRIMARY KEY,
    numeroDepartement Varchar (250) NOT NULL,
    libelleDepartement Varchar NOT NULL,
    idRegion INT NOT NULL
) ENGINE = InnoDB;


CREATE TABLE Regions(
    idRegion INT Auto_increment NOT NULL PRIMARY KEY ,
    libelleRegion Varchar (250) NOT NULL,
    numeroRegion INT NOT NULL,
    nombreDépartement INT NOT NULL
) ENGINE = InnoDB;


ALTER TABLE Departements ADD CONSTRAINT FK_Departements_Regions FOREIGN KEY (idRegion) REFERENCES Regions(idRegion);