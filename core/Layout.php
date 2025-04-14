<?php

namespace core;

class Layout
{
    private $template;
    private $currentPage;

    public function __construct($template)
    {
        $this->template = $template;
        $this->currentPage = '';
    }

    public function setCurrentPage($page)
    {
        $this->currentPage = $page;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    public function render($content)
    {
        include $this->template;
    }
}