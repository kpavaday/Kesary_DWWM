<?php
var_dump($_POST);
var_dump($_FILES);
$p = new Produits($_POST);
$leNom = uniqid('prod_') . '.'.explode("/",$_FILES['image']['type'])[1];
move_uploaded_file($_FILES['image']['tmp_name'],"IMG/".$leNom);
$p->setImage("IMG/".$leNom);
// var_dump($p);
// $prod.new Produits($_POST);
switch ($_GET['mode']) {
    case "ajout":
        {
            ProduitsManager::add($p);
            break;
        }
    case "modif":
        {
            
            ProduitsManager::update($p);
            break;
        }
    case "delete":
        {
            
            ProduitsManager::delete($p);
            break;
        }
}

//header("location:index.php?codePage=listeProduit");