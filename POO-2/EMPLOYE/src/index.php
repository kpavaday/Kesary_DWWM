<?php

function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

$employe = new Employe(["nom"=>"Deloin","prenom"=>"Alain","dateEmbauche"=>new DateTime("2018-11-15"),"fonction"=>"Technicien","salaire"=>"25000","service"=>"Commercial"]);
 echo $employe->toString();
 echo "\n";
 $employe->anciennete();

 //Calcul versement de la prime
/*if(date("d/m")=="11/03"){
    echo "coucou";
}*/