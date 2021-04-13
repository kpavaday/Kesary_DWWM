<?php

include 'head.php';
// var_dump($_POST);
$enfant = new Enfant($_POST);
switch ($_GET["mode"])
{
    case "ajout" : EnfantsManager::add($enfant);break;
    case "modif" : EnfantsManager::update($enfant);break;
    case "supression" : EnfantsManager::delete($enfant);break;
    
}

header("location:../../index.php");