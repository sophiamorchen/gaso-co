<?php 
//chemin absolu vers mon projet : 
define('ROOT_PATH', __DIR__ . '/');

define('BASE_URL', '/');
define('LOGO', 'GaSo&Co');

// Menu dynamique
$mainMenu = [
    BASE_URL . 'index.php' => 'Accueil',
    BASE_URL . 'includes/services.php' => 'Locations',
    BASE_URL . 'includes/locations.php' => 'Bricolage',
    BASE_URL . 'includes/devis.php' => 'Espaces verts',
    BASE_URL . 'includes/devis.php' => 'Devis',
    BASE_URL . 'includes/blog.php' => 'Blog',
    BASE_URL . 'includes/contact.php' => 'Contact'
];
