<?php

namespace view;

class AvisView
{
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display(){
        $content = '
        <h2>Donnez votre avis</h2>
        <hr>
        <form>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="message">Commentaire</label>
        <textarea name="message" id="message" placeholder="Une idée d\'amélioration ? Un avis ? Une remarque ?"></textarea>
        <input type="submit" value="Envoyer">
</form>';

        $this->layout->render($content);

    }


}