<?php

namespace core;

class Layout
{
    private $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    public function render($content)
    {
        include $this->template;
    }
}