<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../pages/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_unset();
    session_destroy();
    header('Location: ../pages/login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despedida</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <p class="welcome-message">Adiós, <?php echo $_SESSION['username']; ?>!</p>
        <form method="POST">
            <button type="submit">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>

