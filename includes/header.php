<?php
include_once __DIR__ . '/config.php';

$currentPage = basename($_SERVER['SCRIPT_NAME']);
function is_active(string $page, string $currentPage): string
{
    return $page === $currentPage ? 'is-active' : '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= LOGO ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
    <header class="site-header">
        <div class="container-fluid">

            <div class="header-top">
                <div class="header-brand">
                    <h1 class="site-title"><a href="<?= BASE_URL ?>"><?= LOGO ?></a></h1>
                    <span class="site-tagline">ENTRETIEN, BRICOLAGE & LOCATION DE MATERIEL</span>
                </div>

                <div class="nav-div">
                    <nav class="nav-main">
                        <ul class="nav-list-main">
                            <li><a class="<?= is_active('index.php', $currentPage) ?>" href="<?= BASE_URL ?>">Accueil</a></li>
                            <li><a class="<?= is_active('locations.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/locations.php">Location</a></li>
                            <li><a class="<?= is_active('bricolage.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/bricolage.php">Bricolage</a></li>
                            <li><a class="<?= is_active('espaces-verts.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/espaces-verts.php">Espaces verts</a></li>

                            <!-- CTA Devis -->
                            <li>
                                <a class="nav-cta <?= is_active('devis.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/devis.php">
                                    Devis
                                </a>
                            </li>

                            <li><a class="<?= is_active('tarifs.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/tarifs.php">Tarifs</a></li>
                            <li><a class="<?= is_active('contact.php', $currentPage) ?>" href="<?= BASE_URL ?>includes/contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <nav class="nav-bottom">
                <ul class="nav-list">
                    <li>
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:gaso.co64@gmail.com">gaso.co64@gmail.com</a>
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+33766816511">07.66.81.65.11</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>