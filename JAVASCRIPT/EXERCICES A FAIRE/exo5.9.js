var readline = require("readline-sync");
var montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
while(isNaN(montantAchats)){
    console.log("Veuillez recommencer, il faut saisir un montant : ");
    montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
}
while(montantAchats != 0){
    montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
}
var sommeDue = 0;
var billetDix = 0;
var billetCinq = 0;

