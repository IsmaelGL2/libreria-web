<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h1 class="fw-bold">📩 Contáctanos</h1>
                        <p class="text-muted">Envíanos tus dudas o comentarios</p>
                    </div>

                    <form action="guardar_contacto.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Asunto</label>
                            <input type="text" name="asunto" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Comentario</label>
                            <textarea name="comentario" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar mensaje</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
