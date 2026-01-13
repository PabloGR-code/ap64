<?php

    class criaturaController {

        private $gestor;

        public function __construct(){
            $this->gestor= new gestorCriatura();
        }

    }