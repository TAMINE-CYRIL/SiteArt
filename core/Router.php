<?php

namespace core;

require_once 'controller/HomeController.php';
require_once 'controller/AboutController.php';

use controller\HomeController;
use controller\AboutController;

class Router
{
    public function route(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ('/' == $uri) {
            $controller = new HomeController();
            $controller->index();
        }

        elseif ('/about' == $uri) {
            echo "About page requested";  // Ajoute cette ligne pour déboguer
            $controller = new AboutController();
            $controller->index();
        }


        else {
            echo "Page non disponible !";
            var_dump($uri);

            exit;
        }
    }
}
