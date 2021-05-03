var readline = require("readline-sync");
var tabNotes = [];
sommeNotes = 0;
for(var i=1;i<=3;i++){
    var saisie = parseFloat(readline.question("Entrez les notes "));
    while(isNaN(saisie) || saisie <0){
        saisie = parseFloat(readline.question("Saisie incorrect, veuillez recommencer :"));
    }
    tabNotes[i] = saisie;
    sommeNotes = sommeNotes + saisie;
}
var moyenne = sommeNotes/3;
console.log("Voici le tableau des notes : " + tabNotes);
console.log("La moyenne des notes est : " + moyenne);


