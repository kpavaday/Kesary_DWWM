
//Changer la couleur du H1
var leTitre = document.querySelector('h1');
leTitre.addEventListener('click',function(){
    this.classList.toggle('red')

});

//Changer la couleur de tous les paragraphes en cliquant dessus
var paraf = document.querySelectorAll('p');
for(var i=0;i<paraf.length;i++){
    paraf[i].addEventListener('click', function(){
        for(var i=0;i<paraf.length;i++){
            if(paraf[i].style.color == "green"){
                paraf[i].style.color="yellow";
            }else{
                paraf[i].style.color='green';
            };}
    }
)};

