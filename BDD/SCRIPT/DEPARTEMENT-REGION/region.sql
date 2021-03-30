DROP DATABASE IF EXISTS region;

CREATE DATABASE IF NOT EXISTS region;

USE region;

#------------------------------------------------------------
# Table: Departement
#------------------------------------------------------------
CREATE TABLE Departement(
    idDepartement Int Auto_increment NOT NULL PRIMARY KEY,
    nomDepartement Varchar (250) NOT NULL,
    idRegion Int NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Region
#------------------------------------------------------------
CREATE TABLE Region(
    idRegion Int Auto_increment NOT NULL PRIMARY KEY ,
    nomRegion Varchar (250) NOT NULL,
    numRegion Int NOT NULL,
    nbDepartement INT NOT NULL
) ENGINE = InnoDB;


ALTER TABLE Departement ADD CONSTRAINT FK_Departement_Region FOREIGN KEY (idRegion) REFERENCES Region(idRegion);