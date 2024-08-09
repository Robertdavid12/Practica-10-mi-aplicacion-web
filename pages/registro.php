<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ../sessions/chao.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Registrar Usuario</h1>
        <form method="POST" action="../sessions/registrar_usuario.php" onsubmit="return validarRegistro();">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit">Registrarse</button>
        </form>
        <a href="login.php">¿Ya tienes una cuenta? Inicia Sesión</a>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html>
