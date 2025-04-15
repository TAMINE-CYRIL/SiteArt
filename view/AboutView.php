<?php

namespace view;

class AboutView
{
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
              <h1>Qui suis-je ?</h1>
              <p>Passionné d\'art et d\'informatique depuis toujours, ce site est l\'occasion pour moi de
              mettre en avant mes deux passions. Je suis Xano, je dessine sur papier depuis 2014, et sur tablette
              depuis 2019.</p>
              
              <h1>Mon matériel</h1>
              <p>Carte Graphique : <strong>NVIDIA GeForce RTX 3050</strong></p>
              <p>Processeur : <strong>AMD Ryzen 7 5800H</strong></p>
              <p>Tablette graphique : <strong>XP Pen Tablet 12 2nd Generation</strong></p>
            ';


        $this->layout->render($content);
    }

}