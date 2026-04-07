<?php
include("conexion.php");

$sql = "SELECT * FROM autores";
$stmt = $conexion->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalAutores = count($autores);

$sqlCiudades = "SELECT COUNT(DISTINCT ciudad) as total FROM autores";
$stmtCiudades = $conexion->query($sqlCiudades);
$totalCiudades = $stmtCiudades->fetch(PDO::FETCH_ASSOC)['total'];

$sqlPaises = "SELECT COUNT(DISTINCT pais) as total FROM autores";
$stmtPaises = $conexion->query($sqlPaises);
$totalPaises = $stmtPaises->fetch(PDO::FETCH_ASSOC)['total'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores | Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">

    <div class="p-5 mb-4 bg-dark text-white rounded-4 shadow">
        <div class="container-fluid py-3">
            <h1 class="display-6 fw-bold">✍️ Autores registrados</h1>
            <p class="col-md-8 fs-5">
                Explora el listado de autores disponibles en la base de datos de la librería online.
            </p>
            <a href="index.php" class="btn btn-primary btn-lg">Ver libros</a>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total de Autores</h5>
                    <h2 class="fw-bold text-primary"><?= $totalAutores ?></h2>
                    <p class="mb-0">Autores registrados en el sistema</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Ciudades</h5>
                    <h2 class="fw-bold text-success"><?= $totalCiudades ?></h2>
                    <p class="mb-0">Ciudades distintas registradas</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Países</h5>
                    <h2 class="fw-bold text-warning"><?= $totalPaises ?></h2>
                    <p class="mb-0">Países distintos en la base de datos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <h2 class="fw-bold">Listado de Autores</h2>
        <p class="text-muted">Consulta la información general de los autores registrados</p>
    </div>

    <div class="card shadow border-0 rounded-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($autores as $autor): ?>
                        <tr>
                            <td><?= htmlspecialchars($autor['id_autor']) ?></td>
                            <td><?= htmlspecialchars(trim($autor['nombre'])) ?></td>
                            <td><?= htmlspecialchars(trim($autor['apellido'])) ?></td>
                            <td><?= htmlspecialchars($autor['telefono']) ?></td>
                            <td><?= htmlspecialchars($autor['ciudad']) ?></td>
                            <td>
                                <span class="badge bg-secondary">
                                    <?= htmlspecialchars($autor['estado']) ?>
                                </span>
                            </td>
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
