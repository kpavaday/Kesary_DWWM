<?php

$listeDep = DepartementManager::getList();
$idDep = 1;

echo'

<form action="index.php?codePage=actionSelect" method="POST">
<select name="idDepartement" >';

foreach ($listeDep as $unDepartement) {
    $sel="";
    if($unDepartement->getIdDepartement() == $idDep){
        $sel = "selected";
    }
    echo '<option value="'.$unDepartement->getIdDepartement().'" '.$sel.' >'.$unDepartement->getLibelleDepartement(). '</option>';
}
echo '
</select>
<button type="submit">Valider</button>
</form>';
