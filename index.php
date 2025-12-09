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