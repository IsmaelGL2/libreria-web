<?php
include("conexion.php");

$sql = "SELECT * FROM autores";
$stmt = $conexion->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold">✍️ Listado de Autores</h1>
        <p class="text-muted">Consulta los autores registrados en la base de datos</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($autores as $autor): ?>
                        <tr>
                            <td><?= htmlspecialchars($autor['id_autor']) ?></td>
                            <td><?= htmlspecialchars($autor['nombre']) ?></td>
                            <td><?= htmlspecialchars($autor['apellido']) ?></td>
                            <td><?= htmlspecialchars($autor['telefono']) ?></td>
                            <td><?= htmlspecialchars($autor['ciudad']) ?></td>
                            <td><?= htmlspecialchars($autor['pais']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>
