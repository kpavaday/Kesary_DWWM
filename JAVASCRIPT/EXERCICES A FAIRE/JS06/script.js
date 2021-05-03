// document.getElementById('premier').style.color = 'green';
// //document.getElementById('titre').style.color = 'red'

// function changerCouleur(){
//     document.getElementById('titre').style.color = 'red';
// }
// function effacer(){
//     document.getElementById('titre').style.color = 'blueviolet';
// }

// function couleurRose(){
//     var attr = document.createAttribute("class");
//     attr.value = "classeCouleur";

//     var h = document.getElementsByTagName("H1")[0];
//     h.setAttributeNode(attr);
// }
// function couleurVert(){
//     var attr = document.createAttribute("class");
//     attr.value = "classeCouleur2";

//     var h = document.getElementsByTagName("H1")[0];
//     h.setAttributeNode(attr);
// }

// var x = document.getElementById("titre");

// x.addEventListener("click",changerCouleur);
// x.addEventListener("click",effacer);

var couleur1 = document.getElementById('titre');
var couleur2 = document.getElementById('titre');

couleur1.addEventListener('click',function(){
    couleur1.style.color='red';
});


couleur2.addEventListener('click',function(){
    couleur1.style.color='green';
});
