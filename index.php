<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comuni – Conecta con tu entorno</title>
  <link rel="stylesheet" href="Vistas/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <nav class="nav" aria-label="Navegación principal">
    <a href="#inicio">Inicio</a>
    <a href="#problema">Problema</a>
    <a href="#solucion">Solución</a>
    <a href="#comunidad">Comunidad</a>
    <a href="#contacto">Contacto</a>
  </nav>

  <main>
    <header id="inicio" class="hero">         
      <div class="hero__inner">
        <div class="hero__illu" aria-hidden="true">
          <img class="section__float" src="Vistas/img/Whale.png" title="whale" alt="whale">
          <div class="section_shadow"></div>
        </div>
        <div class="hero__copy">
          <h1>Conectamos personas y naturaleza</h1>
          <p>Una comunidad que cuida su entorno local.</p>
          <a class="btn btn--primary" href="#problema">Conoce más</a>
        </div>
      </div>
      <div class="wave" aria-hidden="true"></div>
      <div class="wave wave--layer" aria-hidden="true"></div>
    </header>

    <section id="problema" class="section section--dark" aria-labelledby="t-problema">
      <h2 id="t-problema" class="reveal">El problema</h2>
      <p class="lead reveal">Nuestro entorno se desconecta… y eso nos afecta a todos.</p>
      <p class="muted reveal">
        El deterioro ambiental y la pérdida de vínculo con la naturaleza impactan a las comunidades locales.
        Comuni nace para recuperar esa relación y promover acción colectiva.
      </p>

      <div class="iceberg reveal" aria-hidden="true">
        <div class="mount left"></div>
        <div class="mount right"></div>
      </div>
      <div class="wave wave--up" aria-hidden="true"></div>
    </section>

    <section id="solucion" class="section" aria-labelledby="t-solucion">
      <h2 id="t-solucion" class="reveal">La solución</h2>
      <div class="grid-2 reveal">
        <div>
          <p>Comuni reúne a personas para reconectar con la naturaleza y apoyar iniciativas locales.</p>
          <ul class="list">
            <li>Comparte observaciones de tu entorno</li>
            <li>Descubre eventos y actividades comunitarias</li>
            <li>Inspírate con historias de otros</li>
          </ul>
        </div>
        <div class="phone-mock" role="img" aria-label="Mockup app móvil"></div>
      </div>
      <a class="btn btn--primary reveal" href="#contacto">Únete a la comunidad</a>
    </section>

    <section id="comunidad" class="section" aria-labelledby="t-comunidad">
      <h2 id="t-comunidad" class="reveal">Comunidad</h2>
      <div class="cards reveal">
        <article class="card">
          <div class="card__thumb" role="img" aria-label="Imagen de iniciativa"></div>
          <h3>Humedales de Barrio</h3>
          <p class="muted">Monitoreo ciudadano de flora y aves urbanas.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>
        <article class="card">
          <div class="card__thumb" role="img" aria-label="Imagen de iniciativa"></div>
          <h3>Reforestación Local</h3>
          <p class="muted">Jornadas de plantación y educación ambiental.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>
        <article class="card">
          <div class="card__thumb" role="img" aria-label="Imagen de iniciativa"></div>
          <h3>Costa Viva</h3>
          <p class="muted">Limpieza de playas y registro de residuos.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>
      </div>
    </section>

    <section id="contacto" class="section section--cta" aria-labelledby="t-contacto">
      <h2 id="t-contacto" class="reveal">¿Quieres ser parte de Comuni?</h2>
      <p class="lead reveal">Déjanos tu correo y sé parte del lanzamiento.</p>

      <form class="form reveal" action="#" method="post" novalidate>
        <label class="sr-only" for="f-nombre">Nombre</label>
        <input id="f-nombre" type="text" name="nombre" placeholder="Nombre" required>

        <label class="sr-only" for="f-mail">Correo electrónico</label>
        <input id="f-mail" type="email" name="email" placeholder="Correo electrónico" required>

        <button class="btn btn--primary" type="submit">Próximamente</button>
      </form>

      <div class="social reveal" aria-label="Redes sociales">
        <span aria-label="Twitter" class="ico"></span>
        <span aria-label="Facebook" class="ico"></span>
        <span aria-label="Instagram" class="ico"></span>
      </div>
    </section>
  </main>

  <footer class="footer">
    <p class="muted" style="text-align: center; padding: 20px 0; font-size: 0.9em; background-color: var(--soft);">
      &copy; Comuni 2025. Un proyecto que promueve la acción colectiva y la conciencia ambiental local.
    </p>
  </footer>

  <script src="Vistas/js/main.js"></script>
</body>
</html>