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
    <title>Editar criatura</title>
</head>
<body>

<h2>Editar criatura</h2>

<p>
    <strong>
        <?= implode(" - ", $criatura->getDatos()) ?>
    </strong>
</p>

<form action="../models/gestor.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    Salud:
    <input type="text" name="salud"><br><br>

    Peligrosidad:
    <input type="number" name="peligrosidad"><br><br>

    <button type="submit" name="editar">Guardar cambios</button>
</form>

<br>
<a href="listar.php">Volver</a>

</body>
</html>


