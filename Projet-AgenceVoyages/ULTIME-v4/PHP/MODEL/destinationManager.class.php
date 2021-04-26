<?php
class DestinationManager
{

	public static function add(Destinations $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("INSERT INTO Destinations(ville,pays,imageDestination) VALUES (:ville,:pays,:imageDestination)");
		$requete->bindValue(":ville", $obj->getVille());
        $requete->bindValue(":pays", $obj->getPays());
        $requete->bindValue(":imageDestination", $obj->getImageDestination());
		$requete->execute();
	}

	public static function update(Destinations $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("UPDATE Destinations SET ville=:ville WHERE idDestination=:idDestination");
		$requete->bindValue(":idDestination", $obj->getIdDestination());
		$requete->bindValue(":ville", $obj->getVille());
        $requete->bindValue(":pays", $obj->getPays());
        $requete->bindValue(":imageDestination", $obj->getImageDestination());
		$requete->execute();
	}

	public static function delete(Destinations $obj)
	{
		$db = DbConnect::getDb();
		$db->exec("DELETE FROM Destinations WHERE idDestination=" . $obj->getIdDestination());
	}

	public static function findById($id)
	{
		$db = DbConnect::getDb();
		$id = (int) $id; //Pour se protéger de la surcharge d'URL
		$requete = $db->query("SELECT * FROM Destinations WHERE idDestination =" . $id);
		$resultat = $requete->fetch(PDO::FETCH_ASSOC);
		if ($resultat != false) {
			return new Destinations($resultat);
		} else {
			return false;
		}
	}

	public static function getList()
	{
		$db = DbConnect::getDb();
		$requete = $db->query("SELECT * FROM Destinations");
		while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) {
			if ($donnees != false) {
				$listeDestinations[] = new Destinations($donnees);
			}
		}
		return $listeDestinations;
	}

}