<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");
echo "Conexion OK <br>";

$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql);
if (!$resultado) {
    die("Error SQL: " . $conn->error);
}

echo "Consulta OK <br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrar Usuarios</title>

    <style>
        body{
            background:#141414;
            color:white;
            font-family:Arial;
            padding:20px;
        }

        h1{
            color:red;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:#222;
        }

        th, td{
            border:1px solid #444;
            padding:10px;
            text-align:center;
        }

        th{
            background:red;
        }

        a{
            text-decoration:none;
            color:white;
            padding:5px 10px;
            border-radius:5px;
        }

        .editar{
            background:#28a745;
        }

        .eliminar{
            background:#dc3545;
        }

        .volver{
            background:red;
            display:inline-block;
            margin-bottom:20px;
        }
    </style>

</head>
<body>

<a class="volver" href="home.php">⬅ Volver al catálogo</a>

<h1>Administración de Usuarios</h1>

<table>

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Usuario</th>
    <th>Acciones</th>
</tr>

<?php
while($fila = $resultado->fetch_assoc()){
?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['usuario']; ?></td>

    <td>
        <a class="editar"
           href="editar_usuario.php?id=<?php echo $fila['id']; ?>">
           Editar
        </a>

        <a class="eliminar"
   href="eliminar_usuario.php?id=<?php echo $fila['id']; ?>"
   onclick="return confirm('¿Seguro que deseas eliminar al usuario <?php echo $fila['usuario']; ?>?');">
   Eliminar
</a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>