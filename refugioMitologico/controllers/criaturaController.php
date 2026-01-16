<?php
session_start();

class CriaturaController {

    public function crear($criatura) {
        $_SESSION['criaturas'][] = $criatura;
    }

    public function listar() {
        return $_SESSION['criaturas'] ?? [];
    }

    public function eliminar($id) {
        unset($_SESSION['criaturas'][$id]);
    }

    public function editar($id, $salud, $peligrosidad) {
        if (isset($_SESSION['criaturas'][$id])) {
            $_SESSION['criaturas'][$id]->salud = $salud;
            if ($peligrosidad <= 10) {
                $_SESSION['criaturas'][$id]->peligrosidad = $peligrosidad;
            }
        }
    }
}
