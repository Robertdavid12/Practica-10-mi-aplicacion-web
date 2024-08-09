<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: sessions/chao.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a mi aplicación web</h1>
        <a href="pages/login.php">Iniciar Sesión</a> | 
        <a href="pages/registro.php">Registrar Usuario</a>
    </div>
</body>
</html>
