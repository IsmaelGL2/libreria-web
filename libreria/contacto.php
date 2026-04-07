<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card border-0 shadow rounded-4 overflow-hidden">
                <div class="bg-dark text-white text-center p-4">
                    <h1 class="fw-bold mb-2">📩 Contáctanos</h1>
                    <p class="mb-0">Envíanos tus dudas, comentarios o sugerencias</p>
                </div>

                <div class="card-body p-4 p-md-5">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <div class="me-2 fs-4">ℹ️</div>
                        <div>
                            Completa el formulario y tu mensaje será almacenado en la base de datos.
                        </div>
                    </div>

                    <form action="guardar_contacto.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="correo" class="form-label fw-semibold">Correo electrónico</label>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="asunto" class="form-label fw-semibold">Asunto</label>
                            <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Escribe el asunto" required>
                        </div>

                        <div class="mb-4">
                            <label for="comentario" class="form-label fw-semibold">Comentario</label>
                            <textarea name="comentario" id="comentario" class="form-control" rows="6" placeholder="Escribe tu mensaje aquí..." required></textarea>
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
