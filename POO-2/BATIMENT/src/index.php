<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

//$batimentA = new Batiment(["nom"=>"A","adresse"=>"12, Rue Perdue","codePostal"=>"59140","ville"=>"Dunkerque"]);
echo "Les bâtiments : \n";
//$batimentA->AfficherBatiment();
$maisonA = new Maison(["nom"=>"Résidence : Les Lilas","adresse"=>"12, Rue Perdue","codePostal"=>"59140","ville"=>"Dunkerque","nbPieces"=>4]);
$maisonB = new Maison(["nom"=>"Résidence : Pascal Triat","adresse"=>"6, Rue de la Course","codePostal"=>"33000","ville"=>"Bordeaux","nbPieces"=>2]);
$maisonA->AfficherMaison();
$maisonB->AfficherMaison();