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
            echo $tab[$i]->anciennete();
            echo " \n";
            echo "*********************************************\n";
    }
    echo "*********************************************\n";
    echo "L'entreprise compte parmi ses effectifs : ".count($tab). " salariés";
}

 $listeEmploye[] = new Employe(["nom"=>"Deloin","prenom"=>"Alain","dateEmbauche"=>new DateTime("2018-11-15"),"fonction"=>"Technicien","salaire"=>"25000","service"=>"Commercial"]);
 $listeEmploye[] = new Employe(["nom"=>"Neymar","prenom"=>"Jean","dateEmbauche"=>new DateTime("2010-05-20"),"fonction"=>"Commercial","salaire"=>"30000","service"=>"Commercial"]);
 $listeEmploye[] = new Employe(["nom"=>"Deray","prenom"=>"Odile","dateEmbauche"=>new DateTime("2001-09-10"),"fonction"=>"Assistant comptable","salaire"=>"22000","service"=>"Comptabilité"]);
 $listeEmploye[] = new Employe(["nom"=>"Simon","prenom"=>"Jeremy","dateEmbauche"=>new DateTime("2020-01-15"),"fonction"=>"Comptable","salaire"=>"28000","service"=>"Comptabilité"]);
 $listeEmploye[] = new Employe(["nom"=>"Soulet","prenom"=>"Sama","dateEmbauche"=>new DateTime("2019-04-15"),"fonction"=>"Secretaire","salaire"=>"22000","service"=>"Commercial"]);

afficheTableau($listeEmploye);
//affichageAnciennete($listeEmploye);

//Affichage ancienneté
function affichageAnciennete($tab){
    for ($i=0; $i < count($tab); $i++) { 
        echo $tab[$i]->anciennete();
        echo "\n";
    }   
}


 