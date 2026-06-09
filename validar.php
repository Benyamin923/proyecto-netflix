<?php
session_start();

include("conexion.php");

// Validar que lleguen datos
if (!isset($_POST['usuario']) || !isset($_POST['password'])) {
    header("Location: index.php?error=1");
    exit();
}

$usuario = trim($_POST['usuario']);
$password = $_POST['password'];

// Validar campos vacíos
if (empty($usuario) || empty($password)) {
    header("Location: index.php?error=1");
    exit();
}

// Buscar usuario
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado = $conn->query($sql);

if ($resultado->num_rows === 1) {

    $fila = $resultado->fetch_assoc();

    if (password_verify($password, $fila['password'])) {

        // Guardar sesión
        $_SESSION['usuario'] = $usuario;

        header("Location: home.php");
        exit();

    } else {

        header("Location: index.php?error=1");
        exit();

    }

} else {

    header("Location: index.php?error=1");
    exit();

}
?>