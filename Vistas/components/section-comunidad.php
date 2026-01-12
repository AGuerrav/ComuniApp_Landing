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
            <?php if (!empty($comunidades)): ?>
                <?php foreach ($comunidades as $c): ?>
                    <?php
                        $id = (int)($c['id'] ?? 0);
                        $nombre = htmlspecialchars($c['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
                        $descripcion = htmlspecialchars($c['descripcion'] ?? '', ENT_QUOTES, 'UTF-8');

                        $imgRel = trim($c['imagen'] ?? '');

                        if (empty($imgRel)) {
                            // fallback a una imagen existente
                            $imgSrc = 'Vistas/img/comunidad-playa.jpg';
                        } elseif (preg_match('#^(https?:)?//#i', $imgRel) || strpos($imgRel, 'data:') === 0) {
                            // URL absoluta o data URI
                            $imgSrc = $imgRel;
                        } elseif (stripos($imgRel, 'vistas/') === 0) {
                            // ya contiene 'Vistas/' al inicio
                            $imgSrc = $imgRel;
                        } else {
                            // rutas relativas como 'img/archivo.jpg' -> prefix 'Vistas/'
                            $imgSrc = 'Vistas/' . ltrim($imgRel, '/');
                        }

                        $miembros = (int)($c['miembros'] ?? 0);
                        $eventos = (int)($c['eventos'] ?? 0);
                        $avistamientos = htmlspecialchars($c['avistamientos'] ?? '0', ENT_QUOTES, 'UTF-8');
                    ?>

                    <article class="community-card">
                        <figure class="community-thumb">
                            <img src="<?php echo htmlspecialchars($imgSrc, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo $nombre; ?>">
                        </figure>

                        <div class="community-body">
                            <h3 class="community-name"><?php echo $nombre; ?></h3>
                            <p class="community-description"><?php echo $descripcion; ?></p>

                            <ul class="community-stats">
                                <li><span class="stat-number"><?php echo $miembros; ?></span><span class="stat-label">miembros</span></li>
                                <li><span class="stat-number"><?php echo $eventos; ?></span><span class="stat-label">eventos</span></li>
                                <li><span class="stat-number"><?php echo $avistamientos; ?></span><span class="stat-label">avistamientos</span></li>
                            </ul>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay comunidades registradas aún.</p>
            <?php endif; ?>
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
