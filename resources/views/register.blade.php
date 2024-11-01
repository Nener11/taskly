<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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
        .container {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .header {
            background-color: #EC4D4D;
            color: white;
            padding: 30px;
            font-size: 2.5em;
            font-weight: bold;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
            border-radius: 40px;
            margin-bottom: 0;
            margin-top: -80px;
        }
        .register-box {
            background-color: #B5E9EF;
            padding: 30px;
            border-radius: 29px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        .register-box h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 2em;
            font-weight: normal;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 0.9em;
            color: #333;
        }
        .form-group input, .role-select {
            width: 90%;
            max-width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 1em;
            margin: 0 auto;
        }
        .btn-register {
            background-color: #EEACFF;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 1em;
            color: #333;
            cursor: pointer;
            width: 50%;
            margin-top: 20px;
        }
        .btn-register:hover {
            background-color: #FF69B4;
        }
        .login-link {
            margin-top: 15px;
            font-size: 0.9em;
            color: #333;
            margin-bottom: 15px;
        }
        .login-link a {
            color: #8718E9;
            text-decoration: none;
            display: block;
            margin-top: 5px;
            font-style: italic;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        ¡Regístrate en Taskly!
    </div>

    <div class="container">
        <div class="register-box">
            <h2>¡Crea tu Cuenta!</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirma tu Contraseña:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" required>
                </div>
                <div class="form-group">
                    <label for="role">Rol:</label>
                    <select name="role" id="role" class="role-select" required>
                        <option value="" disabled selected>Selecciona</option>
                        <option value="creador">Creador</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
                <button type="submit" class="btn-register">Registrar</button>
            </form>
        </div>

        <div class="login-link">
            ¿Ya Tienes Cuenta?
            <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </div>
    </div>
</body>
</html>
