<?php include("navbar.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Formulario de Contacto</h1>

<form action="guardar_contacto.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="text" name="asunto" placeholder="Asunto" required>
    <textarea name="comentario" placeholder="Comentario" required></textarea>
    <button type="submit">Enviar</button>
</form>

</body>
</html>