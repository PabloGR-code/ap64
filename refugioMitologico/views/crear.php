<!DOCTYPE html>
<html>
<head>
    <title>Crear Criatura</title>
</head>
<body>
    <h1>Crear Criatura</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Especie:<br>
        <input type="text" name="especie" required><br><br>

        Nivel de peligrosidad:<br>
        <input type="number" name="nivel_de_peligrosidad" required><br><br>

        Estado de salud:<br>
        <input type="text" name="estado_de_salud" required><br><br>

        Profundidad:<br>
        <input type="number" name="profundidad" required><br><br>

        Envergadura:<br>
        <input type="number" name="envergadura" required><br><br>

        Terreno:<br>
        <input type="text" name="terreno" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>