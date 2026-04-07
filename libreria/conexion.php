<?php
$host = "sql102.infinityfree.com";
$db = "if0_41588469_dblibreria";
$user = "if0_41588469";
$pass = "7Yaa58Pqjb";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
