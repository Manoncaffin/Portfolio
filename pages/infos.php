<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" href="../appearance/style.css">
    <title>manon caffin</title>
</head>

<body>

    <header class="w-100 d-flex justify-content-center fixed-top navbar-two">
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
        <section id="contact" class="d-flex vh-100 justify-content-center slide-in">
            <div class="contact-two container-md">
                <div class="textTotal row">
                    <div class="textInfos1 part-one col-md-4 col-12">
                        <a href="mailto:caffinmanon@gmail.com" class="text-decoration-none">caffinmanon@gmail.com</a>
                        <p class="pb-4">+33 (0) 6 81 78 23 14</p>

                        <p class="mb-0">graphisme</p>
                        <p class="mb-0">identité visuelle</p>
                        <p class="pb-4">développement web</p>
                        
                        <a href="" class="textInfos1 text-decoration-none">GitHub</a><br>
                        <a href="../images/CV_2024.pdf" class="textInfos1 text-decoration-none">Curriculum vitae</a><br>
                        <a href="https://www.linkedin.com/in/manon-caffin-84192a198/" class="textInfos1 text-decoration-none">Linkedin</a>
                    </div>

                    <div class="col-md-1 pt-4"></div>

                    <div class="textInfos2 part-two col-md-7">
                        <p class="pb-4 m-0">Designer graphique et espace de formation, je me forme actuellement au développement web au Garage404 à Saint-Étienne.</p>
                        <p class="m-0">Je souhaite trouver un stage qui puisse mêler le front-end et le back-end afin de solidifier les connaissances que j'ai acquises de par ma formation et mes expériences passées, mais également pour solidifier les connaissances que j'apprends à acquérir en centre de formation.</p>
                        <div class="pt-4">
                            <p class="mb-0">Technologies : Html, Css, Bootstrap, JavaScript, PHP, Symfony, GitHub, My SQL</p>
                            <p class="mb-0 pb-4">Logiciels : InDesign, Illustrator, Photoshop, Figma, Première</p>
                        </div>

                        <p class="textInfos3 m-0">Conception graphique et développement : Manon Caffin</p>
                        <p class="textInfos3 m-0">Photographies : © Manon Caffin - Caroline Colas</p>
                        <p class="textInfos3 m-0">Typographie : © Aileron par Sora Sagano, Capriola par Viktoriya Grabowska </p>
                        <p class="textInfos3 m-0">Aucune des images présentées sur ce site ne peut être reproduite sans autorisation préalable de ses auteurs.</p>
                    </div>
                </div>
            </div>

            <div class="popup">
                <a href="../pages/index.php"><button type="button" class="btn-close position-absolute bottom-0 d-flex align-items-end justify-content-end" aria-label="Close"></button></a>
            </div>
        </section>
    </main>

    <script>
        // Initialiser le plugin mCustomScrollbar sur l'élément avec la classe mCSB_container
        $(document).ready(function() {
            $(".mCSB_container").mCustomScrollbar();
        });
    </script>

    <script src="../appearance/infos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>