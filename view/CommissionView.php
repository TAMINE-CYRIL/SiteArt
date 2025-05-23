<?php

namespace view;
use core\Language;

class CommissionView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $language = Language::getInstance();

        $content = '
            <h1 class="typewrite"> Commissions </h1>
            <p>'. $language->get('commissions.description') .'</p>
            <hr>
            
            <h2>Headshot</h2>
            <p>'. $language->get('commissions.headshot_desc') .'</p>
            <hr>
            
            <h2>Bust up</h2>
            <p>'. $language->get('commissions.bust_up_desc') .'</p>
            <hr>
            
            <h2>Chibi</h2>
            <p>'. $language->get('commissions.chibi_desc') .'</p>
            <hr>
            
            <strong>'. $language->get('commissions.price_note') .'</strong>
        ';

        $this->layout->render($content);
    }
}
