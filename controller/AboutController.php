<?php

namespace controller;

use core\Layout;
use view\AboutView;

class AboutController
{
    public function display(): void
    {
        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('about');
        $viewHome = new AboutView($layout);
        $viewHome->display();
    }
}