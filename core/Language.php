<?php

namespace core;

class Language
{
    private static $instance = null;
    private $translations = [];
    private $currentlang = 'fr';
    private $availableLang = ['fr', 'en'];

    private function __construct(){
        session_start();
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

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getCurrentLang(){
        return $this->currentlang;
    }

    public function setLang($lang){
        if (in_array($lang, $this->availableLang)) {
            $this->currentlang = $lang;
            $_SESSION['lang'] = $lang;
            setcookie('lang', $lang, time() + (86400 * 30), "/");
            $this->loadTranslations();
            return true;
        }
        return false;

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

    public function get($key, $placeholders=[]){
        $keys = explode('.', $key);
        $value = $this->translations;

        foreach ($keys as $key) {
            if (isset($value[$key])) {
                $value = $value[$key];
            }
            else {
                return $key;
            }
        }

        return $value;
    }


}