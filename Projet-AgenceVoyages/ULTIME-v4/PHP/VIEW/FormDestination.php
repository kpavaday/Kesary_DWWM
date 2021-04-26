<?php

$mode = $_GET['mode'];
echo '<div class="demiPage colonne">';
echo '<div id="DivSousTitre" >';

//en fonction du mode, on modifie l'entet du form
echo '<form id="formulaire" method="post" action="index.php?codePage=actionDestination&mode='.$mode.'" enctype="multipart/form-data">';

switch ($mode)
{
    case "ajout":
            {
            echo '<h5>Ajouter une nouvelle destination</h5></div>';
            $disabled = "";
            $submit = '<div class="ligneDetail"><input type="submit" value="Ajouter" class=" crudBtn crudBtnEdit"/>';
            break;
        }
    case "edit":
            {
            echo '<h5>Editer une destination</h5></div>';
            $disabled = " disabled ";
            $submit = '';
            break;
        }
    case "modif":
            {
            echo '<h5>Modifier une destination</h5></div>';
            $disabled = "";
            $submit = '<div class="ligneDetail"><input type="submit" value="Modifier" class=" crudBtn crudBtnModif"/>';
            break;
        }
    case "delete":
            {
            echo '<h5>Supprimer une destination</h5></div>';
            $disabled = " disabled ";
            $submit = '<div class="ligneDetail"><input type="submit" value="Supprimer" class=" crudBtn crudBtnSuppr"/>';
            break;
        }
}


