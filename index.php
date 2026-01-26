<?php

include_once __DIR__ . '/includes/header.php';

?>
<main>
    <div class="container">
        <section class="caroussel-container">
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

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Disponible à la location</h5>
                    <a href="#" class="btn btn-primary">Voir le matériel</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?= BASE_URL ?>/assets/img/gants-tournevis.jpg" class="card-img-top" alt="photo gants tournevis">
                <div class="card-body">
                    <h5 class="card-title">Service de bricolage</h5>
                    <a href="#" class="btn btn-primary">Voir les prestations</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Espaces verts</h5>
                    <a href="#" class="btn btn-primary">Voir les prestations</a>
                </div>
            </div>
        </section>

    </div>


</main>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>