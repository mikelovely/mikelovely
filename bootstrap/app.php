<?php

use App\App;
use Slim\Views\Twig;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

// $container = $app->getContainer();

require __DIR__ . '/../app/routes.php';
