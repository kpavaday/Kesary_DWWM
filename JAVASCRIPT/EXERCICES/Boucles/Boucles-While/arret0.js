//On ne connait pas à l'avance le nombre que va saisir l'utilisateur

var maxi = 0;
var compteur = 0;

var readline = require("readline-sync");
var saisie = readline.question("Entrez un nombre: ");
compteur = compteur +1;
maxi = saisie;

// if(maxi < saisie){
//     maxi = saisie;
//     var position = compteur;
// }
while(saisie != 0){
    var readline = require("readline-sync");
    var saisie = readline.question("Entrez un nombre: ");
    compteur = compteur +1;
    if(maxi < saisie){
        maxi = saisie;
        console.log(maxi)
        var position = compteur;
        console.log(compteur);
    }
}
console.log("La valeur max est : " + maxi);
console.log("Sa position est : " + position);