<?php

namespace controller;

use core\Layout;
use view\GalleryView;

class GalleryController
{
    public function display(){
        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('gallery');
        $viewHome = new GalleryView($layout);
        $viewHome->display();
    }


}