<?php
include "head.php";
include "header.php";
include "listePersonne.php";

echo '<div class="ligne"></div>';
$compteur = 0;

for ($i=0; $i <count($listePersonne) ; $i++) { 
    echo '<div class="personne colonne">
    <a href="detail.php?id='.$i.' ">
    <div class="cache">'.$listePersonne[$i]->getIdPersonne().'</div>
    <div class="nom"> '.$listePersonne[$i]->getNom().' '.$listePersonne[$i]->getPrenom().'</div></a>
    </div>';
    $compteur++;
    if($compteur == 4){
        echo '</div>';
        echo '<div class="ligne">';
    }
}
echo '</div>';

    