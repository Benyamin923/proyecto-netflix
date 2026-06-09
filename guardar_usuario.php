<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$confirmar = $_POST['confirmar'];

$mensaje = "";
$color = "";

// Validar contraseñas
if ($password != $confirmar) {
    $mensaje = "❌ Las contraseñas no coinciden";
    $color = "red";
} else {

    // Verificar usuario existente
    $sql_verificar = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $conn->query($sql_verificar);

    if ($resultado->num_rows > 0) {
        $mensaje = "⚠️ El usuario ya existe";
        $color = "orange";
    } else {

        // Encriptar contraseña
        $password_segura = password_hash($password, PASSWORD_DEFAULT);

        // Insertar usuario
        $sql = "INSERT INTO usuarios (nombre, usuario, password) 
                VALUES ('$nombre', '$usuario', '$password_segura')";

        if ($conn->query($sql) === TRUE) {
            $mensaje = "✅ Usuario registrado correctamente";
            $color = "lightgreen";
        } else {
            $mensaje = "❌ Error al registrar";
            $color = "red";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>

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

        .box {
            background-color: rgba(0,0,0,0.9);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            color: white;
            width: 300px;
        }

        .mensaje {
            font-size: 18px;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 15px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: darkred;
        }
    </style>

</head>
<body>

<div class="overlay">
    <div class="box">
        <div class="mensaje" style="color: <?php echo $color; ?>;">
            <?php echo $mensaje; ?>
        </div>

        <a href="index.php">Ir al login</a>
    </div>
</div>

</body>
</html>