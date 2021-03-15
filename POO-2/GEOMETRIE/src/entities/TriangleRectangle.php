<?php

class TriangleRectangle{

    /*****************Attributs***************** */
    private $_base;
    private $_hauteur;

    /*****************Accesseurs***************** */

    public function getBase(){return $this->_base;}
    public function getHauteur(){return $this->_hauteur;}

    public function setBase($base){$this->_base = $base;}
    public function setHauteur($hauteur){$this->_hauteur = $hauteur;}

    /*****************Constructeur***************** */

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

/*****************Autres Méthodes***************** */
 /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString(){
 
        $affichage = "TraingleRectangle de hauteur : ". $this->getHauteur(). " cm et la base : ". $this->getBase(). " cm\n";
        $affichage .= "Le périmètre est : ". $this->perimetreTriRec() . " cm\n";
        $affichage .= "L'aire du  triangle rectangle est ". $this->aireTriRec() . " cm²\n";
            return $affichage;
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
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    /**
     * Calcul le périmètre d'un rectangle
     *
     * @return float
     */

    public function perimetreTriRec(){

        return  $this->getBase() + $this->getHauteur() + (sqrt($this->getBase()*$this->getBase()+ $this->getHauteur()*$this->getHauteur()));
         
    }

    /**
     * Calcul aire d'un Triangle rectangle
     *
     * @return float
     */

    public function aireTriRec(){
        return ($this->getBase() * $this->getHauteur()) / 2;
    }

    







    
}