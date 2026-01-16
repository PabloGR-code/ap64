<h2>Crear criatura</h2>

<form action="../models/gestor.php" method="post">
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
