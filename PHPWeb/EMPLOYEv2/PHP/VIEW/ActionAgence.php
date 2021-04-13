<?php

include 'head.php';
// var_dump($_POST);
$agence = new Agence($_POST);
switch ($_GET["mode"])
{
    case "ajout" : AgenceManager::add($agence);break;
    case "modif" : AgenceManager::update($agence);break;
    case "supression" : AgenceManager::delete($agence);break;
    
}

header("location:../../index.php");