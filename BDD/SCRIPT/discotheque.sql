#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS discotheque;

CREATE DATABASE IF NOT EXISTS discotheque;

USE discotheque;


#------------------------------------------------------------
# Table: ARTISTES
#------------------------------------------------------------

CREATE TABLE ARTISTES(
        IdArtiste     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Nom           Varchar (50) NOT NULL ,
        Prenom        Varchar (50) NOT NULL ,
        DateNaissance Date NOT NULL ,
        Genre         TinyINT NOT NULL ,
        Specialite    Varchar (50) NOT NULL COMMENT "specialités :  chanteur, guitariste, pianiste...." 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Labels
#------------------------------------------------------------

CREATE TABLE Labels(
        IdLabel      Int  Auto_increment  NOT NULL PRIMARY KEY,
        LibelleLabel Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Disques
#------------------------------------------------------------

CREATE TABLE Disques(
        IdDisque  Int  Auto_increment  NOT NULL PRIMARY KEY,
        Annee     Date NOT NULL ,
        IdArtiste Int NOT NULL ,
        IdLabel   Int

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Titres
#------------------------------------------------------------

CREATE TABLE Titres(
        IdTitre  Int  Auto_increment  NOT NULL PRIMARY KEY ,
        IdDisque Int NOT NULL

	,CONSTRAINT Titres_Disques_FK FOREIGN KEY (IdDisque) REFERENCES Disques(IdDisque)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Constitution
#------------------------------------------------------------

CREATE TABLE Constitution(
        IdConstitution Int Auto_increment NOT NULL PRIMARY KEY,
        IdArtiste          Int NOT NULL ,
        IdArtiste_ARTISTES Int NOT NULL

)ENGINE=InnoDB;





ALTER TABLE Disques
    ADD CONSTRAINT FK_Disques_Artistes
    FOREIGN KEY (IdArtiste) 
    REFERENCES ARTISTES(IdArtiste),

    ADD CONSTRAINT FK_Disques_Label
    FOREIGN KEY (IdLabel)
    REFERENCES Labels(IdLabel);

ALTER TABLE Titres
    ADD CONSTRAINT FK_Titres_Disques
    FOREIGN KEY (IdDisque)
    REFERENCES Disques(IdDisque);


ALTER TABLE Constitution
    ADD CONSTRAINT FK_Constitution_Artistes
    FOREIGN KEY (IdArtiste)
    REFERENCES ARTISTES(IdArtiste);

 