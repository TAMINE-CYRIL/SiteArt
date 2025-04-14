<?php

namespace controller;

use core\Layout;
use view\CommissionView;

class CommissionController
{
    public function display(){
        $layout = new Layout("view/layout.html");
        $viewHome = new CommissionView($layout);
        $viewHome->display();
    }


}