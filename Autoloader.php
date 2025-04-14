<?php

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {
            $class = ltrim($class, '\\');

            $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

            if (!file_exists($file)) {
                die("Autoloader : Classe introuvable → $file");
            }

            require $file;
        });
    }
}

Autoloader::register();
