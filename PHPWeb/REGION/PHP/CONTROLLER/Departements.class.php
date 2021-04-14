<?php

	class Departements{

		/* ****************Attributs***************** */

		private $_idDepartement;
		private $_numeroDepartement;
		private $_libelleDepartement;
		private $_idRegion;
		
		/* ****************Accesseurs***************** */
		
		public function setIdDepartement($_idDepartement){
			$this->_idDepartement = $_idDepartement;
		}

		public function getIdDepartement(){
			return $this->_idDepartement;
		}

		public function setNumeroDepartement($_numeroDepartement){
			$this->_numeroDepartement = $_numeroDepartement;
		}

		public function getNumeroDepartement(){
			return $this->_numeroDepartement;
		}

		public function setLibelleDepartement($_libelleDepartement){
			$this->_libelleDepartement = $_libelleDepartement;
		}

		public function getLibelleDepartement(){
			return $this->_libelleDepartement;
		}

		public function setIdRegion($_idRegion){
			$this->_idRegion = $_idRegion;
		}

		public function getIdRegion(){
			return $this->_idRegion;
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