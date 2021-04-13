<?php
include 'head.php';
include 'header.php';

$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $employe = EmployeManager::findById($idChoisi); // on recupere le client correspondant
}
?>
<form action="ActionEmploye.php?mode=<?=$mode?>" method="post">

<?php if ($mode!="ajout") echo '<input type="text" name="idEmploye" value="'. $employe->getIdEmploye().'"  hidden/> ';?>
 <div>
     <label for="nomEmploye">Nom : </label>
     <input name="nomEmploye" value="<?php if ($mode!="ajout") echo $employe->getNom() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>
 <div>
     <label for="prenomEmploye">Prenom : </label>
     <input name="prenomEmploye"  value="<?php if ($mode!="ajout") echo $employe->getPrenom() ?>"  
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="dateEmbauche">Date d'embauche : </label>
     <input name="dateEmbauche"  value="<?php if ($mode!="ajout") echo $employe->getDateEmbauche() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
 </div>
 <div>
     <label for="fonction">Fonction : </label>
     <input name="fonction"  value="<?php if ($mode!="ajout") echo $employe->getFonction() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="salaire">Salaire : </label>
     <input name="salaire"  value="<?php if ($mode!="ajout") echo $employe->getSalaire() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="serviceEmploye">Service : </label>
     <input name="serviceEmploye"  value="<?php if ($mode!="ajout") echo $employe->getService() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="nbreEnfants">Nombre d'enfants : </label>
     <input name="nbreEnfants"  value="<?php if ($mode!="ajout") echo $employe->getNbreEnfants() ?>" 
                     <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
 </div>
 <div>
     <label for="idAgence">Agence : </label>
     <input name="idAgence"  value="<?php if ($mode!="ajout") echo $employe->getIdAgence() ?>" 
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

