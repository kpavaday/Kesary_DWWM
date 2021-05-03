var readline = require("readline-sync");
var personnage ={};
personnage.nom = readline.question("Quel est votre nom ? ");
personnage.age = readline.question("Quel est votre age ? ");

personnage.carac ={
    force :7,
    intel : 8,
    agi : 5
}



console.log(personnage);