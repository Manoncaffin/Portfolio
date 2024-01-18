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

    <header>
        <div id="arrow-up"></div>

        <nav class="navbar bg-white">

            <div class="container-md col-6 d-flex justify-content-start align-items-center pt-4">
                <a href="../pages/homepage.php"></a>
                <div class="hover-logo">
                    <div class="logo-container-md pb-2">
                        <img src="../images/logo_manon_caffin_1.png" class="logo" alt="Logotype">
                        <!-- <img src="../images/manoncaffin-logonoir.png" class="logo"> -->
                    </div>
                </div>
            </div>

            <div class="infos container-md col-6 d-flex justify-content-end align-items-center pt-4">
                <div class="hover-text-container">
                    <a href="../pages/infos.php" id="infosLink" class="text-black text-decoration-none ">infos</a>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="carousels container-fluid mainsection p-0">
            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                <div class=carousel-inner>
                    <div class="carousel-item active">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_0948_copie.jpg" class="img-fluid rounded-4" alt="Battements Telluriques">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_1075.jpg" class="img-fluid rounded-4" alt="Battements Telluriques">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_1956.jpg" class="img-fluid rounded-4" alt="Battements Telluriques">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_0834.JPG" class="img-fluid rounded-4" alt="Battements Telluriques">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/Depliant_Recto_Verso.jpg" class="img-fluid rounded-4" alt="Battements Telluriques">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev carousel-arrows" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg> -->
                    <img src="../images/prev.png" alt="Image précédente" class="icons">

                </button>
                <button class="carousel-control-next carousel-arrows" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg> -->
                    <img src="../images/next.png" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator col-md-12">
                <div class="carousel1-text d-flex h-100">
                    <div class="carousel-pagination container-md col-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-1">01</span>/<span id="total-slides-1">05</span>
                    </div>

                    <div class="textHomepage container-md col-3 justify-content-start" id="textHomepage">
                        <p class="initialText m-0 pt-3">Titre : Battements Telluriques</p>
                        <p class="initialText m-0">Commenditaire : DRAC</p>
                    </div>
                    <div class="textHomepage container col-5 px-0">
                        <p class="initialText m-0 pt-3">Détails : Scénographie et conception graphique réalisées avec Caroline Colas,</p>
                        <p class="initialText m-0">résidence de production et exposition - 2021</p>
                    </div>
                    <!-- boutton affichage texte after -->
                    <div class="initial-state">
                    <div class="container col-1 px-0 pt-4" id="boutonBefore">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg>
                    </div>
                    <!-- boutton affichage texte after -->
                    <div class="container col-1 px-0 pt-4" id="boutonAfter">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg>
                    </div>
                    <!-- texte additionnel -->
                    <div class="text" id="text">
                        <p class="additionalText container-md col-9 justify-content-start" style="display: none;">Scénographie issue d'une fiction, articulant des sculptures créés sur-mesure, une édition et l'installation d'un rideau suspendu.
                            Cette exposition s'est tenue au sein des locaux du Lycée Agricole d'Amboise.
                            Mio, la personne de cette fiction, écrit pour nous : il·elle décrit un vécu et son présent - représentant une version du futur. Victime collatérale d'une société en déclin qui ne cesse de manquer le coche des lanceurs·euses d'alerte.
                            Le rideau, lui, présente un poème-chanson dont le sujet est le plus évocateur pour les visiteurs·euses et pour la lecture de l'exposition.</p>
                    </div>
                    </div>
                </div>
            </div>

            <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                <div class=carousel-inner>
                    <div class="carousel-item active">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_0355.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_0361.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/IMG_0345.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/4PAGES_1.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/DOC090221-005.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/4PAGES_2.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/Page_Dessin.jpg" class="img-fluid rounded-4" alt="Au 46">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg> -->
                    <img src="../images/prev.png" alt="Image précédente" class="icons">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg> -->
                    <img src="../images/next.png" alt="Image suivante" class="icons">
                </button>
            </div>

            <div class="separator col-md-12">
                <div class="carousel-text d-flex h-100">
                    <div class="carousel-pagination container-md col-2 px-5 pt-3 d-flex justify-content-center">
                        <span id="current-slide-2">01</span>/<span id="total-slides-2">07</span>
                    </div>

                    <div class="textHomepage container-md col-4 justify-content-start">
                        <p class="m-0 pt-3">Titre : Au 46</p>
                        <p class="m-0">Commenditaire : Lycée Agricole et Viticole d'Amboise</p>
                    </div>
                    <div class="textHomepage container-md col-6">
                        <p class="m-0 pt-3">Détails : Conception graphique réalisée avec Caroline Colas</p>
                        <p class="m-0">et les élèves de Terminale - 2021</p>
                    </div>
                </div>
            </div>


            <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                <div class=carousel-inner>
                    <div class="carousel-item active">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/Logo_Constructions_Plurielles.jpg" class="img-fluid rounded-4" alt="Constructions Plurielles">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row images">
                            <div class="col-md-12 col-lg-6 mx-auto">
                                <img src="../images/Constructions_Plurielles_Spotify.png" class="img-fluid rounded-4" alt="Constructions Plurielles">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg> -->
                    <img src="../images/prev.png" alt="Image précédente" class="icons">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg> -->
                    <img src="../images/next.png" alt="Image suivante" class="icons">
                </button>
            </div>


            <div class="separator col-md-12">
                <div class="carousel-text d-flex h-100">
                    <div class="carousel-pagination container-md col-2 pt-3 d-flex justify-content-center">
                        <span id="current-slide-3">01</span>/<span id="total-slides-3">02</span>
                    </div>


                    <div class="textHomepage container-md col-4 justify-content-start">
                        <p class="m-0 pt-3">Titre : Constructions Pluri[elles]</p>
                        <p class="m-0">Commanditaire : Oïkos</p>
                    </div>
                    <div class="textHomepage container col-6 px-0">
                        <p class="m-0 pt-3">Détails : Conception de l'identité visuelle du podcast de l'association Oïkos,</p>
                        <p class="m-0">La Tour-de-Salvagny - 2022</p>
                    </div>
                </div>
            </div>

            <a href="#" class="arrow-up pb-4" id="scrollToTop">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
                </svg> -->
                <img src="../images/arrow-up.png" alt="Arrow-up" class="icon">
            </a>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const scrollToTop = document.getElementById('scrollToTop');
                    const arrowUpSection = document.getElementById('arrow-up');

                    window.addEventListener('scroll', function() {
                        // Affiche ou masque l'icône en fonction de la position de défilement
                        if (window.scrollY > 400) { // Changez 200 à la position où vous voulez afficher l'icône
                            scrollToTop.style.display = 'block';
                        } else {
                            scrollToTop.style.display = 'none';
                        }
                    });

                    scrollToTop.addEventListener('click', function(e) {
                        e.preventDefault();
                        scrollToSection(arrowUpSection);
                    });

                    function scrollToSection(section) {
                        section.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });

                // Sélectionnez les éléments par leur ID
                const boutonBefore = document.getElementById('boutonBefore');
                const boutonAfter = document.getElementById('boutonAfter');
                const initialText = document.querySelectorAll('.initialText');
                const additionalText = document.querySelectorAll('.additionalText');

                // Ajoutez un gestionnaire d'événements pour le clic sur le boutonBefore
                boutonBefore.addEventListener('click', function() {
                    // Masquez le texte initial
                    initialText.forEach(element => {
                        element.style.display = 'none';
                    });
                    // Affichez le texte supplémentaire
                    additionalText.forEach(element => {
                        element.style.display = 'block';
                    });
                    // Cachez le boutonBefore
                    boutonBefore.style.display = 'none';
                    // Affichez le boutonAfter
                    boutonAfter.style.display = 'block';
                });

                // Ajoutez un gestionnaire d'événements pour le clic sur le boutonAfter
                boutonAfter.addEventListener('click', function() {
                    // Affichez le texte initial
                    initialText.forEach(element => {
                        element.style.display = 'block';
                    });
                    // Masquez le texte supplémentaire
                    additionalText.forEach(element => {
                        element.style.display = 'none';
                    });
                    // Cachez le boutonAfter
                    boutonAfter.style.display = 'none';
                    // Affichez le boutonBefore
                    boutonBefore.style.display = 'block';
                });
            </script>
        </section>
    </main>
    <script src="../appearance/homepage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>