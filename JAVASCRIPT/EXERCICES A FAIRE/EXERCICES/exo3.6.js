var readline = require("readline-sync");
var age = parseInt(readline.question("Quelle est l'age de votre enfant : "));
while(isNaN(age)){
    console.log("Veuillez recommencez, entrez l'âge de votre enfant : ");
    age = parseInt(readline.question("Quelle est l'age de votre enfant : "));
}
if(age>=12){
    console.log("C'est un cadet");
}else if(age >=10){
    console.log("C'est un minime");
}else if (age >=8 ){
    console.log("C'est un pupille");
}else if(age >=6){
    console.log("C'est un poussin");
}