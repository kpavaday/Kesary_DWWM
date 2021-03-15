<?php
function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

// function affichage($tab)
// {
//     for ($i=0; $i < count($tab); $i++) { 
//             echo $tab[$i]->toString();
//             echo " \n";
           
//     }
   
// }
echo "*************************************************\n";
echo "CRÉATION D'UN RECTANGLE \n";
$rectangle = new Rectangle(["longueur"=>2,"largeur"=>3]);
echo "Le RECTANGLE : \n";
$rectangle->AfficherRectangle(); //Affichage du rectangle
echo "*************************************************\n";
echo "CRÉATION D'UN TRIANGLE \n";
$triangle = new TriangleRectangle(["base"=>5,"hauteur"=>3]);
$triangle->AfficherTriangle();

echo "*************************************************\n";
echo "CRÉATION D'UN CERCLE \n";
$cercle = new Cercle(["diametre"=>4]);
$cercle->AfficherCercle();
echo "*************************************************\n";
echo "CRÉATION D'UN PAVE \n";
$pave = new Pave(["Largeur" => 10,"Longueur"=>5,"Hauteur"=>7]);
$pave->AfficherPave();
echo "*************************************************\n";
echo "CRÉATION D'UNE SPHERE \n";
$sphere = new Sphere(["Diametre" => 6]);
$sphere->AfficherSphere();
echo "*************************************************\n";
echo "CRÉATION D'UNE PYRAMIDE \n";
$pyramide = new Pyramide(["Base" => 10, "Hauteur" => 5, "Profondeur"=>7]);
$pyramide->AfficherPyramide();
echo "*************************************************\n";







// $listeRectangle[] = new Rectangle(["longueur"=>2,"largeur"=>3]);
// $listeRectangle[] = new Rectangle(["longueur"=>3,"largeur"=>4]);

// $listeTriangleRectangle[] = new TriangleRectangle(["base"=>5,"hauteur"=>3]);
// $listeTriangleRectangle[] = new TriangleRectangle(["base"=>5,"hauteur"=>4]);

// $listeCercle[] = new Cercle(["diametre"=>4]);
// $listeCercle[] = new Cercle(["diametre"=>6]);

// echo "RECTANGLE : \n";
// affichage($listeRectangle);
// echo "****************************************\n";
// echo "TRIANGLE RECTANGLE \n";
// affichage($listeTriangleRectangle);

// echo "****************************************\n";
// echo "CERCLE";
// affichage($listeCercle);


