<?php

namespace view;


class HomeView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
            <h1>Bienvenue sur la page d\'accueil</h1>
            <p>Ceci est la page principale du site.</p>
        ';

        $this->layout->render($content);
    }
}
