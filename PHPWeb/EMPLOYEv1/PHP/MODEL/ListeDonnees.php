<?php

// $a1 = new Agence(["Nom" => "tutu", "adresse" => "12 rue toto","restauration" => "restaurant d'entreprise" ,"codePostal" => "59520" , "ville" => "Lille"]);
// $a2 = new Agence(["Nom" => "toto", "adresse" => "154 rue tata","restauration" =>"ticket restaurant" ,"codePostal" => "62102", "ville" => "Lens"]);
// $a3 = new Agence(["Nom" => "tata", "adresse" => "132 rue tutu","restauration" =>"restaurant d'entreprise" ,"codePostal" => "52013", "ville" => "Marseille"]);
// $enfant[] = new Enfant(["Nom" => "Premier", "Prenom" => "Alcibiade", "Age" => 12]);
// $enfant[] = new Enfant(["Nom" => "Deuxième", "Prenom" => "Walbert", "Age" => 8]);
// $enfant[] = new Enfant(["Nom" => "Troisième", "Prenom" => "Maxanne", "Age" => 6]);
// $enfant[] = new Enfant(["Nom" => "Quatrième", "Prenom" => "Dianthe", "Age" => 5]);
// $enfant[] = new Enfant(["Nom" => "Cinquième", "Prenom" => "Quintilien", "Age" => 19]);
// $listeEmployes[] = new Employe(["id"=>1,"Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("01-12-2020"), "fonction" => "Eleveur de punaise", "salaireAnnuel" => "14", "Service" => "Nettoyage","agence"=>$a1,"enfants"=>[$enfant[1]]]);
// $listeEmployes[] = new Employe(["id"=>2,"Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "fonction" => "Gynecologue", "salaireAnnuel" => "40", "Service" => "Medecine","agence"=>$a2,"enfants"=>[$enfant[0]]]);
// $listeEmployes[] = new Employe(["id"=>3,"Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "fonction" => "Kebabiste", "salaireAnnuel" => "30", "Service" => "Restauration","agence"=>$a2,"enfants"=>[$enfant[2],$enfant[3]]]);
// $listeEmployes[] = new Employe(["id"=>4,"Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "fonction" => "Plaquiste", "salaireAnnuel" => "20", "Service" => "batiment","agence"=>$a1]);
// $listeEmployes[] = new Employe(["id"=>5,"Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "fonction" => "Homme de menage", "salaireAnnuel" => "50", "Service" => "Nettoyage","agence"=>$a3,"enfants"=>[$enfant[4]]]);

$listeAgence[] = new Agence(["nomAgence"=>"La Raie-Création","adresse"=>"12 Rue Perdue","codePostal"=>"75000","ville"=>"Paris","restauration"=>"Restaurant d'entreprise"]);
$listeAgence[] = new Agence(["nomAgence"=>"Hair'y Pott'Hair","adresse"=>"21 Rue Delasoif","codePostal"=>"33000","ville"=>"Bordeaux","restauration"=>"Tickets restaurants"]);

$listeEnfants[] = new Enfant(["nom"=>"Deloin","prenom"=>"Alain Fabien","age"=>8]);
$listeEnfants[] = new Enfant(["nom"=>"Deloin","prenom"=>"Tony","age"=>13]);
$listeEnfants[] = new Enfant(["nom"=>"Deray","prenom"=>"Gilles","age"=>15]);
$listeEnfants[] = new Enfant(["nom"=>"Leuze","prenom"=>"Sara","age"=>5]);
$listeEnfants[] = new Enfant(["nom"=>"Deuf","prenom"=>"Johnny","age"=>17]);

$listeEmploye[] = new Employe(["nom"=>"Deloin","prenom"=>"Alain","dateEmbauche"=>new DateTime("2018-11-15"),"fonction"=>"Technicien","salaire"=>"25000","service"=>"Commercial","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[0],$listeEnfants[1]]);
$listeEmploye[] = new Employe(["nom"=>"Neymar","prenom"=>"Jean","dateEmbauche"=>new DateTime("2010-05-20"),"fonction"=>"Commercial","salaire"=>"30000","service"=>"Commercial","agence"=>$listeAgence[1]]);
$listeEmploye[] = new Employe(["nom"=>"Deray","prenom"=>"Odile","dateEmbauche"=>new DateTime("2001-09-10"),"fonction"=>"Assistant comptable","salaire"=>"22000","service"=>"Comptabilité","agence"=>$listeAgence[1],"enfants"=>$listeEnfants[2]]);
$listeEmploye[] = new Employe(["nom"=>"Letparballes","prenom"=>"Gilles","dateEmbauche"=>new DateTime("2020-01-15"),"fonction"=>"Comptable","salaire"=>"28000","service"=>"Comptabilité","agence"=>$listeAgence[0]]);
$listeEmploye[] = new Employe(["nom"=>"Soulet","prenom"=>"Sama","dateEmbauche"=>new DateTime("2019-04-15"),"fonction"=>"Secretaire","salaire"=>"22000","service"=>"Commercial","agence"=>$listeAgence[0]]);
$listeEmploye[] = new Employe(["nom"=>"Duciel","prenom"=>"Sandra","dateEmbauche"=>new DateTime("2010-02-09"),"fonction"=>"Administratif","salaire"=>"25000","service"=>"Ressources Humaines","agence"=>$listeAgence[1]]);
$listeEmploye[] = new Employe(["nom"=>"Deuf","prenom"=>"John","dateEmbauche"=>new DateTime("2015-05-05"),"fonction"=>"Juriste","salaire"=>"27000","service"=>"Juridique","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[3]]);
$listeEmploye[] = new Employe(["nom"=>"Zarella","prenom"=>"Maude","dateEmbauche"=>new DateTime("2008-10-20"),"fonction"=>"Cuisinière","salaire"=>"21000","service"=>"Cantine","agence"=>$listeAgence[1]]);
$listeEmploye[] = new Employe(["nom"=>"Leuze","prenom"=>"Lara","dateEmbauche"=>new DateTime("2021-01-25"),"fonction"=>"Webmaster","salaire"=>"25000","service"=>"Informatique","agence"=>$listeAgence[0],"enfants"=>$listeEnfants[4]]);

 







//TRI
usort($listeEmployes, array("Employe", "compareToAgenceNomPrenom"));



