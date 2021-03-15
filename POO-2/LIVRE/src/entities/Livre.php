<?php
class Livre{
    /*****************Attributs***************** */
    private $_titre;
    private $_auteur;
    private $_prix;

    /*****************Accesseurs***************** */
    public function getTitre(){return $this->_titre;}
    public function getAuteur(){return $this->_auteur;}
    public function getPrix(){return $this->_prix;}

    public function setTitre($titre){$this->_titre = $titre;}
    public function setAuteur($auteur){$this->_auteur = $auteur;}
    public function setPrix($prix){$this->_prix = $prix;}

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
        $affichage = "Titre : ". $this->getTitre(). " Auteur : ". $this->getAuteur(). " Prix : ". $this->getPrix(). " €\n";
            return $affichage ;
        }
    
        public function afficher(){
            echo $this->toString();
        }


}