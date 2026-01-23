<?php
require_once 'models/criaturaVoladora.php';
require_once 'models/criaturaMarina.php';
require_once 'models/Gestor.php';
require_once 'controllers/CriaturaController.php';

$gestor = new Gestor();

$controller = new CriaturaController($gestor);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Refugio de Criaturas Mitológicas</title>
</head>
<body>

    <h1>Refugio de Criaturas Mitológicas</h1>

    <p>Bienvenido al sistema de gestión del santuario.</p>

    <ul>
        <li><a href="views/crear.php">Crear criatura</a></li>
        <li><a href="views/listar.php">Listar criaturas</a></li>
    </ul>

</body>
</html>

