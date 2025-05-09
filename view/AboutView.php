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
              <hr>
              <p>Passionné <strong>d\'art </strong>et <strong>d\'informatique</strong> depuis toujours, ce site est l\'occasion pour moi de
              mettre en avant mes deux passions. Je suis Xano, je dessine sur papier depuis 2014, et sur tablette
              depuis 2019. Bien qu\'étudiant en informatique, je fais de l\'art une de mes grandes <strong>passions.</strong>
              La découverte des mangas tels que Pandora Hearts, Naruto et Black Butler plus jeune a été une des 
              raisons qui m\'ont poussé à m\'intéresser à l\'art et à y dédier une grande partie de ma vie.             
              </p>
              
              <h1>Mon matériel</h1>
              <hr>
              <p>Carte Graphique : <strong>NVIDIA GeForce RTX 3050</strong></p>
              <p>Processeur : <strong>AMD Ryzen 7 5800H</strong></p>
              <p>Tablette graphique : <strong>XP Pen Tablet 12 2nd Generation</strong></p>
              
              <h1>Me contacter</h1>
              <hr>
              <p>Vous pouvez bien sûr me contacter à l\'aide du formulaire présent sur le site, mais également sur
              mes <strong> réseaux </strong> : Twitter, TikTok, ou encore Discord. Je réponds aux messages, qu\'ils soient professionnels,
              que vous ayez besoin d\'aide, etc... soyez juste <strong>respectueux</strong> dans votre demande !</p>
              
            ';


        $this->layout->render($content);
    }

}