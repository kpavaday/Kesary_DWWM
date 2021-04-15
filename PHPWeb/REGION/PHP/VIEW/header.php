<body class="colonne">
    <header>
        <div>
        <?php    
        if (file_exists("IMG/Logo_Afpa.png"))
        {
            echo '<img src="IMG/Logo_Afpa.png" alt="logo afpa"></div>'; // quand on vient de index.php
        }
        else if (file_exists("../../IMG/Logo_Afpa.png"))
        {
            echo '<img src="../../IMG/Logo_Afpa.png" alt="logo afpa"></div>';  // quand on vient du dossier VIEW
        }
       
        ?>
        <div class="titre">Régions & Département</div>
        <div></div>
    </header>