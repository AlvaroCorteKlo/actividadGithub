<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>

<h1>Lista de Tareas</h1>

<form action="completar.php" method="post">
    <?php
    // Leer el archivo de tareas
    $tareas = file("tareas.txt", FILE_IGNORE_NEW_LINES);

    if ($tareas !== false) {
        foreach ($tareas as $index => $tarea) {
            // Verificar el formato de la tarea antes de intentar acceder a sus partes
            $parts = explode("|", $tarea);
            if (count($parts) == 2) {
                list($tareaTexto, $completada) = $parts;
                echo '<input type="checkbox" name="tareas_completadas[]" value="' . $index . '"';
                if ($completada == "completada") {
                    echo ' checked disabled';
                }
                echo '>' . $tareaTexto . '<br>';
            }
        }
    } else {
        echo "No se pudo leer el archivo de tareas.";
    }
    ?>
    <button type="submit">Marcar como completadas</button>
</form>

<a href="agregar.php">Agregar nueva tarea</a>

</body>
</html>
