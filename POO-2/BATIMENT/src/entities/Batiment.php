<?php
class Batiment{
    /*****************Attributs***************** */
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;

    /*****************Accesseurs***************** */
    public function getNom(){return $this->_nom;}
    public function getAdresse(){return $this->_adresse;}
    public function getCodePostal(){return $this->_codePostal;}
    public function getVille(){return $this->_ville;}

    public function setNom($nom){$this->_nom = $nom;}
    public function setAdresse($adresse){$this->_adresse = $adresse;}
    public function setCodePostal($codePostal){$this->_codePostal = $codePostal;}
    public function setVille($ville){$this->_ville = $ville;}

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

        $affichage = "Nom du batiment : ". $this->getNom(). "\n";
        $affichage .= "Adresse : ". $this->getAdresse(). "\n";
        $affichage .= "Code Postal : ". $this->getCodePostal(). "\n";
        $affichage .= "Ville :". $this->getVille(). "\n";
        return $affichage;
        }

/**
     * Affiche les propriétés du batiment
     *
     * @return void
     */
    public function AfficherBatiment(){
        echo $this->toString();
    }
}