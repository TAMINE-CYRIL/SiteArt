<?php

namespace view;

class AboutView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $language = \core\Language::getInstance();

        $content = '
            <h1>'. $language->get('about.title') .'</h1>
            <hr>
            <p>'. $language->get('about.description') .'</p>
            
            <h1>'. $language->get('about.material_title') .'</h1>
            <hr>
            <p>Carte Graphique : <strong>NVIDIA GeForce RTX 3050</strong></p>
            <p>Processeur : <strong>AMD Ryzen 7 5800H</strong></p>
            <p>Tablette graphique : <strong>XP Pen Tablet 12 2nd Generation</strong></p>
            
            <h1>'. $language->get('about.contact_title') .'</h1>
            <hr>
            <p>'. $language->get('about.contact_description') .'</p>
        ';

        $this->layout->render($content);
    }
}