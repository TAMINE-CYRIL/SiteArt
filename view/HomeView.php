<?php

namespace view;


class HomeView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
            <h1>Bienvenue sur la page d\'accueil !</h1>
            <p>Je suis Xano, illustrateur français spécialiste dans le style animé et semi-réaliste.
            Sur ce site, tu découvriras mes créations et tu pourras passer commande pour une illustration personnalisée, 
            selon tes envies.</p>
            
            <h2>Vous pouvez me contacter et obtenir des informations supplémentaires sur mes commissions
            grâce à ce site !</h2>
            <button>Me contacter</button>
            
            <h2>Mes dernières oeuvres</h2>
            <section class="galerie">
            <img src="https://pbs.twimg.com/media/Goh23XpXQAAo9mP?format=jpg&name=large" alt="Dessin de Chihiro, réalisé en 2025" />
            <img src="https://pbs.twimg.com/media/Gpam_FzXAAAl-3G?format=jpg&name=large" alt="Dessin de James Lee, réalisé en 2025" />
            <img src="./img/Ghibli.png" alt="Autoportrait dans le style du studio Ghibli" />
            <img src="./img/Gura.png" alt="Dessin de Gawr Gura, réalisé en 2025" />
    
</section>
        ';

        $this->layout->render($content);
    }
}
