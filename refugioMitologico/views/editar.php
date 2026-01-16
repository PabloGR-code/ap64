<?php
require_once '../controllers/CriaturaController.php';

$controller = new CriaturaController();
$criaturas = $controller->listar();

$id = $_GET['id'];
$criatura = $criaturas[$id];
?>

<h2>Editar criatura</h2>

<form action="../gestor/gestor.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    <p>
        <strong>
            <?= implode(" - ", $criatura->getDatos()) ?>
        </strong>
    </p>

    Salud:
    <input type="text" name="salud" value=""><br><br>

    Peligrosidad:
    <input type="number" name="peligrosidad" value=""><br><br>

    <button name="editar">Guardar cambios</button>
</form>

<br>
<a href="listar.php">Volver al listado</a>

