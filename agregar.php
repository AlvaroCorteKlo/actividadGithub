<!DOCTYPE html>
<html>
<head>
    <title>Agregar Nueva Tarea</title>
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
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Asegura que el botón ocupe todo el ancho disponible */
            margin: 0 auto; /* Centra el botón horizontalmente */
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
    </style>
</head>
<body>

<h1>Agregar Nueva Tarea</h1>

<form action="agregar_tarea.php" method="post">
    <label for="tarea">Nueva Tarea:</label><br>
    <input type="text" id="tarea" name="tarea"><br>
    <button type="submit">Agregar Tarea</button>
</form>

<a href="index.php">Volver a la lista de tareas</a>

</body>
</html>