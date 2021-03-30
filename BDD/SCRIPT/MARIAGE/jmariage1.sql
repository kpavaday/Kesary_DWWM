#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Homme
#------------------------------------------------------------

CREATE TABLE Homme(
        idHomme     Int  Auto_increment  NOT NULL ,
        nomHomme    Varchar (50) NOT NULL ,
        prenomHomme Varchar (50) NOT NULL
	,CONSTRAINT Homme_PK PRIMARY KEY (idHomme)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Femme
#------------------------------------------------------------

CREATE TABLE Femme(
        idFemme     Int  Auto_increment  NOT NULL ,
        nomFemme    Varchar (50) NOT NULL ,
        prenomFemme Varchar (50) NOT NULL ,
        idHomme     Int NOT NULL
	,CONSTRAINT Femme_PK PRIMARY KEY (idFemme)

	,CONSTRAINT Femme_Homme_FK FOREIGN KEY (idHomme) REFERENCES Homme(idHomme)
)ENGINE=InnoDB;

