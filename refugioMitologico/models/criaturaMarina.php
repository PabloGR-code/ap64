<?php
require_once 'criatura.php';

class Marina extends Criatura {
    private $profundidad;

    public function __construct($nombre, $especie, $peligrosidad, $salud, $profundidad) {
        parent::__construct($nombre, $especie, $peligrosidad, $salud);
        $this->profundidad = $profundidad;
    }

    public function hacerSonido() {
        return "¡Glub!";
    }
}
