<?php

function chargementClass($class){
    require('entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');
/**
 * Appel la fonction toString sur chaque élément du tableau
 *
 * @param [type] $tab tableau à afficher
 * @return void
 */
function afficheTableau($tab){
    for ($i=0; $i < count($tab); $i++) { 
        echo $tab[$i]->toString();
    }
    echo "************************************************\n";
}

$auteur1=new Auteur(["nom"=>"Hugo","prenom"=>"Victor","dateNaissance"=>new DateTime("1802-02-26"),"dateDeces"=>new DateTime("1885-05-22")]);
$auteur2=new Auteur(["nom"=>"Barjavel","prenom"=>"René","dateNaissance"=>new DateTime("1911-01-24"),"dateDeces"=>new DateTime("1985-11-25")]);
$auteur3=new Auteur(["nom"=>"Orwell","prenom"=>"Georges","dateNaissance"=>new DateTime("1903-06-25")]);


//Liste des documents
$listeDoc[] = new Document (["titre"=>"Les Misérables","auteur"=>$auteur1]);
$listeDoc[] = new Document (["titre"=>"Le grand secret","auteur"=>$auteur2]);
$listeDoc[] = new Document (["titre"=>"1984","auteur"=>$auteur3,""]);
$listeDoc1 = new Document (["titre"=>"Les Misérables","auteur"=>$auteur1]);
//afficheTableau($listeDoc); //Afficher la liste des document
$listeDoc[0]->setEmprunte(true); //Ici le livre est emprunté
//afficheTableau($listeDoc);

//echo "Le nom de l'auteur " .$listeDoc[1]->getAuteur(). " du";


//($listeDoc[1]->equalsTo($listeDoc[0])); 
afficheTableau($listeDoc);
echo "Le paramètre est un document identique à l'objet : ";
echo $listeDoc[1]->equalsTo($listeDoc[0])? "Oui \n" : "Non \n";

//Liste Liste
$listeLivre[] = new Livre(["titre"=>"Les Misérables","auteur"=>$auteur1,"nbPages"=>150]);
afficheTableau($listeLivre);

//liste vidéo
$listeVideo[] = new video(["titre"=>"Les Misérables","auteur"=>$auteur1,"sousTitre"=>"Oui"]);
afficheTableau($listeVideo);






