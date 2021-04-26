<?php

//Test class Sejours
$test = new Sejours(["libelleSejour" => "Test"]);
var_dump($test);
echo $test->toString();

//Test sejourManager
sejourManager::add($test);
$test = sejourManager::findById(2);
echo $test->toString();

var_dump(sejourManager::getList());
$test->setLibelleSejour("test");
sejourManager::update($test);
$test = sejourManager::findById(2);
echo $test->toString();
sejourManager::delete($test);
var_dump(sejourManager::getList());