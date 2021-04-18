<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion Utilisateurs</title>
</head>
<body>
    <header class="enTete">
        <div class="container">
            <div class="espaceHor"></div>
            <div class="titre">
               <div class="logo"> 
                   <?php
                           if (file_exists("IMG/Logo_Afpa.png")){
                               echo '<img src="IMG/Logo_Afpa.png" alt="logo afpa" ;></div>'; // quand on vient de index.php
                           }
                           else if (file_exists("../../IMG/Logo_Afpa.png")){
                               echo '<img src="../../IMG/Logo_Afpa.png" alt="logo afpa"></div>';  // quand on vient du dossier VIEW       
                             }
                   ?>
                <div class="leTitre"><h1>Gestion Base Produits</h1></div>
            </div>
            <div class="espaceHor"></div>
            <div class="espaceHor"></div>
        </div>
        <div class="sideBar">
            <div class="mini"></div>
            <div class="gauche">
                <div class="data">id</div>
                <div class="data">nom</div>
                <div class="data">prénom</div>
            </div>
            <div class="droite">
                <div class="actions">actions</div>
            </div>
            <div class="mini"></div>
        </div>
    </header>  
</body>
</html>