<?php

function autoload($classe){
    if (file_exists("Php/Controller/" . $classe . ".class.php")){
        require "Php/Controller/" . $classe . ".class.php";
    }
    if (file_exists("Php/Model/" . $classe . ".class.php")){
        require "Php/Model/" . $classe . ".class.php";
    }
}
spl_autoload_register("autoload");

function AfficherPage($tab){
    require "./PHP/MODEL/ListeDonnees.php";
    $titre = $tab["titre"];
    // include "./PHP/VIEW/head.php";
    // include "./PHP/VIEW/header.php";
    include $tab["chemin"].$tab["page"] . ".php";
//     include "./PHP/VIEW/footer.php";
}

/**
 * Appel la fonction toString sur chaque élément du tableau
 *
 * @param [type] $tab tableau à afficher
 * @return void
 */




// $listeAgence[] = new Agence(["nomAgence"=>"La Raie-Création","adresse"=>"12 Rue Perdue","codePostal"=>"75000","ville"=>"Paris","restauration"=>"Restaurant d'entreprise"]);
// $listeAgence[] = new Agence(["nomAgence"=>"Hair'y Pott'Hair","adresse"=>"21 Rue Delasoif","codePostal"=>"33000","ville"=>"Bordeaux","restauration"=>"Tickets restaurants"]);

//Création d'agence et affectation après la création de l'employé
// $agence1 = new Agence(["nomAgence"=>"Pita Pan","adresse"=>"22 Rue Derrière l'église","codePostal"=>"62000","ville"=>"Calais","restauration"=>"Restaurant d'entreprise"]);
// $listeAgence[] = $agence1;

// $listeEnfants[] = new Enfant(["nom"=>"Deloin","prenom"=>"Alain Fabien","age"=>8]);
// $listeEnfants[] = new Enfant(["nom"=>"Deloin","prenom"=>"Tony","age"=>13]);
// $listeEnfants[] = new Enfant(["nom"=>"Deray","prenom"=>"Gilles","age"=>15]);
// $listeEnfants[] = new Enfant(["nom"=>"Leuze","prenom"=>"Sara","age"=>5]);
// $listeEnfants[] = new Enfant(["nom"=>"Deuf","prenom"=>"Johnny","age"=>17]);



// $listeEmploye[] = new Employe(["nom"=>"Deloin","prenom"=>"Alain","dateEmbauche"=>new DateTime("2018-11-15"),"fonction"=>"Technicien","salaire"=>"25000","service"=>"Commercial","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[0],$listeEnfants[1]]);
// $listeEmploye[] = new Employe(["nom"=>"Neymar","prenom"=>"Jean","dateEmbauche"=>new DateTime("2010-05-20"),"fonction"=>"Commercial","salaire"=>"30000","service"=>"Commercial","agence"=>$listeAgence[1]]);
// $listeEmploye[] = new Employe(["nom"=>"Deray","prenom"=>"Odile","dateEmbauche"=>new DateTime("2001-09-10"),"fonction"=>"Assistant comptable","salaire"=>"22000","service"=>"Comptabilité","agence"=>$listeAgence[1],"enfants"=>$listeEnfants[2]]);
// $listeEmploye[] = new Employe(["nom"=>"Letparballes","prenom"=>"Gilles","dateEmbauche"=>new DateTime("2020-01-15"),"fonction"=>"Comptable","salaire"=>"28000","service"=>"Comptabilité","agence"=>$listeAgence[0]]);
// $listeEmploye[] = new Employe(["nom"=>"Soulet","prenom"=>"Sama","dateEmbauche"=>new DateTime("2019-04-15"),"fonction"=>"Secretaire","salaire"=>"22000","service"=>"Commercial","agence"=>$listeAgence[0]]);
// $listeEmploye[] = new Employe(["nom"=>"Duciel","prenom"=>"Sandra","dateEmbauche"=>new DateTime("2010-02-09"),"fonction"=>"Administratif","salaire"=>"25000","service"=>"Ressources Humaines","agence"=>$listeAgence[1]]);
// $listeEmploye[] = new Employe(["nom"=>"Deuf","prenom"=>"John","dateEmbauche"=>new DateTime("2015-05-05"),"fonction"=>"Juriste","salaire"=>"27000","service"=>"Juridique","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[3]]);
// $listeEmploye[] = new Employe(["nom"=>"Zarella","prenom"=>"Maude","dateEmbauche"=>new DateTime("2008-10-20"),"fonction"=>"Cuisinière","salaire"=>"21000","service"=>"Cantine","agence"=>$listeAgence[1]]);
// $listeEmploye[] = new Employe(["nom"=>"Leuze","prenom"=>"Lara","dateEmbauche"=>new DateTime("2021-01-25"),"fonction"=>"Webmaster","salaire"=>"25000","service"=>"Informatique","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[4]]);

 








 