<?php
require_once '../models/criaturaVoladora.php';
require_once '../models/criaturaMarina.php';
require_once '../controllers/criaturaController.php';

$controller = new CriaturaController();
$criaturas = $controller->listar();

/* COMPROBACIÓN CLAVE */
if (!isset($_GET['id']) || !isset($criaturas[$_GET['id']])) {
    header("Location: listar.php");
    exit;
}

$id = $_GET['id'];
$criatura = $criaturas[$id];
?>

