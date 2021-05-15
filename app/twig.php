<?php
require __DIR__ . '/../vendor/autoload.php';
require 'global.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../views');
$twig = new Environment($loader);

// ENABLE DEBUG : dump() function
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    // ...
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$twig->addGlobal('base_uri', $base_uri); // tambah global variable
