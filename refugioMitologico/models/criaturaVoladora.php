<?php
require_once 'Criatura.php';

class Voladora extends Criatura {
    private $envergadura;

    public function __construct($nombre, $especie, $peligrosidad, $salud, $envergadura) {
        parent::__construct($nombre, $especie, $peligrosidad, $salud);
        $this->envergadura = $envergadura;
    }

    public function hacerSonido() {
        return "¡Screee!";
    }
}
