DROP DATABASE IF EXISTS soldat;

CREATE DATABASE IF NOT EXISTS soldat;

USE soldat;

DROP TABLE IF EXISTS soldat;

CREATE TABLE IF NOT EXISTS Soldat(
    idsoldat int not null auto_increment PRIMARY KEY,
    nom varchar(30),
    prenom varchar (30),
    adresse varchar (50),
    codePostal varchar (20),
    dateDeces Date 
)ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS bataille(
    idBataille int  auto_increment not null PRIMARY KEY,
    libelleBataille varchar(250) not null,
    lieuBataille varchar (30) not null,
    dateDebutBataille Date not null,
    dateFinBataille Date not null
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS unite(
    idUnite int auto_increment not null PRIMARY KEY,
    libelleUnite varchar (250) not null,
    infoUnite varchar (250)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS blessure(
    idBlessure int auto_increment not null,
    libelleBlessure varchar not null,
    dateBlessure Date not null,
    lieuBlessure varchar (30) not null
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Grade(
    idGrade int auto_increment NOT NULL PRIMARY KEY,
    libelleGrade varchar (250) not null
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS possede(
    idGrade int not null,
    idsoldat int not null,
    date Date not null
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS rattache(
    idBlessure int not null,
    idsoldat int not null,
    date Date not null
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS subit(
    idBlessure int not null,
    idsoldat int not null,
    date Date not null
)ENGINE = INNODB;

ALTER TABLE
    soldat
ADD
CONSTRAINT fk_soldat_bataille FOREIGN KEY (idBataille) REFERENCES bataille(idBataille);

ALTER TABLE
    possede
ADD
CONSTRAINT fk_possede_grade FOREIGN KEY (idGrade) REFERENCES grade(idGrade);
CONSTRAINT fk_possede_soldat FOREIGN KEY (idsoldat REFERENCES) soldat(idsoldat);

ALTER TABLE
    rattache
ADD
CONSTRAINT fk_rattache_unite FOREIGN KEY (idUnite) REFERENCES unite(idUnite);
CONSTRAINT fk_rattache_soldat FOREIGN KEY (idsoldat) REFERENCES soldat(idsoldat);

ALTER TABLE
    subit
ADD
CONSTRAINT fk_subit_blessure FOREIGN KEY (idBlessure) REFERENCES blessure(idBlessure);
CONSTRAINT fk_subit_soldat FOREIGN KEY (idsoldat) REFERENCES soldat(idsoldat);