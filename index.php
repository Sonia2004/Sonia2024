<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera Aplicación con PHP</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <h1>Soy un encabezado de HTML</h1>

    <div class="php-content">
        <?php
            // Script de PHP
            $nombre = "Sonia";
            $mensaje = "Mi primera aplicación con PHP";

            echo "<h2>Hola Mundo desde PHP</h2>";
            echo "<h3>Bienvenido $nombre</h3><br><h4>$mensaje</h4>";
        ?>
    </div>

    <ul>
        <li><a href="pagina2.php">Formularios</a></li>
    </ul>

</body>
</html>
