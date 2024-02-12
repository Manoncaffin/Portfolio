document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", handleScroll);
  });
  
  // Fonction pour gérer le défilement
  function handleScroll() {
    var scrollToTopButton = document.getElementById("scrollToTop");
  
    if (window.scrollY > 500) {
      scrollToTopButton.style.display = "block";
    } else {
      scrollToTopButton.style.display = "none";
    }
  }
  
  // Fonction pour faire défiler vers le haut
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }



