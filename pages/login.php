<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ../sessions/chao.php');
    exit;
}

require_once '../includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header('Location: ../sessions/chao.php');
        exit;
    } else {
        echo "<div class='container'><p>Usuario o contraseña incorrectos.</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form method="POST" action="login.php" onsubmit="return validarLogin();">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="registro.php">¿No tienes una cuenta? Regístrate aquí</a>
    </div>
    <script src="../js/validacion.js"></script>
</body>
</html>





