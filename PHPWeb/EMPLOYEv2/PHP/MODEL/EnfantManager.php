<?php

class EnfantsManager{
    public static function add(Enfant $enfant){
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO enfant( nom, Prenom, age, idEmploye) VALUES (:nomEnfant,:prenomEnafnt,:ageEnfant,:idEmploye)");
        $requete->bindValue(":nomEnfant", $enfant->getNom());
        $requete->bindValue(":prenomEnfant", $enfant->getPrenom());
        $requete->bindValue(":ageEnfant", $enfant->getAge());
        $requete->bindValue(":idEmploye", $enfant->getIdEmploye());
        $res = $requete->execute();
    }
    public static function update(Enfant $enfant) {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE enfant SET nom=:nomEnfant,Prenom=:prenomEnfant,age=:ageEnfant,idEmploye=:idEmploye WHERE idEnfant = :idEnfant");
        $requete->bindValue(":nomEnfant", $enfant->getNom());
        $requete->bindValue(":prenomEnfant", $enfant->getPrenom());
        $requete->bindValue(":ageEnfant", $enfant->getAge());
        $requete->bindValue(":idEmploye", $enfant->getIdEmploye());
        $requete->bindValue(":idEnfant", $cl->getIdEnfant());
        $requete->execute();
    }
    public static function delete(Enfant $enfant){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM enfant WHERE idEnfant = " . $enfant->getIdEnfant());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM enfant WHERE idEnfant = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Enfant($resultat);
        }
        else
        {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeEnfants=[];
        $requete = $db->query("SELECT * FROM enfant");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeEnfants[] = new Clients($donnees);
                }
            }
            return $listeEnfants;
    }


}