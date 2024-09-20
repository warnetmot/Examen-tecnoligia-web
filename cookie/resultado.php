<?php
if (isset($_COOKIE['nombre_usuario'])) {
    $nombre = htmlspecialchars($_COOKIE['nombre_usuario']);
    echo "<h2>usuario: $nombre está configurado corectamente</h2>";
} else {
    echo "<h2>no se ha encontrado a ningún usuario ingresado pro el inicio</h2>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rsultado</title>
</head>
<body>
    <a href="index.html">Volver al inicio</a>
</body>
</html>
