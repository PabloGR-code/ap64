<?php

    class gestorCriatura {

        public function __construct(){
            if(!isset($_SESSION['criatura'])){
                $_SESSION['criatura']=[];
            }
        }
    }