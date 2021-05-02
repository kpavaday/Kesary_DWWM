//Saisie d'un chiffre et vérification de sa valeur(si c'est un entier
var readline = require("readline-sync");
var saisie = parseInt(readline.question("Entrez un nombre : "));

var fin = false;
while(!fin){
    if(isNaN(saisie)){
        console.log("Veuillez recommencer, vous devez saisir un nomber");
        saisie = parseInt(readline.question("Entrez un nombre : "));
    }else{
        console.log("vous avez saisie le chiffre : " + saisie);
        fin = true;
    }
}

