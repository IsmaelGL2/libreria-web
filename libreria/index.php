<?php include("conexion.php"); ?>

<?php
$sql = "SELECT * FROM titulos";
$stmt = $conexion->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Librería - Libros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include("navbar.php"); ?>

<h1>📚 Listado de Libros</h1>

<table>
<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Tipo</th>
    <th>Precio</th>
</tr>

<?php foreach($libros as $libro): ?>
<tr>
    <td><?= $libro['id_titulo'] ?></td>
    <td><?= $libro['titulo'] ?></td>
    <td><?= $libro['tipo'] ?></td>
    <td><?= $libro['precio'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>