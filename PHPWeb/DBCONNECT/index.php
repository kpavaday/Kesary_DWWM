<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=rpg;port=3306','root','');

    //Ajout d'une option PDO pour gérer les exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $erreur){
    echo 'Erreur : '. $erreur->getMessage() . '<br/>';
    echo 'N° : ' . $erreur->getMessage();
    die('Fin du script');

}

echo "Vous êtes bien connecté à la base de données";

$requete = "SELECT * FROM `personnage`";
$resultat = $db->query($requete);
$personnage = $resultat->fetch(PDO::FETCH_ASSOC);
$resultat->closeCursor();
echo $personnage->nom;
?>

</body>
</html>
