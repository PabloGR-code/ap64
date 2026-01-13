<?php

    class terrestre extends criatura{

        protected $terreno;

        public function __construct ($nombre="", $especie="",$nivel_de_peligrosidad="", $estado_de_salud="", $terreno="")
        parent::__construct();
        $this->terreno=$terreno;

        public function getTerreno(){
            return $this->terreno;
        }
        public function setTerreno(){
            $this->terreno=$terreno;
        }
        public function mostrar(){
            echo "Voladora: <br>";
            parent::mostrar();
            echo "Envergadura $this->terreno";
        }
    }