            // Sélectionnez les éléments par leur ID
            const boutonBefores = document.querySelectorAll('#boutonBefore');
            const boutonAfters = document.querySelectorAll('#boutonAfter');

            boutonBefores.forEach((boutonBefore) => {
                boutonBefore.addEventListener('click', function(event) {
                    let initialState = event.target.parentNode.parentNode.children[1];
                    let additionnalText = event.target.parentNode.parentNode.children[2];

                    initialState.classList.remove("d-flex");
                    initialState.classList.add("d-none");

                    additionnalText.classList.remove("d-none");
                    additionnalText.classList.add("d-flex");
                    // Cachez le boutonBefore
                    boutonBefore.style.display = 'none';
                    // Affichez le boutonAfter
                    boutonAfter.style.display = 'block';
                });
            })

            boutonAfters.forEach((boutonAfter) => {
                boutonAfter.addEventListener('click', function(event) {
                    let additionnalText = event.target.parentNode.parentNode.parentNode.children[2];
                    let initialState = event.target.parentNode.parentNode.parentNode.children[1];

                    additionnalText.classList.remove("d-flex");
                    additionnalText.classList.add("d-none");

                    initialState.classList.remove("d-none");
                    initialState.classList.add("d-flex");
                    // Cachez le boutonBefore
                    boutonBefore.style.display = 'block';
                    // Affichez le boutonAfter
                    boutonAfter.style.display = 'none';
                });
            })