// Slideshow automático para mockup de la app
function initSlideshow() {
  const slides = document.querySelectorAll(".app-slideshow .slide");
  if (slides.length === 0) return;

  let current = 0;

  function rotateSlides() {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }

  setInterval(rotateSlides, 3000); // Cambia cada 3 segundos
}

document.addEventListener("DOMContentLoaded", initSlideshow);
