<?php

namespace view;


class CommissionView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
            <h1>Commissions</h1>
            <p>Retrouvez ici toutes les informations concernant les commissions que je prends.</p>
            
            <h2>Headshot</h2>
            <p>Je dessine la tête de votre personnage.</p>
            
            <h2>Bust up</h2>
            <p>Je dessine votre personnage jusqu\'au buste.</p>
            
            <h2>Chibi</h2>
            <p>Je dessine votre personnage avec un style chibi.</p>
            
            
            <strong>Le prix peut augmenter selon les détails du personnage !</strong>
        ';

        $this->layout->render($content);
    }
}
