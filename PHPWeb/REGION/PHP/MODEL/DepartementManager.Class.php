<?php
class DepartementManager{

    public static function add(Departements $departement){
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO departements( numeroDepartement, libelleDepartement, idRegion) VALUES (:numeroDepartement,:libelleDepartement,:idRegion)");
        $requete->bindValue(":numeroDepartement", $departement->getNumeroDepartement());
        $requete->bindValue(":libelleDepartement", $departement->getLibelleDepartement());
        $requete->bindValue(":idRegion", $departement->getIdRegion());
        $res = $requete->execute();
    }

    public static function update(Departements $departement){
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE departements SET numeroDepartement=:numeroDepartement,libelleDepartement=:libelleDepartement,idRegion=:idRegion WHERE idDepartemnt = :idDepartement");
        $requete->bindValue(":numeroDepartement", $departement->getNumeroDepartement());
        $requete->bindValue(":libelleDepartement", $departement->getLibelleDepartement());
        $requete->bindValue(":idRegion", $departement->getIdRegion());
        $requete->bindValue(":idDepartement", $cl->getIdDepartement());
        $requete->execute();
    }

    public static function delete(Departements $departement){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM departements WHERE idDepartement = " . $departement->getIdDepartement());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM departements WHERE idDepartement = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false){
            return new Departements($resultat);
        }else{
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeDepartements=[];
        $requete = $db->query("SELECT * FROM departements");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)){
                if ($donnees != false){
                    $listeDepartements[] = new Departements($donnees);
                }
            }
            return $listeDepartements;
    }
}