<?php

$listeEmployes = EmployeManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormClient.php?mode=ajout"> <button>Ajouter</button></a>';

if(count($listeEmployes)> 0){
    foreach ($listeEmployes as $unEmploye) {
        echo '<div> <div class = "employe">' . $unEmploye->getNom() . ' ' . $unEmploye->getPrenom() . '</div>';
        echo '<div class="btn">
        <a href="PHP/VIEW/FormClient.php?mode=detail&id=' . $unEmploye->getIdEmploye() . '"> <button>Détail Formulaire</button></a>
        <div class="mini"></div>
        <a href="PHP/VIEW/FormClient.php?mode=modif&id=' . $unEmploye->getIdEmploye() . '"> <button>Modifier</button></a>
        <div class="mini"></div>
        <a href="PHP/VIEW/FormClient.php?mode=supression&id=' . $unEmploye->getIdEmploye() . '"> <button>Supprimer</button></a>
        </div></div>';
    }
}else {
    echo '<h1>Pas d\'Employés</h1>';
}
echo '</div>';