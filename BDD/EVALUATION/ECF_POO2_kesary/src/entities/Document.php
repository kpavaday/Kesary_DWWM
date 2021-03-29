<?php
class Document{

    /*****************Attributs***************** */
    private $_titre;
    private $_auteur;
    private $_emprunt;

    /*****************Accesseurs***************** */
    public function getTitre(){return $this->_titre;}
    public function getAuteur(){return $this->_auteur;}
    public function getEmprunt(){return $this->_emprunt;}

    public function setTitre($titre){$this->_titre = $titre;}
    public function setAuteur($auteur){$this->_auteur = $auteur;}
    public function setEmprunt($emprunt){$this->_emprunt = $emprunt;}

    
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
        $affichage .= "Disponibilité : ". $this->getEmprunt(). "\n";
        $affichage .= "Auteur : ". $this->getAuteur() ;
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
        if($obj->getTitre() == $this->getAuteur())
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
     * Affiche les propriétés du document
     * Méthode qui va chercher toString()
     *
     * @return void
     */
    public function afficherDoc(){
        echo $this->toString();
    }



 

    

   

}    