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
