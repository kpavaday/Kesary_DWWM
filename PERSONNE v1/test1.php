<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');



$listePersonne[] = new Personne(["nom"=>"Deloin","prenom"=>"Alain","age"=>45,"job"=>"Acteur"]);
$listePersonne[] = new Personne(["nom"=>"Neymar","prenom"=>"Jean","age"=>30,"job"=>"Footballeur"]);
$listePersonne[]= new Personne(["nom"=>"Zarella","prenom"=>"Maude","age"=>25,"job"=>"Fromagère"]);
$listePersonne[] = new Personne(["nom"=>"Deray","prenom"=>"Odile","age"=>30,"job"=>"Dentiste"]);

function affichage($tab)
{
    for ($i=0; $i < count($tab); $i++) { 
            echo $tab[$i]->toString();
           echo " \n";
          
    }

  
}
affichage($listePersonne);

?>