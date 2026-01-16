<?php
require_once '../models/criaturaVoladora.php';
require_once '../models/criaturaMarina.php';
require_once '../controllers/criaturaController.php';

$controller = new CriaturaController();
$criaturas = $controller->listar();

$id = $_GET['id'];
$criatura = $criaturas[$id];
?>

<h2>Eliminar criatura</h2>

<p>¿Seguro que quieres eliminar esta criatura?</p>

<p><strong><?= implode(" - ", $criatura->getDatos()) ?></strong></p>

<form action="../models/gestor.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <button type="submit" name="eliminar">Sí, eliminar</button>
</form>

<a href="listar.php">Cancelar</a>

