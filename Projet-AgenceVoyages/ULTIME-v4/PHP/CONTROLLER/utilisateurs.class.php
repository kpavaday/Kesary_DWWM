<?php
class Utilisateurs
{

    /*****************Attributs***************** */
    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_numTelUtilisateur;
    private $_emailUtilisateur;
    private $_pseudo;
    private $_motDepasse;


    /*****************Accesseurs***************** */
    public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur = $idUtilisateur;
	}

    public function getNomUtilisateur()
	{
		return $this->_nomUtilisateur;
	}

	public function setNomUtilisateur($nomUtilisateur)
	{
		$this->_nomUtilisateur = $nomUtilisateur;
	}

    public function getPrenomUtilisateur()
	{
		return $this->_prenomUtilisateur;
	}

	public function setPrenomUtilisateur($prenomUtilisateur)
	{
		$this->_prenomUtilisateur = $prenomUtilisateur;
	}

    public function getNumTelUtilisateur()
	{
		return $this->_numTelUtilisateur;
	}

	public function setNumTelUtilisateur($numTelUtilisateur)
	{
		$this->_numTelUtilisateur = $numTelUtilisateur;
	}

    public function getEmailUtilisateur()
	{
		return $this->_emailUtilisateur;
	}

	public function setEmailUtilisateur($emailUtilisateur)
	{
		$this->_emailUtilisateur = $emailUtilisateur;
	}
    public function getPseudo(){
        return $this->_pseudo;
    }
    public function setPseudo($pseudo){
        $this->_pseudo = $pseudo;
    }
    public function getMotDePasse(){
        return $this->_motDepasse;
    }
    public function setMotDePasse($motDePasse){
        $this->_motDepasse = $motDePasse;
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
        $affichage="\n***Utilisateurs***\n";
        $affichage.="IdUtilisateur : ".$this->getIdUtilisateur()."\n"."NomUtilisateur : ".$this->getNomUtilisateur()."\n"."PrenomUtilisateur : ".$this->getPrenomUtilisateur()."\n"."NumTelUtilisateur : ".$this->getNumTelUtilisateur()."\n"."EmailUtilisateur : ".$this->getEmailUtilisateur()."\n";
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

    public static function findByPseudo($pseudo){
		$db = DbConnect::getDb();
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudo ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }}
        else
        {
            return false;
        }
    }



}