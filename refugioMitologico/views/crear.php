<?php
require_once __DIR__ . '/../models/criaturaVoladora.php';
require_once __DIR__ . '/../models/criaturaMarina.php';
require_once __DIR__ . '/../models/Gestor.php';
require_once __DIR__ . '/../controllers/CriaturaController.php';

$gestor = new Gestor();
$controller = new CriaturaController($gestor);

if (isset($_POST['crear'])) {

    if ($_POST['tipo'] === 'voladora') {
        $criatura = new Voladora(
            $_POST['nombre'],
            $_POST['especie'],
            $_POST['salud'],
            $_POST['peligrosidad'],
            $_POST['extra']
        );
    } else {
        $criatura = new CriaturaMarina(
            $_POST['nombre'],
            $_POST['especie'],
            $_POST['salud'],
            $_POST['peligrosidad'],
            $_POST['extra']
        );
    }

    $controller->crear($criatura);

    header('Location: listar.php');
    exit;
}
?>

<h2>Crear criatura</h2>

<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Especie: <input type="text" name="especie"><br>
    Peligrosidad: <input type="number" name="peligrosidad"><br>
    Salud: <input type="text" name="salud"><br>

    Tipo:
    <select name="tipo">
        <option value="voladora">Voladora</option>
        <option value="marina">Marina</option>
    </select><br>

    Dato extra: <input type="text" name="extra"><br><br>

    <button name="crear">Crear</button>
</form>

<a href="listar.php">Ver listado</a>
