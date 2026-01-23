<?php
class Criatura {
    protected $nombre;
    protected $especie;
    protected $peligrosidad;
    protected $salud;

    public function __construct($nombre, $especie, $peligrosidad, $salud) {
        if ($peligrosidad > 10) {
            $peligrosidad = 10;
        }

        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->peligrosidad = $peligrosidad;
        $this->salud = $salud;
    }

    public function hacerSonido() {
        return "Sonido desconocido";
    }

    public function getDatos() {
        return [
            $this->nombre,
            $this->especie,
            $this->peligrosidad,
            $this->salud
        ];
    }

    public function setSalud($salud) {
    $this->salud = $salud;
    }

    public function setPeligrosidad($peligrosidad) {
    if ($peligrosidad <= 10) {
        $this->peligrosidad = $peligrosidad;
    }
    }

    public function getNombre() {
    return $this->nombre;
}

}
