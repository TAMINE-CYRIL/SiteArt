<?php

namespace view;
use core\Language;

class FAQView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $language = Language::getInstance();
        $content = '
            <h1>FAQ</h1>
            <hr>
            <h3>Frequently Asked Questions</h3>
            <h5>'. $language->get('faq.description') .'</h5>
            
            <p class="accordion">'. $language->get('faq.payment_question') .'</p>
            <p class="panel">'. $language->get('faq.payment_answer') .'</p>
            
            <p class="accordion">'. $language->get('faq.refund_question') .'</p>
            <p class="panel">'. $language->get('faq.refund_answer') .'</p>
            
            <p class="accordion">'. $language->get('faq.time_question') .'</p>
            <p class="panel">'. $language->get('faq.time_answer') .' </p>
            
            <p class="accordion">'. $language->get('faq.nft_question') .'</p>
            <p class="panel">'. $language->get('faq.nft_answer') .'</p>
            
            <section class="icandraw">      
                <section class="ican">
                    <h3>'. $language->get('faq.can_draw') .'</h3>
                    <ul>
                        <li>'. $language->get('faq.can_draw_humain') .'</li>
                        <li>Pokémons</li>
                    </ul>
                </section>
                <section class="icant">
                   <h3>'. $language->get('faq.cannot_draw') .'</h3>
                   <ul>
                        <li>Gore</li>
                        <li>NSFW</li>
                        <li>Mecha</li>
                        <li>Furry</li>
                    </ul>
                </section>
           </section>


            
        ';

        $this->layout->render($content);
    }
}
