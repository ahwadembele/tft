<?php

// Inclusion du fichier contenant la classe Psr4AutoloaderClass
require_once __DIR__ . '/Helpers/Psr4AutoloaderClass.php';
require_once __DIR__ . '/Vendor/autoload.php'; // Assure-toi que le fichier autoload est bien inclus

// Création de l'instance de l'autoloader
$loader = new \Helpers\Psr4AutoloaderClass();
$loader->register();

// Enregistrement des namespaces et des répertoires associés
$loader->addNamespace('Controllers', __DIR__ . '/Controllers');

// Utilisation du moteur de templates Plates
use League\Plates\Engine;
use Controllers\MainController; // Assure-toi que ce "use" est bien là

// Instancier le contrôleur et appeler la méthode index
$controller = new MainController();
$controller->index();
