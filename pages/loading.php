<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../appearance/style.css">
    <link href="https://api.fontshare.com/v2/css?f[]=excon@400,900,700,500,300,100,1&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <title>manoncaffin</title>
</head>

<body>
    <main>
        <section class="loading container-md col-4 d-flex justify-content-center flex-column text-center">
            <div id="logoLoading">
                <h1>manon caffin</h1>  
            </div>
            <div id="loader">00 %</div>
        </section>



    </main>
    <script>
        // loading
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.querySelector("#loader");
            let load = 0;
            setInterval(function() {
                loader.innerHTML = `${load} %`;
                if (load < 100) {
                    load++;
                } else {
                    setTimeout(function() {
                        load = 0;
                    }, 2000);
                }
            }, 50);

            // Redirection à la fin de l'animation en simulant une tâche longue
            setTimeout(function() {
                document.querySelector(".loading").style.display = "none";
                window.location.href = "../pages/index.php";
            }, 1500);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>