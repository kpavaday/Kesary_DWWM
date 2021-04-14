<?php

include 'Head.php';
// var_dump($_POST);
$region = new Regions($_POST);
switch ($_GET["mode"])
{
    case "ajout" : RegionManager::add($region);break;
    case "modif" : RegionManager::update($region);break;
    case "supression" : RegionManager::delete($region);break;
    
}

header("location:../../index.php");