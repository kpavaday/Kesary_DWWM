<?php
class Animal{

    /*****************Attributs***************** */
    private $_nom;
    private $_age;
    private $_position;

    /*****************Accesseurs***************** */
    public function getNom(){return $this->_nom;}
    public function getAge(){return $this->_age;}
    public function getPosition(){return $this->_position;}

    public function setNom($nom){$this->_nom = $nom;}
    public function setAge($age){$this->_age = $age;}
    public function setPosition($position){$this->_position = $position;}

    
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

        $affichage = "Nom animal : ". $this->getNom(). "\n";
        $affichage .= "Age : ". $this->getAge(). "\n";
        $affichage .= "Position : ". $this->getPosition(). "\n";
        return $affichage;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
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
     * Cette méthode renvoie un void
     * 
     * @return void
     */
    public function avancer(){
        
    }



}