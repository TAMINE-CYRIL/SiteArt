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
                $referer = $_SERVER['HTTP_REFERER'] ?? '/';

                $referer = preg_replace('/[?&]lang=[^&]*/', '', $referer);

                header("Location: $referer");
                exit;
            }
        }
        header("Location: /");
        exit;

    }
}
