<?php
require_once __DIR__ . '/../models/criatura.php';
require_once __DIR__ . '/../models/criaturaVoladora.php';
require_once __DIR__ . '/../models/criaturaMarina.php';
require_once __DIR__ . '/../models/gestor.php';
require_once __DIR__ . '/../controllers/criaturaController.php';

$gestor = new Gestor();
$controller = new CriaturaController($gestor);

if (isset($_GET['id'])) {
    $controller->eliminar($_GET['id']);
}

header('Location: listar.php');
exit;
