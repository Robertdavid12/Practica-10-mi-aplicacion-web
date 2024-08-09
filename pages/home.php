<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../pages/login.php');
    exit;
}

echo "¡Bienvenido " . $_SESSION['username'] . "!";
?>
<br>
<a href="../sessions/chao.php">Ir a Chao</a>
<br>
<a href="../sessions/cerrar_session.php">Cerrar Sesión</a>
