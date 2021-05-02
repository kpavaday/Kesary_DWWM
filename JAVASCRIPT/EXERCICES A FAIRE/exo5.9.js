var sommeDue = 0;
var billetDix = 0;
var billetCinq = 0;

var readline = require("readline-sync");
var montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
sommeDue = sommeDue + montantAchats;
while(isNaN(montantAchats)){
    console.log("Veuillez recommencer, il faut saisir un montant : ");
    montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
    sommeDue = sommeDue + montantAchats;
}
while(montantAchats != 0){
    montantAchats = parseFloat(readline.question("Entrez le montant de vos achats: "));
    sommeDue = sommeDue + montantAchats;
}
var paiement = parseFloat(readline.question("Vous devez " + sommeDue + " Euros :"));
var reste = paiement - sommeDue;
console.log("Nous vous devons : " + reste);
while(reste >= 10){
    billetDix = billetDix + 1;
    reste = reste - 10;
}
if(reste >=5){
    billetCinq =1;
    reste = reste - 5;
}
console.log("Voici votre monnaie :");
console.log("Nombre de billet de 10€ : " + billetDix);
console.log("Nombre de billet de 5€ :" + billetCinq);
console.log("Nombre de pièces de 1€ : "+ reste);
