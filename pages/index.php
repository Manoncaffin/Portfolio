<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manon caffin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../appearance/style.css">
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
                            <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
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
                <div class="d-flex m-0 row container-fluid">

                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-1">01</span>/<span id="total-slides-1">05</span>
                    </div>

                    <!-- texte initial -->
                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>Battements Telluriques</p></strong>
                            <p class="initialText m-0">Commenditaire : DRAC</p>
                        </div>

                        <div class="textHomepage col-md-6 px-0">
                            <p class="initialText m-0 pt-3">Résidence de production et exposition avec Caroline Colas - 2021</p>
                            <p class="initialText m-0">Print, scénographie, expérimentation, recherche</p>
                        </div>
                    </div>

                    <!-- texte additionnel -->
                    <!-- <div class="additionalText d-none justify-content-around col row">
                        <p class="m-0 pt-3">Détails : Scénographie articulant des sculptures, une édition et l'installation d'un rideau suspendu. Cette exposition s'est tenue au sein des locaux du Lycée Agricole d'Amboise.</p>
                        <p class="m-0 pt-0">Commenditaire : DRAC</p>
                    </div> -->

                    <!-- bouton affichage texte after -->
                    <!-- <div class="col-md-1 px-0 pt-4 m-0" id="boutonBefore"> -->
                    <!-- <img src="../images/rondvide.png" class="iconsPlusMoins"> -->
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg> -->
                    <!-- </div> -->

                    <!-- bouton affichage texte after -->
                    <!-- <div class="col-md-1 px-0 pt-4 m-0" id="boutonAfter" style="display: none;"> -->
                    <!-- <img src="../images/rondplein.png" class="iconsPlusMoins"> -->
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg> -->
                    <!-- </div> -->
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
                <div class="d-flex m-0 row container-fluid">

                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-2">01</span>/<span id="total-slides-2">05</span>
                    </div>

                    <!-- texte initial -->
                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>Au 46</p></strong>
                            <p class="initialText m-0">Commenditaire : Lycée Agricole d'Amboise</p>
                        </div>

                        <div class="textHomepage col-md-6 px-0">
                            <p class="initialText m-0 pt-3">Conception graphique réalisée avec Caroline Colas et les élèves de Terminale - 2021</p>
                            <p class="initialText m-0">Print, édition, expérimentation, recherche</p>
                        </div>
                    </div>

                    <!-- texte additionnel -->
                    <div class="additionalText d-none justify-content-around col row">
                        <p class="m-0 pt-3"></p>
                        <p class="m-0 pt-0"></p>
                    </div>
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
                <div class="d-flex m-0 row container-fluid">
                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-3">01</span>/<span id="total-slides-3">02</span>
                    </div>


                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>Constructions Pluri[elles]</p></strong>
                            <p class="initialText m-0">Commenditaire : Association Oïkos</p>
                        </div>
                        <div class="textHomepage col-6 px-0">
                            <p class="initialText m-0 pt-3">Conception de l'identité visuelle du podcast, La Tour-de-Salvagny - 2022</p>
                            <p class="initialText m-0">Identité visuelle</p>
                            <!-- Ajouter texte additionnel -->
                            <!-- Commanditaire : Oïkos -->
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
                <div class="d-flex m-0 row container-fluid">
                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-4">01</span>/<span id="total-slides-4">01</span>
                    </div>

                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>In the hall of the Mountain King</p></strong>
                            <p class="initialText m-0">Garage404, exercice de formation</p>
                        </div>
                        <div class="textHomepage col-6 px-0">
                            <p class="initialText m-0 pt-3">Reproduction d'une maquette de site web - 2023 <a href="">[Voir]</a></p>
                            <p class="m-0">Maquette, web - Html, CSS</p>
                        </div>
                        <!-- Ajouter texte additionnel -->
                        <!-- Commanditaire : Garage404, exercice -->
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
                <div class="d-flex m-0 row container-fluid">
                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-5">01</span>/<span id="total-slides-5">01</span>
                    </div>


                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>Drum Pad</p></strong>
                            <p class="initialText m-0">Garage404, exercice de formation</p>
                        </div>
                        <div class="textHomepage col-6 px-0">
                            <p class="initialText m-0 pt-3">Reproduction d'un drum pad - 2023 <a href="">[Voir]</a></p>
                            <p class="m-0">Web - Html, CSS, Javascript</a>
                        </div>
                        <!-- Ajouter texte additionnel
                    Commanditaire : Garage404, exercice -->
                    </div>
                </div>
        </section>

        <section class="carousels container-fluid mainsection p-0 vh-100 d-flex flex-column">
            <div id="carousel6" class="carousel slide carousel-size background-section" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="row h-100">
                            <div class="col-md-12 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                                <video class="img-fluid rounded-4" width="700" height="460" autoplay loop muted>
                                    <source src="../images/mario.mp4" alt="Mario">
                                </video>
                            </div>
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
                <div class="d-flex m-0 row container-fluid">
                    <div class="carousel-pagination col-md-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-6">01</span>/<span id="total-slides-6">01</span>
                    </div>


                    <div class="initial-state d-flex justify-content-around col row">
                        <div class="textHomepage col-md-3 px-0">
                            <p class="initialText m-0 pt-3"><strong>Mario</strong></p>
                            <p class="initialText m-0">Garage404, exercice de formation</p>
                        </div>
                        <div class="textHomepage col-6 px-0">
                            <p class="initialText m-0 pt-3">Animation d'une course - 2023 <a href="">[Voir]</a></p>
                            <p class="m-0">Animation - Html, CSS</a>
                        </div>
                        <!-- Ajouter texte additionnel -->
                        <!-- Commanditaire : Garage404, exercice -->
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
        </script>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-5p8Fk9+P5CDu5PZfklO1R/hFUBn26Hb8jKlJ8A+2+L4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../appearance/homepage.js"></script>
</body>

</html>