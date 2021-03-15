<?php

class Rectangle{

/*****************Attributs***************** */
private $_longueur;
private $_largeur;

/*****************Accesseurs***************** */


public function getLongueur(){return $this->_longueur;}
public function getLargeur(){return $this->_largeur;}

public function setLongueur($longueur){$this->_longueur = $longueur;}
public function setLargeur($largeur){$this->_largeur = $largeur;}

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
 
        $affichage = "Rectangle de largeur : ". $this->getLargeur(). " cm et de longueur : ". $this->getLongueur(). " cm\n";
        $affichage .= "Le périmètre est : ". $this->perimetreRec() ." cm\n";
        $affichage .= "L'aire du rectangle est ". $this->aireRec() . " cm²\n";
        $affichage .= $this->estCarre()? "Il s'agit d'un carré \n" : "Il ne s'agit pas d'un carré\n";

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

    public function perimetreRec(){
        
        return ($this->getLongueur()*$this->getLargeur()) * 2;
    }

     /**
     * Calcul aire d'un rectangle
     *
     * @return float
     */

    public function aireRec(){
        return $this->getLargeur() * $this->getLongueur();   
    }

    /**
     * Vérification pour savoir si le rectangle est un carré
     *
     * @return bool
     */

    public function estCarre(){
        return ($this->getLargeur() == $this->getLongueur()) {    
        }

    
    
    public functio AfficherRectangle(){
        echo $this->toString();
    }
    }

        















}
