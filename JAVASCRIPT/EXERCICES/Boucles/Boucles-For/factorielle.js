//Demande un nombre de départ et qui calcul sa factorielle

var readline = require("readline-sync");
var saisie = parseInt(readline.question("Entrez un nombre : "));
var factorielle = 1;

for(var i=1; i<=saisie;i++){
    factorielle = factorielle*i;
}
console.log("La factorielle de " + saisie + " est de : " + factorielle);