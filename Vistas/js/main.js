// Scroll suave para anclas internas
document.querySelectorAll('a[href^="#"]').forEach((a) => {
  a.addEventListener("click", (e) => {
    const id = a.getAttribute("href");
    const el = document.querySelector(id);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: "smooth" });
    }
  });
});

// Revelar elementos al entrar al viewport
const revealEls = document.querySelectorAll(".reveal");
const obs = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("is-visible");
        obs.unobserve(e.target);
      }
    });
  },
  { threshold: 0.16 }
);

revealEls.forEach((el) => obs.observe(el));

// -------- VALIDACIÓN FORMULARIO CONTACTO --------
const form = document.querySelector(".form");

function clearErrors(form) {
  form
    .querySelectorAll(".is-error")
    .forEach((input) => input.classList.remove("is-error"));
  form.querySelectorAll(".error-msg").forEach((msg) => msg.remove());
}

function showError(input, message) {
  input.classList.add("is-error");
  let msgEl = input.nextElementSibling;
  if (!msgEl || !msgEl.classList.contains("error-msg")) {
    msgEl = document.createElement("small");
    msgEl.className = "error-msg";
    input.parentNode.insertBefore(msgEl, input.nextSibling);
  }
  msgEl.textContent = message;
}

function isValidEmail(email) {
  // Regex simple pero suficiente para validación básica
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    clearErrors(form);

    const nombre = form.querySelector('input[name="nombre"]');
    const email = form.querySelector('input[name="email"]');

    let isValid = true;

    // Validar nombre
    if (!nombre.value.trim()) {
      showError(nombre, "El nombre es obligatorio.");
      isValid = false;
    } else if (nombre.value.trim().length < 2) {
      showError(nombre, "El nombre debe tener al menos 2 caracteres.");
      isValid = false;
    }

    // Validar email
    if (!email.value.trim()) {
      showError(email, "El correo electrónico es obligatorio.");
      isValid = false;
    } else if (!isValidEmail(email.value.trim())) {
      showError(email, "Ingresa un correo electrónico válido.");
      isValid = false;
    }

    if (isValid) {
      // Aquí más adelante engancharás con el backend / base de datos
      alert("¡Gracias! Te avisaremos cuando Comuni esté disponible.");
      form.reset();
    }
  });
}

// --- Slideshow automático para mockup ---
const slides = document.querySelectorAll(".app-slideshow .slide");
let current = 0;

function rotateSlides() {
  slides[current].classList.remove("active");
  current = (current + 1) % slides.length;
  slides[current].classList.add("active");
}

setInterval(rotateSlides, 3000); // cambia cada 3 segundos

// ================================
// VALIDACIÓN FORMULARIO DE CONTACTO
// ================================

function setupContactFormValidation() {
  const form = document.getElementById("contact-form");
  if (!form) return;

  const successElem = document.getElementById("contact-success");

  const inputs = {
    nombre: form.querySelector("#nombre"),
    email: form.querySelector("#email"),
    telefono: form.querySelector("#telefono"),
  };

  function clearError(input) {
    const field = input.closest(".form-field");
    if (!field) return;
    const errorElem = field.querySelector(".field-error");
    field.classList.remove("has-error");
    input.setAttribute("aria-invalid", "false");
    if (errorElem) errorElem.textContent = "";
  }

  function showError(input, message) {
    const field = input.closest(".form-field");
    if (!field) return;
    const errorElem = field.querySelector(".field-error");
    field.classList.add("has-error");
    input.setAttribute("aria-invalid", "true");
    if (errorElem) errorElem.textContent = message;
  }

  function isNameValid(value) {
    const nameRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s'-]+$/;
    const trimmed = value.trim();
    return trimmed.length >= 2 && nameRegex.test(trimmed);
  }

  function isEmailValid(value) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(value.trim());
  }

  function isPhoneValid(value) {
    // Teléfono chileno: +569XXXXXXXX (8 dígitos después de +569)
    const phoneRegex = /^\+569\d{8}$/;
    return phoneRegex.test(value.trim());
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    let hasErrors = false;

    if (successElem) successElem.textContent = "";

    // Nombre
    const nombreVal = inputs.nombre.value;
    clearError(inputs.nombre);
    if (!nombreVal.trim()) {
      showError(inputs.nombre, "Por favor ingresa tu nombre.");
      hasErrors = true;
    } else if (!isNameValid(nombreVal)) {
      showError(
        inputs.nombre,
        "El nombre solo puede contener letras y espacios."
      );
      hasErrors = true;
    } else if (nombreVal.trim().length > 60) {
      showError(inputs.nombre, "El nombre no puede superar los 60 caracteres.");
      hasErrors = true;
    }

    // Email
    const emailVal = inputs.email.value;
    clearError(inputs.email);
    if (!emailVal.trim()) {
      showError(inputs.email, "El correo electrónico es obligatorio.");
      hasErrors = true;
    } else if (!isEmailValid(emailVal)) {
      showError(
        inputs.email,
        "Ingresa un correo electrónico válido (ej: nombre@correo.com)."
      );
      hasErrors = true;
    } else if (emailVal.trim().length > 80) {
      showError(inputs.email, "El correo electrónico es demasiado largo.");
      hasErrors = true;
    }

    // Teléfono
    const telVal = inputs.telefono.value;
    clearError(inputs.telefono);
    if (!telVal.trim()) {
      showError(inputs.telefono, "El teléfono de contacto es obligatorio.");
      hasErrors = true;
    } else if (!isPhoneValid(telVal)) {
      showError(
        inputs.telefono,
        "Ingresa un teléfono chileno válido en formato +569XXXXXXXX."
      );
      hasErrors = true;
    } else if (telVal.trim().length !== 12) {
      showError(
        inputs.telefono,
        "El teléfono debe tener exactamente 12 caracteres (ej: +569XXXXXXXX)."
      );
      hasErrors = true;
    }

    if (!hasErrors) {
      if (successElem) {
        successElem.textContent =
          "¡Gracias! Hemos recibido tu información y te contactaremos cuando Comuni esté disponible.";
      }
      form.reset();
    }
  });

  // Limpia el error al escribir
  Object.values(inputs).forEach(function (input) {
    if (!input) return;
    input.addEventListener("input", function () {
      clearError(input);
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  setupContactFormValidation();
});
