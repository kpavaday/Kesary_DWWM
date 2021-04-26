<body class="colonne">
<header>

    <div><img src="./IMG/Logo_afpa.jpg" alt=""></div>
    <div class="titre"><?php echo $titre;?></div>
    <div class="colonne">
<?php

    if( isset($_SESSION['utilisateur']))
    {
        echo '<div>Bonjour '.$_SESSION['utilisateur']->getNom().'</div>';
        echo '<div><a href="index.php?codePage=deconnection">Déconnecter</a></div>';
    }
    else{
        echo '<a href="index.php?codePage=connection">Connecter</a>';
    }
?>

    </div>
</header>
<body>
    <nav class="navBar">
        <div class="image"><img src="img/logo_footer.png" alt=""></div>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Nos cours</a></li>
            <li><a href="#">Nous contacter</a></li>
        </ul>
    </nav>    
