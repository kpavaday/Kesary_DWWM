//Demande à l'utilisateur un chiffre et affiche la table de multiplication de 1 à 10
//Saisie clavier
var readline = require("readline-sync");
var saisie = parseInt(readline.question("Quelle table de multiplication voulez-vous afficher : "));

for(var i=1; i<=10;i++){
    var resultat = saisie * i;
    console.log(saisie + " * " + i + " = " + resultat);
}
