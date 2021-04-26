<?php

class AvoirManager{

    public static function add(Avoir $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Avoir (idRole,idUtilisateur) VALUES (:idRole,:idUtilisateur)");
        $q->bindValue(":idRole", $obj->getIdRole());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function update(Avoir $obj){
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Avoir SET idRole=:idRole, idUtilisateur=:idUtilisateur WHERE idRole=:idRole");
        $q->bindValue(":idRole", $obj->getIdRole());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function delete(Avoir $obj){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Avoir WHERE idRole=" . $obj->getIdRole());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Avoir WHERE idRole=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Avoir($results);
        }else{
            return false;
        }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Disques");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Avoir($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

    public static function getListByRole($idRole){
        $idLabel=(int) $idRole;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Avoir where idRole=$idRole");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Avoir($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

    public static function getListByUtilisateur($idUtilisateur){
        $idLabel=(int) $idUtilisateur;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Avoir where idUtilisateur=$idUtilisateur");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Avoir($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }


}