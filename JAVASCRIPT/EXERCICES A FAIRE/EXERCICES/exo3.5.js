var readline = require("readline-sync");
nombre1 = parseInt(readline.question("Entrez le premier nombre : "));
while(isNaN(nombre1)){
    console.log("Veuillez recommencez, entrez le nombre 1 : ");
    nombre1 = parseInt(readline.question("Entrez le premier nombre : "));
}
nombre2 = parseInt(readline.question("Entrez le deuxième nombre : "));
while(isNaN(nombre2)){
    console.log("Veuillez recommencez, entrez le nombre 2 : ");
    nombre2 = parseInt(readline.question("Entrez le premier nombre : "));
}
console.log("Le nombre 1 est : " + nombre1);
console.log("Le nombre 2 est : " + nombre2);


if((nombre1<0 && nombre2>0 ) || (nombre1>0 && nombre2<0)){
    console.log("Le produit est négatif");
}else if(nombre1 == 0 || nombre2 == 0){
    console.log("Le produit est nul"); 
}else{
    console.log("Le produit est positif");
}

