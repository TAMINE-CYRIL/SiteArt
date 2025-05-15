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
            <div class="masonry-gallery" id="masonry-gallery">
                 <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Gura.png" alt="Dessin de Gawr Gura, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">Gawr Gura, Hololive</div>
                    <span class="masonry-badge">Nouveau</span>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Chihiro.png" alt="Dessin de Chihiro, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">Chihiro, Le voyage de Chihiro</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/James.png" alt="Dessin de James Lee, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">James Lee, Lookism</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Azurill.png" alt="Dessin d\'Azurill, dans le cadre du projet Pokémon Gen X" />
                    </div>
                    <div class="masonry-caption">Azurill, Projet Pokémon Gen X</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Sora.png" alt="Dessin de Tokino Sora, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">Tokino Sora, Hololive</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Mio.png" alt="Dessin de Ookami Mio, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">Ookami Mio, Hololive</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Togetic.png" alt="Dessin de Togetic, réalisé en 2025" />
                    </div>
                    <div class="masonry-caption">Togetic, Pokémon</div>
                </div>
            </div>
        ';

        $this->layout->render($content);
    }
}