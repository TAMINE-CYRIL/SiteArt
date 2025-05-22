<?php

namespace view;

use core\Language;

class ContactView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display($alerte = '', $status = '') {
        $language = Language::getInstance();

        $notification = '';
        if (!empty($alerte)) {
            $notificationClass = ($status === 'success') ? 'notification success' : 'notification error';
            $notification = "<div class=\"$notificationClass\">$alerte</div>";
        }

        $content = '
            <h1>'. $language->get('contact.title') .'</h1>
            <hr>
            '. $notification .'
            <form method="POST" action="/contact">
                <label for="nom">'. $language->get('contact.name') .'*</label>
                <input type="text" name="nom" placeholder="'. $language->get('contact.name') .'..." required/>
                <label for="email">'. $language->get('contact.email') .'*</label>
                <input type="email" name="email" placeholder="'. $language->get('contact.email') .'..." required/>
                <label for="message">'. $language->get('contact.message') .'*</label>
                <textarea name="message" placeholder="'. $language->get('contact.message') .'..." required></textarea>
                <input type="submit" value="'. $language->get('contact.submit') .'" />
            </form>
        ';

        $this->layout->render($content);
    }
}