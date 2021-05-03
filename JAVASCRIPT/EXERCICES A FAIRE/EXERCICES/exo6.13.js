var readline = require("readline-sync");
var tab = [];
var valeurMax = 0
var tailleTab = parseInt(readline.question("Entrez le nombre de valeur a mettre dans le tableau : "));

for(var i=1; i<=tailleTab;i++){
    var saisie = parseInt(readline.question("Entrez les valeurs du tableau : "));
    tab[i] = saisie;
    if(valeurMax <= saisie){
        valeurMax = saisie;
        var position = i;
    }

}
console.log(tab);
console.log("La valeur max est : " + valeurMax);
console.log("La valeur se trouve à la position : " + position);