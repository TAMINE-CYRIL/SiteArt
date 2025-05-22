<?php

require __DIR__ . '/Autoloader.php';

use controller\AboutController;
use controller\GalleryController;
use controller\HomeController;
use controller\FAQController;
use controller\ContactController;
use controller\CommissionController;
use controller\LanguageController;
use core\Language;

$language = Language::getInstance();

// Récupérer l'URL sans query string
$request_uri = $_SERVER['REQUEST_URI'];
$position = strpos($request_uri, '?');
if ($position !== false) {
    $request_uri = substr($request_uri, 0, $position);
}

// Nettoyer l'URI
$request_uri = trim($request_uri, '/');

// Router vers le bon contrôleur
if ($request_uri === '' || $request_uri === 'index.php') {
    $controller = new HomeController();
    $controller->display();
}
elseif ($request_uri === 'commissions') {
    $controller = new CommissionController();
    $controller->display();
}
elseif ($request_uri === 'gallery'){
    $controller = new GalleryController();
    $controller->display();
}
elseif (preg_match('/^gallery\/(\d{4})$/', $request_uri, $matches)) {
    // Gestion des sous-pages gallery/YEAR
    $year = $matches[1];
    $controller = new GalleryController();
    // Vous pourriez ajouter une méthode pour afficher par année
    $controller->display();
}
elseif ($request_uri === 'faq') {
    $controller = new FAQController();
    $controller->display();
}
elseif ($request_uri === 'about') {
    $controller = new AboutController();
    $controller->display();
}
elseif ($request_uri === 'contact') {
    $controller = new ContactController();
    $controller->display();
}
elseif ($request_uri === 'lang') {
    $controller = new LanguageController();
    $controller->changeLanguage();
}
else {
    header("HTTP/1.0 404 Not Found");
    die("Erreur 404 : Page non trouvée.");
}