<?php
class Pyramide extends TriangleRectangle{

    /*****************Attributs***************** */

	private $_profondeur;

	/*****************Accesseurs***************** */
    public function getProfondeur(){return $this->_profondeur;}

    public function setProfondeur($profondeur){$this->_profondeur = $profondeur;}

    /*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
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
	* @return String.
	*/
	public function toString()
	{
		return parent::toString()."\n profondeur : ".$this->getProfondeur()."\nPérimètre :".$this->perimetrePyramide()."\n"
		."Volume :".$this->volumePyramide()."\n";
	}

    public function perimetrePyramide(){
        return (parent::perimetreTriRec()*2 + 3*$this->getProfondeur());
    }

    public function volumePyramide(){
        return (parent::aireTriRec() * $this->getProfondeur());
    }

    /**
     * Affiche les propriétés du rectangle
     *
     * @return void
     */
    
    public function AfficherPyramide(){
        echo $this->toString();
    }

}