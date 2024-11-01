<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea - Taskly</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #63BDE3;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .header {
            background-color: #EC4D4D;
            color: white;
            padding: 20px;
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
            border-radius: 40px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .title {
            margin-left: 20px;
        }

        /* Estilos específicos para el botón "Cerrar Sesión" */
        .logout-button {
            background-color: #EEACFF;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 0.5em;
            color: #333;
            cursor: pointer;
            width: 15%;
        }
        .logout-button:hover {
            background-color: #FF69B4;
        }

        .container {
            background-color: #B5E9EF;
            padding: 30px;
            border-radius: 29px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            text-align: center;
        }
        .container h2 {
            color: #333;
            font-size: 2em;
            font-weight: normal;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 1em;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 90%;
            max-width: 400px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 1em;
            margin: 0 auto;
            display: block;
        }
        .form-group textarea {
            resize: none;
            height: 100px;
        }
        
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .button-group button {
            background-color: #EEACFF;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 1em;
            color: #333;
            cursor: pointer;
            width: 45%;
        }
        .button-group button:hover {
            background-color: #FF69B4;
        }
    </style>
</head>
<body>
    <div class="header">
        <span class="title">¡Crea tareas en Taskly!</span>
        <button class="logout-button">Cerrar Sesión</button>
    </div>

    <div class="container">
        <h2>Nueva Tarea:</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" placeholder="Ingresa el título" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea name="description" id="description" placeholder="Ingresa la descripción" required></textarea>
            </div>
            <div class="button-group">
                <button type="submit">Guardar Tarea</button>
                <button type="button" onclick="window.location.href='#'">Ir a Sección lista de tareas</button>
            </div>
        </form>
    </div>
</body>
</html>
