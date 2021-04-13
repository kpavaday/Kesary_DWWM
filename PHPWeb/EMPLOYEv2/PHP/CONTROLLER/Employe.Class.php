<?php

class Employe{

    /*****************Attributs***************** */
    private $_idEmploye;
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private static $_compteur = 0;
    private $_agence;
    private $_nbreEnfants = [];
    private $_idAgence;

    /*****************Accesseurs***************** */
    public function getNom(){return $this->_nom;}
    public function getPrenom(){return $this->_prenom;}
    public function getDateEmbauche(){return $this->_dateEmbauche;}
    public function getFonction(){return $this->_fonction;}
    public function getSalaire(){return $this->_salaire;}
    public function getService(){return $this->_service;}
    public static function getCompteur(){return self::$_compteur;}
    public function getAgence(){return $this->_agence;}
    public function getNbreEnfants(){return $this->_nbreEnfants;}
    public function getIdEmploye(){return $this->_idEmploye;}
    public function getIdAgence(){return $this->_idAgence;}


    public function setNom($nom){$this->_nom = $nom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}
    public function setDateEmbauche($dateEmbauche){$this->_dateEmbauche = $dateEmbauche;}
    public function setFonction($fonction){$this->_fonction = $fonction;}
    public function setSalaire($salaire){$this->_salaire = $salaire;}
    public function setService($service){$this->_service = $service;}
    public function setNbreEnfants(array $nbreEnfants){$this->_nbreEnfants = $nbreEnfants;}
    public function setIdEmploye($idEmploye){$this->_idEmploye = $idEmploye;}
    public function setIdAgence($idAgence){$this->_idAgence = $idAgence;}

    //On force le paramètre $agence a être de type Agence
    public function setAgence(Agence $agence){$this->_agence = $agence;}

    
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
        $affichage .= "Prénom : " .$this->getPrenom()."\n".
        "Nom : ".$this->getNom(). "\n". 
        "Date d'embauche : " .$this->getdateEmbauche()->format("d/m/y"). "\n".
        "Fonction : ".$this->getFonction()."\n". 
        "Salaire : " .$this->getSalaire(). " €\n".
        "Service :".$this->getService(). " \n";
        //$affichage = "Prime totale : ". $this->prime(). " €\n";
        // $affichage .= "Affectation agence : " . $this->getAgence()->toString() ."\n";
        // $affichage .= $this->chequesVancances() ? "Salarié elligible aux chèques vacances \n " : "Salarié non elligible aux chèques vacances \n";
        $affichage .= "Enfants :\n" . $this->enfants();
        return $affichage;
    }

//     /**
//      * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
//      *
//      * @param [type] $obj
//      * @return bool
//      */
//     public function equalsTo($obj)
//     {
//         return true;
//     }
//     /**
//      * Compare 2 objets
//      * Renvoi 1 si le 1er est >
//      *        0 si ils sont égaux
//      *        -1 si le 1er est <
//      *
//      * @param [type] $obj1
//      * @param [type] $obj2
//      * @return void
//      */
//     public static function compareTo($obj1, $obj2){
//         if ($obj1->getNom() > $obj2->getNom()){
//             return 1;
//         }elseif ($obj1->getNom() < $obj2->getNom()){
//             return -1;
//         }elseif ($obj1->getPrenom() > $obj2->getPrenom()){
//             return 1;
//         }elseif($obj1->getPrenom() < $obj2->getPrenom()){
//             return -1;
//         }else{
//             return 0;
//         }    
//     }

//     //Comparaison avec concaténation
//     public static function compareTo2($obj1,$obj2){
//         $objA = $obj1->getNom() . $obj1->getPrenom();
//         $objB = $obj2->getNom() . $obj2->getPrenom();
//         if ($objA > $objB) {
//             return 1;
//         }if ($objA < $objB) {
//             return -1;
//         }
//         return 0;
//     }

//     //Comparaison des services
//     public static function compareToService($obj1,$obj2){
//         if ($obj1->getService() > $obj2->getService()){
//             return 1;
//         }elseif ($obj1->getService() < $obj2->getService()){
//             return -1;
//         }else {//si les services sont les mêmes, on rappelle la fonction de tri par Nom et Prénom
//             return self::compareTo($obj1,$obj2);
//         }
//     }


//     /**
//  * calcul l'anciennete en année
//  *
//  * @return int  nb d'année d'ancienneté
//  */
//     //Méthode calcul de l'ancienneté de l'employé
//     public function anciennete(){
//         $anciennete=$this->getDateEmbauche()->diff(new DateTime("NOW"));
//         return $anciennete->format("%y"). " ans et ".$anciennete->format("%m"). " mois\n";
//     }

// /**
//  * applique 5% du salaire
//  *
//  * @return float  montant de la prime annuelle
//  */
//     public function primeAnnuelle(){
//         //Calcul de la prime sur salaire de 5%
//         return $this->getSalaire() *  0.05;
        
//     }
// /**
//  * prime de 2% du salaire par annee d'ancienneté
//  *
//  * @return float montant de la prime
//  */
//     public function primeAnciennete(){
//         //Calcul de la prime d'ancienneté de 2%
//         $primeAnciennete = $this->getSalaire() * 2/100 * $this->anciennete();
//         return $primeAnciennete;
//     }

// /**
//  * fonction qui calcul la prime globale
//  *
//  * @return float renvoi le montant de la prime
//  */
//     public function prime(){
//         //Prime annuelle sur salaire
//         $primeSalaire = $this->primeAnnuelle();

//         //Prime par année d'ancienneté
//         $primeAnciennete = $this->primeAnciennete();
//         return $primeSalaire + $primeAnciennete;
//     }

// /**
//  * Calcul de la masse salariale de l'employe
//  * Calcul du salaire + prime
//  * @return double salaire + prime
//  */
//     public function masseSalariale(){
//         return $this->getSalaire()+ $this->prime();
//     }

//     //Vérification si l'employé peut avoir des chèques vacances
//     public function chequesVancances(){
//         return $this->anciennete() >= 1;
//     }

//     //Vérification si l'employé a des enfants, si 0 enfant un message s'affiche, sinon boucle sur les enfants et affiche les infos
//     public function enfants(){
//         if(count($this->getNbreEnfants()) < 0){
//             echo "L'employé n'a pas d'enfant \n";
//         }else{
//             foreach($this->getNbreEnfants() as $enfant){
//                 $enfant->toString();
//             }
//         }
//     }



       
}