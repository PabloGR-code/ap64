<?php

require_once __DIR__ . '/../models/CRUDinterface.php';

class CriaturaController {

    private $gestor;

    public function __construct(CRUDinterface $gestor) {
        $this->gestor = $gestor;
    }

    public function listar() {
        return $this->gestor->listar();
    }

    public function crear($criatura) {
        $this->gestor->agregar($criatura);
    }

    public function eliminar($id) {
        $this->gestor->eliminar($id);
    }

    public function editar($id, $salud, $peligrosidad) {
        $criatura = $this->gestor->obtenerPorId($id);

        if ($criatura !== null) {
            $criatura->setSalud($salud);
            $criatura->setPeligrosidad($peligrosidad);
            $this->gestor->actualizar($id, $criatura);
        }
    }
}
