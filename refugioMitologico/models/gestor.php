<?php
require_once __DIR__ . '/CRUDinterface.php';

session_start();

class Gestor implements CRUDinterface {

    public function listar() {
        return $_SESSION['criaturas'] ?? [];
    }

    public function agregar($objeto) {
        $_SESSION['criaturas'][] = $objeto;
    }

    public function obtenerPorId($id) {
        return $_SESSION['criaturas'][$id] ?? null;
    }

    public function actualizar($id, $objeto) {
        if (isset($_SESSION['criaturas'][$id])) {
            $_SESSION['criaturas'][$id] = $objeto;
        }
    }

    public function eliminar($id) {
        if (isset($_SESSION['criaturas'][$id])) {
            unset($_SESSION['criaturas'][$id]);
            $_SESSION['criaturas'] = array_values($_SESSION['criaturas']);
        }
    }
}
