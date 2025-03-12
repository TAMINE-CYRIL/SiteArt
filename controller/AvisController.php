<?php

namespace controller;

use core\Layout;
use view\AvisView;

class AvisController
{

    public function display()
    {
        $layout = new Layout("view/layout.html");
        $viewHome = new AvisView($layout);
        $viewHome->display();

    }

}