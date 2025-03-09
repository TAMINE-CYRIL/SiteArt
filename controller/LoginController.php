<?php

namespace controller;

use core\Layout;
use view\LoginView;

class LoginController
{
    public function display(): void
    {
        $layout = new Layout("view/layout.html");
        $viewHome = new LoginView($layout);
        $viewHome->display();
    }
}