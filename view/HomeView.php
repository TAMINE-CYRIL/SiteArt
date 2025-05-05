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
            <section class="accueil">
            <img src="/view/img/GojoIcone.png" alt="Icone de Satoru Gojo" />
            <h2>Xano </h2>
            <h2>Illustrateur français 🍞</h2>
            </section>
            <h2>Vous pouvez me contacter et obtenir des informations supplémentaires sur mes commissions
            grâce à ce site !</h2>
            <button>Me contacter</button>
            
            <h2>Mes dernières oeuvres</h2>
            <section class="swiper mySwiper">
                <section class="swiper-wrapper">
                    <img class="swiper-slide" src="/view/img/Chihiro.png" alt="Dessin de Chihiro, réalisé en 2025" />
                    <img class="swiper-slide" src="/view/img/James.png" alt="Dessin de James Lee, réalisé en 2025" />
                    <img class="swiper-slide" src="/view/img/Azurill.png" alt="Dessin d\'Azurill, dans le cadre du projet Pokémon Gen X" />
                    <img class="swiper-slide" src="/view/img/Sora.png" alt="Dessin de Tokino Sora, réalisé en 2025" />
                </section>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> 
                <div class="swiper-pagination"></div>
            </section>

        ';

        $this->layout->render($content);
    }
}
