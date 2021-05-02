var readline = require("readline-sync");

var tab =[3,5,10,12];
var saisie ="";

while(saisie !== "Q" && saisie !== "q"){
    menu();
    var saisie = readline.question("Quel est votre choix ? ");
    switch(saisie){
        case "a" :
        case "A" : ajouterChiffre();
        break;
        case "b" :
        case "B" : afficherTab();
        break;
        case "q" :
        case "Q" : console.log("A +");
        break;
        default : console.log("Je n'ai pas compris");
    }
}


function menu(){
    var txt ="";
    txt += "A/ Ajouter un chiffre \n";
    txt += "B/ Afficher le tableau \n";
    txt += "Q/ quitter";
    console.log(txt);
}
function ajouterChiffre(){
    var chiffre = parseInt(readline.question("Quel chiffre voulez-vous ajouter ? "));
    var positionToPush = getPosition(tab,chiffre);
    tab.splice(positionToPush,0,chiffre);
}

function getPosition(tableau,nombre){
    for(var i=0; i < tableau.length;i++){
        if(tableau[i] > nombre){
            return i;
        }
    }
    return tableau.length;
}
function afficherTab(){
    console.log(tab);
}