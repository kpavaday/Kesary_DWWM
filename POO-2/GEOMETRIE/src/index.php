<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

function affichage($tab)
{
    for ($i=0; $i < count($tab); $i++) { 
            echo $tab[$i]->toString();
            echo " \n";
           
    }
   
}


$listeRectangle[] = new Rectangle(["longueur"=>2,"largeur"=>3]);
$listeRectangle[] = new Rectangle(["longueur"=>3,"largeur"=>4]);

$listeTriangleRectangle[] = new TriangleRectangle(["base"=>5,"hauteur"=>3]);
$listeTriangleRectangle[] = new TriangleRectangle(["base"=>5,"hauteur"=>4]);

$listeCercle[] = new Cercle(["diametre"=>4]);
$listeCercle[] = new Cercle(["diametre"=>6]);

echo "RECTANGLE : \n";
affichage($listeRectangle);
echo "****************************************\n";
echo "TRIANGLE RECTANGLE \n";
affichage($listeTriangleRectangle);

echo "****************************************\n";
echo "CERCLE";
affichage($listeCercle);


