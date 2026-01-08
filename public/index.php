<?php
require_once __DIR__ . '/../classes/Usuario.php';

$usuario = new Usuario();
$usuarios = $usuario->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Firebase + PHP</title>
</head>
<body>

<h2>Registrar Usuario</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Guardar</button>
</form>

<hr>

<h2>Usuarios registrados</h2>

<ul>
    <?php if ($usuarios): ?>
        <?php foreach ($usuarios as $u): ?>
            <li><?= $u['nombre']; ?> - <?= $u['email']; ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No hay usuarios</li>
    <?php endif; ?>
</ul>

</body>
</html>
