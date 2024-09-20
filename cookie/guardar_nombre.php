<?php
if (isset($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    setcookie("nombre_usuario", $nombre, time() + 3600, "/"); 

    header("Location: resultado.php");
    exit;
} else {
    echo "No se ha ingresado ningún nombre.";
}
?>
