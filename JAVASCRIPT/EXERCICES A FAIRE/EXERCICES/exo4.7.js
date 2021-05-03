var readline = require("readline-sync");
var age = parseInt(readline.question("Quel est votre age : "));
var permis = parseInt(readline.question("Depuis combien de temps avez-vous votre permis : "));
var accident = parseInt(readline.question("Combien avez-vous eu d'accidents : "));
var fidelite = parseInt(readline.question("Depuis combien temps etes vous assure chez nous : "));

//On déclare une variable niveau=0 / c'est cette variable qui va déterminer le niveau du contrat
var niveau = 0;

//on a 2 critères principaux qui font gagner des points chacun
if(age>25){
    niveau++;
}
if(permis >2){
    niveau++;
}

//Ici on gère les accidents /On enlève le nombre d'accident à niveau
niveau = niveau - accident;

//L'anciennete fait aussi gagner des points
if(niveau >=0 && fidelite >=1){
    niveau++;
}

//Ici en fonction de niveau, on peut déterminer le type de contrat

if(niveau <0){
    console.log("Refusé");
}else if(niveau == 0){
    console.log("Tarif rouge");
}else if(niveau == 1){
    console.log("Tarif orange");
}else if(niveau == 2){
    console.log("Tarif vert");
}else {
    console.log("Tarif bleu");
}