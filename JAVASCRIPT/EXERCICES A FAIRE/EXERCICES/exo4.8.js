var readline = require("readline-sync");
var jour = parseInt(readline.question("Entrez le jour :  "));
var mois = parseInt(readline.question("Entrez le mois  : "));
var annee = parseInt(readline.question("Entrez l'annee : "));

if(mois >=1 && mois<=12){
    if(jour<=31 && (mois==1 || mois ==3  || mois ==5  || mois ==7 || mois ==8 || mois ==10 || mois == 12)){
        console.log("La date est valide ");
    }else if(jour<=30 && (mois ==4 || mois == 6 || mois ==9 || mois ==11)){
        console.log("La date est valide");
    }else if(jour<=28 && mois == 2){
        console.log("La date est valide");
    }else if(jour == 29 && mois ==2){
        if(annee%4 ==0 && annee%100 !=0){
            console.log("La date est valide ");
        }else if(annee%400==0){
            console.log("La date est valide");
        }else{
            console.log("Date invalide");
        }
    }else{
        console.log("Date invalide");
    }
}