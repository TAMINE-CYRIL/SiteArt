<?php

namespace view;

class ContactView
{
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display($alerte = '', $status = '') {

        $notification = '';
        if (!empty($alerte)) {
            $notificationClass = ($status === 'success') ? 'notification success' : 'notification error';
            $notification = "<div class=\"$notificationClass\">$alerte</div>";
        }
        $content = '
              <h1>Me contacter</h1>
              <hr>
              '. $notification .'
              <form method="POST" action="/contact">
              <label for="nom">Nom*</label>
              <input type="text" name="nom" placeholder="Nom..." required/>
              <label for="email">Email*</label>
              <input type="text" name="email" placeholder="Email..." required/>
              <label for="message">Message*</label>
              <textarea name="message" placeholder="Message..." required></textarea>
              <input type="submit" />
              </form>

            ';


        $this->layout->render($content);
    }

}