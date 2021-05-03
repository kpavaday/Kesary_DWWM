var readline = require("readline-sync");
var tailleTab = 0;
var tab = [];
var valeursNegatives = 0;
var valeursPositives = 0;
tailleTab = parseInt(readline.question("Entrez le nombre de valeur a mettre dans le tableau : "));

for(var i=0; i<tailleTab;i++){
    var saisie = parseInt(readline.question("Entrez les valeurs du tableau : "));
    tab[i] = saisie +1;
    if(tab[i] < 0){
        valeursNegatives++;
    }else{
        valeursPositives++;
    }
}
console.log("Voici le tableau : ");
console.log(tab);
console.log("Le nombre de valeurs positives : " + valeursPositives);
console.log("Le nombre de valeurs négatives : " + valeursNegatives);
