<?php

define('PROJECT_ROOT', __DIR__);

function class_loader($class) {
    require __DIR__ . '/src/' . $class . '.php';
}

spl_autoload_register('class_loader');

// Connection à la BDD
$dsn  = 'mysql:dbname=php-oo-seacloud;host=localhost;port=3306';
$user = 'root';
$pwd  = '';

$connection = new PDO($dsn, $user, $pwd, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
]);