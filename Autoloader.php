<?php

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {
            // Nettoie le namespace
            $class = ltrim($class, '\\');

            // Convertit le namespace en chemin de fichier
            $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

            // Debug : Affiche l'endroit où il cherche la classe
            if (!file_exists($file)) {
                die("❌ Autoloader : Classe introuvable → $file");
            }

            require $file;
        });
    }
}

Autoloader::register();
