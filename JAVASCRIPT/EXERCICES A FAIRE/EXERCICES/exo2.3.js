var readline = require("readline-sync");

const TVA = 1.2; //TVA à 20%
var prixHT;
var TTC;
prixHT = parseFloat(readline.question("Entrez le prixHT : "));
console.log("Le prix hors taxe est : " + prixHT + "€");
TTC = prixHT * TVA;
var calculTva = TTC - prixHT;
console.log("On applique un TVA à 20% : " + calculTva + "€")
console.log("Le prix TTC est de : " + TTC + " €");