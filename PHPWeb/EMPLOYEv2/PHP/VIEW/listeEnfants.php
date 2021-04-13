<?php
$listeEnfants = EnfantsManager::getList();

echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormClient.php?mode=ajout"> <button>Ajouter</button></a>';
  
if (count($listeEnfants)>0)
{
    foreach ($listeEnfants as $unenfant)
    {
        echo '<div> <div class = "client">' . $unEnfant->getNom() . ' ' . $unClient->getPrenomClient() . '</div>';
        echo '<div class="btn">
   <a href="PHP/VIEW/FormClient.php?mode=detail&id=' . $unClient->getIdClient() . '"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormClient.php?mode=modif&id=' . $unClient->getIdClient() . '"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormClient.php?mode=supression&id=' . $unClient->getIdClient() . '"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else
{
    echo '<h1>Pas de Clients</h1>';
}

echo '</div>';