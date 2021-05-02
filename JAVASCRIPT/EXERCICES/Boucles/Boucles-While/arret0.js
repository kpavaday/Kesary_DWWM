//On ne connait pas à l'avance le nombre que va saisir l'utilisateur

var maxi = 0;
var compteur = 0;

var readline = require("readline-sync");
var saisie = readline.question("Entrez un nombre: ");
var compteur = compteur +1;
var maxi = saisie;

while(saisie != 0){
    //var readline = require("readline-sync");
    var saisie = parseInt(readline.question("Entrez un nombre: "));
    compteur++;
    if(maxi < saisie){
        maxi = saisie;
        position = compteur;
    }
}

console.log("La valeur max est : " + maxi);
console.log("Sa position est : " + position);