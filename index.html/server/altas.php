<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server altas</title>
    <link rel="stylesheet" href="../css/respuesta-alta.css">
</head>

<?php

include("../modelo/usuario.php");

$nom = $_POST['nombre'];
$tel = $_POST['Telefono'];
$corr = $_POST['Correo'];


$result = insertar($nom, $tel, $corr);

if (strlen($result) > 5) {
    echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
    return include("../from/respuestas-server/respuesta-alta.php");
}
?>