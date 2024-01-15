document.addEventListener('DOMContentLoaded', function() {
    const infos = document.getElementById('infos');

    if (infos) {
        infos.addEventListener('click', function(e) {
            e.preventDefault();
            toggleInfos();
        });

        function toggleInfos() {
            infos.classList.toggle('hidden');
            if (!infos.classList.contains('hidden')) {
                // Défilement vers le haut
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        }
    } else {
        console.error("Element with ID 'infos' not found.");
    }
});

