<?php
require_once 'includes/conexion.php';

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
)";

$pdo->exec($sql);
echo "Base de datos y tabla de usuarios creadas correctamente.";
?>

