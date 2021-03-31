---1
SELECT nomHotel AS "Nom Hotel", villeHotel AS "Ville"
FROM `hotels`;

---2
SELECT nomClient AS "Nom",prenomClient AS "Prenom", adresseClient AS "Adresse", villeClient AS "Ville"
FROM `clients` 
WHERE nomClient = "WHITE";

---3
SELECT nomStation AS "Nom de la station", altitudeStation AS "Altitude"
FROM `stations` 
WHERE altitudeStation < 1000;

---4
SELECT numChambre AS "N° de la chambre", capaciteChambre AS "Capacité"
FROM `chambres` 
WHERE capaciteChambre > 1;

---5
SELECT nomClient AS "Nom client", villeClient AS "Ville" 
FROM `clients` 
WHERE villeClient != "Londres";

---6
SELECT stations.nomStation AS "Nom de la station", nomHotel AS "Nom de l'hotel", categorieHotel AS "Catégoie", villeHotel AS "Ville"
FROM hotels
INNER JOIN stations ON hotels.idStation = stations.idStation;

---7
SELECT numChambre AS "N° de la chambre", hotels.nomHotel AS "Nom de l'hotel", hotels.categorieHotel AS "La catégorie", hotels.villeHotel AS "Ville" 
FROM `chambres`
INNER JOIN hotels ON chambres.idHotel = hotels.idHotel;

---8
SELECT clients.nomClient AS "Nom client", dateReservationSejour AS "Date de réservation", dateDebutSejour AS "Date début", dateFinSejour AS "Date de fin"
FROM `reservations`
INNER JOIN clients ON reservations.idClient = clients.idClient;

---9
SELECT chambres.numChambre AS "N° de la chambre", nomHotel AS "Nom hotel", stations.nomStation AS "Nom de la station"
FROM `hotels` 
INNER JOIN chambres ON hotels.idHotel = chambres.idHotel
INNER JOIN stations ON hotels.idStation = stations.idStation;

---10
SELECT nomHotel AS "NomHotel", categorieHotel AS "Catégorie", villeHotel AS "Ville", chambres.numChambre AS "N° de la chambre", chambres.capaciteChambre AS "capacité"
FROM `hotels`
INNER JOIN chambres ON hotels.idHotel = chambres.idHotel
WHERE chambres.capaciteChambre > 1 AND villeHotel = "Bretou";

---11
SELECT chambres.numChambre,dateReservationSejour,dateDebutSejour,dateFinSejour
FROM `reservations`
LEFT JOIN chambres ON reservations.idReservation = chambres.IdChambre;

---12
SELECT nomStation AS "Nom de la station",
COUNT(hotels.idHotel) AS "Nombre d'hotel"
FROM `stations`
INNER JOIN hotels ON stations.idStation = hotels.idStation
GROUP BY nomStation;

---13
SELECT nomStation AS "Nom de la station",
COUNT(chambres.idChambre) AS "Nombre de chambre"
FROM `stations`
INNER JOIN hotels ON stations.idStation = hotels.idStation
INNER JOIN chambres ON chambres.idHotel = hotels.idHotel
GROUP BY nomStation;

---14
SELECT stations.nomStation As "nom station", numChambre AS "N° de chambre"
FROM `chambres`
INNER JOIN hotels on hotels.idHotel = chambres.idHotel
INNER JOIN stations ON stations.idStation = hotels.idStation
WHERE capaciteChambre >1;

---15
SELECT nomHotel
FROM `hotels` 
INNER JOIN chambres ON chambres.idHotel = hotels.idHotel
INNER JOIN reservations ON reservations.IdChambre = chambres.IdChambre
INNER JOIN clients ON clients.idClient = reservations.idClient
WHERE clients.nomClient = "SQUIRE";

---16
SELECT nomStation AS "Nom de la station",
ROUND(AVG(reservations.dateFinSejour - reservations.dateDebutSejour),2) AS "Durée moyenne"
FROM `stations`
INNER JOIN hotels ON stations.idStation = hotels.idHotel
INNER JOIN chambres on chambres.idHotel = hotels.idHotel
INNER JOIN reservations ON reservations.IdChambre = chambres.IdChambre
GROUP BY nomStation;

-----Création de vue--------

---17
CREATE VIEW StationChambreLeft AS 
SELECT nomStation,altitudeStation,nomHotel,categorieHotel,adresseHotel,villeHotel,numChambre,typeChambre,capaciteChambre 
FROM stations 
INNER JOIN hotels ON stations.idStation = hotels.idStation 
INNER JOIN chambres on chambres.idHotel = hotels.idHotel

---18
CREATE VIEW StationChambreLeft AS 
SELECT nomStation,altitudeStation,nomHotel,categorieHotel,adresseHotel,villeHotel,numChambre,typeChambre,capaciteChambre 
FROM stations 
LEFT JOIN hotels ON stations.idStation = hotels.idStation 
LEFT JOIN chambres on chambres.idHotel = hotels.idHotel

---19-Ajout d'un champ archivé 
ALTER TABLE reservations
ADD archive BOOLEAN;

---20-Procedure stockée
DELIMITER $$
CREATE PROCEDURE archivage()
BEGIN
UPDATE reservations SET reservations.archive = false;
UPDATE reservations set reservations.archive= true;
WHERE reservations.dateFinSejour < NOW();
END$$
DELIMITER ;










