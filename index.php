<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comuni – Conecta con tu entorno</title>

  <!-- CSS principal -->
  <link rel="stylesheet" href="Vistas/css/main.css">

  <!-- Fuente -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- ENCABEZADO GLOBAL -->
  <header class="site-header">
    <nav class="nav" aria-label="Navegación principal">
      <a href="#inicio">Inicio</a>
      <a href="#problema">Problema</a>
      <a href="#solucion">Solución</a>
      <a href="#comunidad">Comunidad</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </header>

  <!-- CONTENIDO PRINCIPAL -->
  <main>

    <!-- 1) HOME / HERO -->
    <section id="inicio" class="hero" aria-labelledby="t-inicio">
      <div class="hero__inner">
        
        <!-- Ballena -->
        <div class="hero__illu" aria-hidden="true">
          <div class="whale-container">
            <img src="Vistas/img/Whale.png" alt="Ballena Comuni" class="whale-float">
          </div>
        </div>

        <!-- Texto -->
        <div class="hero__copy reveal">
          <h1 id="t-inicio">Conectamos personas y naturaleza</h1>
          <p>Una comunidad que cuida su entorno local.</p>
          <a class="btn btn--primary" href="#problema">Conoce más</a>
        </div>

      </div>

      <!-- Olas -->
      <div class="wave"></div>
      <div class="wave wave--layer"></div>
    </section>

    <!-- 2) EL PROBLEMA -->
    <!-- <section id="problema" class="section section--problem" aria-labelledby="t-problema">
      <div class="problem-inner">
        <h2 id="t-problema" class="reveal">El problema</h2>

        <p class="lead reveal">
          Nuestro entorno se desconecta… y eso nos afecta a todos.
        </p>

        <p class="muted reveal">
          El deterioro ambiental y la pérdida de vínculo con la naturaleza afectan directamente a nuestras comunidades.
          Comuni nace para recuperar esa relación y promover la acción colectiva.
        </p>

             
        <div class="problem-illustration reveal"
             role="img"
             aria-label="Paisaje de bosque y montañas en acuarela">
        </div>
      </div>
    </section> -->

    <section class="problem-section">
  <div class="problem-section__content">
    <h2>El problema</h2>
    <p class="problem-section__subtitle">Nuestro entorno se desconecta... y eso nos afecta a todos.</p>
    
    <div class="problem-iceberg-left"></div>
    
    <p class="problem-section__text">
      El deterioro ambiental y la pérdida de vínculo con la naturaleza afectan directamente a nuestras comunidades. Comuni nace para recuperar esa relación y promover la acción colectiva.
    </p>
    
    <div class="problem-iceberg-right"></div>
  </div>
</section>
    

    <!-- 3) LA SOLUCIÓN -->
    <section id="solucion" class="section" aria-labelledby="t-solucion">
      <h2 id="t-solucion" class="reveal">La solución</h2>

      <div class="grid-2 reveal">
        <div>
          <p>
            Comuni ayuda a reconectar personas con su entorno, facilitando la observación de la naturaleza y la organización de iniciativas locales.
          </p>
          <ul class="list">
            <li>Comparte observaciones de tu entorno.</li>
            <li>Descubre eventos y actividades comunitarias.</li>
            <li>Inspírate con historias reales.</li>
          </ul>
        </div>

        <div class="phone-mock"></div>
      </div>

      <a class="btn btn--primary reveal" href="#contacto">Únete a la comunidad</a>
    </section>

    <!-- 4) COMUNIDAD -->
    <section id="comunidad" class="section" aria-labelledby="t-comunidad">
      <h2 id="t-comunidad" class="reveal">Comunidad</h2>

      <div class="cards reveal">
        <article class="card">
          <div class="card__thumb"></div>
          <h3>Humedales de Barrio</h3>
          <p class="muted">Monitoreo de flora y aves en humedales urbanos.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>

        <article class="card">
          <div class="card__thumb"></div>
          <h3>Reforestación Local</h3>
          <p class="muted">Plantación de árboles nativos junto a la comunidad.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>

        <article class="card">
          <div class="card__thumb"></div>
          <h3>Costa Viva</h3>
          <p class="muted">Limpieza de playas y registro de residuos.</p>
          <a class="btn btn--ghost" href="#">Ver más historias</a>
        </article>
      </div>
    </section>

    <!-- 5) CONTACTO -->
    <section id="contacto" class="section section--cta" aria-labelledby="t-contacto">
      <h2 id="t-contacto" class="reveal">¿Quieres ser parte de Comuni?</h2>
      <p class="lead reveal">Déjanos tu correo y sé parte del lanzamiento.</p>

      <form class="form reveal" method="post" novalidate>
        <label class="sr-only" for="f-nombre">Nombre</label>
        <input id="f-nombre" name="nombre" type="text" placeholder="Nombre" required>

        <label class="sr-only" for="f-email">Correo electrónico</label>
        <input id="f-email" name="email" type="email" placeholder="Correo electrónico" required>

        <button class="btn btn--primary" type="submit">Próximamente</button>
      </form>

      <div class="social reveal">
        <span class="ico" aria-label="Twitter"></span>
        <span class="ico" aria-label="Facebook"></span>
        <span class="ico" aria-label="Instagram"></span>
      </div>
    </section>

  </main>

  <!-- PIE DE PÁGINA -->
  <footer class="site-footer">
    <small>&copy; <?php echo date("Y"); ?> Comuni — Proyecto académico.</small>
  </footer>

  <!-- JS -->
  <script src="Vistas/js/main.js"></script>
</body>
</html>
