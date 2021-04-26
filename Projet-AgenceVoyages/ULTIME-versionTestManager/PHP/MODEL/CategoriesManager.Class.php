<?php

class CategoriesManager{
    public static function add(Categories $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Categories (libelleCategorie,typeSejours,imageCategorie) VALUES (:libelleCategorie,:typeSejours,:imageCategorie)");
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->bindValue(":typeSejours", $obj->getTypeSejours());
        $q->bindValue(":imageCategorie", $obj->getImageCategorie());
        $q->execute();
    }

    public static function update(Categories $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Categories SET libelleCategorie=:libelleCategorie, typeSejours=:typeSejours, imageCategorie=:imageCategorie WHERE idCategorie=:idCategorie");
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->bindValue(":typeSejours", $obj->getTypeSejours());
        $q->bindValue(":imageCategorie", $obj->getImageCategorie());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->execute();
    }

    public static function delete(Categories $obj){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Categories WHERE idCategorie=" . $obj->getIdCategorie());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Categories WHERE idCategorie=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Categories($results);
        }else{
            return false;
        }
    }

    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Categories");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Categories($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

}