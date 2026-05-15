<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduviajes - Tu boleto educativo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-global">
        <div class="logo">
            <a href="index.php?vista=inicio">EduViaje</a>
        </div>
        <nav>
            <a href="index.php?vista=perfil" class="btn-main">Mi Perfil / Ingresar</a>
        </nav>
    </header>

    <main class="contenedor-principal">
        <?php
            // Enrutador simple en PHP
            $vista = isset($_GET['vista']) ? $_GET['vista'] : 'inicio';
            $ruta_vista = "vistas/" . $vista . ".php";

            if (file_exists($ruta_vista)) {
                include $ruta_vista;
            } else {
                echo "<h2>Error 404: Página no encontrada</h2>";
            }
        ?>
    </main>

    <footer class="footer-global">
        <div class="enlaces-institucionales">
            <a href="#">Términos y Condiciones</a>
            <a href="#">Política de Privacidad</a>
            <a href="#">Contacto Institucional</a>
        </div>
        <div class="razon-creer">
            <p>Canal oficial autorizado por el Gobierno de la Ciudad de Buenos Aires</p>
        </div>
    </footer>

    <script src="app.js"></script>
</body>
</html>