DROP DATABASE IF EXISTS station;

CREATE DATABASE IF NOT EXISTS station;

USE station;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Stations
#------------------------------------------------------------
CREATE TABLE Stations(
        idStation        Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomSation       Varchar (250) NOT NULL ,
        altitudeStation Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------
CREATE TABLE Hotels(
        idHotel        Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomHotel       Varchar (250) NOT NULL ,
        categorieHotel Varchar (250) NOT NULL ,
        adresseHotel   Varchar (250) NOT NULL ,
        villeHotel     Varchar (250) NOT NULL ,
        idStation       Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------
CREATE TABLE Chambres(
        idChambre       Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numChambre      Int NOT NULL ,
        typeChambre     Varchar (250) NOT NULL ,
        capaciteChambre Varchar (250) NOT NULL ,
        idHotel         Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------
CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomClient     Varchar (250) NOT NULL ,
        prenomClient  Varchar (250) NOT NULL ,
        adresseClient Varchar (250) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Reservations
#------------------------------------------------------------
CREATE TABLE Reservations(
        idReservation Int Auto_increment NOT NULL PRIMARY KEY,
        idChambre       Int NOT NULL ,
        idClient        Int NOT NULL ,
        dateReservation Date NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prixSejour      Float NOT NULL ,
        arrhes          Float NOT NULL
)ENGINE=InnoDB;


ALTER TABLE Hotels
    ADD CONSTRAINT FK_Hotels_Stations
    FOREIGN KEY (idStation)
    REFERENCES Stations(idStation);

ALTER TABLE Chambres
    ADD CONSTRAINT FK_Chambres_Hotels
    FOREIGN KEY (idHotel)
    REFERENCES Hotels(idHotel);

ALTER TABLE Reservations
    ADD CONSTRAINT FK_Reservations_Chambres
    FOREIGN KEY (idChambre)
    REFERENCES Chambres(idChambre);

ALTER TABLE Reservations
    ADD CONSTRAINT FK_Reservations_Clients
    FOREIGN KEY (idClient)
    REFERENCES Clients(idClient);