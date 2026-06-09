<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];

$sql = "UPDATE usuarios
        SET nombre='$nombre',
            usuario='$usuario'
        WHERE id=$id";

if($conn->query($sql) === TRUE){

    header("Location: admin_usuarios.php");
    exit();

}else{

    echo "Error: " . $conn->error;

}
?>