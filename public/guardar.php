<?php
require_once __DIR__ . '/../classes/Usuario.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$usuario = new Usuario($nombre, $email);
$usuario->guardar();

header("Location: index.php");
exit;
