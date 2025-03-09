<?php

namespace view;


class LoginView {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function display() {
        $content  = '<h1>Login</h1>
        <form method="POST" action="/login">
            <input type="text" name="login" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Pas de compte ? En créer un</p>';
        $this->layout->render($content);

    }
}
