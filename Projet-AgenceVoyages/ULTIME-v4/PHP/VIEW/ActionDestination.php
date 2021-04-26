<?php
$erreur =false;
// var_dump($_POST);
$destination = new Destinations($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutDestination":
        {
            DestinationManager::add($destination);
            break;
        }
    case "modifDestination":
        {
            DestinationManager::update($destination);
            break;
        }
    case "delDestination":
        {
           $listeSejours= SejourManager::getListByDestination($destination->getIdDestination());
           /**** Technique informative */
        //    if (count($listeProduit)>0)
        //    {
        //        echo 'Il reste des produits';
        //        $erreur=true;
               
        //    }
        //    else{
        //     CategoriesManager::delete($p);
        //    }

           /**** Technique de suppression en cascade */
            foreach ($listeSejours as $unSejours)
            {
                SejourManager::delete($unSejours);
            }
            DestinationManager::delete($destination);
            break;
        }
}

if (!$erreur){  // si pas d'erreur
    header("location:index.php?codePage=listeDestination");   //redirection directe
}
else{
    header( "refresh:3;url=index.php?codePage=listeDestination" );    // on attend 3 secondes avant la redirection
}