<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $comentario = $_POST['comentario'] ?? '';

    $sql = "INSERT INTO contacto (correo, nombre, asunto, comentario)
            VALUES (:correo, :nombre, :asunto, :comentario)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":asunto", $asunto);
    $stmt->bindParam(":comentario", $comentario);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje enviado</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("navbar.php"); ?>

    <div class="mensaje">
        <h1>Mensaje enviado correctamente</h1>
        <p>Los datos fueron guardados en la tabla contacto.</p>
        <a href="contacto.php">Volver</a>
    </div>
</body>
</html>