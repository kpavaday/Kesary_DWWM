<?php
include 'head.php';
include 'header.php';
$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $enfant = EnfantsManager::findById($idChoisi); // on recupere le client correspondant
}
?>

<form action="ActionEnfant.php?mode=<?=$mode?>" method="post">

<?php if ($mode!="ajout") echo '<input type="text" name="idEmploye" value="'. $enfant->getIdEnfant().'"  hidden/> ';?>
 <div>
     <label for="nomEnfant">Nom : </label>
     <input name="nomEnfant" value="<?php if ($mode!="ajout") echo $enfant->getNom() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>
 <div>
     <label for="prenomEnfant">Prénom : </label>
     <input name="prenomEnfant"  value="<?php if ($mode!="ajout") echo $enfant->getPrenom() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="ageEnfant">Age : </label>
     <input name="ageEnfant"  value="<?php if ($mode!="ajout") echo $enfant->getAge() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>
 <div>
     <label for="idEmploye">Parents : </label>
     <input name="idEmploye"  value="<?php if ($mode!="ajout") echo $enfant->getIdEmploye() ?>" 
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