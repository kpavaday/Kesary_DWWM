var readline = require("readline-sync");
var saisie = parseInt(readline.question("Entrez un nombre : "));

while(isNaN(saisie)){
    console.log("Veuillez recommencer, vous devez saisir un nomber");
    saisie = parseInt(readline.question("Entrez un nombre : "));
}
var carre = saisie * saisie;
console.log("Le carré est : " + carre);

