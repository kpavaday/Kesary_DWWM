<?php

class Document{

    /*****************Attributs***************** */
    private $_auteur;
    private $_titre;
    private $_emprunte = false;

    /*****************Accesseurs***************** */
    public function getAuteur(){return $this->_auteur;}
    public function getTitre(){return $this->_titre;}
    public function getEmprunte(){return $this->_emprunte;}

    public function setAuteur(Auteur $auteur){$this->_auteur = $auteur;} //Ici va mettre un objet de la classe Auteur
    public function setTitre($titre){$this->_titre = $titre;}
    public function setEmprunte(bool $emprunte){$this->_emprunte = $emprunte;}


    
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
        $affichage = "Document : \n";
        $affichage .= "Titre : ". $this->getTitre(). "\n";
        //$affichage .= "Disponibilité : ". $this->getEmprunt(). "\n";
        $affichage .= "Auteur : \n". $this->getAuteur()->toString()."\n" ;
        $affichage .= $this->getEmprunte()? "Le document est emprunté \n": "Le document n'est pas emprunté \n";
        //$affichage .= "Le nom de l'auteur est le même que le titre : ". $this->equalsTo($this->getAuteur())? "Oui \n" : "Non \n";
        return $affichage;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj){

        return (($obj->getTitre() == $this->getTitre()) && ($obj->getAuteur() == $this->getAuteur()));
       
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
     * Permet de marquer comme emprunté ou non un document
     *retourne true si le doc est emprunté false sinon
     * 
     * @return bool
     */
    public function estEmprunte(){
        return $this->getEmprunte();
    }

    

    
    

    
}