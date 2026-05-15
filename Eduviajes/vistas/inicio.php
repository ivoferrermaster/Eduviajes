<div class="seccion hero-section" style="text-align: center;">
    <h1>Tu boleto educativo, más simple y rápido</h1>
    <a href="index.php?vista=solicitud" class="btn" style="background: var(--acento);">Renovar mi beneficio</a>
</div>

<div class="seccion asistente-interactivo">
    <h2>Asistente Interactivo de Trámite</h2>
    <p>Descubrí qué necesitas para tu solicitud en dos pasos:</p>
    
    <div class="grupo-form">
        <label for="selector-nivel">Paso A: Seleccioná tu Nivel</label>
        <select id="selector-nivel">
            <option value="">-- Elegir --</option>
            <option value="primario">Primario / Secundario</option>
            <option value="universitario">Universitario</option>
        </select>
    </div>

    <div class="grupo-form">
        <label for="selector-ubicacion">Paso B: Seleccioná tu Ubicación</label>
        <select id="selector-ubicacion">
            <option value="">-- Elegir --</option>
            <option value="caba">CABA</option>
            <option value="pba">PBA</option>
        </select>
    </div>

    <button id="btn-calcular-requisitos" class="btn">Ver Requisitos</button>
    <div id="resultado-asistente"></div>
</div>

<div class="seccion accesos-rapidos" style="display: flex; gap: 20px;">
    <div style="flex: 1; text-align: center; border: 1px solid #ddd; padding: 20px;">
        <h3>📍 Mapa TAS</h3>
        <p>Encontrá tu Terminal Automática más cercana.</p>
        <button class="btn">Abrir Mapa</button>
    </div>
    <div style="flex: 1; text-align: center; border: 1px solid #ddd; padding: 20px;">
        <h3>📱 App Eduviajes</h3>
        <p>Llevá tu credencial en el celular.</p>
        <button class="btn">Descargar App</button>
    </div>
</div>