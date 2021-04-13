<?php

class Enfant{

    /*****************Attributs***************** */
    private $_idEnfant;
    private $_nom;
    private $_prenom;
    private $_age;
    private $_idEmploye;

    /*****************Accesseurs***************** */

    public function getIdEnfant(){return $this->_idEnfant;}
    public function getNom(){return $this->_nom;}
    public function getPrenom(){return $this->_prenom;}
    public function getAge(){return $this->_age;}
    public function getIdEmploye(){return $this->_idEmploye;}

    public function setNom($nom){$this->_nom = $nom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}
    public function setAge($age){$this->_age = $age;}
    public function setIdEnfant($idEnfant){$this->_idEnfant = $idEnfant;}
    public function setIdEmploye($idEmploye){$this->_idEmploye = $idEmploye;}

    /*****************Constructeur***************** */
    public function __construct(array $options = []){
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data){
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString(){
        return "Nom de l'enfant :" . $this->getNom() . "\nPrenom d'enfant :" . $this->getPrenom() . "\nAge :" . $this->getAge()."\n";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj){
        return true;
    }

    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return int
     */
    public static function compareTo($obj1, $obj2){
        return 0;
    }

    /**
     * Détermine le montant de cheque Noel auquel l'enfant à droit
     *
     * @return int montant du chèque
     */




}