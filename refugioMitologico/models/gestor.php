<?php
require_once '../controllers/CriaturaController.php';
require_once '../models/Voladora.php';
require_once '../models/Marina.php';

$controller = new CriaturaController();

if (isset($_POST['crear'])) {
    if ($_POST['tipo'] == 'voladora') {
        $criatura = new Voladora(
            $_POST['nombre'],
            $_POST['especie'],
            $_POST['peligrosidad'],
            $_POST['salud'],
            $_POST['extra']
        );
    } else {
        $criatura = new Marina(
            $_POST['nombre'],
            $_POST['especie'],
            $_POST['peligrosidad'],
            $_POST['salud'],
            $_POST['extra']
        );
    }
    $controller->crear($criatura);
    header("Location: ../views/listar.php");
}

if (isset($_POST['editar'])) {
    $controller->editar($_POST['id'], $_POST['salud'], $_POST['peligrosidad']);
    header("Location: ../views/listar.php");
}

if (isset($_POST['eliminar'])) {
    $controller->eliminar($_POST['id']);
    header("Location: ../views/listar.php");
}
