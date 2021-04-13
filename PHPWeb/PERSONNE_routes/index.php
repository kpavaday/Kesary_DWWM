<?php
function autoload($classe)
{
    
    if (file_exists("Php/Controller/" . $classe . ".class.php"))
    {
        require "Php/Controller/" . $classe . ".class.php";
    }

    if (file_exists("Php/Model/" . $classe . ".class.php"))
    {
        require "Php/Model/" . $classe . ".class.php";
    }
}
spl_autoload_register("autoload");

function AffichePage($tab){
    require "./PHP/MODEL/ListeDonnees.php";
    $titre = $tab["titre"];
    include "./PHP/VIEW/head.php";
    include "./PHP/VIEW/header.php";
    include $tab["chemin"].$tab["page"] . ".php";
    include "./PHP/VIEW/footer.php";
}

//$routes est tableau associatif
$routes = [
    "default" => ["chemin"=>"./PHP/VIEW/","page" => "ListeEmployes", "titre" => "Liste des employés"],

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



// echo '<div class="ligne"></div>';
// $compteur = 0;

// for ($i=0; $i <count($listePersonne) ; $i++) { 
//     echo '<div class="personne colonne">
//     <a href="detail.php?id='.$i.' ">
//     <div class="cache">'.$listePersonne[$i]->getIdPersonne().'</div>
//     <div class="nom"> '.$listePersonne[$i]->getNom().' '.$listePersonne[$i]->getPrenom().'</div></a>
//     </div>';
//     $compteur++;
//     if($compteur == 4){
//         echo '</div>';
//         echo '<div class="ligne">';
//     }
// }
// echo '</div>';

    