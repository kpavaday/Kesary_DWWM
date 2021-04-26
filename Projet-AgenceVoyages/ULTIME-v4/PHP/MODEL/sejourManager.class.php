<?php
class SejourManager
{

	public static function add(Sejours $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("INSERT INTO Sejours(libelleSejour,dateReservation,dateDebutSejour,dateFinSejour,prix,idUtilisateur,idCategorie,idDestination) VALUES (:libelleSejour,:dateReservation,:dateDebutSejour,:dateFinSejour,:prix,:idUtilisateur,:idCategorie,:idDestination)");
		$requete->bindValue(":libelleSejour", $obj->getLibelleSejour());
        $requete->bindValue(":dateReservation", $obj->getDateReservation());
        $requete->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
        $requete->bindValue(":dateFinSejour", $obj->getDateFinSejour());
        $requete->bindValue(":prix", $obj->getPrix());
        $requete->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $requete->bindValue(":idCategorie", $obj->getIdCategorie());
        $requete->bindValue(":idDestination", $obj->getIdDestination());
		$requete->execute();
	}

	public static function update(Sejours $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("UPDATE Sejours SET libelleSejour=:libelleSejour,dateReservation=:dateReservation,dateDebutSejour=:dateDebutSejour,dateFinSejour=:dateFinSejour,prix=:prix,idUtilisateur=:idUtilisateur,idCategorie=:idCategorie,idDestination=:idDestination WHERE idSejour=:idSejour");
		$requete->bindValue(":idSejour", $obj->getIdSejour());
		$requete->bindValue(":libelleSejour", $obj->getLibelleSejour());
        $requete->bindValue(":dateReservation", $obj->getDateReservation());
        $requete->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
        $requete->bindValue(":dateFinSejour", $obj->getDateFinSejour());
        $requete->bindValue(":prix", $obj->getPrix());
        $requete->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $requete->bindValue(":idCategorie", $obj->getIdCategorie());
        $requete->bindValue(":idDestination", $obj->getIdDestination());
		$requete->execute();
	}

	public static function delete(Sejours $obj)
	{
		$db = DbConnect::getDb();
		$db->exec("DELETE FROM Sejours WHERE idSejour=" . $obj->getIdSejour());
	}

	public static function findById($id)
	{
		$db = DbConnect::getDb();
		$id = (int) $id; //Pour se protéger de la surcharge d'URL
		$requete = $db->query("SELECT * FROM Sejours WHERE idSejour =" . $id);
		$resultat = $requete->fetch(PDO::FETCH_ASSOC);
		if ($resultat != false) {
			return new Sejours($resultat);
		} else {
			return false;
		}
	}

	public static function getList()
	{
		$db = DbConnect::getDb();
		$requete = $db->query("SELECT * FROM Sejours");
		while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) {
			if ($donnees != false) {
				$listeSejours[] = new Sejours($donnees);
			}
		}
		return $listeSejours;
	}
	public static function getListByUtilisateur($idUtilisateur)
    {
        $idUtilisateur=(int) $idUtilisateur;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Sejours where idUtilisateur=$idUtilisateur");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Sejours($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

	public static function getListByCategorie($idCategorie)
    {
        $idCategorie=(int) $idCategorie;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Sejours where idCategorie=$idCategorie");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Sejours($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

	public static function getListByDestination($idDestination)
    {
        $idDestination=(int) $idDestination;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Sejours where idDestination=$idDestination");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Sejours($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }



}