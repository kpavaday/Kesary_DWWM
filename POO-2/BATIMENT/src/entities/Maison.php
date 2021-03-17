<?php
class Maison extends Batiment{
    /*****************Attributs***************** */
    private $_nbPieces;

    /*****************Accesseurs***************** */
    public function getNbPieces(){return $this->_nbPieces;}

    public function setNbPieces($nbPieces){$this->_nbPieces = $nbPieces;}

    

    public function __construct(array $options = []){
        parent::__construct($options);
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
    public function toString()
    {
        return parent::toString()."\n" . "Nombre de pièces : ". $this->getNbPieces(). "\n";
    }

    /**
     * Affiche les propriétés du batiment
     *
     * @return void
     */
    public function AfficherMaison(){
        echo $this->toString();
    }






}