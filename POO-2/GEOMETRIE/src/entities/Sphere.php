<?php

class Sphere extends Cercle{
    /*****************Attributs***************** */
    

    /*****************Accesseurs***************** */

    
    /*****************Constructeur***************** */


    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString(){
        return parent::toString()." - Volume de la sphère : ".$this->volumeSphere(). "\n";
    }

    /**
     * Retourne le volume de la sphere
     *
     * @param Void
     * @return Float
     */
    public function volumeSphere(){
        return number_format(((pow(parent::getDiametre()/2,3)*pi()*4)/3),2);
    }

    /**
     * Affiche les propriétés du rectangle
     *
     * @return void
     */
    
    public function AfficherSphere(){
        echo $this->toString();
    }

}