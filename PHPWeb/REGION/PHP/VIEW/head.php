<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    //Si le titre est indiqué, on l'affiche entre les balises <title>
    echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">   
</head>

