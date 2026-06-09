<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/9c1f0b8e.jpg') no-repeat center center/cover;
        }

        .overlay {
            background-color: rgba(0,0,0,0.75);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario {
            background-color: rgba(0,0,0,0.9);
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

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>

</head>
<body>

<div class="overlay">
    <div class="formulario">
        <h2>Iniciar sesión</h2>

        <form action="validar.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>

            <button type="submit">Entrar</button>
        </form>

        <br>
        <a href="registro.php">¿No tienes cuenta? Regístrate</a>

        <!-- Mensaje de error -->
        <?php if (isset($_GET['error'])) { ?>
            <div class="error">❌ Usuario o contraseña incorrectos</div>
        <?php } ?>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>