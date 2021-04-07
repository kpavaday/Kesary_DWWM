<?php

class Personne{
    protected $_nom;
    protected $_prenom;
    protected $_age;
    protected $_job;

    public function __construct($nom, $prenom,$age,$job){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setJob($job);
    }
    
    //Getters et Setters
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_age;
    }
    public function getJob(){
        return $this->_job;
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setAge($age){
        $this->_age = $age;
    }
    public function setJob($job){
        $this->_job = $job;
    }
}