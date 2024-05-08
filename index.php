<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="checkbox"] {
            margin-right: 10px;
            margin-bottom: 30px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }
        a:hover {
            text-decoration: underline;
        }
        .completed {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>
<body>
<h1>Gestor de Tareas</h1>
<p style="text-align: center; font-style: italic;">Frase motivacional:</p>
<?php
$frasesMotivadoras = [
    "No te rindai primate, cumple tus tareas y serás grande",
    "Un filósofo llamado Rene Bridge dijo una vez: 'Ma ma ma manzaneke igual viene de un pueblo bajo igual po'",
    "Tu perfume a Waaaren y el aroma de tus pieeees.",
    "Un nóctulo es un murciélago chico que vive en el desván de mi casa",
    "Completa tus tareas PAAAAAAAAA",
    "El que se rinde es gey dsjhdhjhjfshj",
    "Si dejas de usar este task manager, el programador se pondrá triste",
    "Everybody wants to know what I would do if I didn't complete my task. I guess we'll never know.",
    "Si completas tus tareas, serás recompensado con un abrazo imaginario",
    "Usar este gestor de tareas te puede ayudar a completar tus objetivos, úsalo a tu favor!"
    // Agrega más frases motivadoras aquí
];

$fraseAleatoria = $frasesMotivadoras[array_rand($frasesMotivadoras)];
?>

<p style="text-align: center; font-style: italic;"><?php echo $fraseAleatoria; ?></p>

<form action="completar.php" method="post">
    <?php
    $tareas = file("tareas.txt", FILE_IGNORE_NEW_LINES);

    if ($tareas !== false) {
        if (count($tareas) > 0) {
            foreach ($tareas as $index => $tarea) {
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
            echo "<p style='text-align: center;'>No hay ninguna tarea hasta el momento.</p>";
        }
    } else {
        echo "No se pudo leer el archivo de tareas.";
    }
    ?>
    <button type="submit">Marcar tarea como completada</button>
</form>

<a href="agregar.php">Agregar nueva tarea</a>

</body>
</html>
