//Inverserles valeurs de 2 variables

var a=1;
var b=5;

console.log("-----------------Avant inversion-----------------");
console.log("A : " + a);
console.log("B : " + b);

var tmp = a;
a = b;
b = tmp;

console.log("-----------------Après inversion-----------------");
console.log("A : " + a);
console.log("B : " + b);
