<?php

class Personne{

    private $_idPersonne;
    private $_nom;
    private $_prenom;
    private $_age;
    private $_job;

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }
    
    //Getters et Setters
    public function getIdPersonne(){return $this->_idPersonne;}
    public function getNom(){return $this->_nom;}
    public function getPrenom(){return $this->_prenom;}
    public function getAge(){return $this->_age;}
    public function getJob(){return $this->_job;}

    public function setIdPersonne($idPersonne){$this->_idPersonne = $idPersonne;}
    public function setNom($nom){$this->_nom = $nom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}
    public function setAge($age){$this->_age = $age;}
    public function setJob($job){$this->_job = $job;}
}

/*****************Autres Méthodes***************** */

?>

