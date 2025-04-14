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
            <p>Je suis Xano, un artiste français !</p>
            
            <h2>Vous pouvez me contacter et obtenir des informations supplémentaires sur mes commissions
            grâce à ce site !</h2>
            
            <h2>La galerie</h2>
        ';

        $this->layout->render($content);
    }
}
