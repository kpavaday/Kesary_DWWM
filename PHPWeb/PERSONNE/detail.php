<?php
include "head.php";
include "header.php";
include "listePersonne.php";

$idRecherche = $_GET['id'];
$personne = $listePersonne[$idRecherche];
        echo '<div class="ligne">';
        echo '  <div class="personne colonne">
        <div class="nom"> ' . $personne->getNom() . ' ' . $personne->getPrenom() . '</div>
        <div class="age">' . $personne->getAge() . '</div>
        <div class="Fonction">' . $personne->getJob() . '</div>
       </div>';

        echo '</div>';
echo '<a href="index.php">Retour</a>';
