<?php

    class voladora extends criatura{

        protected $envergadura;

        public function __construct ($nombre="", $especie="",$nivel_de_peligrosidad="", $estado_de_salud="", $envergadura="")
        parent::__construct();
        $this->envergadura=$envergadura;

        public function getEnvergadura(){
            return $this->envergadura;
        }
        public function setEnvergadura(){
            $this->envergadura=$envergadura;
        }
        public function mostrar(){
            echo "Voladora: <br>";
            parent::mostrar();
            echo "Envergadura $this->envergadura";
        }
    }