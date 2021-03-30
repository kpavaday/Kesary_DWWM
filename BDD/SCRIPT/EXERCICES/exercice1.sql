#------------------------------------------------------------
#       Affichez la totalité de la table « client
#------------------------------------------------------------
SELECT nomClient, prenomClient, dateEntreeClient FROM clients;

#------------------------------------------------------------
#       Affichez les noms de tous les clients.
#------------------------------------------------------------
SELECT nomClient FROM clients;

#------------------------------------------------------------
#       Affichez les différentes dates de commandes sans répétition.
#------------------------------------------------------------
SELECT DISTINCT dateCommande FROM commandes; 

#------------------------------------------------------------
#       Affichez les clients qui se prénomment « sophie ».
#------------------------------------------------------------
SELECT prenomClient FROM clients WHERE prenomClient = "sophie";
SELECT prenomClient FROM clients WHERE prenomClient LIKE "sophie";

#------------------------------------------------------------
#       Affichez les numéros des articles et leur quantité commandés par le client1.
#------------------------------------------------------------
SELECT idArticle FROM articles WHERE 

#------------------------------------------------------------
#       Affichez les noms des clients en majuscules.
#------------------------------------------------------------
SELECT UPPER(nomClient) FROM clients;

#------------------------------------------------------------
#       Affichez les noms des clients avec la première lettre en majuscule.
#------------------------------------------------------------
SELECT  CONCAT UPPER(Substr(nomClient,1,1)),LOWER(Substr(nomClient,2,2)) FROM clients; 

#------------------------------------------------------------
#       Affichez les noms des clients qui ont 5caractères.
#------------------------------------------------------------
SELECT LENGTH(nomClient) FROM clients; SELECT nomClient FROM clients WHERE LENGTH(nomClient) = 5;

#------------------------------------------------------------
#       Affichez les noms des clients qui commencent par « t » ou qui ont un « l » en troisième position.
#------------------------------------------------------------
SELECT  nomClient FROM clients WHERE nomClient LIKE "t%" OR nomClient LIKE "%__l";

#------------------------------------------------------------
#       Affichez le numéro de client, le numéro de commande, la date de commande et la date de paiement
        attendue des commandes (=date_cde+15jours).
#------------------------------------------------------------
SELECT idClient FROM clients, idCommande FROM commandes, dateCommande FROM commandes;



SELECT NOW();

#------------------------------------------------------------
#       Affichez ancienneté des clients
#------------------------------------------------------------

SELECT DATEDIFF(CURRENT_DAY(), dateEntreeClient) FROM clients;





 