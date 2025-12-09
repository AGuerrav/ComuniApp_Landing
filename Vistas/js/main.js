// Scroll suave para anclas internas
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const id = a.getAttribute('href');
    const el = document.querySelector(id);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// Revelar elementos al entrar al viewport
const revealEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('is-visible');
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.16 });

revealEls.forEach(el => obs.observe(el));

// -------- VALIDACIÓN FORMULARIO CONTACTO --------
const form = document.querySelector('.form');

function clearErrors(form) {
  form.querySelectorAll('.is-error').forEach(input => input.classList.remove('is-error'));
  form.querySelectorAll('.error-msg').forEach(msg => msg.remove());
}

function showError(input, message) {
  input.classList.add('is-error');
  let msgEl = input.nextElementSibling;
  if (!msgEl || !msgEl.classList.contains('error-msg')) {
    msgEl = document.createElement('small');
    msgEl.className = 'error-msg';
    input.parentNode.insertBefore(msgEl, input.nextSibling);
  }
  msgEl.textContent = message;
}

function isValidEmail(email) {
  // Regex simple pero suficiente para validación básica
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

if (form) {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    clearErrors(form);

    const nombre = form.querySelector('input[name="nombre"]');
    const email  = form.querySelector('input[name="email"]');

    let isValid = true;

    // Validar nombre
    if (!nombre.value.trim()) {
      showError(nombre, 'El nombre es obligatorio.');
      isValid = false;
    } else if (nombre.value.trim().length < 2) {
      showError(nombre, 'El nombre debe tener al menos 2 caracteres.');
      isValid = false;
    }

    // Validar email
    if (!email.value.trim()) {
      showError(email, 'El correo electrónico es obligatorio.');
      isValid = false;
    } else if (!isValidEmail(email.value.trim())) {
      showError(email, 'Ingresa un correo electrónico válido.');
      isValid = false;
    }

    if (isValid) {
      // Aquí más adelante engancharás con el backend / base de datos
      alert('¡Gracias! Te avisaremos cuando Comuni esté disponible.');
      form.reset();
    }
  });
}

// --- Slideshow automático para mockup ---
const slides = document.querySelectorAll('.app-slideshow .slide');
let current = 0;

function rotateSlides(){
  slides[current].classList.remove('active');
  current = (current + 1) % slides.length;
  slides[current].classList.add('active');
}

setInterval(rotateSlides, 3000); // cambia cada 3 segundos

