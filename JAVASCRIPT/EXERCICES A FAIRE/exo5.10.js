var readline = require("readline-sync");
var nbreChevauxPartant = parseInt(readline.question("Donnez le nombre de chevaux partants : "));
var nbreChevauxJoues = parseInt(readline.question("Donnez le nombre de chevaux joues : "));

var nfactorielle = 1;
var pfactorielle = 1;
var factorielleNmoinsP = 1;

//Calcul factorielle de n!
for(var i=1; i<=nbreChevauxPartant;i++){
    nfactorielle = nfactorielle * i;
}

//Calcul factorielle de p!
for(var i=1;i<=nbreChevauxJoues;i++){
    pfactorielle = pfactorielle * i;
}

//Calcul factorielle de (n-p)!
for(var i = 1; i<= nbreChevauxPartant - nbreChevauxJoues; i++){
    factorielleNmoinsP=factorielleNmoinsP * i;
}

//Calcul de X =n!/(n-p)! ET Y =n!/(p!*(n-p)!

var X = nfactorielle/factorielleNmoinsP;
var Y = nfactorielle/ pfactorielle * factorielleNmoinsP;

console.log("Dans l'ordre : 1 chance sur " + X + " de gagner");
console.log("Dans le désordre : 1 chance sur " + Y + " de gagner");



