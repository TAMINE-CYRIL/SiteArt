<?php

namespace view;

class GalleryView
{
    private $layout;

    public function __construct($layout){
        $this->layout = $layout;
    }

    public function display(){
        $content =  '
         <h1>Galerie</h1>
         <hr>
         <h3>Retrouvez ici l\'historique des mes dessins.</h3>
         <img src="#" alt="Dessins réalisés en 2025" />
         <img src="#" alt="Dessins réalisés en 2024" />
         <img src="#" alt="Dessins réalisés en 2023" />
         <img src="#" alt="Dessins réalisés en 2022" />

        ';

        $this->layout->render($content);

    }

}