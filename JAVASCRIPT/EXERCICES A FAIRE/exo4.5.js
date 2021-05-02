var readline = require("readline-sync");
var age = parseInt(readline.question("Quelle est votre age : "));
var sexe = readline.question("Etes vous un homme ou une femme? F ou H : ");
console.log(sexe.toUpperCase());
if((sexe.toUpperCase() == "H" && age>=20) || (sexe.toUpperCase() == "F" && age >=18 && age<=35)){
    console.log("Vous payez des impots");
}else{
    console.log("Vous ne payez pas d'impots");
}