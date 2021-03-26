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

-- --------------------------------------------------------

-- --------------------------------------------------------
-- F. Afficher le montant le plus élevé de commande par client

-- --------------------------------------------------------

-- --------------------------------------------------------
-- G. Afficher le nombre de commandes par client

-- --------------------------------------------------------

-- --------------------------------------------------------
-- H. Afficher le nombre d 'articles commandés en moyenne par client

-- --------------------------------------------------------

-- --------------------------------------------------------
-- I. Afficher le nombre d'articles commandés en moyenne par article

-- --------------------------------------------------------

-- --------------------------------------------------------
-- J. Afficher le nombre total d'articles commandés par article

-- --------------------------------------------------------

-- --------------------------------------------------------
-- K. Afficher le nombre moyen d'articles par client et par date

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