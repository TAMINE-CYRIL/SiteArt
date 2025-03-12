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
            <h1>Les créateurs</h1>
            <h3>Cyril</h3>
            <p>Enchanté, ici l\'un des créateurs d\'Anime Central Hub, je m\'appelle Cyril, 
            mais j\'utilise le pseudo Xano sur Internet. Passionné depuis toujours par l\'animation japonaise et 
            travaillant en informatique, ce site était donc l\'occasion idéale de combiner mes compétences à ma 
            passion.</p>
            <h3>Baptiste</h3>
            <p>Bonjour et bienvenue sur Anime Central Hub,je suis Baptiste alias Soren. Fan d\'animé depuis 
            quelques années ce projet me permet de parler d\'un sujet que j\'adore tout en apprenant à developper.
            PS : Allez voir Jujutsu Kaisen c\'est vraiment trop bien.</p>
            <h3>Estelle</h3>
            <p>Bienvenue sur notre site de critiques d\'animés ! Je m\'appelle Estelle et fait partie des créateurs de la plateforme. 
            Amatrice d\'animés en tout genre, ce projet de développement est une opportunité parfaite pour 
            m\'exercer au niveau professionnel mais aussi apprendre et discuter de ce sujet passionnant.</p>
            ';



        $this->layout->render($content);
    }

}