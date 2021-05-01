//Saisie clavier
var readline = require("readline-sync");
var nom = readline.question("Quel est votre nom : ");
var prenom = readline.question("Quel est votre prénom : ");
var age = parseInt(readline.question("Quel est votre age : "));

//Première version
// console.log("----------------------------------");
// console.log("------------BIENVENUE-------------");
// console.log("----------------------------------");
// console.log("Votre nom est : " + nom);
// console.log("Votre prénom est : " + prenom);
// console.log("Vous avez  : " + age + "ans");

//Deuxième version
var txt = "----------------------------------\n";
txt += "------------BIENVENUE-------------\n";
txt += "----------------------------------\n";

txt += "Votre nom est : " + nom +"\n";
txt += "Votre prenom est : " + prenom + "\n";
txt += "Vous avez  : " + age + " ans";
console.log(txt);


