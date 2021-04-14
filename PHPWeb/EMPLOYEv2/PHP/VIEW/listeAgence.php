<?php

$listeAgences = AgenceManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormAgence.php?mode=ajout"> <button>Ajouter</button></a>';

if (count($listeAgences)>0){
    foreach ($listeAgences as $uneAgence){
        echo '<div> <div class = "agence">' . $uneAgence->getNomAgence() .  '</div>';
        echo '<div class="btn">
   <a href="PHP/VIEW/FormAgence.php?mode=detail&id=' . $uneAgence->getIdAgence() . '"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormAgence.php?mode=modif&id=' . $uneAgence->getIdAgence() . '"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormAgence.php?mode=supression&id=' . $uneAgence->getIdAgence() . '"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else
{
    echo '<h1>Pas d\'Agence</h1>';
}

echo '</div>';


