console.log("**********************************************");
console.log("******Voici les résultats des élections*******");
console.log("**********************************************");
console.log("");

var readline = require("readline-sync");
var score1 = parseFloat(readline.question("Entrez le score obtenu par le candidate 1 : "));
var score2 = parseFloat(readline.question("Entrez le score obtenu par le candidate 2 : "));
var score3 = parseFloat(readline.question("Entrez le score obtenu par le candidate 3 : "));
var score4 = parseFloat(readline.question("Entrez le score obtenu par le candidate 4 : "));
var scoreMax = Math.max(score1,score2,score3,score4);

if(score1 > 50){
    console.log("Elu au premier tour");
}else if(scoreMax == score1 && score1 > 12.5){
    console.log("Ballotage favorable");
}else if(score1 < 12.5){
    console.log("Ne participe pas au second tour");    
}else{
    console.log("Ballotage défavorable");
}
