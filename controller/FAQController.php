<?php

namespace controller;

use core\Layout;
use view\FAQView;

class FAQController
{
    public function display(){
        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('faq');
        $viewHome = new FAQView($layout);
        $viewHome->display();
    }


}