var readline = require("readline-sync");
var saisie = parseInt(readline.question("Entrez un nombre : "));
while(isNaN(saisie)){
    console.log("Veuillez recommencer, il faut saisir un entier");
    saisie = parseInt(readline.question("Entrez un nombre : "));
}
var factorielle = 1;

for(var i=1; i<=saisie;i++){
    var factorielle = factorielle*i;
}
console.log("La factorielle de " + saisie + " est de : " + factorielle);