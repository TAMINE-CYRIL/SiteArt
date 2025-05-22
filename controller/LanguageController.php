<?php
namespace controller;

use core\Language;

class LanguageController
{
    public function changeLanguage(): void{
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            $language = Language::getInstance();

            if ($language->setLang($lang)) {
                // Rediriger vers la page précédente ou l'accueil
                $referer = $_SERVER['HTTP_REFERER'] ?? '/';

                // Nettoyer l'URL de référence pour éviter les boucles
                $referer = preg_replace('/[?&]lang=[^&]*/', '', $referer);

                header("Location: $referer");
                exit;
            }
        }
        header("Location: /");
        exit;

    }
}
