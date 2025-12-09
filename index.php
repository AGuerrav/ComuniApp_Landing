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

    <!-- Menu -->
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
        <!-- 1) INICIO-->
        <section id="inicio" class="hero" aria-labelledby="t-inicio">
            <div class="hero__inner">
                <div class="hero__illu" aria-hidden="true">
                    <div class="whale-container">
                        <img src="Vistas/img/Whale.png" alt="Ballena Comuni" class="whale-float">
                    </div>
                </div>
                <div class="hero__copy reveal">
                    <h1 id="t-inicio">Conectamos personas y naturaleza</h1>
                    <p>Una comunidad que cuida su entorno local.</p>
                    <a class="btn btn--primary" href="#problema">Conoce más</a>
                </div>

            </div>
        </section>

        <!-- 2) EL PROBLEMA -->
        <section id="problema" class="problem-sides" aria-labelledby="t-problema">

            <div class="problem-inner">
                <p class="kicker">El problema</p>

                <h2 id="t-problema" class="problem-title">
                    Nuestro entorno se desconecta…<br>
                    y eso nos afecta a todos.
                </h2>

                <p class="problem-text">
                    El deterioro ambiental y la pérdida de vínculo con la naturaleza afectan directamente a nuestras
                    comunidades.
                    Comuni nace para recuperar esa relación y promover la acción colectiva.
                </p>
            </div>
            <div class="problem-iceberg problem-iceberg--left" aria-hidden="true"></div>
            <div class="problem-iceberg problem-iceberg--right" aria-hidden="true"></div>

        </section>



        <!-- 3) LA SOLUCIÓN -->
        <section id="solucion" class="solution-section" aria-labelledby="t-solucion">

            <div class="solution-inner">

                <div class="solution-text">
                    <p class="kicker">La solución</p>

                    <h2 id="t-solucion" class="solution-title">
                        Comuni reconecta personas<br>
                        con la naturaleza y su comunidad.
                    </h2>

                    <p class="solution-body">
                        A través de observaciones, actividades colaborativas y contenido creado por la comunidad,
                        Comuni facilita que cualquier persona pueda cuidar su entorno local y formar parte de
                        iniciativas significativas.
                    </p>

                    <ul class="solution-list">
                        <li>Registra avistamientos de fauna y flora.</li>
                        <li>Descubre eventos ecológicos en tu zona.</li>
                        <li>Conéctate con comunidades y proyectos reales.</li>
                    </ul>

                    <a href="#contacto" class="btn btn--primary">Únete a la comunidad</a>
                </div>

                <div class="solution-visual">
                    <div class="phone-frame">
                        <div class="app-slideshow">

                            <img src="Vistas/img/app1.png" class="slide active">
                            <img src="Vistas/img/app2.png" class="slide">
                            <img src="Vistas/img/app3.png" class="slide">
                            <img src="Vistas/img/app4.png" class="slide">
                            <img src="Vistas/img/app5.png" class="slide">

                        </div>
                    </div>
                </div>


            </div>

        </section>

        <!-- 4) COMUNIDAD -->
        <section id="comunidad" class="community-section" aria-labelledby="t-comunidad">
            <div class="community-inner">

                <header class="community-header">
                    <p class="kicker">Comunidad</p>
                    <h2 id="t-comunidad" class="community-title">
                        Comunidades que ya están cuidando su entorno
                    </h2>
                    <p class="community-subtitle">
                        Personas, colegios y organizaciones se conectan a través de Comuni para
                        organizar acciones ambientales y compartir lo que ocurre en su territorio.
                    </p>
                </header>

                <!-- Grid de comunidades -->
                <div class="community-grid">

                    <article class="community-card">
                        <figure class="community-thumb">
                            <img src="Vistas/img/comunidad-playa.jpg" alt="Grupo limpiando una playa">
                        </figure>
                        <div class="community-body">
                            <h3 class="community-name">Comunidad Las Higueras</h3>
                            <p class="community-description">
                                Vecinos y voluntarios coordinan jornadas de limpieza de playas y registro de residuos
                                para proteger la costa local.
                            </p>
                            <ul class="community-stats">
                                <li><span class="stat-number">45</span><span class="stat-label">miembros</span></li>
                                <li><span class="stat-number">12</span><span class="stat-label">eventos</span></li>
                                <li><span class="stat-number">4</span><span class="stat-label">avistamientos</span></li>
                            </ul>
                        </div>
                    </article>
                    <article class="community-card">
                        <figure class="community-thumb">
                            <img src="Vistas/img/comunidad-huerto.jpg"
                                alt="Personas trabajando en un huerto comunitario">
                        </figure>
                        <div class="community-body">
                            <h3 class="community-name">Huerto Barrio Norte</h3>
                            <p class="community-description">
                                Familias del barrio se organizan para cuidar un huerto urbano,
                                promover compostaje y compartir cosechas.
                            </p>
                            <ul class="community-stats">
                                <li><span class="stat-number">32</span><span class="stat-label">miembros</span></li>
                                <li><span class="stat-number">8</span><span class="stat-label">eventos</span></li>
                                <li><span class="stat-number">15</span><span class="stat-label">avistamientos</span>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="community-card">
                        <figure class="community-thumb">
                            <img src="Vistas/img/comunidad-escuela.jpg"
                                alt="Estudiantes participando en actividad ecológica">
                        </figure>
                        <div class="community-body">
                            <h3 class="community-name">Red de Escuelas Verdes</h3>
                            <p class="community-description">
                                Estudiantes y docentes registran fauna local, diseñan actividades y conectan proyectos
                                ambientales entre colegios.
                            </p>
                            <ul class="community-stats">
                                <li><span class="stat-number">18</span><span class="stat-label">comunidades</span></li>
                                <li><span class="stat-number">25</span><span class="stat-label">eventos</span></li>
                                <li><span class="stat-number">60+</span><span class="stat-label">avistamientos</span>
                                </li>
                            </ul>
                        </div>
                    </article>

                </div>
                <div class="community-metrics">
                    <div class="metric-pill">
                        <span class="metric-number">20+</span>
                        <span class="metric-label">comunidades organizadas</span>
                    </div>
                    <div class="metric-pill">
                        <span class="metric-number">100+</span>
                        <span class="metric-label">eventos registrados</span>
                    </div>
                    <div class="metric-pill">
                        <span class="metric-number">200+</span>
                        <span class="metric-label">avistamientos de flora y fauna</span>
                    </div>
                </div>
                <div class="community-cta">
                    <p>¿Te gustaría impulsar una iniciativa en tu zona?</p>
                    <a href="#contacto" class="btn btn--primary">Quiero participar</a>
                </div>

            </div>
        </section>


        <!-- 5) CONTACTO / PRÓXIMAMENTE -->
        <section id="contacto" class="contact-section" aria-labelledby="t-contacto">
            <div class="contact-inner">

                <header class="contact-header">
                    <p class="kicker">Próximamente</p>
                    <h2 id="t-contacto" class="contact-title">¿Quieres ser parte de Comuni?</h2>
                    <p class="contact-subtitle">
                        Déjanos tus datos y te contactaremos cuando la app esté disponible.
                    </p>
                </header>

                <div class="contact-layout">
                    <div class="contact-copy">
                        <h3>Conversemos</h3>
                        <p>
                            Si te interesa unirte a una comunidad, crear una nueva iniciativa o recibir noticias del
                            lanzamiento,
                            completa tus datos y te escribiremos pronto.
                        </p>
                        <ul>
                            <li>Conectarte con personas que cuidan su entorno.</li>
                            <li>Recibir novedades sobre el lanzamiento de Comuni.</li>
                            <li>Explorar ideas para proyectos ambientales locales.</li>
                        </ul>
                    </div>
                    <div class="contact-form-wrap">
                        <form id="contact-form" novalidate>
                            <div class="form-field">
                                <label for="nombre">Nombre completo<span class="required">*</span></label>
                                <input type="text" id="nombre" name="nombre" autocomplete="name" required
                                    maxlength="60">
                                <p class="field-error" aria-live="polite"></p>
                            </div>
                            <div class="form-field">
                                <label for="email">Correo electrónico<span class="required">*</span></label>
                                <input type="email" id="email" name="email" autocomplete="email" required
                                    maxlength="80">
                                <p class="field-error" aria-live="polite"></p>
                            </div>
                            <div class="form-field">
                                <label for="telefono">Teléfono de contacto<span class="required">*</span></label>
                                <input type="tel" id="telefono" name="telefono" autocomplete="tel"
                                    placeholder="+569XXXXXXXX" required maxlength="12">
                                <p class="field-error" aria-live="polite"></p>
                            </div>
                            <p id="contact-success" class="form-success" aria-live="polite"></p>
                            <button type="submit" class="btn btn--primary">
                                Enviar
                            </button>
                        </form>
                        <p class="contact-note">
                            Por ahora Comuni estará disponible solo en Chile. El teléfono debe ser chileno en formato
                            +569XXXXXXXX.
                        </p>
                    </div>
                </div>
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