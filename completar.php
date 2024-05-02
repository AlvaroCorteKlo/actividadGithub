<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las tareas completadas del formulario
    $tareasCompletadas = isset($_POST["tareas_completadas"]) ? $_POST["tareas_completadas"] : [];
    
    // Leer el archivo de tareas
    $tareas = file("tareas.txt");
    
    // Marcar las tareas como completadas
    foreach ($tareasCompletadas as $index) {
        $tareas[$index] = str_replace("|pendiente", "|completada", $tareas[$index]);
    }
    
    // Guardar las tareas actualizadas en el archivo
    file_put_contents("tareas.txt", implode("\n", $tareas));
    
    // Redirigir de vuelta a la página de inicio
    header("Location: index.php");
    exit;
}
?>