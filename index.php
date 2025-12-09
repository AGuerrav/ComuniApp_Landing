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

            <!-- “Icebergs” de bosque a cada lado -->
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

                <!-- Mockup del app (imagen acuarelada estilo tarjeta móvil) -->
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

                    <!-- Card 1 -->
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

                    <!-- Card 2 -->
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

                    <!-- Card 3 -->
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

                <!-- Métricas globales -->
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

                <!-- CTA -->
                <div class="community-cta">
                    <p>¿Te gustaría impulsar una iniciativa en tu zona?</p>
                    <a href="#contacto" class="btn btn--primary">Quiero participar</a>
                </div>

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