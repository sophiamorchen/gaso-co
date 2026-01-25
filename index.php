<?php

include __DIR__ . '/includes/header.php';

?>
<main>
    <section class="container">
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
                        <h5>Location de matériel professionnel </h5>
                        <p>Du matériel fiable, performant et prêt à l’emploi pour vos chantiers,
                            travaux ponctuels ou projets personnels. Louez simplement, au bon prix,
                            et gagnez du temps.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>assets/img/construction-hero-bg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Travaux de bricolage et rénovation</h5>
                        <p>Besoin d’un coup de main ou d’un savoir-faire professionnel ?
                            Nous vous accompagnons dans vos travaux, du petit bricolage
                            aux rénovations plus complètes.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>assets/img/services-hero-bg.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Entretien espaces verts</h5>
                        <p>Tonte, débroussaillage, entretien régulier ou remise en état :
                            nous prenons soin de vos extérieurs pour un rendu propre,
                            net et durable..</p>
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

    <section class="article-section">
        <div class="container card-container">

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Qui sommes nous ?</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Ce que nous faisons</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Pourquoi nous ?</a>
                </div>
            </div>

        </div>
    </section>


</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>

</html>