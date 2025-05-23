<?php

namespace view;

use core\Language;

class AboutView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $language = Language::getInstance();

        $content = '
            <h1>'. $language->get('about.title') .'</h1>
            <hr>
            <p>'. $language->get('about.description') .'</p>
            
            <h1>'. $language->get('about.material_title') .'</h1>
            <hr>
            <p>'. $language->get('about.graphic_card') .' <strong>NVIDIA GeForce RTX 3050</strong></p>
            <p>'. $language->get('about.processor') .' <strong>AMD Ryzen 7 5800H</strong></p>
            <p>'. $language->get('about.graphic_tablet') .' <strong>XP Pen Tablet 12 2nd Generation</strong></p>
            
            <h1>'. $language->get('about.contact_title') .'</h1>
            <hr>
            <p>'. $language->get('about.contact_description') .'</p>
        ';

        $this->layout->render($content);
    }
}