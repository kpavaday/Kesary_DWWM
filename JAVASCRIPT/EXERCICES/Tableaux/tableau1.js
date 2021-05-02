var tab =[2,6,10,3,8,7,20];
var resultat = 0;

for(var i=0; i<tab.length;i++){
    if(tab[i] % 2 === 0){
        resultat += tab[i];
        console.log("itération : " + i + " : " + resultat);
    }else{
        console.log("iteration : " + i + " : n'est pas paire");
    }
}
console.log("Le total est de : " + resultat);