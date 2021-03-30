---Requête classique
SELECT Nomeleve, note			
FROM Eleves, Avoir_Note			
WHERE Eleves.idEleve = Avoir_Note.idEleve;

---Produit cartesien
SELECT Nomeleve, note
FROM Eleves, Avoir_Note


---Jointure : INNER JOIN
SELECT Nomeleve, note
FROM Eleves 
INNER JOIN  Avoir_Note
ON Eleves.idEleve = Avoir_Note.idEleve

SELECT Nomeleve, LibelleMatiere, note
FROM Eleves, Avoir_Note, Matieres
WHERE Eleves.idEleve = Avoir_Note.idEleve
AND Matieres.IdMatiere = Avoir_Note.IdMatiere

SELECT Nomeleve, note
FROM Eleves 
INNER JOIN  Avoir_Note
ON Eleves.idEleve = Avoir_Note.idEleve
INNER JOIN Matieres 
ON Matieres.IdMatiere = Avoir_Note.IdMatiere

---Jointure gauche
SELECT Nomeleve, note
FROM Eleves 
LEFT JOIN Avoir_note
ON Eleves.idEleve = Avoir_Note.idEleve

---Jointure droite
SELECT Nomeleve, note
FROM Avoir_Note 
RIGHT JOIN Eleves
ON Eleves.idEleve = Avoir_Note.idEleve

---Double jointure
SELECT Nomeleve, LibelleMatiere, note
FROM Eleves 
LEFT JOIN Avoir_note
ON Eleves.idEleve = Avoir_Note.idEleve,
INNER JOIN Matieres
ON Matieres.IdMatiere = Avoir_Note.IdMatiere

SELECT Nomeleve, LibelleMatiere, note
FROM Eleves 
LEFT JOIN Avoir_note
ON Eleves.idEleve = Avoir_Note.idEleve,
RIGHT JOIN Matieres
ON Matieres.IdMatiere = Avoir_Note.IdMatiere












