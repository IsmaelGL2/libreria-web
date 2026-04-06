<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow border-0 text-center">
                <div class="card-body p-5">
                    <h1 class="text-success fw-bold mb-3">✅ Mensaje enviado</h1>
                    <p class="text-muted mb-4">Tus datos fueron guardados correctamente en la base de datos.</p>
                    <a href="contacto.php" class="btn btn-primary">Volver al formulario</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
