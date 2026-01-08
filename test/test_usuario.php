<?php
require_once __DIR__ . '/../classes/Usuario.php';

echo "<h1>TEST DE CONEXIÓN A FIREBASE</h1>";

// 1. Crear usuario de prueba
$usuarioTest = new Usuario("Usuario Prueba", "prueba@firebase.com");

// 2. Guardar en Firebase
$usuarioTest->guardar();
echo "<p>✅ Usuario guardado correctamente</p>";

// 3. Obtener usuarios
$usuarios = $usuarioTest->obtenerTodos();

echo "<h2>Usuarios en la base de datos:</h2>";

if ($usuarios) {
    echo "<ul>";
    foreach ($usuarios as $id => $u) {
        echo "<li><strong>ID:</strong> $id <br>
              Nombre: {$u['nombre']} <br>
              Email: {$u['email']}</li><hr>";
    }
    echo "</ul>";
} else {
    echo "<p>❌ No hay usuarios</p>";
}
