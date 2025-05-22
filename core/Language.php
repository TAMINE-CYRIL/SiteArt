<?php
// core/Language.php - Version corrigée
namespace core;

class Language
{
    private static $instance = null;
    private $translations = [];
    private $currentlang = 'fr';
    private $availableLang = ['fr', 'en'];

    private function __construct(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $this->availableLang)) {
            $this->currentlang = $_SESSION['lang'];
        }
        else {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'fr', 0, 2);
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
        $langFile = __DIR__ . '/lang/' . $this->currentlang . '.php';
        if (file_exists($langFile)) {
            $this->translations = include $langFile;
        }
        else{
            // Fallback vers français si le fichier n'existe pas
            $fallbackFile = __DIR__ . '/lang/fr.php';
            if (file_exists($fallbackFile)) {
                $this->translations = include $fallbackFile;
            } else {
                $this->translations = [];
            }
        }
    }

    public function get($key, $placeholders = []){
        $keys = explode('.', $key);
        $value = $this->translations;

        foreach ($keys as $keyPart) {
            if (isset($value[$keyPart])) {
                $value = $value[$keyPart];
            }
            else {
                return "[$key]";
            }
        }

        if (!empty($placeholders) && is_string($value)) {
            foreach ($placeholders as $placeholder => $replacement) {
                $value = str_replace($placeholder, $replacement, $value);
            }
        }

        return $value;
    }

    public static function t($key, $placeholders = []) {
        return self::getInstance()->get($key, $placeholders);
    }
}