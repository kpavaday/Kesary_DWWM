<body class="colonne">
<header>
<div> 
        <?php    
        if (file_exists("IMG/Logo_Afpa.jpg"))
        {
            echo '<img src="IMG/Logo_Afpa.jpg" alt="logo afpa"></div>'; // quand on vient de index.php
        }
        else if (file_exists("../../IMG/Logo_Afpa.jpg"))
        {
            echo '<img src="../../IMG/Logo_Afpa.jpg" alt="logo afpa"></div>';  // quand on vient du dossier VIEW
        }
       
        ?>
<h1>Gestion des employés</h1>
</header>