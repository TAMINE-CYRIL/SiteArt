<?php

namespace view;
use core\Language;

class GalleryView
{
    private $layout;

    public function __construct($layout){
        $this->layout = $layout;
    }

    public function display(){
        $language = Language::getInstance();
        $content =  '
         <h1>'. $language->get('gallery.title') .'</h1>
         <hr>
         <h3>'. $language->get('gallery.description') .'</h3>
            <div class="masonry-gallery" id="masonry-gallery">
                 <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Gura.png" alt="Gawr Gura" />
                    </div>
                    <div class="masonry-caption">Gawr Gura, Hololive</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Chihiro.png" alt="Chihiro" />
                    </div>
                    <div class="masonry-caption">Chihiro</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/James.png" alt="James Lee" />
                    </div>
                    <div class="masonry-caption">James Lee, Lookism</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Azurill.png" alt="Azurill" />
                    </div>
                    <div class="masonry-caption">Azurill, Pokémon Gen X</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Sora.png" alt="Tokino Sora" />
                    </div>
                    <div class="masonry-caption">Tokino Sora, Hololive</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Mio.png" alt="Ookami Mio" />
                    </div>
                    <div class="masonry-caption">Ookami Mio, Hololive</div>
                </div>
                <div class="masonry-item">
                    <div class="zoom-container">
                        <img src="/view/img/Togetic.png" alt="Togetic" />
                    </div>
                    <div class="masonry-caption">Togetic, Pokémon</div>
                </div>
            </div>
        ';

        $this->layout->render($content);
    }
}