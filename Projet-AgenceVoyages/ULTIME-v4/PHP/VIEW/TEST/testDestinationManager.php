<?php

//Test class Destinations
$test = new Destinations(["ville" => "Test"]);
var_dump($test);
echo $test->toString();

//Test DestinationManager
destinationManager::add($test);
$test = destinationManager::findById(2);
echo $test->toString();

var_dump(destinationManager::getList());
$test->setVille("test");
destinationManager::update($test);
$test = destinationManager::findById(2);
echo $test->toString();
destinationManager::delete($test);
var_dump(destinationManager::getList());