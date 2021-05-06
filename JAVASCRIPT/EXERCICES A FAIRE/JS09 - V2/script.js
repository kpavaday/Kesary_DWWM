var carre = document.getElementById('carre');
var haut = document.getElementById('top');
var bas = document.getElementById('bottom');
var gauche = document.getElementById('left');
var droite = document.getElementById('right');

//des boutons sur la page HTML
haut.addEventListener('click', function(){
    seDeplacer(0, -5);
});

bas.addEventListener('click',function(){
    seDeplacer(0,5);
});

gauche.addEventListener('click',function(){
    seDeplacer(-5, 0);
});

droite.addEventListener('click',function(){
    seDeplacer(5, 0);
});

//Déplacement avec les flèches du clavier 
window.addEventListener("keydown",function(event){      
        switch (event.key){
            case 'ArrowUp':
                //-Top
                seDeplacer(0, -5);
                          
                break;
            case 'ArrowDown':
                //-Bottom
                seDeplacer(0,5);
                    
                break;
            case 'ArrowLeft':
                //-Left
                seDeplacer(-5, 0);
                break;
            case 'ArrowRight':
                //-Right
                seDeplacer(5, 0);
                // alert("VersLaDroite");
                break;
            default:
                break;
        }

})

//Gestion de la souris
var flag = false; 
var moveX, moveY;

//initialisation position de départ du carré et de la souris
carre.addEventListener('mousedown',function(event){
    flag = true;
    moveX = parseInt(window.getComputedStyle(carre).left) - parseInt(event.clientX);
    moveY = parseInt(window.getComputedStyle(carre).top) - parseInt(event.clientY);

});

//Quand la souris bouge
carre.addEventListener('mousemove',function(event){
    if(flag){
        carre.style.left = parseInt(event.clientX) + moveX + 'px'; 
        carre.style.top = parseInt(event.clientY) + moveY + 'px';
    }
})

//la souris s'arrête, on lève le doigt
carre.addEventListener('mouseup',function(){
    flag = false;
})




//fonction permettanrt de se déplacer au clavier et écran
function seDeplacer(dirLeft, dirTop){
    //je récupère le style css du carre
    var styleCarre = window.getComputedStyle(carre);

    //ici on recupère les positions courantes
    var positionTop = styleCarre.top;
    var positionLeft = styleCarre.left;

    //modifs des positions
    carre.style.top = parseInt(positionTop) + dirTop + 'px';
    carre.style.left = parseInt(positionLeft) +dirLeft + 'px';
}