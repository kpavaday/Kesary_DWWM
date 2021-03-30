DROP DATABASE IF EXISTS historien;

CREATE DATABASE IF NOT EXISTS historien;

USE historien;

CREATE table Soldat(
    idSoldat Int Auto_increment NOT NULL PRIMARY KEY,
    nomSoldat Varchar (250),
    prenomSoldat Varchar (250),
    dateNaissanceSoldat Date,
    dateDecesSoldat Date
)ENGINE = InnoDB;

CREATE TABLE Bataille(
        idBataille Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomBataille Varchar (250),
        lieuBataille Varchar (250),
        dateDebutBataille Date,
        dateFinBataille Date
)ENGINE=InnoDB;

CREATE TABLE Unite(
        idUnite Int Auto_increment PRIMARY KEY,
        nomUnite  Varchar (250),
        infoUnite Varchar (250)
)ENGINE=InnoDB;

CREATE TABLE Grade(
        idGrade Int Auto_increment PRIMARY KEY,
        libelleGrade Varchar (250)
)ENGINE=InnoDB;

CREATE TABLE Blessures(
        idBlessure   Int  Auto_increment PRIMARY KEY,
        typeBlessure Varchar (250)
)ENGINE=InnoDB;

CREATE TABLE EstBlesse(
    idEstBlesse Int Auto_increment NOT NULL PRIMARY KEY,
    idBlessure Int NOT NULL,
    idBataille Int NOT NULL,
    idSoldat Int NOT NULL,
    dateBlessure Date NOT NULL
)ENGINE=InnoDB;

CREATE TABLE posseder(
    idPosseder Int Auto_increment NOT NULL PRIMARY KEY,
    idGrade Int NOT,
    idSoldat Int NOT,
    dateObtention Date NOT NULL
)ENGINE=InnoDB;

CREATE TABLE Rattacher(
    idRattacher Int Auto_increment NOT NULL PRIMARY KEY,
    idUnite Int NOT NULL,
    idSoldat Int NOT NULL
)ENGINE=InnoDB;

ALTER TABLE EstBlesse 
    ADD CONSTRAINT FK_EstBlesse_Blessures FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure),
    ADD CONSTRAINT FK_EstBlesse_Bataille FOREIGN KEY (idBataille) REFERENCES Bataille(idBataille),
    ADD CONSTRAINT FK_EstBlesse_soldat FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat);


ALTER TABLE Posseder
    ADD CONSTRAINT FK_Posseder_Grade FOREIGN KEY (idGrade) REFERENCES Grade(idGrade),
    ADD CONSTRAINT FK_Posseder_Soldat FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat);


ALTER TABLE Rattacher
    ADD CONSTRAINT FK_Rattacher_Unite FOREIGN KEY (idUnite) REFERENCES Unite(idUnite),
    ADD CONSTRAINT FK_Rattache_Soldat FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat);


    








	















