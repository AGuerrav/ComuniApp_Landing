// Control del menú sticky que baja al scrollear
function initAutoShowNav() {
  const nav = document.querySelector(".nav");
  if (!nav) return;

  const hiddenClass = "nav--hidden";

  let autoShowTimeout;

  const SHOW_DELAY = 1000;

  const hideNav = () => {
    if (nav.classList.contains(hiddenClass)) return;
    nav.classList.add(hiddenClass);
  };

  const showNavAfterDelay = () => {
    clearTimeout(autoShowTimeout);
    autoShowTimeout = setTimeout(() => {
      nav.classList.remove(hiddenClass);
    }, SHOW_DELAY);
  };

  window.addEventListener("scroll", () => {
    hideNav();
    showNavAfterDelay();
  });

  window.addEventListener("mousemove", (e) => {
    if (e.clientY < 100) {
      clearTimeout(autoShowTimeout);
      nav.classList.remove(hiddenClass);
    }
  });
  showNavAfterDelay();
}

document.addEventListener("DOMContentLoaded", initAutoShowNav);
