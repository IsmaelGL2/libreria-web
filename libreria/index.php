<?php
include("conexion.php");

$sql = "SELECT * FROM titulos";
$stmt = $conexion->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalLibros = count($libros);

$sqlAutores = "SELECT COUNT(*) as total FROM autores";
$stmtAutores = $conexion->query($sqlAutores);
$totalAutores = $stmtAutores->fetch(PDO::FETCH_ASSOC)['total'];

$sqlTipos = "SELECT COUNT(DISTINCT tipo) as total FROM titulos";
$stmtTipos = $conexion->query($sqlTipos);
$totalTipos = $stmtTipos->fetch(PDO::FETCH_ASSOC)['total'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php include("navbar.php"); ?>

<div class="container py-5">

    <div class="p-5 mb-4 bg-dark text-white rounded-4 shadow">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">📚 Librería Online</h1>
            <p class="col-md-8 fs-5">
                Bienvenido al portal de consulta de libros y autores. Aquí puedes explorar el catálogo disponible
                y enviar tus consultas a través del formulario de contacto.
            </p>
            <a href="contacto.php" class="btn btn-primary btn-lg">Contáctanos</a>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total de Libros</h5>
                    <h2 class="fw-bold text-primary"><?= $totalLibros ?></h2>
                    <p class="mb-0">Libros registrados en la base de datos</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total de Autores</h5>
                    <h2 class="fw-bold text-success"><?= $totalAutores ?></h2>
                    <p class="mb-0">Autores disponibles en el sistema</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title text-muted">Tipos de Libros</h5>
                    <h2 class="fw-bold text-warning"><?= $totalTipos ?></h2>
                    <p class="mb-0">Categorías distintas registradas</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <h2 class="fw-bold">Listado de Libros</h2>
        <p class="text-muted">Consulta rápida del inventario disponible</p>
    </div>

    <div class="card shadow border-0 rounded-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Tipo</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($libros as $libro): ?>
                        <tr>
                            <td><?= htmlspecialchars($libro['id_titulo']) ?></td>
                            <td><?= htmlspecialchars($libro['titulo']) ?></td>
                            <td>
                                <span class="badge bg-secondary">
                                    <?= htmlspecialchars($libro['tipo']) ?>
                                </span>
                            </td>
                            <td>
                                <?= ($libro['precio'] !== null && $libro['precio'] !== '') ? '$' . htmlspecialchars($libro['precio']) : 'N/D' ?>
                            </td>
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
