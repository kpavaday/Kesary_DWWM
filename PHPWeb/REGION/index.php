<?php
/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php"; // quand on vient de index.php
    }
    else if (file_exists("../CONTROLLER/" . $classe . ".Class.php"))
    {
        require "../CONTROLLER/" . $classe . ".Class.php"; // quand on vient du dossier VIEW
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {
        require "PHP/MODEL/" . $classe . ".Class.php"; // quand on vient de index.php
    }
    else if (file_exists("../MODEL/" . $classe . ".Class.php"))
    {
        require "../MODEL/" . $classe . ".Class.php"; // quand on vient du dossier VIEW

    }
}
spl_autoload_register("ChargerClasse");

/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include "PHP/VIEW/SelectDepartement.php";
    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    //include 'PHP/VIEW/Nav.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/footer.php';
}

//on active la connexion à la base de données
DbConnect::init();

/* création d'u tableau de redirection, en fonction du codePage, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VIEW/", "listeDepartements", "Liste des départements"],
    "listeRegions" => ["./PHP/VIEW/", "listeRegions", "Liste des régions"],
    "FormDepartement"=> ["./PHP/VIEW/", "FormDepartement", "Détail département"],
    "ActionDepartement" => ["./PHP/VIEW/", "ActionDepartement", "Mise à jour du département"],
    "FormRegion" => ["./PHP/VIEW/", "FormRegion", "Détail de la région"],
    "ActionRegion" => ["./PHP/VIEW/", "ActionRegion", "Mise à jour de la Region"],

];

if (isset($_GET["page"]))
{

    $codePage = $_GET["page"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}




















include "PHP/VIEW/head.php";
include "PHP/VIEW/header.php";
include "PHP/VIEW/listeRegions.php";
include "PHP/VIEW/listeDepartements.php";
include "PHP/VIEW/footer.php";


// include "PHP/MODEL/ListeRegions.php";
$routes = [
    "default" => ["chemin"=>"./PHP/VIEW/","page" => "listeRegions", "titre" => "Liste des employés"],

    /* employe*/
    "detail" => ["chemin"=>"./PHP/VIEW/","page" => "detail", "titre" => "Un employe "],
    "liste" => ["chemin"=>"./PHP/VIEW/","page" => "ListeEmployes", "titre" => "Liste des employés"],
    
    /* erreur */
    "404" => ["chemin"=>"./PHP/VIEW/","page" => "404", "titre" => "Erreur 404 "],

];

if (isset($_GET['page']))
{
    $codePage = $_GET['page'];
    if (isset($routes[$codePage]))
    {
        AfficherPage($routes[$codePage]);
    }
    else{
        AfficherPage($routes["404"]);
    }
}
else
{
    AfficherPage($routes["default"]);
}
