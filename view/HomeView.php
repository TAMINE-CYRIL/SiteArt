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
            <hr>
            <section class="accueil">
                <img class="icone" src="/view/img/GojoIcone.png" alt="Icone de Satoru Gojo" />
                <h2>Xano </h2>
                <h2>Illustrateur français 🍞</h2>
            </section>
            
            <h2>Mes dernières oeuvres</h2>
            <div class="swiper-container">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/view/img/Chihiro.png" alt="Dessin de Chihiro, réalisé en 2025" />
                            <div class="slide-caption">Chihiro (2025)</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/view/img/James.png" alt="Dessin de James Lee, réalisé en 2025" />
                            <div class="slide-caption">James Lee (2025)</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/view/img/Azurill.png" alt="Dessin d\'Azurill, dans le cadre du projet Pokémon Gen X" />
                            <div class="slide-caption">Azurill - Projet Pokémon Gen X</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/view/img/Sora.png" alt="Dessin de Tokino Sora, réalisé en 2025" />
                            <div class="slide-caption">Tokino Sora (2025)</div>
                        </div>
                    </div>

                </div>
            </div>
        ';

        $this->layout->render($content);
    }
}