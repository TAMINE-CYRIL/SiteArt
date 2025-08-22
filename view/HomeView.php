<?php

namespace view;

use core\Language;

class HomeView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $language = Language::getInstance();

        $content = '
            <h1>'. $language->get('home.title') . '</h1>
            <hr>
            <section class="accueil">
                <img class="icone" src="/view/img/YorIcone.png" alt="Icone de la page, représentant Yor" />
                <section class="accueil-texte">
                    <h2>'. $language->get('home.presentation') .' Xano <div class="emoji">👋</div></h2>
                    <h2>'. $language->get('home.subtitle') .' 🎨🖌️</h2>
                </section>
            </section>
            
            <h2>'. $language->get('home.latest_works') .'</h2>
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
                            <div class="slide-caption">Azurill - Pokémon Gen X</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/view/img/Sora.png" alt="Dessin de Tokino Sora, réalisé en 2025" />
                            <div class="slide-caption">Tokino Sora (2025)</div>
                        </div>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        ';

        $this->layout->render($content);
    }
}
