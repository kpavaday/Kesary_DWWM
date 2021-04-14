<?php
class RegionManager{

    public static function add(Regions $region){
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO regions( libelleRegion, numeroRegion, nombreDepartement) VALUES (:nlibelleRegion,:numeroRegion,:nombreDepartement)");
        $requete->bindValue(":libelleRegion", $region->getLibelleRegion());
        $requete->bindValue(":numeroRegion", $region->getNumeroRegion());
        $requete->bindValue(":nombreDepartement", $region->getNombreDepratement());
        $res = $requete->execute();
    }

    public static function update(Regions $region)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE regions SET libelleRegion=:libelleRegion,numeroRegion=:numeroRegion,nombreDepartement=:nombreDepartement WHERE idRegion = :idRegion");
        $requete->bindValue(":libelleRegion", $region->getLibelleRegion());
        $requete->bindValue(":numeroRegion", $region->getNumeroRegion());
        $requete->bindValue(":nombreDepartement", $region->getNombreDepratement());
        $requete->bindValue(":idRegion", $region->getIdRegion());
        $requete->execute();
    }

    public static function delete(Regions $region)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM regions WHERE idRegion = " . $region->getIdRegion());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM regions WHERE idRegion = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Regions($resultat);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeRegions=[];
        $requete = $db->query("SELECT * FROM regions");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeRegions[] = new Regions($donnees);
                }
            }
            return $listeRegions;
    }

}