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
            
            <p>How do I pay for the commission ?</p>
            <p>You can pay either with PayPal or by using your credit card.</p>
            
            <p>Do you accept refunds ?</p>
            <p>If I didn\'t start yet, or I only did a quick sketch, it is possible. Otherwise, I am sorry but
            it is not possible.</p>
            
            <p>How long does it takes ?</p>
            <p>The commission will take as much time as I need, it can be days, or weeks, but I will give you
            updates on your commission !</p>
            
            <p>Can I add my commission as a NFT ?</p>
            <p>No.</p>
            
        ';

        $this->layout->render($content);
    }
}
