<?php
try {
    $pdo = new PDO('sqlite:' . __DIR__ . '/database.db');
    // Configurar el modo de error a excepción.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}
?>


