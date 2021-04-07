</body>

<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');


$listePersonne[] = new Personne(["nom"=>"Letparballes","prenom"=>"Gilles","age"=>45,"job"=>"Policier"]);
$listePersonne[] = new Personne(["nom"=>"Soulet","prenom"=>"Sama","age"=>30,"job"=>"Journaliste"]);
$listePersonne[]= new Personne(["nom"=>"Duciel","prenom"=>"Sandra","age"=>25,"job"=>"SisterAct"]);
$listePersonne[] = new Personne(["nom"=>"Deuf","prenom"=>"John","age"=>30,"job"=>"Cuisiner"]);

include "head.php";
include "header.php";
include "main.php";



/*function affichage($tab)
{
    for ($i=0; $i < count($tab); $i++) { 
       echo '<div class="classePersonne">';
            echo $tab[$i]->toString();  
        echo '</div>';     
    }
}
affichage($listePersonne);*/

for ($i=0; $i < count($listePersonne); $i++) { 
    echo '<div class="classePersonne">';
         echo $listePersonne[$i]->toString();  
     echo '</div>';   
}  
include "footer.php";
?>
