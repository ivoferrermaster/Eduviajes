<div class="seccion">
    
<h2>Tené a mano tu Tarjeta SUBE registrada para completar el formulario </h2>

<a >Si nunca creaste tu Cuenta SUBE, hacelo ingresando <a href="https://tarjetasube.sube.gob.ar/SubeWeb/WebForms/Account/Views/clave-sube-registro.aspx"> acá </a> o bajate la <a href="https://play.google.com/store/apps/details?id=com.sube.app&hl=es_AR&gl=US&pli=1">app SUBE </a> </a>

¿No sabes si tenés Cuenta SUBE? consultalo <a href="https://tarjetasube.sube.gob.ar/subeweb/WebForms/Account/Views/consulta-titularidad.aspx"> acá </a> con tu DNI o con el número de la Tarjeta SUBE que utilizás.
</div>

<div class="seccion">
    <h2>Formulario de Solicitud</h2>
    <form action="index.php?vista=confirmacion" method="POST">
        <h3>Datos Personales</h3>
        <div class="grupo-form">
            <label>DNI</label>
            <input type="number" placeholder="Ingresá tu DNI" required>
        </div>
        <div class="grupo-form">
            <label>Nombre Completo</label>
            <input type="text" placeholder="Tal como figura en el DNI" required>
        </div>
        <div class="grupo-form">
            <label>Fecha de Nacimiento</label>
            <input type="date" required>
        </div>
        
        <h3>Domicilio</h3>
        <div class="grupo-form">
            <label>Calle y Número</label>
            <input type="text" placeholder="Ej: Av. Rivadavia 1234" required>
        </div>
        <div class="grupo-form">
            <label>Código Postal</label>
            <input type="number" placeholder="Ej: 1406" required>
        </div>
        
        <h3>Lugar de Estudio</h3>
        <div class="grupo-form">
            <label>Institución Educativa</label>
            <input type="text" placeholder="Nombre de la escuela o universidad" required>
        </div>
        <div class="grupo-form">
            <label>Nivel Educativo</label>
            <select required>
                <option value="">Seleccionar</option>
                <option value="primario">Primario</option>
                <option value="secundario">Secundario</option>
                <option value="universitario">Universitario</option>
            </select>
        </div>
        
        <button type="submit" class="btn" style="width: 100%; font-size: 1.1rem; margin-top: 20px;">Confirmar y Enviar Solicitud</button>
    </form>
</div>