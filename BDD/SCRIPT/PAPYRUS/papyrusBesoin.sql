--1. Quelles sont les commandes du fournisseur 09120 
SELECT numcom 
FROM entcom
INNER JOIN fournis on entcom.numfou = fournis.numfou
WHERE fournis.numfou ="09120";

--2.Afficher le code des fournisseurs pour lesquelles des commandes ont été passées
SELECT numfou AS "Code fournisseur",
COUNT(numcom) AS "Nombre de commande"
FROM entcom
GROUP by numfou;

--3.Afficher le nombre de commande fournisseurs passées, et le nombre de fournisseurs concernés
SELECT COUNT(numcom) AS "Nombre de commande",
COUNT(DISTINCT numfou) AS "Nombre de fournisseur"
FROM entcom;

--4.Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle
---est inférieur à 1000
SELECT codart,libart,stkphy,stkale,QTEANN 
FROM PRODUIT 
WHERE STKPHY <= STKALE and QTEANN < 1000 

--5.Quels sont les fournisseurs situés dans les départements 75 78 92 77 ?
---L'affichage (Département, nom fournisseurs) sera effectué par département décroissant, puis par ordre alphabétique
SELECT nomfou, substring(posfou,1,2) as 'Départements' 
FROM fournis 
WHERE substring(posfou,1,2) IN ('75', '78', '92', '77') 
ORDER BY posfou DESC, nomfou

--6.Quelles sont les commandes passées au mois de mars et avril ?
SELECT numcom, datcom 
FROM entcom 
WHERE MONTH(DATCOM) = 3 OR MONTH(datcom) = 4;

--7.Quelles sont les commandes du jour qui ont des observations particulières?
--Affichage numéro de commande, date de commande)
SELECT numcom,datcom,obscom 
FROM entcom 
WHERE obscom != "";

--8.Lister le total de chaque commande par total décroissant
--Affichage numéro de commande et total
SELECT numcom, 
SUM(qtecde*priuni) AS "Total" 
FROM ligcom
GROUP BY numcom
ORDER BY qtecde*priuni DESC


--9.Lister les commandes dont le total est supérieur à 10 000€; On exclura dans le calcul du total les 
---articles commandés en quantité supérieur ou égale à 1000. (Affichage numéro de commande et total)
SELECT numcom, 
SUM(qtecde*priuni)>10000 as "Total" 
from ligcom 
WHERE qtecde < 1000 
GROUP BY numcom; 
--HAVING SUM (qtecde  * priuni)>10000;

--10.Lister les commandes par nom fournisseur
---Afficher le nom
SELECT nomfou AS "Nom fournisseur",datcom AS "Date commande",numcom AS "N° de commande"
FROM fournis,entcom 
WHERE entcom.numfou = fournis.numfou;

--11.Sortir les produits des commandes ayant le mot "urgent" en observation.
---Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et 
---le sous total = quantié commandée * prix unitaire
SELECT entcom.numcom AS "N° de commande"
FROM entcom
WHERE obscom LIKE "%urgent%"
GROUP BY numcom


