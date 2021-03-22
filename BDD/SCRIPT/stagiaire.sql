DROP DATABASE IF EXISTS stagiaire;

CREATE DATABASE IF NOT EXISTS stagiaire;

USE stagiaire;

#------------------------------------------------------------
# Table: Hebergement
#------------------------------------------------------------
CREATE TABLE Hebergement(
        idHebergement  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomHebergement Varchar (250) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Groupe
#------------------------------------------------------------
CREATE TABLE Groupe(
        idGroupe  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomGroupe Varchar (250) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formation
#------------------------------------------------------------
CREATE TABLE Formation(
        idFormation  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomFormation Varchar (250) NOT NULL ,
        idGroupe     Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formateur
#------------------------------------------------------------
CREATE TABLE Formateur(
        idFormateur  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomFormateur Varchar (250) NOT NULL
        prenomFormateur Varchar (250) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Stagiaire
#------------------------------------------------------------
CREATE TABLE Stagiaire(
        idStagiaire     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomStagiaire    Varchar (250) NOT NULL ,
        prenomStagiaire Varchar (250) NOT NULL ,
        adresse         Varchar (250) NOT NULL ,
        telephone       Varchar (30) NOT NULL ,
        sexe            Varchar (30) NOT NULL ,
        dateNaissance   Date NOT NULL ,
        dateEntree      Date NOT NULL ,
        idHebergement   Int NOT NULL ,
        idFormation     Int NOT NULL ,
        idFormateur     Int NOT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Enseignement
#------------------------------------------------------------

CREATE TABLE Enseignement(
        idEnseignement  Int Auto_increment NOT NULL PRIMARY KEY,
        idFormation Int NOT NULL ,
        idFormateur Int NOT NULL
)ENGINE=InnoDB;


ALTER TABLE Formation ADD CONSTRAINT FK_Formation_Groupe FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe),

ALTER TABLE Stagiaire ADD CONSTRAINT FK_Stagiaire_Hebergement FOREIGN KEY (idHebergement) REFERENCES Hebergement(idHebergement);
ALTER TABLE Stagiaire ADD CONSTRAINT FK_Stagiaire_Formation FOREIGN KEY (idFormation) REFERENCES Formation(idFormation);
ALTER TABLE Stagiaire ADD CONSTRAINT FK_Stagiaire_Formateur FOREIGN KEY (idFormation) REFERENCES Formateur(idFormateur);

ALTER TABLE Enseignement ADD CONSTRAINT FK_Enseignement_Formation FOREIGN KEY (idFormation) REFERENCES Formation(idFormation);
ALTER TABLE Enseignement ADD CONSTRAINT FK_Enseignement_Formateur FOREIGN KEY (idFormateur) REFERENCES Formateur(idFormateur);















