<?php

	class Regions{

		/* ****************Attributs***************** */

		private $_idRegion;
		private $_libelleRegion;
		private $_numeroRegion;
		private $_nombreDepratement;
		
		/* ****************Accesseurs***************** */
		
		public function setIdRegion($_idRegion){
			$this->_idRegion = $_idRegion;
		}

		public function getIdRegion(){
			return $this->_idRegion;
		}

		public function setLibelleRegion($_libelleRegion){
			$this->_libelleRegion = $_libelleRegion;
		}

		public function getLibelleRegion(){
			return $this->_libelleRegion;
		}

		public function setNumeroRegion($_numeroRegion){
			$this->_numeroRegion = $_numeroRegion;
		}

		public function getNumeroRegion(){
			return $this->_numeroRegion;
		}

		public function setNombreDepratement($_nombreDepratement){
			$this->_nombreDepratement = $_nombreDepratement;
		}

		public function getNombreDepratement(){
			return $this->_nombreDepratement;
		}

		/* ****************Constructeur***************** */

		public function __construct(array $options = []){
        if (!empty($options)){ // empty : renvoi vrai si le tableau est vide
            $this->hydrate($options);
        }
        }

        public function hydrate($data){
            foreach ($data as $key => $value){
                $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
                if (is_callable(([$this, $methode]))){ // is_callable verifie que la methode existe
                    $this->$methode($value);
                }
            }
        }
        
        /* ****************Autres Méthodes***************** */
        
        /**
         * Transforme l'objet en chaine de caractères
         *
         * @return String
         */
        public function toString(){
            return "";
        }

        /**
         * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
         *
         * @param [type] $obj
         * @return bool
         */
        public function equalsTo($obj){
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

        public static function compareTo($obj1, $obj2){
            return 0;
        }
        
	}

?>