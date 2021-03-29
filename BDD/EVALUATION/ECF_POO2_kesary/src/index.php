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
//$listeDoc[] = new Document (["titre"=>"Les Misérables","auteur"=>"Victor Hugo","emprunt"=>"Oui"]);
//$listeDoc[] = new Document (["titre"=>"Le grand secret","auteur"=>"René Barjavel","emprunt"=>"Non"]);
//$listeDoc[] = new Document (["titre"=>"1984","auteur"=>"Georges Owell","emprunt"=>"Oui"]);
//afficheTableau($listeDoc); //Afficher la liste des documents
//$listeDoc[0]->afficherDoc();

//Liste des auteurs
$listeauteur[] = new Auteur (["titre"=>"Les Misérables","nom"=>"Hugo","prenom"=>"Victor","dateNaissance"=>"1800-01-25","dateDeces"=>"1855/01/26","emprunt"=>"Oui"]);
$listeauteur[] = new Auteur (["titre"=>"Le grand secret","nom"=>"Barjavel","prenom"=>"René","dateNaissance"=>"1800-01-25","dateDeces"=>"","emprunt"=>"Non"]);
$listeauteur[] = new Auteur (["titre"=>"1984","nom"=>"Owell","prenom"=>"Georges","dateNaissance"=>"1800-01-25","dateDeces"=>"1855/01/26","emprunt"=>"Oui"]);
afficheTableau($listeauteur);

//Vérification que 2 documents sont égaux
usort($listeauteur,array("Auteur","compareTo"));

