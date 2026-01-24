<?php 
//chemin absolu vers mon projet : 
define('ROOT_PATH', __DIR__ . '/');

define('BASE_URL', '/');

// Menu dynamique
$mainMenu = [
    BASE_URL . 'index.php' => 'Accueil',
    BASE_URL . 'pages/services.php' => 'Services',
    BASE_URL . 'pages/locations.php' => 'Location',
    BASE_URL . 'pages/devis.php' => 'Devis',
    BASE_URL . 'pages/blog.php' => 'Blog',
    BASE_URL . 'pages/contact.php' => 'Contact'
];
