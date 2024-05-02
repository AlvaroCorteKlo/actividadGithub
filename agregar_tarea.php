<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la nueva tarea del formulario
    $nuevaTarea = $_POST["tarea"];
    
    // Abrir el archivo de tareas en modo escritura (agregar al final)
    $archivo = fopen("tareas.txt", "a");
    
    // Escribir la nueva tarea en el archivo
    fwrite($archivo, $nuevaTarea . "|pendiente\n");
    
    // Cerrar el archivo
    fclose($archivo);
    
    // Redirigir de vuelta a la página de inicio
    header("Location: index.php");
    exit;
}
?>
