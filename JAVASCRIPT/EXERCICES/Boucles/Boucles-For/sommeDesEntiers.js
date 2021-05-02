//Demande un nombre et qui calcule la somme des entiers jusqu'à ce nombre

var readline = require("readline-sync");
var saisie = parseInt(readline.question("Entrez un nombre : "));
var resultat = 0;

for(var i=0;i<=saisie;i++){
    resultat = resultat+i;
    console.log(resultat);
}
console.log("La somme des entiers est : " + resultat);