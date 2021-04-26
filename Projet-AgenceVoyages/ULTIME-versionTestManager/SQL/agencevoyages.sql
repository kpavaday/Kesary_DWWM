DROP DATABASE IF EXISTS agencevoyages;

CREATE DATABASE IF NOT EXISTS agencevoyages;

USE agencevoyages;


DROP TABLE IF EXISTS Utilisateurs;

CREATE TABLE IF NOT EXISTS Utilisateurs(
        idUtilisateur     Int NOT NULL  Auto_increment  PRIMARY KEY,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomUtilisateur Varchar (50) NOT NULL ,
        numTelUtilisateur Varchar (50) NOT NULL ,
        eMailUtilisateur  Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Categories(
        idCategorie      Int NOT NULL  Auto_increment PRIMARY KEY,
        libelleCategorie Varchar (50) NOT NULL ,
        typeSejours      Varchar (50) NOT NULL ,
        imageCategorie   Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Roles
#------------------------------------------------------------

CREATE TABLE Roles(
        idRole      Int NOT NULL  Auto_increment PRIMARY KEY ,
        libelleRole Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Destinations
#------------------------------------------------------------

CREATE TABLE Destinations(
        idDestinations   Int NOT NULL  Auto_increment PRIMARY KEY ,
        ville            Varchar (50) NOT NULL ,
        pays             Varchar (50) NOT NULL ,
        imageDestination Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sejours
#------------------------------------------------------------

CREATE TABLE Sejours(
        idSejours       Int NOT NULL  Auto_increment PRIMARY KEY,
        libelleSejours  Varchar (50) NOT NULL ,
        dateReservation Date NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prix            Float NOT NULL ,
        idUtilisateur   Int NOT NULL ,
        idCategorie     Int NOT NULL ,
        idDestination  Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: avoir
#------------------------------------------------------------

CREATE TABLE avoir(
        idRole        Int NOT NULL ,
        idUtilisateur Int NOT NULL
)ENGINE=InnoDB;


ALTER TABLE Sejours
ADD
CONSTRAINT fk_Sejours_Utilisateurs FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);

ALTER TABLE Sejours
ADD
CONSTRAINT fk_Sejours_Categories FOREIGN KEY (idCategorie) REFERENCES Categories(idCategorie);

ALTER TABLE Sejours
ADD
CONSTRAINT fk_Sejours_Destinations FOREIGN KEY (idDestination) REFERENCES Destinations(idDestination);


ALTER TABLE avoir
ADD
CONSTRAINT fk_avoir_role FOREIGN KEY (idRole) REFERENCES Roles(idRole);

ALTER TABLE avoir
ADD
CONSTRAINT fk_avoir_utilisateurs FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);