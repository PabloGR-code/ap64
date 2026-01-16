<?php
require_once '../models/criaturaVoladora.php';
require_once '../models/criaturaMarina.php';
require_once '../controllers/criaturaController.php';

$controller = new CriaturaController();
$criaturas = $controller->listar();

/* Comprobación de seguridad */
if (!isset($_GET['id']) || !isset($criaturas[$_GET['id']])) {
    header("Location: listar.php");
    exit;
}

$id = $_GET['id'];
$criatura = $criaturas[$id];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar criatura</title>
</head>
<body>

<h2>Eliminar criatura</h2>

<p>¿Seguro que quieres eliminar esta criatura?</p>

<p>
    <strong>
        <?= implode(" - ", $criatura->getDatos()) ?>
    </strong>
</p>

<form action="../models/gestor.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <button type="submit" name="eliminar">Sí, eliminar</button>
</form>

<br>
<a href="listar.php">Cancelar</a>

</body>
</html>

