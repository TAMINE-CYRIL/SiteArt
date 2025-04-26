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
            <h3>Frequently Asked Questions</h3>
            
            <p class="accordion">How do I pay for the commission ?</p>
            <p class="panel">You can pay either with PayPal or by using your credit card.</p>
            
            <p class="accordion">Do you accept refunds ?</p>
            <p class="panel">If I didn\'t start yet, or I only did a quick sketch, it is possible. Otherwise, I am sorry but
            it is not possible.</p>
            
            <p class="accordion">How long does it takes ?</p>
            <p class="panel">The commission will take as much time as I need, it can be days, or weeks, but I will give you
            updates on your commission !</p>
            
            <p class="accordion">Can I add my commission as a NFT ?</p>
            <p class="panel">No.</p>
            
        ';

        $this->layout->render($content);
    }
}
