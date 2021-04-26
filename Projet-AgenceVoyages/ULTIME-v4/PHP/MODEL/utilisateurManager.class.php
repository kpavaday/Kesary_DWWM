<?php
class UtilisateurManager
{

	public static function add(Utilisateurs $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("INSERT INTO Utilisateurs(nomUtilisateur,prenomUtilisateur,numTelUtilisateur,emailUtilisateur) VALUES (:nomUtilisateur,:prenomUtilisateur,:numTelUtilisateur,:emailUtilisateur)");
		$requete->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $requete->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $requete->bindValue(":numTelUtilisateur", $obj->getNumTelUtilisateur());
        $requete->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
		$requete->execute();
	}

	public static function update(Utilisateurs $obj)
	{
		$db = DbConnect::getDb();
		$requete = $db->prepare("UPDATE Utilisateurs SET nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,numTelUtilisateur=:numTelUtilisateur,emailUtilisateur=:emailUtilisateur WHERE idUtilisateur=:idUtilisateur");
		$requete->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$requete->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $requete->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $requete->bindValue(":numTelUtilisateur", $obj->getNumTelUtilisateur());
        $requete->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
		$requete->execute();
	}

	public static function delete(Utilisateurs $obj)
	{
		$db = DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
	}

	public static function findById($id)
	{
		$db = DbConnect::getDb();
		$id = (int) $id; //Pour se protéger de la surcharge d'URL
		$requete = $db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur =" . $id);
		$resultat = $requete->fetch(PDO::FETCH_ASSOC);
		if ($resultat != false) {
			return new Utilisateurs($resultat);
		} else {
			return false;
		}
	}

	public static function getList()
	{
		$db = DbConnect::getDb();
		$requete = $db->query("SELECT * FROM Utilisateurs");
		while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) {
			if ($donnees != false) {
				$listeUtilisateurs[] = new Utilisateurs($donnees);
			}
		}
		return $listeUtilisateurs;
	}
	public static function findByPseudo($pseudo)
    {
		$db = DbConnect::getDb();
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudo ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }





}