<?php
$listeRegions = RegionManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormRegion.php?mode=ajout"> <button>Ajouter</button></a>';
  
if (count($listeRegions)>0)
{
    foreach ($listeRegions as $uneRegion){
        echo '<div> <div class = "region">' . $uneRegion->getLibelleRegion() .'</div>';
        echo '<div class="btn">
   <a href="PHP/VIEW/FormRegion.php?mode=detail&id=' . $uneRegion->getIdRegion() . '"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormRegion.php?mode=modif&id=' . $uneRegion->getIdRegion() . '"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormRegion.php?mode=supression&id=' . $uneRegion->getIdRegion() . '"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else{
    echo '<h1>Pas de Régions</h1>';
}

echo '</div>';