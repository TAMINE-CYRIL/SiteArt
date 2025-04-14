<?php

namespace controller;

use core\Layout;
use view\HomeView;

class HomeController
{
    public function display(): void
    {
        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('home');
        $viewHome = new HomeView($layout);
        $viewHome->display();
    }
}