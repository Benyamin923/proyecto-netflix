<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = $conn->query($sql);

$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>

    <style>
        body{
            background:#141414;
            color:white;
            font-family:Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .formulario{
            background:#222;
            padding:30px;
            border-radius:10px;
            width:350px;
        }

        h2{
            color:red;
            text-align:center;
        }

        input{
            width:100%;
            padding:10px;
            margin:8px 0;
            border:none;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:red;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
    </style>

</head>
<body>

<div class="formulario">

<h2>Editar Usuario</h2>

<form action="actualizar_usuario.php" method="POST">

    <input type="hidden"
           name="id"
           value="<?php echo $fila['id']; ?>">

    <input type="text"
           name="nombre"
           value="<?php echo $fila['nombre']; ?>"
           required>

    <input type="text"
           name="usuario"
           value="<?php echo $fila['usuario']; ?>"
           required>

    <button type="submit">
        Guardar Cambios
    </button>

</form>

</div>

</body>
</html>