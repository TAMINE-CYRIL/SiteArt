<?php

namespace core;

class Language
{
    private static $instance = null;
    private $translations = [];
    private $currentlang = 'fr';
    private $availableLang = ['fr', 'en'];

    private function __construct(){
        if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $this->availableLang)) {
            $this->currentlang = $_SESSION['lang'];
        }
        else{
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if (in_array($lang, $this->availableLang)) {
                $this->currentlang = $lang;
            }

        }
        $this->loadTranslations();

    }



    public function getCurrentLang(){
        return $this->currentlang;
    }

    public function setLang($lang){


    }

    public function getAvailableLang(){
        return $this->availableLang;
    }

    private function loadTranslations(){
        $langFile = __DIR__ . '/../lang/' . $this->currentlang . '.php';
        if (file_exists($langFile)) {
            $this->translations = include $langFile;
        }
        else{
            $this->translations = [];
        }

    }

}