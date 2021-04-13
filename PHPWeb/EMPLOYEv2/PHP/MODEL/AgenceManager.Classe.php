<?php

class AgenceManager{
    
    public static function add(Agence $agence){
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO agence( nomAgence, adresse, codePostal, ville,restauration) VALUES (:nomagence,:adresseAgence,:cpAgence,:villeAgence,:restauration)");
        $requete->bindValue(":nomAgence", $agence->getNomAgence());
        $requete->bindValue(":adresseAgence", $agence->getAdresse());
        $requete->bindValue(":cpAgence", $agence->getCodePostal());
        $requete->bindValue(":villeAgence", $agence->getVille());
        $requete->bindValue(":restauration", $agence->getRestauration());
        $res = $requete->execute();
    }

    public static function update(Agence $agence){
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE agence SET nomAgence=:nomagence,adresse=:adresseAgence,codePostal=:cpAgence,ville=:villeagence,restauration=:restauration WHERE idAgence = :idAgence");
        $requete->bindValue(":nomAgence", $agence->getNomAgence());
        $requete->bindValue(":adresseAgence", $agence->getAdresse());
        $requete->bindValue(":cpAgence", $agence->getCodePostal());
        $requete->bindValue(":villeAgence", $agence->getVille());
        $requete->bindValue(":restauration", $agence->getRestauration());
        $requete->bindValue(":idAgence", $agence->getIdAgence());
        $requete->execute();
    }

    public static function delete(Agence $agence){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM agence WHERE idAgence = " . $agence->getIdAgence());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM agence WHERE idAgence = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Agence($resultat);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeAgences=[];
        $requete = $db->query("SELECT * FROM agence");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeAgences[] = new Agence($donnees);
                }
            }
            return $listeAgences;
    }
}