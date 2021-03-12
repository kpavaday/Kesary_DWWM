<?php

class Employe{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private static $_compteur = 0;

    /*****************Accesseurs***************** */
    public function getNom(){return $this->_nom;}
    public function getPrenom(){return $this->_prenom;}
    public function getDateEmbauche(){return $this->_dateEmbauche;}
    public function getFonction(){return $this->_fonction;}
    public function getSalaire(){return $this->_salaire;}
    public function getService(){return $this->_service;}
    public function getCompteur(){return self::$_compteur;}


    public function setNom($nom){$this->_nom = $nom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}
    public function setDateEmbauche($dateEmbauche){$this->_dateEmbauche = $dateEmbauche;}
    public function setFonction($fonction){$this->_fonction = $fonction;}
    public function setSalaire($salaire){$this->_salaire = $salaire;}
    public function setService($service){$this->_service = $service;}

    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur++;
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

        $affichage = "\n\n***** SALARIE *****\n";
        $affichage = "Prénom : " .$this->getPrenom()."\n".
        "Nom : ".$this->getNom(). "\n". 
        "Date d'embauche : " .$this->getdateEmbauche()->format("d/m/y"). "\n".
        "Fonction : ".$this->getFonction()."\n". 
        "Salaire : " .$this->getSalaire(). " €\n".
        "Service :".$this->getService(). " \n";
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

    //Méthode calcul de l'ancienneté de l'employé
    public function anciennete(){
        $interval=$this->getDateEmbauche()->diff(new datetime("NOW"));
        echo "Ancienneté : ". $interval->format("%y"). " ans et ". $interval->format("%m"). " mois \n";
    }

    /**
     * fonction qui calcul la prime globale
     *
     * @return int renvoi le montant de la prime
     */
    public function prime(){
        //Calcul de la prime sur salaire
        
    }



       
}