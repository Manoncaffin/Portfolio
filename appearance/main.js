// loading
const loader = document.querySelector("#loader");
let load = 0;
setInterval(function () {
  loader.textContent = `${load} %`;
  if (load < 100) {
    load++;
  } else {
    setTimeout(function () {
      load = 0;
    }, 2000);
    //-----------------------------------
  }
}, 50);

// Redirection à la fin de l'animation en simulant une tâche longue
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      document.querySelector(".loading").style.display = "none";
      window.location.href = "../pages/homepage.php";
    }, 1500); 
  });


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




