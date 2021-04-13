<?php

include 'head.php';
// var_dump($_POST);
$employe = new employe($_POST);
switch ($_GET["mode"])
{
    case "ajout" : EmployeManager::add($employe);break;
    case "modif" : EmployeManager::update($employe);break;
    case "supression" : EmployeManager::delete($employe);break;
    
}

header("location:../../index.php");