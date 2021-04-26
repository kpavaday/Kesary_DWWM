<?php

class RolesManager{

    public static function add(Roles $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Roles (libelleRole) VALUES (:libelleRole)");
        $q->bindValue(":libelleRole", $obj->getLibelleRole());
        $q->execute();
    }

    public static function update(Roles $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Roles SET libelleRole=:libelleRole WHERE idRole=:idRole");
        $q->bindValue(":libelleRole", $obj->getLibelleRole());
        $q->bindValue(":idRole", $obj->getIdRole());
        $q->execute();
    }

    public static function delete(Roles $obj){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Roles WHERE idRole=" . $obj->getIdRole());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Roles WHERE idRole=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Roles($results);
        }else{
            return false;
        }
    } 

    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Roles");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Roles($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }


}
