<?php

function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');
/**
 * Appel la fonction toString sur chaque élément du tableau
 *
 * @param [type] $tab tableau à afficher
 * @return void
 */
function afficheTableau($tab)
{
    for ($i=0; $i < count($tab); $i++) { 
        echo $tab[$i]->toString();
        echo "************************************************\n";
    }
}

//Liste des documents
$listeDoc[] = new Document (["titre"=>"Les Misérables","auteur"=>"Victor Hugo","emprunt"=>"Oui"]);
$listeDoc[] = new Document (["titre"=>"Le grand secret","auteur"=>"René Barjavel","emprunt"=>"Non"]);
$listeDoc[] = new Document (["titre"=>"1984","auteur"=>"Georges Owell","emprunt"=>"Oui"]);
afficheTableau($listeDoc); //Afficher la liste des documents