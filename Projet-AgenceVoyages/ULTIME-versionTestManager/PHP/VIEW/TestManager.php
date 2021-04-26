<?php
/*Test classe Categorie*/

// $categorie = new Categories(["libelleCategorie"=>"Week-ends","typeSejours"=>"Circuits","imageCategorie"=>"image.jpg"]);
// var_dump($categorie);
// echo $categorie->toString();

//CategoriesManager::add($categorie);
$categorie=CategoriesManager::findById(3);
echo $categorie->toString();

var_dump(CategoriesManager::getList());