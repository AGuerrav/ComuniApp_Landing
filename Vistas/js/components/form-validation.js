// Validación del formulario de contacto
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

    // Validar nombre
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

    // Validar email
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

    // Validar teléfono
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

  // Limpiar errores al escribir
  Object.values(inputs).forEach(function (input) {
    if (!input) return;
    input.addEventListener("input", function () {
      clearError(input);
    });
  });
}

document.addEventListener("DOMContentLoaded", setupContactFormValidation);
