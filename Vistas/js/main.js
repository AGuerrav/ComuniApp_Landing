// Scroll suave para anclas internas
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click', e=>{
    const id = a.getAttribute('href');
    const el = document.querySelector(id);
    if(el){
      e.preventDefault();
      el.scrollIntoView({behavior:'smooth'});
    }
  });
});

// Revelar elementos al entrar al viewport
const revealEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('is-visible');
      obs.unobserve(e.target);
    }
  });
},{threshold:0.16});
revealEls.forEach(el=>obs.observe(el));

// (Opcional) Evitar envío real del formulario en esta etapa
document.querySelector('.form')?.addEventListener('submit', (e)=>{
  e.preventDefault();
  alert('¡Gracias! Te avisaremos cuando Comuni esté disponible.');
});
