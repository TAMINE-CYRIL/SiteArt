<?php

namespace view;


class FAQView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
            <h1>FAQ</h1>
            <h3>Frequently Asked Questions</h3>
        ';

        $this->layout->render($content);
    }
}
