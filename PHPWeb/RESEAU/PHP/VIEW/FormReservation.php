<?php
$listereservation=ReserverManager::getList();
?>
<h1>
    Reservation
</h1>
    <form action="index.php?page=actionReservModel" method="POST">
        <div>
            <label for="marque">Marque</label>
            <select name="marqueVoiture" id="marque">
                <?php $listeVoiture=VoitureManager::getList();
                foreach ($listeVoiture as $marque ) {
                    echo "<option value=".$marque->getMarqueVoiture().">".$marque->getMarqueVoiture()."</option>";
                }?>
            </select>
            <button type="submit">Validé</button>
            <!-- <input type="text" name="marque" require/> -->
        </div>
    </form>

<a href="?page=PageUser" class=" crudBtn crudBtnRetour">Retour</a>