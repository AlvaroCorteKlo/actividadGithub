<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>

<h1>Lista de Tareas</h1>

<?php
// Función para resaltar tareas pendientes
function resaltarPendientes($tarea) {
    list($tareaTexto, $completada) = explode("|", $tarea);
    if ($completada == "pendiente") {
        return '<strong>' . $tareaTexto . '</strong>';
    } else {
        return $tareaTexto;
    }
}

// Leer el archivo de tareas
$tareas = file("tareas.txt", FILE_IGNORE_NEW_LINES);

// Mostrar las tareas
foreach ($tareas as $tarea) {
    echo resaltarPendientes($tarea) . '<br>';
}
?>

<form action="completar.php" method="post">
    <?php
    // Mostrar checkbox para completar tareas
    foreach ($tareas as $index => $tarea) {
        list($tareaTexto, $completada) = explode("|", $tarea);
        echo '<input type="checkbox" name="tareas_completadas[]" value="' . $index . '"';
        if ($completada == "completada") {
            echo ' checked';
        }
        echo '>' . $tareaTexto . '<br>';
    }
    ?>
    <button type="submit">Marcar como completadas</button>
</form>

<a href="agregar.php">Agregar nueva tarea</a>

</body>
</html>
