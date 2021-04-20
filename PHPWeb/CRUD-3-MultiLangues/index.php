<?php
function afficherPage($page){
    $chemin= $page[0];
    $nom=$page[1];
    $titre=$page[2];
    include "PHP/VIEW/Head.php";
    include "PHP/VIEW/Header.php";
    include "PHP/VIEW/ListeClients.php";
//  include $chemin.$nom.".php";
 include "PHP/VIEW/Footer.php";    
}
// include "PHP/VIEW/Head.php";
// include "PHP/VIEW/Header.php";
// include "PHP/VIEW/ListeClients.php";
// include "PHP/VIEW/Footer.php";

/******************Gestion des Langues**********************/
// on recupere la langue de l'URL
if (isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}

//on prend la langue de la session sinon FR par défaut
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';

/**
 * fonction qui ramène le texte dans la bonne langue
 */
function texte($codetexte)
{
    global $lang; //on appel la variable globale
    return TexteManager::findByCodes($lang, $codetexte);
}

/************************ FIN GESTION DES LANGUES ******************/

/* création d'u tableau de redirection, en fonction du codePage, on choisit la page à afficher */
$routes = [
     "default" => ["PHP/VIEW/", "Accueil", "Accueil"],

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