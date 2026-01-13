<?php

    class criatura{

        protected $nombre;
        protected $especie;
        protected $nivel_de_peligrosidad;
        protected $estado_de_salud;

        public function __construct ($nombre="", $especie="", $nivel_de_peligrosidad="", $estado_de_salud=""){
            $this->nombre=$nombre;
            $this->especie->$especie;
            $this->nivel_de_peligrosidad=$nivel_de_peligrosidad;
            $this->estado_de_salud=$estado_de_salud;
        }
        public function getNombre (){
            return $this->nombre;
        }
        public function getEspecie (){
            return $this->especie;
        }
        public function getNivel_de_peligrosidad (){
            return $this->nivel_de_peligrosidad;
        }
        public function getEstado_de_salud (){
            return $this->estado_de_salud;
        }
        public function setNombre(){
            $this->nombre=$nombre;
        }
        public function setEspecie(){
            $this->especie=$especie;
        }
        public function setNivel_de_peligrosidad(){
            $this->nivel_de_peligrosidad=$nivel_de_peligrosidad;
        }
        public function setEstado_de_salud(){
            $this->estado_de_salud=$estado_de_salud;
        }
        public function mostrar(){
            echo "Nombre: $this->nombre <br>";
            echo "Especie: $this->especie <br>";
            echo "Nivel de peligrosidad: $this->nivel_de_peligrosidad <br>";
            echo "Estado de salud: $this->estado_de_salud <br>";
        }
    }