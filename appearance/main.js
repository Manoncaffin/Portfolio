// code pour que le carousel ne défile pas tout seul 
// document.addEventListener('DOMContentLoaded', function () {
//     const carousel1 = new bootstrap.Carousel(document.getElementById('carousel1'), {
//         ride: false
//     });

//     const carousel2 = new bootstrap.Carousel(document.getElementById('carousel2'), {
//         ride: false
//     });

//     const carousel3 = new bootstrap.Carousel(document.getElementById('carousel3'), {
//         ride: false
//     });

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




