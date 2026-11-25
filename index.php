<?php
declare(strict_types=1);

// Pantalla de ingreso del elector (por ahora solo es el diseño).
const TITULO = 'Sistema de Voto Escolar - Rangers educations';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(TITULO) ?></title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main class="tarjeta">
        <h1><?= htmlspecialchars(TITULO) ?></h1>
        <p class="instruccion">Ingresa tu código de elector para continuar.</p>

        <!-- Todavía no funciona: el botón es de tipo "button" y no envía datos. -->
        <form autocomplete="off" onsubmit="return false;">
            <label for="codigo">Código del elector</label>
            <input type="text" id="codigo" name="codigo" placeholder="Escribe tu código" maxlength="20">
            <button type="button">Ingresar</button>
        </form>
    </main>

    <footer>
        &copy; <?= date('Y') ?> Rangers educations
    </footer>
</body>
</html>
