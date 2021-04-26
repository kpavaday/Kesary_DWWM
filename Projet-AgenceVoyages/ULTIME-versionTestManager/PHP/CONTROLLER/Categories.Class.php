<?php

class Categories{

/*****************Attributs***************** */
    private $_idCategorie;
    private $_libelleCategorie;
    private $_typeSejours;
    private $_imageCategorie;

/***************** Accesseurs ***************** */
    public function getIdCategorie(){return $this->_idCategorie;}
    public function getLibelleCategorie(){return $this->_libelleCategorie;}
    public function getTypeSejours(){return $this->_typeSejours;}
    public function getImageCategorie(){return $this->_imageCategorie;}

    public function setIsCategorie($idCategorie){$this->_idCategorie=$idCategorie;}
    public function setLibelleCategorie($_libelleCategorie){$this->_libelleCategorie=$_libelleCategorie;}
    public function setTypeSejours($typeSejours){$this->_typeSejours=$typeSejours;}
    public function setImageCategorie($imageCategorie){$this->_imageCategorie=$imageCategorie;}

    
/*****************Constructeur***************** */

	public function __construct(array $options = []){
 		if (!empty($options)){ // empty : renvoi vrai si le tableau est vide
			$this->hydrate($options);
		}
	}
	public function hydrate($data){
 		foreach ($data as $key => $value){
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))){ // is_callable verifie que la methode existe
				$this->$methode($value);
			}
		}
	}

    	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return "IdCategorie : ".$this->getIdCategorie()."LibelleCategorie : ".$this->getLibelleCategorie(). "typeSejours : ".$this->getTypeSejours(). "imageCategorie : ".$this->getImageCategorie()."\n";
	}

    	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}



    
}