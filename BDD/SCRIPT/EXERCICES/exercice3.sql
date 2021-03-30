--  -----------------------------------------------
--A)Les noms des étudiants nés avant l''étudiant « JULES LECLERCQ »
SELECT nomEtudiant, prenomEtudiant, dateNaissanceEtudiant 
FROM etudiants 
WHERE dateNaissanceEtudiant <( SELECT dateNaissanceEtudiant FROM etudiants 
WHERE prenomEtudiant = "Jules" AND nomEtudiant = "LECLERCQ" );

--B)Les noms et notes des étudiants qui ont,à l''épreuve 4, une note supérieure à la moyenne de cette épreuve
SELECT idEpreuve, avoir_note.idEtudiant,nomEtudiant,note 
FROM Avoir_note 
INNER JOIN Etudiants ON Avoir_note.idEtudiant = Etudiants.idEtudiant 
WHERE idEpreuve = 4 AND note > (SELECT AVG(note) FROM avoir_note WHERE idEpreuve = 4);

----C)Le nom des étudiants qui ont obtenu un 12 ou plus ----
SELECT nomEtudiant 
FROM etudiants 
INNER JOIN avoir_note  ON etudiants.idEtudiant = avoir_note.idEtudiant 
WHERE note >=12;

----D)Le nom des étudiants qui ont dans l''épreuve 4 une note supérieure à celle obtenue par « LUC DUPONT »(à cette même épreuve).
SELECT etudiants.nomEtudiant, etudiants.prenomEtudiant, note 
FROM avoir_note 
INNER JOIN etudiants  ON avoir_note.idEtudiant = etudiants.idEtudiant 
WHERE note >( SELECT note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant 
WHERE nomEtudiant = "DUPONT" AND prenomEtudiant = "LUC" AND avoir_note.idEpreuve = 4 ) AND avoir_note.idEpreuve = 4;

----E)Le nom des étudiants qui partagent une ou plusieurs notes avec « LUC DUPONT ».
SELECT etudiants.nomEtudiant, note FROM avoir_note  INNER JOIN etudiants  ON avoir_note.idEtudiant = etudiants.idEtudiant 
WHERE note IN ( SELECT note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant 
WHERE nomEtudiant = "DUPONT");

----F)Ajoutez une colonne HOBBY à la table ETUDIANT. Cette colonne est de type chaine sur 20 caractères.
ALTER TABLE etudiants 
ADD HOBBY varchar(20) NOT NULL DEFAULT "Sport";

----G)Ajouter à la table ETUDIANT une colonne NEWCOL de type INTEGER (vérifier en affichant la
----structure de la table) puis la supprimer (vérifier de nouveau la suppression).
ALTER TABLE etudiants ADD NewCol int;
ALTER TABLE etudiants DROP NewCol;

----H)Vérifiez que PREnomEtudiant peut ne pas avoir de contenu puis indiquez que la colonne PREnomEtudiant
----doit obligatoirement avoir une valeur. Vérifiez sur la description de la table.
ALTER TABLE etudiants 
MODIFY prenomEtudiant VARCHAR(50) NOT NULL;

----I)Insérez les enregistrements suivants: 7, 'interro écrite',9,1,'21-oct-96',1 dans EPREUVE 
INSERT INTO epreuves VALUES (7,'interro ecrite',9,1,'1996-10-21',1,null);

----1,7,10 | 2,7,08 | 3,7,05 | 4,7,09 | 17,3,15 dans AVOIR_NOTE
INSERT INTO avoir_note VALUES (null,1,7,10),(null,2,7,8),(null,3,7,5),(null,4,7,9),(null,17,3,15);

----J)Changez la note de n°3 dans l''épreuve7, elle passe à 07. Vérifiez les valeurs avant et après la requête.
UPDATE avoir_note SET note = 7 
WHERE idEtudiant=3 and idEpreuve=7;

----K)N°1 a mis de la bonne volonté, on augmente sa note dans l'épreuve 7 de 1 point. Vérifiez.
UPDATE avoir_note SET note = note +1 
WHERE idEtudiant=1 and idEpreuve=7;

----L)Détruisez l'épreuve 7 qui a été annulée pour cause de tricherie et les notes qui lui correspondent. Vérifiez.
DELETE FROM avoir_note WHERE idEpreuve=7;
DELETE FROM epreuves WHERE idEpreuve=7;

----M)Réflexion : N'y aurait-il pas eu moyen de détruire les notes de l'épreuve automatiquement dès la destruction de l'épreuve ?
DELETE FROM avoir_note AND epreuves WHERE idEpreuve=7;

----N) Changez toutes les notes de MARKE dans la matière « BASES DE DONNEES ». 
----Suite à un mauvais comportement, elles diminuent toutes de 3 points. Attention, la requête doit intégrer le nom de la matière.
----(et non chercher à repérer le numéro avant de la taper.)
UPDATE avoir_note SET note = note -3 
WHERE idEtudiant =( SELECT idEtudiant FROM etudiants WHERE nomEtudiant = 'marke' ) AND idEpreuve in ( SELECT idEpreuve FROM epreuves, matieres WHERE epreuves.idMatiereEpreuve = matieres.idMatiere AND matieres.nomMatiere = 'BD' );

----O)DEWA a manqué l'épreuve 4. Vu son niveau, on décide de lui créer une entrée dans AVOIR_NOTE en lui
----attribuant la moyenne des notes obtenues à cette épreuve par ses collègues*0.9. Attention, la requête doit
----intégrer le nom de l'étudiant (et non chercher à repérer le numéro avant de la taper.)
INSERT INTO avoir_note (idEtudiant, idEpreuve, note) 
SELECT (SELECT etudiants.idEtudiant FROM etudiants WHERE etudiants.nomEtudiant='dewa'), 4, (SELECT AVG(avoir_note.note)*0.9 FROM avoir_note WHERE avoir_note.idEpreuve = 4);

----P)Insérez un nouvel étudiant dont vous ne connaissez que le numéro, le nom, le prénom, le hobby et
----l'année: 25, 'DARTE','REMY','SCULPTURE',1.
INSERT INTO etudiants(idEtudiant, nomEtudiant, prenomEtudiant, anneeEtudiant, Hobby) VALUES (25, 'DARTE','REMY',1,'SCULPTURE');










 
