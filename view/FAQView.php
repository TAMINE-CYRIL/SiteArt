<?php

namespace view;


class FAQView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
            <h1>FAQ</h1>
            <hr>
            <h3>Frequently Asked Questions</h3>
            <h5>Je réponds à vos questions les plus posées.</h5>
            
            <p class="accordion">Comment je paye la commission ?</p>
            <p class="panel">Vous pouvez me payer par PayPal ou par carte de crédit.</p>
            
            <p class="accordion">Acceptes-tu les remboursements ?</p>
            <p class="panel">Si je n\'ai pas encore commencé, ou si je n\'ai fait qu\'un sketch, c\'est possible, autrement
            je suis désolé mais un remboursement est impossible.</p>
            
            <p class="accordion">Combien de temps une commission prend-elle ?</p>
            <p class="panel">La commission prendra autant de temps que nécessaire, cependant je vous enverrai fréquemment des
            nouvelles de votre commission ! </p>
            
            <p class="accordion">Puis-je utiliser ma commission comme un NFT ?</p>
            <p class="panel">Non.</p>
            
            <section class="icandraw">
            
            <h3>✅ Ce que je peux dessiner :</h3>
            <ul>
                <li>Des êtres humains</li>
                <li>Des Pokémons (simples)</li>
            </ul>
            
           <h3>❌ Ce que je ne peux pas dessiner :</h3>
           <ul>
                <li>Du gore</li>
                <li>Du NSFW</li>
                <li>Des mecha</li>
                <li>Des furry</li>
            </ul>
           </section>


            
        ';

        $this->layout->render($content);
    }
}
