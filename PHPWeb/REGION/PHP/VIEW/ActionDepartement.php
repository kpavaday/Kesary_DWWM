<?php

include 'head.php';
// var_dump($_POST);
$departement = new Departements($_POST);
switch ($_GET["mode"])
{
    case "ajout" : DepartementManager::add($departement);break;
    case "modif" : DepartementManager::update($departement);break;
    case "supression" : DepartementManager::delete($departement);break;
    
}

header("location:../../index.php");