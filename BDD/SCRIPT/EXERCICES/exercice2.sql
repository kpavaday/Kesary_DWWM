ALTER TABLE commandes ADD cde_total int;
UPDATE commandes SET cde_total = quantiteCommande * (select prixArticle from articles where articles.idArticle = commandes.idArticle)

-- --------------------------------------------------------
-- A. Afficher le montant le plus élevé de commande
SELECT max(cde_total) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- B. Afficher le montant moyen des commandes
SELECT ROUND(AVG(cde_total),2) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- C. Afficher le montant le plus bas de commande
SELECT MIN(cde_total) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- D. Afficher le nombre de commandes qui ont été passées
SELECT COUNT(*) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- E. Afficher le montant moyen de commande par client
SELECT clients.nomClient, clients.prenomClient,
ROUND(AVG(commandes.cde_total),2) AS "Montant moyen de commande"
FROM commandes
INNER JOIN clients ON commandes.idClient = clients.idClient
GROUP BY commandes.idClient;

-- --------------------------------------------------------

-- --------------------------------------------------------
-- F. Afficher le montant le plus élevé de commande par client
SELECT clients.nomClient, clients.prenomClient,
MAX(commandes.cde_total) AS "Montant le plus élevé" 
FROM commandes
INNER JOIN clients ON commandes.idClient = clients.idClient
GROUP BY commandes.idClient

-- --------------------------------------------------------

-- --------------------------------------------------------
-- G. Afficher le nombre de commandes par client
SELECT clients.nomClient, clients.prenomClient,
COUNT(idCommande) AS "Nombre de commande"
FROM commandes
INNER JOIN clients on commandes.idClient = clients.idClient
GROUP by commandes.idCommande

-- --------------------------------------------------------

-- --------------------------------------------------------
-- H. Afficher le nombre d 'articles commandés en moyenne par client
SELECT clients.nomClient, clients.prenomClient,
ROUND(AVG(quantiteCommande),2) AS "Moyenne d'article commandé"
FROM commandes
INNER JOIN articles on commandes.idArticle = articles.idArticle
INNER JOIN clients ON commandes.idClient = clients.idClient
GROUP BY commandes.idClient;

-- --------------------------------------------------------

-- --------------------------------------------------------
-- I. Afficher le nombre d'articles commandés en moyenne par article
SELECT articles.descriptionArticle, 
ROUND(AVG(commandes.quantiteCommande),2) AS "moyenne des articles" 
FROM `commandes` 
INNER JOIN articles ON commandes.idArticle = articles.idArticle 
GROUP BY commandes.idArticle;

-- --------------------------------------------------------

-- --------------------------------------------------------
-- J. Afficher le nombre total d'articles commandés par article
SELECT articles.descriptionArticle, 
SUM(quantiteCommande)
FROM commandes
INNER JOIN articles ON commandes.idArticle = articles.idArticle
GROUP BY commandes.idArti

-- --------------------------------------------------------

-- --------------------------------------------------------
-- K. Afficher le nombre moyen d'articles par client et par date
SELECT clients.nomClient, commandes.dateCommande,
ROUND(AVG(commandes.quantiteCommande),2) AS "Le nombre moyen d'article"
FROM commandes
INNER JOIN articles ON commandes.idArticle = articles.idArticle
INNER JOIN clients ON commandes.idClient = clients.idClient
GROUP BY commandes.idClient,commandes.dateCommande;

-- --------------------------------------------------------

-- --------------------------------------------------------
-- L. Afficher le nombre de commandes par jour
SELECT dateCommande, COUNT(*) FROM commandes GROUP BY dateCommande;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- M. Afficher le nombre de clients dans la table
SELECT COUNT(*) FROM clients;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- N. Afficher le nombre de clients différents qui ont passé commande
SELECT COUNT(distinct idClient) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- O. Afficher le nombre d' articles différents qui ont été commandés
SELECT COUNT(distinct idArticle) FROM commandes;
-- --------------------------------------------------------

-- --------------------------------------------------------
-- P. Afficher le nombre de jours différents de commandes
SELECT COUNT(distinct dateCommande) FROM commandes;
-- --------------------------------------------------------