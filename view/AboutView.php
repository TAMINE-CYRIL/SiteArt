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
              <p>Ordinateur : </p>
              <p>Tablette graphique : </p>

            ';


        $this->layout->render($content);
    }

}