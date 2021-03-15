<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

echo "Livre 1 :\n";
$titre = readline("Donnez le titre du livre : ");
$auteur = readline("Donnez le nom de l'auteur : ");
$prix = readline("Donnez le prix du livre : ");

$livre1 = new Livre(["titre"=>$titre,"auteur"=>$auteur,"prix"=>$prix]);
$livre1->afficher();