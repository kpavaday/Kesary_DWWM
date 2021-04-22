#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Rayons
#------------------------------------------------------------

CREATE TABLE Rayons(
        idRayon       Int  Auto_increment  NOT NULL ,
        intituleRayon Varchar (50) NOT NULL
	,CONSTRAINT Rayons_PK PRIMARY KEY (idRayon)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Auteurs
#------------------------------------------------------------

CREATE TABLE Auteurs(
        idAuteurs    Int  Auto_increment  NOT NULL ,
        nomAuteur    Varchar (50) NOT NULL ,
        prenomAuteur Varchar (50) NOT NULL
	,CONSTRAINT Auteurs_PK PRIMARY KEY (idAuteurs)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MotsCle
#------------------------------------------------------------

CREATE TABLE MotsCle(
        idMot Int  Auto_increment  NOT NULL ,
        mot   Varchar (50) NOT NULL
	,CONSTRAINT MotsCle_PK PRIMARY KEY (idMot)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adherents
#------------------------------------------------------------

CREATE TABLE Adherents(
        idAdherent     Int  Auto_increment  NOT NULL ,
        nomAdherent    Varchar (50) NOT NULL ,
        prenomAdherent Varchar (50) NOT NULL ,
        adrAdherent    Varchar (50) NOT NULL ,
        codePostal     Varchar (50) NOT NULL ,
        villeAdherent  Varchar (50) NOT NULL
	,CONSTRAINT Adherents_PK PRIMARY KEY (idAdherent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ouvrages
#------------------------------------------------------------

CREATE TABLE Ouvrages(
        idOuvrage   Int  Auto_increment  NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        dateEmprunt Date NOT NULL ,
        dateRetour  Date NOT NULL ,
        idRayon     Int NOT NULL ,
        idAdherent  Int NOT NULL
	,CONSTRAINT Ouvrages_PK PRIMARY KEY (idOuvrage)

	,CONSTRAINT Ouvrages_Rayons_FK FOREIGN KEY (idRayon) REFERENCES Rayons(idRayon)
	,CONSTRAINT Ouvrages_Adherents0_FK FOREIGN KEY (idAdherent) REFERENCES Adherents(idAdherent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est l'auteur de
#------------------------------------------------------------

CREATE TABLE est_l_auteur_de(
        idOuvrage Int NOT NULL ,
        idAuteurs Int NOT NULL
	,CONSTRAINT est_l_auteur_de_PK PRIMARY KEY (idOuvrage,idAuteurs)

	,CONSTRAINT est_l_auteur_de_Ouvrages_FK FOREIGN KEY (idOuvrage) REFERENCES Ouvrages(idOuvrage)
	,CONSTRAINT est_l_auteur_de_Auteurs0_FK FOREIGN KEY (idAuteurs) REFERENCES Auteurs(idAuteurs)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: indexe
#------------------------------------------------------------

CREATE TABLE indexe(
        idOuvrage Int NOT NULL ,
        idMot     Int NOT NULL
	,CONSTRAINT indexe_PK PRIMARY KEY (idOuvrage,idMot)

	,CONSTRAINT indexe_Ouvrages_FK FOREIGN KEY (idOuvrage) REFERENCES Ouvrages(idOuvrage)
	,CONSTRAINT indexe_MotsCle0_FK FOREIGN KEY (idMot) REFERENCES MotsCle(idMot)
)ENGINE=InnoDB;

