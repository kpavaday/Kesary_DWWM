//Mettre un nombre à la puissance X entré par l'utilisateur
var readline = require("readline-sync");
const PUISSANCE = 2;
var saisie = parseInt(readline.question("Entrez la puissance :"));
console.log(PUISSANCE +" à la puissance " + saisie + " = " + Math.pow(PUISSANCE, saisie));