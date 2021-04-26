<?php
class Sejours
{

    /*****************Attributs***************** */
    private $_idSejour;
    private $_libelleSejour;
    private $_dateReservation;
    private $_dateDebutSejour;
    private $_dateFinSejour;
    private $_prix;
    private $_idUtilisateur;
    private $_idCategorie;
    private $_idDestination; 


    /*****************Accesseurs***************** */
    public function getIdSejour()
	{
		return $this->_idSejour;
	}

	public function setIdSejour($idSejour)
	{
		$this->_idSejour = $idSejour;
	}

    public function getLibelleSejour()
	{
		return $this->_libelleSejour;
	}

	public function setLibelleSejour($libelleSejour)
	{
		$this->_libelleSejour = $libelleSejour;
	}

    public function getDateReservation()
	{
		if ($this->_dateReservation){
            return $this->_dateReservation->format("Y-m-d");
        }else{
            return null;
        }
	}

	public function setDateReservation($dateReservation)
	{
		$this->_dateReservation = new DateTime($dateReservation);
	}

    public function getDateDebutSejour()
	{
		if ($this->_dateDebutSejour){
            return $this->_dateDebutSejour->format("Y-m-d");
        }else{
            return null;
        }
	}

	public function setDateDebutSejour($dateDebutSejour)
	{
		$this->_dateDebutSejour = new DateTime($dateDebutSejour);
	}

    public function getdateFinSejour()
	{
		if ($this->_dateFinSejour){
            return $this->_dateFinSejour->format("Y-m-d");
        }else{
            return null;
        }
	}

	public function setDateFinSejour($dateFinSejour)
	{
		$this->_dateFinSejour = new DateTime($dateFinSejour);
	}

    public function getPrix()
	{
		return $this->_prix;
	}

	public function setPrix($prix)
	{
		$this->_prix = $prix;
	}

    public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function seIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur = $idUtilisateur;
	}

    public function getIdCategorie()
	{
		return $this->_idCategorie;
	}

	public function setIdCategorie($idCategorie)
	{
		$this->_idCategorie = $idCategorie;
	}

    public function getIdDestination()
	{
		return $this->_idDestination;
	}

	public function setIdDestination($idDestination)
	{
		$this->_idDestination = $idDestination;
	}
    
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
    public function toString()
    {
        $affichage="\n***Séjours***\n";
        $affichage .= "idSejour : ".$this->getIdSejour()."\n"."LibelleSejour : ".$this->getLibelleSejour()."\n"."DateReservation : ".$this->getDateReservation()."\n"."DateDebutSejour : ".$this->getDateDebutSejour()."\n"."DateFinSejour : ".$this->getdateFinSejour()."\n"."Prix : ".$this->getPrix()."\n"."IdUtilisateur : ".$this->getIdUtilisateur()."\n"."IdCategorie : ".$this->getIdCategorie()."\n"."IdDestination : ".$this->getIdDestination()."\n";
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
}