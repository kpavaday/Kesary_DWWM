<?php

$listeDepartements = DepartementManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormDepartement.php?mode=ajout"> <button>Ajouter</button></a>';
  
if (count($listeDepartements)>0){
    foreach ($listeDepartements as $unDepartement){
        echo '<div> <div class = "departement">' . $unDepartement->getLibelleDepartement() .'</div>';
        echo '<div class="btn">
        <a href="index.php?page=FormDepartement&mode=detail&id=' . $unDepartement->getIdDepartement() . '"> <button>Détail Formulaire</button></a>
        <div class="mini"></div>
        <a href="index.php?page=FormDepartement&mode=modif&id=' . $unDepartement->getIdDepartement() . '"> <button>Modifier</button></a>
        <div class="mini"></div>
        <a href="index.php?page=FormDepartement&mode=supression&id=' . $unDepartement->getIdDepartement() . '"> <button>Supprimer</button></a>
        </div></div>';
    }
}
else{
    echo '<h1>Pas de Départements</h1>';
}

echo '</div>';
