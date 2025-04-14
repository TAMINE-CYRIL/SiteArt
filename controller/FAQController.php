<?php

namespace controller;

use core\Layout;
use view\ContactView;
use view\FAQView;

class FAQController
{
    public function display(){
        $layout = new Layout("view/layout.html");
        $viewHome = new FAQView($layout);
        $viewHome->display();
    }


}