<?php

namespace controller;

use core\Layout;
use view\ContactView;

class ContactController
{
    public function display(){
        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('contact');
        $viewHome = new ContactView($layout);
        $viewHome->display();
    }


}