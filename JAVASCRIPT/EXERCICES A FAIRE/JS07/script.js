
let btnAjout = document.querySelector('#ajout');
let suppression = document.querySelector('li');
// let btnSuppr = document.querySelector('#suppr');

//Ajouter un dessert
btnAjout.addEventListener('click',function(){
    var dessert = prompt("Entrez le dessert de votre choix");
    if(dessert != null){
        document.getElementById("ici").innerHTML = dessert ;
    }
});

//Supprimer un dessert
suppression.addEventListener('click', suppr);

    
function suppr(){
    var cible = document.getElementById("idDessert");
    cible.remove();
   
}



