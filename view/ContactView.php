<?php

namespace view;

class ContactView
{
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content = '
              <h1>Me contacter</h1>
              <form>
              <label for="nom">Nom</label>
              <input type="text" name="nom" />
              <label for="email">Email</label>
              <input type="text" name="email" />
              <label for="message">Message</label>
              <textarea name="message"></textarea>
              </form>

            ';


        $this->layout->render($content);
    }

}