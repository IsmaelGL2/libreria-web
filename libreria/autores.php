<?php include("conexion.php"); ?>

<?php
$sql = "SELECT * FROM autores";
$stmt = $conexion->query($sql);
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Autores</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include("navbar.php"); ?>

<h1>👤 Autores</h1>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Ciudad</th>
</tr>

<?php foreach($autores as $autor): ?>
<tr>
    <td><?= $autor['id_autor'] ?></td>
    <td><?= $autor['nombre'] ?></td>
    <td><?= $autor['apellido'] ?></td>
    <td><?= $autor['ciudad'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>