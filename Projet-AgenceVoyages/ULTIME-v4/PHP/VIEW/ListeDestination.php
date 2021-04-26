<?php
$liste = DestinationManager::getList();
?>
<div class="demiPage colonne">
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?codePage=formDestination&mode=ajout'>Ajouter </a>
    </div>
    <div id="crudTableau">
        <table>
            <thead >
                <th class="crudColonne">Libellé</th>
            </thead>
            <?php foreach ($liste as $elt)
                    {
                        echo '<tr>';
                        echo '<td class="crudColonne">' . $elt->getLibelleDestination() . '</td>';
            ?>
            <td>
                <a class=" crudBtn crudBtnEdit"
                    href='index.php?codePage=formDestination&mode=edit&id=<?php echo $elt->getIdDestination(); ?>'>Afficher </a>
                <a class=" crudBtn crudBtnModif"
                    href='index.php?codePage=formDestination&mode=modif&id=<?php echo $elt->getIdDestination(); ?>'>Modifier</a>
                <a class=" crudBtn crudBtnSuppr"
                    href='index.php?codePage=formDestination&mode=delete&id=<?php echo $elt->getIdDestination(); ?>'>Supprimer</a></td>
            </tr>
            <?php }?>

        </table>
    </div>
</div>