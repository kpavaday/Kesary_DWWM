<?php
$listeEnfants = EnfantsManager::getList();

echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormEnfant.php?mode=ajout"> <button>Ajouter</button></a>';
  
if (count($listeEnfants)>0)
{
    foreach ($listeEnfants as $unEnfant)
    {
        echo '<div> <div class = "enfant">' . $unEnfant->getNom(). ' ' . $unEnfant->getPrenom() . '</div>';
        echo '<div class="btn">
   <a href="PHP/VIEW/FormEnfant.php?mode=detail&id=' . $unEnfant->getIdEnfant() . '"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormEnfant.php?mode=modif&id=' . $unEnfant->getIdEnfant() . '"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormEnfant.php?mode=supression&id=' . $unEnfant->getIdEnfant() . '"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else
{
    echo '<h1>Pas de Clients</h1>';
}

echo '</div>';