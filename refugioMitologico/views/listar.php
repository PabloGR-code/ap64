<?php
require_once __DIR__ . '/../models/criatura.php';
require_once __DIR__ . '/../models/criaturaVoladora.php';
require_once __DIR__ . '/../models/criaturaMarina.php';
require_once __DIR__ . '/../models/gestor.php';
require_once __DIR__ . '/../controllers/criaturaController.php';

$gestor = new Gestor();
$controller = new CriaturaController($gestor);

$criaturas = $controller->listar();
?>

<h2>Listado de criaturas</h2>

<ul>
<?php foreach ($criaturas as $id => $criatura): ?>
    <li>
        <?= $criatura->getNombre() ?>
        <a href="eliminar.php?id=<?= $id ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>

<a href="../index.php">Volver</a>
