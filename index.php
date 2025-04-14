<?php

require __DIR__ . '/Autoloader.php';

use controller\AboutController;
use controller\HomeController;
use controller\LoginController;
use controller\ContactController;

$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($request_uri === '' || $request_uri === 'index.php') {
    $controller = new HomeController();
    $controller->display();
} elseif ($request_uri === 'index.php/about') {
    $controller = new AboutController();
    $controller->display();
}
elseif ($request_uri === 'index.php/login') {
    $controller = new LoginController();
    $controller->display();
}
elseif ($request_uri === 'index.php/contact') {
    $controller = new ContactController();
    $controller->display();
}
else {
    die("Erreur 404 : Page non trouvée.");
}
