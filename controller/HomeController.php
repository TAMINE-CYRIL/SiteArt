<?php

namespace controller;
require_once 'view/HomeView.php';

use core\Layout;
use view\HomeView;

class HomeController
{
    public function display(): void
    {
        $layout = new Layout("view/layout.html");
        $viewHome = new HomeView($layout);
        $viewHome->display();
    }

}