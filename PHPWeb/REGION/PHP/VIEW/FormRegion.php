<?php
include 'head.php';
include 'header.php';
$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $region = RegionManager::findById($idChoisi); // on recupere le client correspondant
}
?>
<form action="ActionRegion.php?mode=<?=$mode?>" method="post">

   <?php if ($mode!="ajout") echo '<input type="text" name="idRegion" value="'. $region->getIdRegion().'"  hidden/> ';?>

    <div>
        <label for="libelleRegion">Région : </label>
        <input name="libelleRegion" value="<?php if ($mode!="ajout") echo $region->getLibelleRegion() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
    </div>

    <div>
        <label for="numeroRegion">Nuémero de Région : </label>
        <input name="numeroRegion"  value="<?php if ($mode!="ajout") echo $region->getNumeroRegion() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
    </div>

    <div>
        <label for="nombreDepartement">Nombre de Département : </label>
        <input name="nombreDepartement"  value="<?php if ($mode!="ajout") echo $region->getNombreDepratement() ?>" 
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
    </div>
    
    <div class="btn">
    <?php
    switch ($mode)
    {
        case "ajout": echo' <button type="submit">Ajouter</button>'; break;
        case "modif": echo' <button type="submit">Modifier</button>'; break;
        case "supression": echo' <button type="submit">Supprimer</button>'; break;
    
    }
    echo '
    <button type="reset"><a href="../../index.php">Annuler</a></button>
    </div>
</form>';