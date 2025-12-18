<?php

require __DIR__ . '/vendor/autoload.php';

use App\User;

$request_uri = $_SERVER['REQUEST_URI'];

$user = new User();

if ($request_uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $users = $user->getAll();
    include 'views/users.php';
} elseif ($request_uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $user->create($_POST);
    header('Location: /users');
} elseif (strpos($request_uri, '/users/delete/') === 0) {
    $id = substr($request_uri, strlen('/users/delete/'));
    $user->delete($id);
    header('Location: /users');
} else {
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
