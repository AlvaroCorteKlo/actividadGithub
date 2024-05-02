<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
        // Mostrar tareas pendientes
        $tareas = file("tareas.txt", FILE_IGNORE_NEW_LINES);
        foreach ($tareas as $tarea) {
            $datos = explode("|", $tarea);
            if ($datos[0] == "P") {
                echo "<li>$datos[1]</li>";
            }
        }
        ?>
    </ul>
    <h2>Tareas Completadas</h2>
    <ul>
        <?php
        // Mostrar tareas completadas
        foreach ($tareas as $tarea) {
            $datos = explode("|", $tarea);
            if ($datos[0] == "C") {
                echo "<li>$datos[1]</li>";
            }
        }
        ?>
    </ul>
    <a href="agregar.php">Agregar Nueva Tarea</a>
    <a href="completar.php">Marcar Tarea como Completada</a>
</body>
</html>
