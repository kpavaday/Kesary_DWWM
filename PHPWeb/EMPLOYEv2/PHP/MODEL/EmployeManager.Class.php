<?php

class EmployeManager{

    public static function add(Employe $employe)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO employe( nomEmploye, PrenomEmploye,dateEmbauche,fonction,salaire,serviceEmploye,nbreEnfants) VALUES (:nom,:prenom,:dateEntree,:fonction,:salaire,:serviceEmploye,:nbreEnfants)");
        $requete->bindValue(":nom", $employe->getNom());
        $requete->bindValue(":prenom", $employe->getPrenom());
        $requete->bindValue(":dateEntree", $employe->getDateEmbauche());
        $requete->bindValue(":fonction", $employe->getFonction());
        $requete->bindValue(":salaire",$employe->getSalaire());
        $requete->bindValue(":serviceEmploye",$employe->getService());
        $requete->bindValue(":nbreEnfants",$employe->getNbreEnfants());
        $res = $requete->execute();
    }

    public static function update(Employe $employe){
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE employe SET nomemploye=:nom,PrenomEmploye=:prenom,dateEmbauche=:dateEntree,fonction=:fonction,salaire=:salaire,serviceEmploye=:serviceEmploye,nbreEnfants=:nbreEnfants WHERE idEmploye = :idEmploye");
        $requete->bindValue(":nom", $employe->getNom());
        $requete->bindValue(":prenom", $employe->getPrenom());
        $requete->bindValue(":dateEntree", $employe->getDateEmbauche());
        $requete->bindValue(":fonction", $employe->getFonction());
        $requete->bindValue(":salaire",$employe->getSalaire());
        $requete->bindValue(":serviceEmploye",$employe->getService());
        $requete->bindValue(":nbreEnfants",$employe->getNbreEnfants());
        $requete->bindValue(":idEmploye",$employe->getIdEmploye());
        $requete->execute();
    }

    public static function delete(Employe $employe){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM employe WHERE idEmploye = " . $employe->getIdEmploye());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM employe WHERE idEmploye = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Employe($resultat);
        }
        else
        {
            return false;
        }
    }

    public static function getList(){
        $db = DbConnect::getDb();
        $listeEmployes=[];
        $requete = $db->query("SELECT * FROM employe");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeEmployes[] = new Employe($donnees);
                }
            }
            return $listeEmployes;
    }
}