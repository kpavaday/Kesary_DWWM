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