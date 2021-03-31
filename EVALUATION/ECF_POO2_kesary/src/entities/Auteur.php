<?php
class Auteur extends Document{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_dateDeces;

    /*****************Accesseurs***************** */
    public function getNom(){return $this->_nom;}
    public function getPrenom(){return $this->_prenom;}
    public function getDateNaissance(){return $this->_dateNaissance;}
    public function getDateDeces(){return $this->_dateDeces;}

    public function setNom($nom){$this->_nom = $nom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}
    public function setDateNaissance($dateNaissance){$this->_dateNaissance = $dateNaissance;}
    public function setDateDeces($dateDeces){$this->_dateDeces = $dateDeces;}

    
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
        $affichage = parent::toString().  $this->getPrenom(). " ".$this->getNom(). "\n". "Date de naissance : ".$this->getDateNaissance()->format('Y-m-d') . "\ndate de décès :". $this->getDateDeces()->format('Y-m-d'). "\n";
        $affichage .= $this->estVivant()? "L'auteur est toujours en vie \n" : "L'auteur est décedé \n";
        return  $affichage;
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
    public static function compareTo($obj1, $obj2){
        if($obj1->getNom() == $obj2->getAuteur() && $obj1->getPrenom() == $obj2->getAuteur()){
            return 0;
        }
    }

     /**
     * Renvoi vrai si l'auteur est vivant
     *
     * @param [type] $obj
     * @return bool
     */
    public function estVivant(){
        if (!$this->getDateDeces()){
            return true;
        }
    }

    


    

    

    

    
}
    