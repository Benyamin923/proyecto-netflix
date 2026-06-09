<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/9c1f0b8e.jpg') no-repeat center center/cover;
        }

        .overlay {
            background-color: rgba(0,0,0,0.7);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario {
            background-color: rgba(0,0,0,0.85);
            padding: 40px;
            border-radius: 10px;
            width: 300px;
            color: white;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred;
        }

        a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            color: white;
        }
    </style>

</head>
<body>

<div class="overlay">
    <div class="formulario">
        <h2>Crear cuenta</h2>

        <form action="guardar_usuario.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="confirmar" placeholder="Confirmar contraseña" required>

            <button type="submit">Registrarse</button>
        </form>

        <br>
        <a href="index.php">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</div>

</body>
</html>