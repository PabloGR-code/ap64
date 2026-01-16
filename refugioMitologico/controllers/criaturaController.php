<?php
require_once __DIR__ . '/../models/criaturaVoladora.php';
require_once __DIR__ . '/../models/criaturaMarina.php';

session_start();

class CriaturaController {

    public function listar() {
        return $_SESSION['criaturas'] ?? [];
    }

    public function crear($criatura) {
        $_SESSION['criaturas'][] = $criatura;
    }

    public function eliminar($id) {
        if (isset($_SESSION['criaturas'][$id])) {
            unset($_SESSION['criaturas'][$id]);
            $_SESSION['criaturas'] = array_values($_SESSION['criaturas']);
        }
    }

    public function editar($id, $salud, $peligrosidad) {
        if (isset($_SESSION['criaturas'][$id])) {
            $_SESSION['criaturas'][$id]->salud = $salud;
            $_SESSION['criaturas'][$id]->peligrosidad = $peligrosidad;
        }
    }
}

