<?php

include_once __DIR__ . '/includes/header.php';

?>
<main>
    <section class="container section-hero">
        <div class="flex-fill text-center mx-1">
            <h1>Des outils et du savoir-faire pour chaque projets</h1>
            <p>Test dev</p>
            <p class="mt-3">
                Espaces verts, bricolage, chantiers : <?= LOGO ?>vous accompagne avec du matériel performant et des solutions adaptées à tous vos besoins.
            </p>

            <h2 class="mt-3 display-1"><?= LOGO ?></h2>
        </div>
        <img src="<?= BASE_URL ?>assets/img/taille-haie.jpg" alt="?>" class="rounded" style="max-width:15rem;">
    </section>

    <section class="container caroussel-container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= BASE_URL ?>assets/img/home-page-hero-bg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Location de matériel professionnel </h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>assets/img/construction-hero-bg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Travaux de bricolage et rénovation</h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>assets/img/services-hero-bg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Entretien espaces verts</h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="container card-container">

        <div class="card">
            <img src="<?= BASE_URL ?>assets/img/motobineuse.png" class="card-img-top" alt="motobineuse">
            <div class="card-body">
                <h5 class="card-title">Locations</h5>
                <a href="#" class="btn btn-primary">Voir le matériel</a>
            </div>
        </div>
        <div class="card">
            <img src="<?= BASE_URL ?>assets/img/gants-tournevis.jpg" class="card-img-top" alt="photo gants tournevis">
            <div class="card-body">
                <h5 class="card-title">Service de bricolage</h5>
                <a href="#" class="btn btn-primary">Voir les prestations</a>
            </div>
        </div>
        <div class="card">
            <img src="<?= BASE_URL ?>assets/img/plantation.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Espaces verts</h5>
                <a href="#" class="btn btn-primary">Voir les prestations</a>
            </div>
        </div>
    </section>
    <section class="container-fluid client-container">
        <div class="row">
            <div class="col-md-6 card-devis">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Devis gratuit & personnalisé</h2>
                    <p>Du simple entretien de jardin au chantier complet, nous étudions chaque projet avec sérieux et transparence.</p> <button class="btn btn-outline-light" type="button">Demander mon devis</button>
                </div>
            </div>
            <div class="col-md-6 card-devis">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Les tarifs <?= LOGO ?></h2>
                    <p>Consultez notre grille tarifaire complète pour tous nos services, notre liste de consommables et bien plus !</p> <button class="btn btn-outline-light" type="button">Voir les tarifs</button>
                </div>
            </div>

        </div>
    </section>
    <section class="reasons">
        <div class="reasons__hero">
            <div class="reasons__overlay"></div>

            <div class="reasons__content container">
                <h2 class="reasons__title">Pourquoi choisir GaSo&Co pour vos projets</h2>

                <div class="reasons__grid">
                    <article class="reason-card">
                        <h3 class="reason-card__title">Réactivité assurée</h3>
                        <p class="reason-card__text">
                            Besoin de matériel ? On s’organise pour vous livrer au plus vite, souvent dès le lendemain.
                        </p>
                    </article>

                    <article class="reason-card">
                        <h3 class="reason-card__title">Du matériel fiable, bien entretenu</h3>
                        <p class="reason-card__text">
                            Nous travaillons avec des réparateurs locaux et entretenons régulièrement nos machines pour vous garantir du matériel prêt à l’emploi.
                        </p>
                    </article>

                    <article class="reason-card reason-card--notch">
                        <h3 class="reason-card__title">Des conseils simples et honnêtes</h3>
                        <p class="reason-card__text">
                            On prend le temps d’échanger avec vous pour vous proposer le matériel vraiment adapté à votre besoin.
                        </p>
                    </article>

                    <article class="reason-card">
                        <h3 class="reason-card__title">Proches de nos clients</h3>
                        <p class="reason-card__text">
                            Particuliers ou professionnels, on travaille avec sérieux et proximité, comme si c’était pour nos propres projets.
                        </p>
                    </article>
                </div>

            </div>
        </div>
    </section>




</main>
<?php include_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>