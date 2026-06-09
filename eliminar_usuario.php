<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");

// Verificar que llegó un ID
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {

        header("Location: admin_usuarios.php");
        exit();

    } else {

        echo "Error al eliminar: " . $conn->error;

    }

} else {

    echo "ID no válido";

}
?>