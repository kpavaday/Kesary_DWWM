<?php
$listeRole=RoleManager::getList();
?>
<!-- <h3>Inscription</h3> -->
    <!-- <form action="index.php?page=actionInscription" method="POST">
        <div>
            <label for="prenomUser">Prenom</label>
            <input type="text" name="prenomUser" require/>
        </div>
        <div>
            <label for="nomUser">Nom</label>
            <input type="text" name="nomUser" require/>
        </div>
        <div>
            <label for="mailUser">Adresse Mail</label>
            <input type="text" name="mailUser" require/>
        </div>
        <div>
            <label for="numTel">Numero de Telephone</label>
            <input type="text" name="numTel" require/>
        </div>
        <div>
            <input hidden type="text" name="idRole" value="2" required />
        </div>
        <div>
            <label for="password">Mot De Passe</label>
            <input type="password" name="password" required />
        </div>
        <div>
            <label for="confirmation">Confirmation du mot de passe</label>
            <input type="password" name="confirmation" required />
        </div>
        <div>
            <button type="submit">Validé</button>
        </div>
    </form> -->

<a href="?page=Accueil" class=" crudBtn crudBtnRetour">Retour</a>

<div class="titre">
    <div class="mini"></div>
        <div class="conten1 colonne">
        <div class="espaceHor"></div> 
            <h1>LocAFPA</h1>
            <h2>Location de voiture</h2>
            <div class="espaceHor"></div> 
            <div class="espaceHor"></div> 
            <div class="espaceHor"></div>
            <div class="louer"><p>Veuillez vous inscrire :</p></div>
            <div class="espaceHor"></div>


            <form class="formulaireInscription" action="index.php?page=actionInscription" method="POST">
        <div>
            <label for="prenomUser">Prenom</label>
            <input class="prenomInput" type="text" name="prenomUser" require/>
        </div>
        <div class="espaceHor"></div>
        <div>
            <label for="nomUser">Nom</label>
            <input class="nomInput" type="text" name="nomUser" require/>
        </div>
        <div class="espaceHor"></div>
        <div>
            <label class="labelAdrMail" for="mailUser">Adresse Mail</label>
            <input class="adrMailInput" type="text" name="mailUser" require/>
        </div>
        <div class="espaceHor"></div>
        <div>
            <label class="labelNumTel" for="numTel">Numero de Telephone</label>
            <input class="inputNumTel" type="text" name="numTel" require/>
        </div>
        <div class="espaceHor"></div>
        <div>
            <input hidden type="text" name="idRole" value="2" required />
        </div>
        <div>
            <label for="password">Mot De Passe</label>
            <input type="password" name="password" required />
        </div>
        <div class="espaceHor"></div>
        <div>
            <label for="confirmation">Confirmation du mot de passe</label>
            <input type="password" name="confirmation" required />
        </div>
        <div class="espaceHor"></div>
        <div>
            <button type="submit">Validé</button>
        </div>
    </form>



               
        </div>
        <div class="mini"></div>
</div>