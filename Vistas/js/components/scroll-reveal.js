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
