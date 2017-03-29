<?php
namespace App\Controller;

class House
{
    protected $view;
    
    public function __construct($view) {
        $this->view = $view;
    }

    public function get($request, $response, $args) {
        return $this->view->render($response, "base.twig");
    }
}