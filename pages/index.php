<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manon caffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../appearance/style.css">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
</head>

<body>

    <header class="w-100 d-flex justify-content-center fixed-top navbar">
        <nav class="container-md col-12 d-flex justify-content-between">
            <div class="hover-logo">
                <a href="../pages/index.php" id="logoReturnHomepage" class="text-black text-decoration-none">manon caffin</a>
            </div>

            <div class="hover-text-container">
                <a href="../pages/infos.php" id="infosLink" class="text-black text-decoration-none ">infos</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div class="separator-top"></div>
            <div id="carousel1" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_0948_copie.jpg" class="rounded-4" alt="Battements Telluriques" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100 d-flex justify-content-center">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_1075.jpg" class="rounded-4" alt="Battements Telluriques" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row w-100 h-100 ">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_1956.jpg" class="rounded-4" alt="Battements Telluriques" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_0834.JPG" class="rounded-4" alt="Battements Telluriques" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/Depliant_Recto_Verso.jpg" class="rounded-4" alt="Battements Telluriques" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">
                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator d-flex justify-content-center">
                <div class="d-flex m-0 row container-fluid align-items-center">

                    <div class="carousel-pagination col-md-2 d-flex justify-content-center">
                        <span id="current-slide-1">01</span>/<span id="total-slides-1">05</span>
                    </div>

                    <div class="project align-items-center justify-content-center text-center col-md row">
                       <!-- BUTTON RESPONSIVE -->
                        <button class="carousel-control-prev carousel-arrows-mobile col-1" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">
                        </button>
                        <!-- FIN RESPONSIVE -->
                        <div class="col-md-3 col-6">
                            <p class="titre m-0"><strong>Battements Telluriques</p></strong>
                            <p class="textHomepage m-0">Commenditaire : DRAC</p>
                            <p class="m-0 textHomepage carousel-arrows-mobile">Résidence de production et exposition avec Caroline Colas - 2021</p>
                            <p class="m-0 textHomepage carousel-arrows-mobile">— Print, scénographie, expérimentation, recherche</p>
                        </div>

                        <!-- RESPONSIVE -->      
                        <div class="col-md-6 text-homepage-mobile">
                            <p class="m-0 textHomepage">Résidence de production et exposition avec Caroline Colas - 2021</p>
                            <p class="m-0 textHomepage">— Print, scénographie, expérimentation, recherche</p>
                        </div>

                        <button class="carousel-control-next carousel-arrows-mobile col-1" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                        </button>
                        <!-- FIN DU RESPONSIVE -->

                        <!-- <a href id="scrollToTop"><img src="../images/fleche-arrow-up-nb-fond.svg"  class="icon" title="Top"></a> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel2" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_0355.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100 d-flex justify-content-center">
                            <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_0361.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row w-100 h-100 ">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/IMG_0345.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/4PAGES_1.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/DOC090221-005.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/4PAGES_2.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/Page_Dessin.jpg" class="rounded-4" alt="Au 46" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                    <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">
                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                    <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator d-flex justify-content-center">
                <div class="d-flex m-0 row container-fluid align-items-center">

                    <div class="textHomepage carousel-pagination col-md-2 d-flex justify-content-center">
                        <span id="current-slide-2">01</span>/<span id="total-slides-2">05</span>
                    </div>

                    <!-- texte initial -->

                    <div class="initial-state d-flex justify-content-around col row">

                        <button class="carousel-control-prev carousel-arrows-mobile" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">
                        </button>

                        <div class="col-md-3">
                            <p class="titre m-0"><strong>Au 46</p></strong>
                            <p class="textHomepage m-0">Commenditaire : Lycée Agricole d'Amboise</p>
                        </div>

                        <div class="textHomepage col-md-6">
                            <p class="m-0">Conception graphique réalisée avec Caroline Colas et les élèves de Terminale - 2021</p>
                            <p class="m-0">— Print, édition, expérimentation, recherche</p>
                        </div>
                    </div>

                    <button class="carousel-control-next carousel-arrows-mobile" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                        <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                    </button>

                </div>
            </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel3" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/Logo_Constructions_Plurielles.jpg" class="rounded-4" alt="Constructions Plurielles" width="100%" height="auto">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100">
                        <div class="row h-100 d-flex justify-content-center">
                            <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
                                <img src="../images/Constructions_Plurielles_Spotify.png" class="rounded-4" alt="Constructions Plurielles" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">


                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                    <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator d-flex justify-content-center">
                <div class="d-flex m-0 row container-fluid align-items-center">
                    <div class="carousel-pagination col-md-2 d-flex justify-content-center">
                        <span id="current-slide-3">01</span>/<span id="total-slides-3">02</span>
                    </div>


                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="col-md-3">
                            <p class="titre m-0"><strong>Constructions Pluri[elles]</p></strong>
                            <p class="textHomepage m-0">Commenditaire : Association Oïkos</p>
                        </div>
                        <div class="textHomepage col-6">
                            <p class="m-0">Conception de l'identité visuelle du podcast, La Tour-de-Salvagny - 2022</p>
                            <p class="m-0">— Identité visuelle</p>
                        </div>
                    </div>
                </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel4" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/Mountain.png" class="rounded-4" alt="Mountains" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                    <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">


                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                    <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator d-flex justify-content-center">
                <div class="d-flex m-0 row container-fluid align-items-center">
                    <div class="carousel-pagination col-md-2 d-flex justify-content-center">
                        <span id="current-slide-4">01</span>/<span id="total-slides-4">01</span>
                    </div>

                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="col-md-3">
                            <p class="titre m-0"><strong>In the hall of the Mountain King</p></strong>
                            <p class="textHomepage m-0">Garage404, exercice de formation</p>
                        </div>
                        <div class="textHomepage col-6">
                            <p class="m-0">Reproduction d'une maquette de site web - 2023 <a href="" class="text-black">[Voir]</a></p>
                            <p class="m-0">— Maquette, web - Html, CSS</p>
                        </div>
                    </div>
                </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel5" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <img src="../images/Drum_Pad.jpg" class="rounded-4" alt="Drum-Pad" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
                    <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">


                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel5" data-bs-slide="next">
                    <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator d-flex justify-content-center">
                <div class="d-flex m-0 row container-fluid align-items-center">
                    <div class="textHomepage carousel-pagination col-md-2 d-flex justify-content-center">
                        <span id="current-slide-5">01</span>/<span id="total-slides-5">01</span>
                    </div>


                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="col-md-3">
                            <p class="titre m-0"><strong>Drum Pad</p></strong>
                            <p class="textHomepage m-0">Garage404, exercice de formation</p>
                        </div>
                        <div class="textHomepage col-6">
                            <p class="m-0">Reproduction d'un drum pad - 2023 <a href="" class="text-black">[Voir]</a></p>
                            <p class="m-0">— Web - Html, CSS, Javascript</a>
                        </div>
                    </div>
                </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel6" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <video class="img-fluid rounded-4" style="max-width: 100%;" autoplay loop muted>
                                    <source src="../images/course-mario.mp4" type="video/mp4" alt="Mario">
                                </video>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel6" data-bs-slide="prev">
                        <img src="../images/fleche-gauche-nb-fond.svg" alt="Image précédente" class="icons">
                    </button>
                    <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel6" data-bs-slide="next">
                        <img src="../images/fleche-droite-nb-fond.svg" alt="Image suivante" class="icons">
                    </button>
                </div>

                <div class="separator d-flex justify-content-center">
                    <div class="d-flex m-0 row container-fluid align-items-center">
                        <div class="carousel-pagination col-md-2 d-flex justify-content-center">
                            <span id="current-slide-6">01</span>/<span id="total-slides-6">01</span>
                        </div>


                        <div class="initial-state d-flex justify-content-around col row">
                            <div class="col-md-3">
                                <p class="titre m-0"><strong>Mario</strong></p>
                                <p class="m-0">Garage404, exercice de formation</p>
                            </div>
                            <div class="textHomepage col-6">
                                <p class="m-0">Animation d'une course - 2023 <a href="" class="text-black">[Voir]</a></p>
                                <p class="m-0">— Animation - Html, CSS</a>
                            </div>
                        </div>
                    </div>
        </section>


        <script>
            // pagination carousels
            document.addEventListener('DOMContentLoaded', function() {
                const carousels = document.querySelectorAll('.carousel');

                carousels.forEach(function(carousel, index) {
                    carousel.addEventListener('slid.bs.carousel', function(event) {
                        const currentSlideElement = document.getElementById(`current-slide-${index + 1}`);
                        const totalSlidesElement = document.getElementById(`total-slides-${index + 1}`);

                        if (currentSlideElement && totalSlidesElement) {
                            const currentSlide = event.to + 1;
                            const totalSlides = carousel.querySelectorAll('.carousel-item').length;

                            currentSlideElement.textContent = currentSlide.toString().padStart(2, '0');
                            totalSlidesElement.textContent = totalSlides.toString().padStart(2, '0');
                        }
                    });
                });


                // code pour le non défilement automatique du carousel
                const carousel1 = new bootstrap.Carousel(document.getElementById('carousel1'), {
                    ride: false
                });
                const carousel2 = new bootstrap.Carousel(document.getElementById('carousel2'), {
                    ride: false
                });
                const carousel3 = new bootstrap.Carousel(document.getElementById('carousel3'), {
                    ride: false
                });
                const carousel4 = new bootstrap.Carousel(document.getElementById('carousel4'), {
                    ride: false
                });
                const carousel5 = new bootstrap.Carousel(document.getElementById('carousel5'), {
                    ride: false
                });
                const carousel6 = new bootstrap.Carousel(document.getElementById('carousel6'), {
                    ride: false
                });
            });
        </script>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-5p8Fk9+P5CDu5PZfklO1R/hFUBn26Hb8jKlJ8A+2+L4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../appearance/homepage.js"></script>
</body>

</html>