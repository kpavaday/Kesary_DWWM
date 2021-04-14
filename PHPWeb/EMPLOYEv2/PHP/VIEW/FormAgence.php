<?php
include 'head.php';
include 'header.php';

$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $agence = AgenceManager::findById($idChoisi); // on recupere le client correspondant
}
?>
<form action="ActionAgence.php?mode=<?=$mode?>" method="post">

<?php if ($mode!="ajout") echo '<input type="text" name="idAgence" value="'. $agence->getIdAgence().'"  hidden/> ';?>
 <div>
     <label for="nomAgence">Agence : </label>
     <input name="nomAgence" value="<?php if ($mode!="ajout") echo $agence->getNomAgence() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>

 <div>
     <label for="adresseAgence">Adresse : </label>
     <input name="adresseAgence"  value="<?php if ($mode!="ajout") echo $agence->getAdresse() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>

 <div>
     <label for="cpAgence">Code postal : </label>
     <input name="cpAgence"  value="<?php if ($mode!="ajout") echo $agence->getCodePostal() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>

 <div>
     <label for="villeAgence">Ville : </label>
     <input name="villeAgence"  value="<?php if ($mode!="ajout") echo $agence->getVille() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>

 <div>
     <label for="restauration">Restauration : </label>
     <input name="restauration"  value="<?php if ($mode!="ajout") echo $agence->getRestauration() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
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