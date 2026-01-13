<?php

    class marina extends criatura{

        protected $profundidad;

        public function __construct ($nombre="",$especie="",$nivel_de_peligrosidad="", $estado_de_salud="",$profundidad="")
        parent::__construct($nombre. $especie, $nivel_de_peligrosidad,$estado_de_salud)
        $this->profundidad=$profundidad;

        public function getProfundidad(){
            return $this->profundidad;
        }
        public function setProfundidad(){
            $this->profundidad=$profundidad;
        }
        public function mostrar(){
            echo "Profundidad: <br>";
            parent::mostrar();
            echo "Profundidad $this->profundidad";
        }
    }