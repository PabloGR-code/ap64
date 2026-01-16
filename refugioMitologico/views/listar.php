<?php
require_once '../controllers/CriaturaController.php';

$controller = new CriaturaController();
$criaturas = $controller->listar();
?>

<h2>Listado de criaturas</h2>

<?php
for ($i = 0; $i < count($criaturas); $i++) {
    $c = $criaturas[$i];
    echo "<p>";
    echo implode(" - ", $c->getDatos());
    echo " | " . $c->hacerSonido();
    echo "</p>";

    echo "<a href='editar.php?id=$i'>Editar</a> ";
    echo "<a href='eliminar.php?id=$i'>Eliminar</a>";
    echo "<hr>";
}
?>

<br>
<a href="crear.php">Crear nueva criatura</a>

