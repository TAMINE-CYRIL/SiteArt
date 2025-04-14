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
            <p>Retrouvez ici toutes les informations concernant les commissions que je prends</p>
        ';

        $this->layout->render($content);
    }
}
