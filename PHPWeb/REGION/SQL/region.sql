DROP DATABASE IF EXISTS region;

CREATE DATABASE IF NOT EXISTS region;

USE region;

#------------------------------------------------------------
# Table: Departement
#------------------------------------------------------------
CREATE TABLE Departements(
    idDepartement Int Auto_increment NOT NULL PRIMARY KEY,
    numeroDepartement  Varchar (50) NOT NULL,
    libelleDepartement Varchar (250) NOT NULL,
    idRegion Int NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Region
#------------------------------------------------------------
CREATE TABLE Regions(
    idRegion Int Auto_increment NOT NULL PRIMARY KEY ,
    libelleRegion Varchar (250) NOT NULL,
    numeroRegion Int NOT NULL,
    nombreDepartement INT NOT NULL
) ENGINE = InnoDB;

ALTER TABLE Departements ADD CONSTRAINT FK_Departement_Region FOREIGN KEY (idRegion) REFERENCES Regions(idRegion);