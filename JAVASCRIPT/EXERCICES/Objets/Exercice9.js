//Creation de l'objet voiture
var voiture ={
    immatriculation: "ABC123",
    marque: "Toyota",
    annee : 2002,
    //On va créer un objet d'objet
    caracteristiques :{
        nbKm : 20000,
        couleur : "bleu",
        puissance : 7
    }
}

//Affichage voiture
console.log(`La voiture d'immatriculation ${voiture.immatriculation},
de marque ${voiture.marque}, date de ${voiture.annee},
nombre de kilometres : ${voiture.caracteristiques.nbKm},
couleur : ${voiture.caracteristiques.couleur}
`);