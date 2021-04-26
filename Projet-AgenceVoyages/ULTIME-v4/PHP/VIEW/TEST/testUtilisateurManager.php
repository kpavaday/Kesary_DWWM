<?php

//Test class Utilisateurs
$test = new Utilisateurs(["nomUtilisateur" => "Tata"]);
var_dump($test);
echo $test->toString();

//Test utilisateurManager
utilisateurManager::add($test);
$test = utilisateurManager::findById(2);
echo $test->toString();

var_dump(utilisateurManager::getList());
$test->setNomUtilisateur("test");
utilisateurManager::update($test);
$test = utilisateurManager::findById(2);
echo $test->toString();
utilisateurManager::delete($test);
var_dump(utilisateurManager::getList());