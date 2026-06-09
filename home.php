<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Netflix Clone</title>

    <style>
        body {
            margin: 0;
            background-color: #141414;
            color: white;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: black;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }

        .buscador input {
            padding: 8px;
            border-radius: 5px;
            border: none;
        }

        .buscador button {
            padding: 8px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        .pelicula {
            background-color: #222;
            margin: 10px;
            border-radius: 10px;
            overflow: hidden;
            width: 200px;
            transition: transform 0.3s;
        }

        .pelicula:hover {
            transform: scale(1.05);
        }

        .pelicula img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .info {
            padding: 10px;
        }

        .info h3 {
            margin: 0;
            font-size: 16px;
        }

        .info p {
            font-size: 12px;
            color: #ccc;
        }

        .genero {
            font-size: 11px;
            color: #999;
        }
    </style>

</head>
<body>

<header>

    <div class="logo">NETFLIX</div>

    <div>
        Bienvenido,
        <?php echo $_SESSION['usuario']; ?> 👋
    </div>

    <a href="admin_usuarios.php"
       style="color:white;
              background:red;
              padding:8px 12px;
              border-radius:5px;
              text-decoration:none;">
       👥 Usuarios
    </a>

    <div class="buscador">
        <form method="GET">
            <input type="text" name="buscar" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
    </div>

</header>

<div class="contenedor">

<?php
$busqueda = "";

if (isset($_GET['buscar'])) {
    $busqueda = $_GET['buscar'];
    $sql = "SELECT * FROM peliculas WHERE titulo LIKE '%$busqueda%'";
} else {
    $sql = "SELECT * FROM peliculas";
}

$resultado = $conn->query($sql);

while ($fila = $resultado->fetch_assoc()) {
    echo "<div class='pelicula'>";
    
    echo "<img src='img/" . $fila['imagen'] . "'>";
    
    echo "<div class='info'>";
    echo "<h3>" . $fila['titulo'] . "</h3>";
    echo "<p>" . $fila['descripcion'] . "</p>";
    echo "<p class='genero'>" . $fila['genero'] . "</p>";
    echo "</div>";

    echo "</div>";
}
?>

</div>

</body>
</html>