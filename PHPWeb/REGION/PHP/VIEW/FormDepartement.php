<?php
include 'head.php';
include 'header.php';
$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $departement = DepartementManager::findById($idChoisi); // on recupere le client correspondant
}
?>
<form action="ActionDepartement.php?mode=<?=$mode?>" method="post">

   <?php if ($mode!="ajout") echo '<input type="text" name="idDepartement" value="'. $departement->getIdDepartement().'"  hidden/> ';?>

    <div>
        <label for="libelleDepartement">Département : </label>
        <input name="libelleDepartement" value="<?php if ($mode!="ajout") echo $departement->getLibelleDepartement() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
    </div>

    <div>
        <label for="numeroDepartement">Numéro du Département : </label>
        <input name="numeroDepartement"  value="<?php if ($mode!="ajout") echo $departement->getNumeroDepartement() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
    </div>

    <div>
        <label for="idRegion">La Région : </label>
        <input name="idRegion"  value="<?php if ($mode!="ajout") echo $departement->getIdRegion() ?>" 
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
    </div>

    
    <div class="btn"> -->
    <?php
    switch ($mode){
        case "ajout": echo' <button type="submit">Ajouter</button>'; break;
        case "modif": echo' <button type="submit">Modifier</button>'; break;
        case "supression": echo' <button type="submit">Supprimer</button>'; break;
    }
    echo '
     <button type="reset"><a href="../../index.php">Annuler</a></button>
     </div>
     </form>';
?>