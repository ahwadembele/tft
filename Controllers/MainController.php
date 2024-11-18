<?php

namespace Controllers;

class MainController
{
    private $templates;

    public function __construct()
    {
        // Initialisation du moteur de templates (Plates)
        $this->templates = new \League\Plates\Engine(__DIR__ . '/../Views');
    }

    public function index() : void
    {
        echo $this->templates->render('home', ['tftSetName' => 'Remix Rumble']);
    }
}
